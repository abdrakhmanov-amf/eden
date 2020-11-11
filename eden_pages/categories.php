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
    <!--================Fullwidth block Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Категория</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Домашняя</a>
                        <a href="/blogs">Категория</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Category  Area Start =================-->
    <section class="category-page area-padding">
        <div class="container">
            <div class="row">
               <?php include "../query/blog.php"; ?>

                <div class="col-12 text-center">
                    <a href="" class="main_btn">Загрузи больше<span class="ti-angle-double-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--================Category  Area End =================-->
    <!-- ================ Instargram Area Starts ================= -->
    <section class="instagram">
        <div class="row no-gutters">
            <div class="col-2">
                <a href=""><img
                        src="https://preview.colorlib.com/theme/eden/img/instagram/x1.jpg.pagespeed.ic.3_eOt8F4XH.webp"
                        alt="" data-pagespeed-url-hash="270620287"
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