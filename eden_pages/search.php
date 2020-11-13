<!doctype html>
<html lang="en">

<?php include "../includes/head.php";  ?>

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
                        <h2>Archive</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Домашняя</a>
                        <a href="contact.html">Архив</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--================End Home Banner Area =================-->
    <!--================Category  Area Start =================-->
    <section class="category-page area-padding">
        <div class="container">
            <div class="row" id='find-blog'>
                
                

                <div class="col-12 text-center">
                    <a href="" class="main_btn">Загрузить больше<span class="ti-angle-double-right"></span></a>
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
<!-- ================ End footer Area ================= -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include "../includes/js.php"; ?>
<script>

    $('#search_input').on('input',function(e){
        e.preventDefault();
        
        console.log($('#search_input').val())
        $.ajax({
            type: "POST",
            url: "/search_query",
            data: { text: $('#search_input').val()},
            success: function (data) {
                $('#find-blog').html(data)
            }
        });
    })

</script>

    
</body>

</html>