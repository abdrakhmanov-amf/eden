<!doctype html>
<html lang="en">

<?php include "../includes/head.php"; ?>

<body>
    <!--================ Start header Top Area =================-->
    <?php include "../includes/header-top.php"; ?>
    <!--================ End header top Area =================-->
    <!-- Start header Menu Area -->
    <?php include "../includes/header.php"; ?>
    <!-- End header MEnu Area -->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Контакты</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Домашняя</a>
                        <a href="contact.html">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            
              
     
            <a class="dg-widget-link" href="http://2gis.kz/shymkent/firm/70000001026667671/center/69.61814045906068,42.341797753508665/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Шымкента</a><div class="dg-widget-link"><a href="http://2gis.kz/shymkent/center/69.61136,42.343843/zoom/15/routeTab/rsType/bus/to/69.61136,42.343843╎IT-Start, школа программирования?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до IT-Start, школа программирования</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":2400,"height":600,"borderColor":"#a3a3a3","pos":{"lat":42.341797753508665,"lon":69.61814045906068,"zoom":15},"opt":{"city":"shymkent"},"org":[{"id":"70000001026667671"}]});</script>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Связаться</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        placeholder="Введите сообщение"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        placeholder="Введите ваше имя">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Введите адрес электронной почты">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        placeholder="Введите тему">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Отправить сообщение</button>
                        </div>
                    </form>
                </div>
                    <?php      
                    if (isset($_POST['message'])){
                  //  $c = DB::connect();
                    $query = DB::Query( "INSERT INTO `contact`(`id`, `message`, `name`, `email`, `tema`) VALUES (null ,'$_POST[message]' ,'$_POST[name]' ,'$_POST[email]' ,'$_POST[subject]')");

                    if($query){
                        echo "yes";
                    }
                    else{
                        echo"INSERT INTO `contact`(`id`, `message`, `name`, `email`, `tema`) VALUES (null ,'$_POST[message]' ,'$_POST[name]' ,'$_POST[email]' ,'$_POST[subject]')";
                    }
                    }
                    
                    ?>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Баттонвуд, Калифорния.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                            <p>С пн по пт с 9:00 до 18:00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:misha2005a@icloud.com">abdrakhmanov-amf-co@icloud.com</a></h3>
                            <p>Отправьте нам свой запрос в любое время!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    <!-- ================ Instargram Area Starts ================= -->
    <section class="instagram">
        <div class="row no-gutters">
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/1.jpg" alt="" data-pagespeed-url-hash="270620287"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>

        </div>
    </section>
    <!-- ================ Instargram Area End ================= -->
    <!-- ================ start footer Area ================= -->
    <?php include "../includes/footer.php"; ?>
    <!-- ================ End footer Area ================= -->
    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Спасибо!</h2>
                    <p>Ваше сообщение успешно отправлено ...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals error -->
    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>К сожалению!</h2>
                    <p>Что-то пошло не так</p>
                </div>
            </div>
        </div>
    </div>
<!-- ================ End footer Area ================= -->
<!-- ================ End footer Area ================= -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include "../includes/js.php"; ?>
</body>
</html>