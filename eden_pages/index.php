<?php
    
    include "../core/cards.php";
    // include "../core/DB.php";
?>
<!doctype html>
<html lang="en">

<?php
    
    include "../includes/head.php";
    
?>

<body>
    <!--================ Start header Top Area =================-->
    <?php include "../includes/header-top.php"; ?>
    <!--================ End header top Area =================-->
    <!-- Start header Menu Area -->
    <?php include "../includes/header.php"; ?>
    <!-- End header MEnu Area -->
    <!--================Fullwidth block Area =================-->
    <section class="fullwidth-block area-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $news_data = DB::Query("SELECT * FROM `blog` WHERE `id`='9'");
                    $news = DB::Assoc($news_data);
                    $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                    $category = DB::Assoc($categories);
                        $large_card = new LargeCard;
                        $large_card->SetData('img/news/'.$news['img'], $news['title'], $category['name'],$news['date'],$news['author']);
                        echo $large_card->GetData();

                            
                        $n_data = DB::Query("SELECT * FROM `blog` WHERE `id`='10'");
                        $n = DB::Assoc($n_data);
                        $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                        $category = DB::Assoc($categories);
                        $lg_card = new LgCard;
                        $lg_card->SetData('img/news/'.$n['img'], $n['title'], $category['name'],$n['date'],$n['author']);
                        echo $lg_card->GetData();


                
                ?>    




                



                <div class="col-lg-12 col-xl-3">
                    <div class="row">
                        

                    <?php

                        $news_data = DB::Query("SELECT * FROM `blog` LIMIT 2");
                        while($news = DB::Assoc($news_data)) {
                            $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                            $category = DB::Assoc($categories);
                            $sm_card = new SmCard;
                            $sm_card->SetData('img/news/'.$news['img'], $news['title'], $category['name'],$news['date']);
                            echo $sm_card->GetData();

                        }

                    ?> 

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Fullwidth block Area end =================-->
    <!--================ First block section start =================-->
    <section class="first_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <div class="single-blog row no-gutters style-four border_one">
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/x5.jpg.pagespeed.ic.qaPElY7E5w.webp" alt=""
                                    data-pagespeed-url-hash="939170381"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="short_details">
                                <div class="meta-top d-flex">
                                    <a href="#">Туры и путешествия</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4>Принесли весь день доми
                                        Нион появляется из
                                        подчинить себе власть
                                        небосвод над лицом</h4>
                                </a>
                                <div class="meta-bottom d-flex">
                                    <a href="#">12 марта 2019.</a>
                                    <a class="dark_font" href="#">Автор Ален Марк</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="single-blog style_five">
                        <div class="thumb">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/x6.jpg.pagespeed.ic.CT49rK76fu.webp" alt=""
                                data-pagespeed-url-hash="1233670302"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="short_details ">
                            <div class="meta-top d-flex">
                                <a href="#">Туры и путешествия</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Сильно поздно
                                    появляются четвертые нас.</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="single-blog style_five">
                        <div class="thumb">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/7.jpg" alt="" data-pagespeed-url-hash="1528170223"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="short_details ">
                            <div class="meta-top d-flex">
                                <a href="#">Туры и путешествия</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Сильно поздно
                                    появляются четвертые нас.</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ First block section end =================-->
    <!--================ Editors Picks section start =================-->
    <section class="editors_pick area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Выбор редактора</h3>
                    <p>Обильно подкрадывающийся дух может явиться четвертым нам.</p>
                </div>
            </div>
            <div class="row">
            <?php
                    $news_data = DB::Query("SELECT * FROM `blog` WHERE `id`='1'");
                    $news = DB::Assoc($news_data);
                    $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                    $category = DB::Assoc($categories);
                        $large_card2 = new LargeCard;
                        $large_card2->SetData('img/news/'.$news['img'], $news['title'], $category['name'],$news['date'],$news['author']);
                        echo $large_card2->GetData();

                                      
                
                ?>  
                <div class="col-lg-7 col-xl-6">
                    <div class="single-blog row no-gutters style-four m_b_30">
                        <div class="col-12 col-sm-7">
                            <div class="short_details padd_left_0">
                                <div class="meta-top d-flex">
                                    <a href="#">Туры и путешествия</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4 class="font-20">Свет, у которого есть сам бог
                                        трава трава темное море на
                                        хас доу</h4>
                                </a>
                                <p>Сказал духовный вечер над хорошими парнями у бога посреди глубины, в которой он создал моря
                                    кобель очень грустный и говорит правильно.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/9.jpg" alt=""
                                    data-pagespeed-url-hash="2117170065"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                    </div>
                    <div class="single-blog row no-gutters style-four">
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/10.jpg" alt=""
                                    data-pagespeed-url-hash="3527112373"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="short_details padd_right_0">
                                <div class="meta-top d-flex">
                                    <a href="#">Туры и путешествия</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4 class="font-20">Свет, у которого есть сам бог
                                        трава трава темное море на
                                        хас доу</h4>
                                </a>
                                <p> Сказал духовный вечер над хорошими парнями у бога посреди глубины, в которой он создал моря
                                    кобель очень грустный и говорит правильно.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="addvertise">
                        <a href=""><img src="https://preview.colorlib.com/theme/eden/img/banner/add.jpg" alt="" data-pagespeed-url-hash="2179791821"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Editors Picks section end =================-->
    <!--================ Video section start =================-->
    <div class="video-area background_one area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Новости путешествий</h3>
                    <p>Обильно подкрадывающийся дух может явиться четвертым нам.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="single-blog video-style">
                        <div class="thumb">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/11.jpg" alt="" data-pagespeed-url-hash="3821612294"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="play_btn">
                                <a class="play-video" href="https://www.youtube.com/watch?v=MrRvX5I8PyY"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">туфли</a>/
                                <a href="#">15 марта 2019 г.,</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Создано лицо звезд шестой четвертой
                                    Земляной небосвод</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-blog video-style small row m_b_30">
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/12.jpg" alt="" data-pagespeed-url-hash="4116112215"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="play_btn">
                                <a class="play-video" href="https://www.youtube.com/watch?v=MrRvX5I8PyY"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                    them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog video-style small row m_b_30 ">
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/13.jpg" alt="" data-pagespeed-url-hash="115644840"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="play_btn">
                                <a class="play-video" href="https://www.youtube.com/watch?v=MrRvX5I8PyY"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                    them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog video-style small row">
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="https://preview.colorlib.com/theme/eden/img/magazine/14.jpg" alt="" data-pagespeed-url-hash="410144761"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="play_btn">
                                <a class="play-video" href="https://www.youtube.com/watch?v=MrRvX5I8PyY"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                    them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Video section end =================-->
    <!--================ three-block section start =================-->
    <div class="three-block  area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Fashion News</h3>
                    <p>Обильно подкрадывающийся дух может явиться четвертым нам.</p>
                </div>
            </div>
            

            <div class="row">

                <?php

                    $news_data = DB::Query("SELECT * FROM `blog` LIMIT 3, 6");
                    while($news = DB::Assoc($news_data)) {
                        $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                        $category = DB::Assoc($categories);
                        $card = new MediumCard;
                        $card->SetData('img/news/'.$news['img'], $news['title'], $category['name'],$news['date']);
                        echo $card->GetData();

                    }
                    
                ?>    
            </div>


        </div>
    </div>
    <!--================ three-block section end =================-->
    <!--================ Latest news section start =================-->
    <div class="latest-news  area-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Fashion News</h3>
                    <p>Обильно подкрадывающийся дух может явиться четвертым нам.</p>
                </div>
            </div>
            <div class="row">
                    <?php
                        $news_data = DB::Query("SELECT * FROM `blog` WHERE `id`='9'");
                        $news = DB::Assoc($news_data);
                        $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$news[category_id]'");
                        $category = DB::Assoc($categories);
                        $large_card3 = new LargeCard;
                        $large_card3->SetData('img/news/'.$news['img'], $news['title'], $category['name'],$news['date'],$news['author']);
                        echo $large_card3->GetData();
                    ?>
                <div class="col-lg-6">
                    <div class="row">



                        <?php
                            $n_data = DB::Query("SELECT * FROM `blog` LIMIT 4 ");
                            while($n = DB::Assoc($n_data)) {
                                $categories = DB::Query("SELECT * FROM `category` WHERE `id`='$n[category_id]'");
                                $category = DB::Assoc($categories);
                                $small_card = new SmallCard;
                                $small_card->SetData('img/news/'.$n['img'], $n['title'], $category['name'],$n['date']);
                                echo $small_card->GetData();
                            }
                        ?>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Latest news section end =================-->
    <!-- ================ Instargram Area Starts ================= -->
    <section class="instagram">
        <div class="row no-gutters">
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x1.jpg.pagespeed.ic.3_eOt8F4XH.webp" alt=""
                        data-pagespeed-url-hash="270620287"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x2.jpg.pagespeed.ic.gPg6abEm-g.webp" alt=""
                        data-pagespeed-url-hash="565120208"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x3.jpg.pagespeed.ic.5WsMxMN_0v.webp" alt=""
                        data-pagespeed-url-hash="859620129"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x4.jpg.pagespeed.ic.GkjdfAYrlv.webp" alt=""
                        data-pagespeed-url-hash="1154120050"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x5.jpg.pagespeed.ic.fwnMPKrUbk.webp" alt=""
                        data-pagespeed-url-hash="1448619971"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/x6.jpg.pagespeed.ic.vu8416XHC0.webp" alt=""
                        data-pagespeed-url-hash="1743119892"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
        </div>
    </section>
    <!-- ================ Instargram Area End ================= -->
    <!-- ================ start footer Area ================= -->
    <?php include "../includes/footer.php"; ?>
<!-- ================ End footer Area ================= -->
<!-- ================ End footer Area ================= -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include "../includes/js.php"; ?>
</body>
</html>