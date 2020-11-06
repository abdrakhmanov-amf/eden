<!doctype html>
<html lang="en">

<?php include "includes/head.php"; ?>

<body>
    <!--================ Start header Top Area =================-->
    <?php include "includes/header-top.php"; ?>
    <!--================ End header top Area =================-->
    <!-- Start header Menu Area -->
    <?php include "includes/header.php"; ?>
    <!-- End header MEnu Area -->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Блог</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Домашняя</a>
                        <a href="contact.html">Блог</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Blog Area =================-->
    <section class="blog_area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0"
                                    src="https://preview.colorlib.com/theme/eden/img/blog/main-blog/xm-blog-1.jpg.pagespeed.ic.Vb11bfvxZv.webp" alt=""
                                    data-pagespeed-url-hash="1112797043"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Янв</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google подписал договор о новом 35-этажном офисе</h2>
                                </a>
                                <p>То, что звезды доминиона освещают доминион, разделяют годы на четвертое, не имеют звезд, это то, что
                                    он сначала земля его без неба вместо семян это второе утро говоря.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i>Путешествия, Образ жизни</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>03 Комментарии</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Поиск по ключевому слову">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100"
                                    type="submit">Поиск</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Категория</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Ресторанная еда</p>
                                        <p>(37)</p>
                                    </a>
                                </li>

                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Недавний пост</h3>
                            <div class="media post_item">
                                <img src="https://preview.colorlib.com/theme/eden/img/blog/popular-post/post1.jpg" alt="post"
                                    data-pagespeed-url-hash="984224458"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>С жизни был ты рыбой ...</h3>
                                    </a>
                                    <p>12 января 2019 г.,</p>
                                </div>
                            </div>

                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Облака тегов</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">проект</a>
                                </li>
                                
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Ленты Instagram</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i1.png" alt=""
                                            data-pagespeed-url-hash="3882650291"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                               
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Новостная рассылка</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Введите адрес электронной почты" required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100"
                                    type="submit">Подписывайся</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <!-- ================ Instargram Area Starts ================= -->
    <section class="instagram">
        <div class="row no-gutters">
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x1.jpg.pagespeed.ic.3_eOt8F4XH.webp" alt=""
                        data-pagespeed-url-hash="270620287"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            
        </div>
    </section>
    <!-- ================ Instargram Area End ================= -->
    <!-- ================ start footer Area ================= -->
    <?php include "includes/footer.php"; ?>
    <!-- ================ End footer Area ================= -->
    <!-- ================ End footer Area ================= -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include "includes/js.php"; ?>
</body>

</html>