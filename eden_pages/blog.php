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
                        <h2>Blog</h2>
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
                <!-- PHP POST -->
                    <?php 

                    $connect = mysqli_connect("localhost", "root", "root", "eden");
                    $query = mysqli_query($connect, "SELECT `id`, `title`, `desk`, `img`, `author`, `date`, `is_public`, `category_id`, `tag_id` FROM `blog`");
                    $query_category = mysqli_query($connect, "SELECT `id`, `name` FROM `category`"); 

                    while($fetch = mysqli_fetch_assoc($query) and $fetch_category = mysqli_fetch_assoc($query_category)){
                        
                    

                        echo "<article class='blog_item'>
                            <div class='blog_item_img'>
                                <img class='card-img rounded-0'
                                    src='/img/news/$fetch[img]' alt='
                                    '>
                                <a href='#' class='blog_item_date'>
                                    <h3>$fetch[date]</h3>
                                    <p>Янв</p>
                                </a>
                            </div>
                            <div class='blog_details'>
                                <a class='d-inline-block' href='single-blog.html'>
                                    <h2>$fetch[title]</h2>
                                </a>
                                <p>$fetch[desk]</p>
                        
                                <ul class='blog-info-link'>
                                    <li><a href='#'><i class='far fa-user'></i>$fetch[author]</a></li>
                                    <li><a href='#'><i class='far fa-comments'></i>03 Комментарии</a></li>
                                </ul>
                            </div>
                        </article>";
                    };

                        ?>
                    <!-- /PHP POST -->
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

                            <?php
                            $connect = mysqli_connect("localhost", "root", "root", "eden");
                            $query = mysqli_query($connect, "SELECT `id`, `name` FROM `category`");
                            while($fetch = mysqli_fetch_assoc($query)){
                                echo "<li>
                                    <a href='#' class='d-flex'>
                                        <p>$fetch[name]</p>
                                        <p>(37)</p>
                                    </a>
                                </li>";
                                
                            };
                                ?>

                                </ul>
                                
                            
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Недавний пост</h3>
                            <div class="media post_item">
                                <img src="https://preview.colorlib.com/theme/eden/img/blog/popular-post/xpost4.jpg.pagespeed.ic.QtzHWu9kKX.webp"
                                    alt="post" data-pagespeed-url-hash="1867724221"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 часа(-ов) назад</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Облака тегов</h4>
                            <ul class="list">
                                <?php
                                $connect = mysqli_connect("localhost", "root", "root", "eden");
                                $query = mysqli_query($connect, "SELECT * FROM `tag`");

                                while($fetch_tag = mysqli_fetch_assoc($query)){
                                
                                echo "<li>
                                    <a href='#'>$fetch_tag[name]</a>
                                </li>";
                                }
                                ?>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Ленты Instagram</h4>
                            <ul class="instagram_row flex-wrap">
                                
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/xwidget-i6.png.pagespeed.ic.CIVhclGmCo.webp"
                                            alt="" data-pagespeed-url-hash="1060182600"
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
                                    type="submit">Подписаться</button>
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
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x1.jpg.pagespeed.ic.3_eOt8F4XH.webp"
                        alt="" data-pagespeed-url-hash="270620287"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x2.jpg.pagespeed.ic.gPg6abEm-g.webp"
                        alt="" data-pagespeed-url-hash="565120208"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x3.jpg.pagespeed.ic.5WsMxMN_0v.webp"
                        alt="" data-pagespeed-url-hash="859620129"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x4.jpg.pagespeed.ic.GkjdfAYrlv.webp"
                        alt="" data-pagespeed-url-hash="1154120050"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x5.jpg.pagespeed.ic.fwnMPKrUbk.webp"
                        alt="" data-pagespeed-url-hash="1448619971"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x6.jpg.pagespeed.ic.vu8416XHC0.webp"
                        alt="" data-pagespeed-url-hash="1743119892"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
        </div>
    </section>
    <!-- ================ Instargram Area End ================= -->
    <!-- ================ start footer Area ================= -->
    <?php include "../includes/footer.php"; ?>
    <!-- ================ End footer Area ================= -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include "../includes/js.php"; ?>
</body>

</html>