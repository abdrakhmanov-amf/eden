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
                        <h2>Подробности блога</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Домашняя</a>
                        <a href="contact.html">Подробности блога</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                <?php

                
                

                if($_GET['id']){

                $query = DB::Query("SELECT * FROM `blog` WHERE `id`='$_GET[id]'");
                $fetch = DB::Assoc($query);
                $category = DB::Assoc(DB::Query("SELECT * FROM `category` WHERE `id`='$fetch[category_id]'"));

                    echo "<div class='single-post'>
                        <div class='feature-img'>
                            <img class='img-fluid' src='/img/news/$fetch[img]'
                                alt='' data-pagespeed-url-hash='1112797043'
                                onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                        </div>
                        <div class='blog_details'>
                            <h2>$fetch[title]</h2>
                            <ul class='blog-info-link mt-3 mb-4'>
                                <li><a href='#'><i class='far fa-user'></i>$category[name]</a></li>
                                <li><a href='#'><i class='far fa-comments'></i>03 Комментарии</a></li>
                            </ul>
                            <p class='excert'>
                                $fetch[desk]
                            </p>
                           
                        </div>
                    </div>
                    <div class='navigation-top'>
                        <div class='d-sm-flex justify-content-between text-center'>
                            <p class='like-info'><span class='align-middle'><i class='far fa-heart'></i></span> Лили и
                                4 людям это нравится</p>
                            <div class='col-sm-4 text-center my-2 my-sm-0'>
                                <p class='comment-count'><span class='align-middle'><i
                                            class='far fa-comment'></i></span>06 Комментарии</p>
                            </div>
                            <ul class='social-icons'>
                                <li><a href='#'><i class='fab fa-facebook-f'></i></a></li>
                                <li><a href='#'><i class='fab fa-twitter'></i></a></li>
                                <li><a href='#'><i class='fab fa-dribbble'></i></a></li>
                                <li><a href='#'><i class='fab fa-behance'></i></a></li>
                            </ul>
                        </div>";
                        }
                        ?>
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="data:image/webp;base64,UklGRsADAABXRUJQVlA4ILQDAADQEQCdASo8ADwAPmEmkEWkIiGZ/M9UQAYEoAnTlBUh4B5k+TZgN7Lb4LdH0Qwjsl/Ed6C7VE8mXXpdGmzEV/P4V8DGdfEIGHzNOiT9iPS0uAtqUsNhqIdnq6LjRwhjfbh0n3IOHF2c2xCWJdRIs6IyBjfpm8+5g7WoJ0f2envdLWbk2A61TTqHLzXrS8t3/uYLCZpDPq7AAP73fUGqXHy0wRGld4mRcmWlEo/B+pEAfD80km14P8G2fV3QEIDzF9sGW4agmNx6d1SW0rGUgWFcKjm7dy1yrebmRscRXxnfoL7Q/gA6vsuT73X6Iizs6Gl0Mfdk6GZNApzfzcsor9kEY85mu86Hw6vwowV4gbb+i7SByf3QYZ7fIcwQeaFR7PFmCABRkJtO9pxd1obUu/IhE1XdzGwG64nvpxuqXYqsYb+BgyQ5NTUoJtJ+pJ+4ojV/tVhCMOQfcuoH5NCm5FdgHMd0IOep7c95bUIdj7QMnbqrE5j2Djr63dOjiA/V5dWHm5j+d76TOfRVSpnwhb3fbsKMDKVYy9y42AxP7br75entwn+Gb/kiexwUsaSRr0vJ2KuIdAVjvtv/2P8ZTt/7h0VOMOQaXKCPpN/RJ+ciiyKwiqqJnkUCoU+NqobJ0wIdNpvHS2l7jFoRBpwqvUqJY5Lz0X+vnUe4O3SkxNLYjB1hdISCueItOadYxPK/6RCHA2wdDhZ/2zRXmgDAKQ093Uo8jZ92hckWnftZgtOj4mfbntCt9P39HPmPqW5XXVlaUklwjHtDfwtnzmbZ/+spR05hpQ74yZC87Mj+KfISiQ+bYcYvow/d7/37d546G/aDyOzxnb7zc22RXljN8WNgg/dPMf7xNNnc0yKZEOlRZjBUo+dvFxkgPDyI40mnAM9e1QuxspHUA0QQBvK9XVN5PodHa0CVmGWXgOXOFc5SDnQlFRyyVPDJ+/+xQZHY29zjioXrstcApnk5CQtI81x8Mr2I0dQLWAL56laAzDFYKbPBVHcVLnfs+eKcTppD97PrQAzVAUew2jtnJfUkgawo3ahp655wjBTPg0QR5BdXo/Wx6JrcusAVFD15mMzbvlWUgnh3QCPCDOchFFvA+D5OM5ABp3idEv1hK3GgIOtue+z9/A20HqH1racEBiPORxC/DAldV+fIanfneh7vdfHs3jlYuRXKJXH1c2KAGhKxhEKxJR9cs8C5lnuSin/gqKmlHLV69Y1wV6K5472nkrjQWpe3EgHP2Aloiara55l8B2HgAAA="
                                                alt="" data-pagespeed-url-hash="1976949263"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white lnr-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Предыдущий пост</p>
                                        <a href="#">
                                            <h4>Космос Последний рубеж</h4>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Следующее сообщение</p>
                                        <a href="#">
                                            <h4>Телескопы 101</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="data:image/webp;base64,UklGRkIFAABXRUJQVlA4IDYFAAAwFwCdASo8ADwAPm0ukUWkIqGXC26oQAbEoAsR+TSZSSrm2MI3fvGzDvej9v8HfDX7lj+9wWpB2Z/s/6rxO7YO9vgA3RNMfoAeLTof+sj8f0s9VzjDV8/7rArMO+5e5f+Bfj2w8ZAhwTwPX20+1ufgWnamTYnZzgIaZx4rX1nDU5NBbF0XRSuRlIJNLVxD9iki3moMztKj/NMWhOYVkmGSqu2YImxLVXpgIfjf8IYfbbpjTGGWvE1DHd2a4l+W8lKvAAD+wI9R3JT0x2zOgSPLEd2Vt3oxwzdB5PFwnkj8gz18KsTsocxCGJGOqW+ALdElJIgTuwAHQm0c+dMkum0UcsN3I8fhVkqU9XdCYP4Dcz9zrjB0j9YgCUhuuEnzrC+cUTF8HiCYzGRxqNXYRvH/agDwfL3pbpdYi53V9MZy1m8Lp3syqU+Yek+0W2yhX2Rf0NFT+T+mNIdi7lnYPfkQq1EK3kkeIt6c886Qg+/NRP3FOQpZ/HsGJt3g4IT8SH+kBiZRrFdwPvjfGoFO6esScqjCQ4RTcv/PwbAFeiB9gg3pjOxk8AWVdQReWCydxCV317KPmaaZH0pCA1Gh9Ds3Fvu589XMeJJj+xr9eeYCwyV49PNTP93Il10NRAaHCf3PKzN0HT5+TTw32fGIIa/87w0g+nLrnRTaKmZ/ooULjGphfbqk5t1Yy3r6Vq5OlZDJGI36alKDOjwKtoTeV65O97VOdob7DeQqYo9Z3JOtzyK918XZX5AxBAhum/LE6ikdDImDwgnOKS8dtSUlM6QjvpRMlHJrl+/RxmRlTs9phoYPnVfIqsVLI77rQwRyMinTT8GAH+N/3EYS6wyTaeLjP2cuJS1P/LhrTgRQE3wvpnNDmFF6FjD8m+WHx/vv+qKklVvpa5X26MrXY8WU547jHyVYgw37HfRNdkQkXIIqO7FZEcMiUvB2ASnn0WzjxP6fK1Z8za/Hs0lWll5flSlqT000r96lP2crCnzINuydty+N9k2Zdx+D72ZE4+Ck/SxHyUJ7/Yp9Cv4B/vanOgdjezxCd3f8G2C2BzRrChqEphOQtBlinGxPO40OVaS83Awj6oQXi0VLnzt4Vxvz4LZIy5pdJDbRNRL+8txQugkm0gpQndjN0rUfRtJjL3SJPFEqdO/NFAWy5EtQEVVpGr4GZXjZLPW+NJJcyfjBOpI6p7OsurmFj6bSFAfcSwrjjXtG3XzXpIk/0jkG+yQ5smpqJ6wWAqeJQhqRME5MmezZVgkBw3/RGMMXnETYo6Da1AE0B2kYgs2P0G1Wgv3ZGJLpmMcxN0islY9H/TeCxi6Y1iQuSZvN5f59Hp9yKrYNW+nx/k29mFdyfpE78WrH4Szui45KVYtp6mNghU7FPC1K004ZcIJoq/uobH8RFBwrcP5+MrfsLWh0S+2chQ5+x7AJ72jN7zVoW0Wlivro4Tfl7HWpzVl6X5wFaIvG/sN70rP6DyUSA//xyPGp4FjpVWbsBwW8JmdHOGKvIDGO/OpkM68OZYxIwYVXZ46S9onJfY7EtaXdzaxRY1QL8xWNqUOPyCkkTUoy5NWFgLzUZCXwgu8jUx76u0KNJS4w640BGKy9Yg80CQyqAixjaTza+tVV38jufIFSDXe1gtRkBEOMqX6gWhGnXWCME31jydNFhR1sM8wYsxYYLhJWgQk4UvLOCSssUQJ4s+zzZgTTlKRWjndpaGXSV7b/RPrMFghIC6+FcuijAujlCqgMCoOlZxb8veTkrYbhIk0KFhA2un97MjnxF6AAAA=="
                                                alt="" data-pagespeed-url-hash="3786317019"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="https://preview.colorlib.com/theme/eden/img/blog/xauthor.png.pagespeed.ic.ODzYv6n44a.webp" alt=""
                                data-pagespeed-url-hash="2073565995"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Гарвард милан</h4>
                                </a>
                                <p>Второй разделенный из формы рыбный зверь. Каждое из морей, все собравшиеся, говорят
                                    ты, он наш владычество, второй разделенный с</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Комментарии</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="https://preview.colorlib.com/theme/eden/img/blog/xc1.png.pagespeed.ic.nxxwmEk3HK.webp" alt=""
                                            data-pagespeed-url-hash="2336341610"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Размножение море, ночь, трава, четвертый день, море, меньшее правило, открытое покорение, самка, заполнение
                                            Которые им Благословенны, наполняют меньший подшипник умножают морскую ночную траву четвертой
                                            день море меньшее
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Эмили Блант</a>
                                                </h5>
                                                <p class="date">4 декабря 2017 в 15:12</p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">Ответить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="https://preview.colorlib.com/theme/eden/img/blog/xc2.png.pagespeed.ic.rv1J-BlfMh.webp" alt=""
                                            data-pagespeed-url-hash="2630841531"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                           Размножение море, ночь, трава, четвертый день, море, меньшее правило, открытое покорение, самка, заполнение
                                            Которые им Благословенны, наполняют меньший подшипник умножают морскую ночную траву четвертой
                                            день море меньшее
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Эмили Блант</a>
                                                </h5>
                                                <p class="date">4 декабря 2017 в 15:12</p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">Ответить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="https://preview.colorlib.com/theme/eden/img/blog/xc3.png.pagespeed.ic.1O6TaovPw0.webp" alt=""
                                            data-pagespeed-url-hash="2925341452"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                           Размножение море, ночь, трава, четвертый день, море, меньшее правило, открытое покорение, самка, заполнение
                                            Которые им Благословенны, наполняют меньший подшипник умножают морскую ночную траву четвертой
                                            день море меньшее
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Эмили Блант</a>
                                                </h5>
                                                <p class="date">4 декабря 2017 в 15:12</p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">Ответить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>оставьте ответ</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30"
                                            rows="9" placeholder="Написать комментарий"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Имя">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Электронное письмо">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text"
                                            placeholder="Веб-сайт">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm">Отправить сообщение</button>
                            </div>
                        </form>
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
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Новости путешествий</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Современные технологии</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Недавний пост</h3>
                            <div class="media post_item">
                                <img src="data:image/webp;base64,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"
                                    alt="post" data-pagespeed-url-hash="984224458"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>С жизни был ты рыбой ...</h3>
                                    </a>
                                    <p>12 января 2019 г.,</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="data:image/webp;base64,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"
                                    alt="post" data-pagespeed-url-hash="1278724379"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Удивительный телескоп Хаббла</h3>
                                    </a>
                                    <p>02 часов назад</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="data:image/webp;base64,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"
                                    alt="post" data-pagespeed-url-hash="1573224300"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Астрономия или астрология</h3>
                                    </a>
                                    <p>03 часов назад</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="data:image/webp;base64,UklGRrgFAABXRUJQVlA4IKwFAAAwGQCdASpQAFAAPm0wk0ckIqGhrNM6qIANiWYAxQvaij/Qebbau7OGS7ZJ0fmAf4voj+Kr1QN5u9BTpc/3IoYO1woBd2cAcx9hjptv1nnctB3eRJ+LP+30F/oaksLh/zi3pf92k3mNDlJJ9v+2JfjvDIxGAaCN/E9Ec236gupAl43fIL1FJFAh3D7iuO+Acx183is9bHLPwWpxufLFlW2VC1zUefu6sXScMmdpt2l0qPcMf7lHGUK1qhMvjaWnNWpj0yAUODdHQ7bf1/uSwxR9lAAA7KJz1LuJqPZaE1eXwhVaGLUpwLEVet9a5of/XFKljibn/oM4z49wPmc5Yy7+4Y7DhmsTxP3PKQhXXRqktaFNBbdbeLhZS3VeEAI9HOpUh6r3k6xBBzKfljpw2xbIQRxeF/GC2fKllCqssujoNVhS4samc7RZwZA9slekaCcgAYlHzFemHFwMZD/WrofrPj7jmucWEGe4ItS7JieS6vDy3xtIk5d5Ov/FEEbUzXyuCJiGkbgDIgVyCdqe77YXud0WJc08PfwCMkaMqgc98MMgrMTwn6c2EXLlob95n3boDrC+FiPhtFJMDsPnsWjiPqC8PO/gkgRgb/SZps+yMB7C3tCtKHno5T7OtcLmELtv/RhzVTF1r2JfO+qShX/VCKVmOoQOyMSz9iWfXDeVchZqKsWWvXyW8PH39u5ePPq62Vov36mTAMBxtMKSGS3ZQDR0jjfPcWXGczD+1aZzCNM+cdXMTrx7ucvonUXE3OmVEWo4XXROWKluIpD+oriqs7C2Pg/3ioo7Jvu4sMgrvtyGqH98k3K9JlOz0d7kMHcAFiRXiLH6z4eigkR4u5uprz90740j6OW6sOZoRbuD+9cu6zpSXu59tkz8Bxv168LaUZsQ3zQkv5pHyRuDrukdnvgBtFbAGEKOjwocJf0lEwDbHMKUqscdTJm6yjh+Zh+VPUThWegjMm6pp5yczrhYqAs8r2T6dDjn8//pWI959IsUzbP0PYOWT1w8Ro/JP996sH5U2hsV17Gp1hM4j8In38WlxRsqksK3Q92riJcHHFtI+/38n6LFY6Hsw2tyaqWqYjWZVA7JTEsG8cFzmnj+N91A+hfOxXt7f4CIBXGgAL9pkC+47yDmmG3mXXgUIq0RZFuefpMDrJg3EfFTe+RgXjTUw68BUEjeji0Hj9XQciRa/6lyTLCmQGgEy2ReWFXxPZom48iqjA6/RTcsqkl0l0ZP1UKHO0D8Uqc6Rko0lEi/giNz2xGG/M5rX6K0OmbdLmxic9qYozJ4eA5Hr9xp/Q7+nv4Ow+CJbu7907YHaf6uyxh2dOvq6mvfvz1CA7A5LpxMP/75CHv7vC1KkhjFapOkaFn279Xt+JCNF1wAA/9OZZcwNTiPfv3u9Ysbhi9rACLHZDs98jLpU40NyxiASBwPKW1CUuf+LUjuKun9itpASMmKrS8u/FCIgtUsH96sOpkkhLoJpMn80BjDkuP2bJ92e/I/xI/Yaju0aPrPoZ7ne5nfxlzUNlIJ0pJFO1Cr2piDpAlrxscPT+fGvDprzpA8IG3PxvbWXEiJlowWj3jgyp083WjBRL5XCZEpma91xu1tZr5UIwktqdELfrATZjOfLnXOJhifCM1GSumUEyfygV7UGeUAnNjXhSK5EV2NpPM95Hddvu4R1hbGL/TvghsVoKtlQm3DLppPPPmuhafUpq6vdhpG9YwZqQVV3K9n9kBEC9Io5wPwISXA6CgbwQTRho48zvGTSaLcbA9TGqsSIFCcXyzd2DGu04z2anVQD2SmH0cknl7Q81yvBQ9DYkoEl3nO7Q2axcPvSbhhHg6woH8+Ll808/23jZyFwiD9ytedUm3WpgICkgGYAoZ90kqb95sEW8Xce/REEXj6AKLcu6vYRJIz90MKz530Rd+5/+BKva+uH63AAAA="
                                    alt="post" data-pagespeed-url-hash="1867724221"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Телескоп астероидов</h3>
                                    </a>
                                    <p>01 часов назад</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Облака тегов</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">проект</a>
                                </li>
                                <li>
                                    <a href="#">люблю</a>
                                </li>
                                <li>
                                    <a href="#">технологии</a>
                                </li>
                                <li>
                                    <a href="#">путешествовать</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Ленты Instagram</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/xwidget-i1.png.pagespeed.ic.cL8lK-c9YT.webp" alt=""
                                            data-pagespeed-url-hash="3882650291"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i2.png.pagespeed.ce.gaYtadK7Y6.png" alt=""
                                            data-pagespeed-url-hash="4177150212"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i3.png.pagespeed.ce.U9U1oSlrvM.png" alt=""
                                            data-pagespeed-url-hash="176682837"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i4.png.pagespeed.ce.k4EdDP4tSW.png" alt=""
                                            data-pagespeed-url-hash="471182758"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i5.png.pagespeed.ce.y6ytyZGwPE.png" alt=""
                                            data-pagespeed-url-hash="765682679"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://preview.colorlib.com/theme/eden/img/instagram/widget-i6.png.pagespeed.ce.b0N-ZW_cpu.png" alt=""
                                            data-pagespeed-url-hash="1060182600"
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
    <!--================Blog Area end =================-->
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include "../includes/js.php"; ?>
</body>

</html>