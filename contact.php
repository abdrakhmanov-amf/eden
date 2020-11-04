<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://preview.colorlib.com/theme/eden/img/xfavicon.png.pagespeed.ic.66Q9flSNoC.webp"
        type="image/png">
    <title>Eden Megazine</title>
    <!-- <base href="https://preview.colorlib.com/theme/eden/"> -->
    <!-- Bootstrap CSS -->
    <!-- main css -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <!--================ Start header Top Area =================-->
    <section class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-4">
                    <div class="float-left">
                        <ul class="header_social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-skype"></i></a></li>
                            <li><a href="#"><i class="ti-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6 col-sm-6 logo-wrapper">
                    <a href="index.html" class="logo">
                        <script data-pagespeed-no-defer>
                            //<![CDATA[
                            (function () {
                                for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty :
                                        function (b, c, a) {
                                            if (a.get || a.set) throw new TypeError(
                                                "ES3 does not support getters and setters.");
                                            b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                        }, h = "undefined" != typeof window && window === this ? this :
                                        "undefined" != typeof global && null != global ? global : this, k = [
                                            "String", "prototype", "repeat"
                                        ], l = 0; l < k.length - 1; l++) {
                                    var m = k[l];
                                    m in h || (h[m] = {});
                                    h = h[m]
                                }
                                var n = k[k.length - 1],
                                    p = h[n],
                                    q = p ? p : function (b) {
                                        var c;
                                        if (null == this) throw new TypeError(
                                            "The 'this' value for String.prototype.repeat must not be null or undefined"
                                            );
                                        c = this + "";
                                        if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                        b |= 0;
                                        for (var a = ""; b;)
                                            if (b & 1 && (a += c), b >>>= 1) c += c;
                                        return a
                                    };
                                q != p && null != q && g(h, n, {
                                    configurable: !0,
                                    writable: !0,
                                    value: q
                                });
                                var t = this;

                                function u(b, c) {
                                    var a = b.split("."),
                                        d = t;
                                    a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                    for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d =
                                        d[e] : d = d[e] = {} : d[e] = c
                                };

                                function v(b) {
                                    var c = b.length;
                                    if (0 < c) {
                                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                        return a
                                    }
                                    return []
                                };

                                function w(b) {
                                    var c = window;
                                    if (c.addEventListener) c.addEventListener("load", b, !1);
                                    else if (c.attachEvent) c.attachEvent("onload", b);
                                    else {
                                        var a = c.onload;
                                        c.onload = function () {
                                            b.call(this);
                                            a && a.call(this)
                                        }
                                    }
                                };
                                var x;

                                function y(b, c, a, d, e) {
                                    this.h = b;
                                    this.j = c;
                                    this.l = a;
                                    this.f = e;
                                    this.g = {
                                        height: window.innerHeight || document.documentElement.clientHeight ||
                                            document.body.clientHeight,
                                        width: window.innerWidth || document.documentElement.clientWidth ||
                                            document.body.clientWidth
                                    };
                                    this.i = d;
                                    this.b = {};
                                    this.a = [];
                                    this.c = {}
                                }

                                function z(b, c) {
                                    var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                    if (a = e && !(e in b.c))
                                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                        else {
                                            d = c.getBoundingClientRect();
                                            var f = document.body;
                                            a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document
                                                .documentElement || f.parentNode || f).scrollTop);
                                            d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document
                                                .documentElement || f.parentNode || f).scrollLeft);
                                            f = a.toString() + "," + d;
                                            b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height &&
                                                d <= b.g.width)
                                        } a && (b.a.push(e), b.c[e] = !0)
                                }
                                y.prototype.checkImageForCriticality = function (b) {
                                    b.getBoundingClientRect && z(this, b)
                                };
                                u("pagespeed.CriticalImages.checkImageForCriticality", function (b) {
                                    x.checkImageForCriticality(b)
                                });
                                u("pagespeed.CriticalImages.checkCriticalImages", function () {
                                    A(x)
                                });

                                function A(b) {
                                    b.b = {};
                                    for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(
                                        document.getElementsByTagName(c[d])));
                                    if (a.length && a[0].getBoundingClientRect) {
                                        for (d = 0; c = a[d]; ++d) z(b, c);
                                        a = "oh=" + b.l;
                                        b.f && (a += "&n=" + b.f);
                                        if (c = !!b.a.length)
                                            for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++
                                                d) {
                                                var e = "," + encodeURIComponent(b.a[d]);
                                                131072 >= a.length + e.length && (a += e)
                                            }
                                        b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a
                                            .length + e.length && (a += e), c = !0);
                                        C = a;
                                        if (c) {
                                            d = b.h;
                                            b = b.j;
                                            var f;
                                            if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                            else if (window.ActiveXObject) try {
                                                f = new ActiveXObject("Msxml2.XMLHTTP")
                                            } catch (r) {
                                                try {
                                                    f = new ActiveXObject("Microsoft.XMLHTTP")
                                                } catch (D) {}
                                            }
                                            f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" +
                                                encodeURIComponent(b)), f.setRequestHeader("Content-Type",
                                                "application/x-www-form-urlencoded"), f.send(a))
                                        }
                                    }
                                }

                                function B() {
                                    var b = {},
                                        c;
                                    c = document.getElementsByTagName("IMG");
                                    if (!c.length) return {};
                                    var a = c[0];
                                    if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                    for (var d = 0; a = c[d]; ++d) {
                                        var e = a.getAttribute("data-pagespeed-url-hash");
                                        e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 <
                                            a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m
                                            ) && (b[e] = {
                                            rw: a.width,
                                            rh: a.height,
                                            ow: a.naturalWidth,
                                            oh: a.naturalHeight
                                        })
                                    }
                                    return b
                                }
                                var C = "";
                                u("pagespeed.CriticalImages.getBeaconData", function () {
                                    return C
                                });
                                u("pagespeed.CriticalImages.Run", function (b, c, a, d, e, f) {
                                    var r = new y(b, c, a, e, f);
                                    x = r;
                                    d && w(function () {
                                        window.setTimeout(function () {
                                            A(r)
                                        }, 0)
                                    })
                                });
                            })();
                            pagespeed.CriticalImages.Run('/mod_pagespeed_beacon',
                                'https://preview.colorlib.com/theme/eden/contact.html', 'oJcOUTg7z9', true, false,
                                'dQ3lGQfmJAs');
                            //]]>
                        </script><img src="https://preview.colorlib.com/theme/eden/img/logo.png" alt="" data-pagespeed-url-hash="2634304158"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 search-trigger">
                    <div class="right-button">
                        <ul>
                            <li><a id="search" href="javascript:void(0)"><i class="fas fa-search"></i></a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </section>
    <!--================ End header top Area =================-->
    <!-- Start header Menu Area -->
    <header id="header" class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="category.html">Categories</a></li>
                            <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Latest news</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header MEnu Area -->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Contact</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            }, {
                                lightness: 50
                            }]
                        }, {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                </script>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                            <p>Send us your query anytime!</p>
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
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/2.jpg" alt="" data-pagespeed-url-hash="565120208"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/3.jpg" alt="" data-pagespeed-url-hash="859620129"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/4.jpg" alt="" data-pagespeed-url-hash="1154120050"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/5.jpg" alt="" data-pagespeed-url-hash="1448619971"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <div class="col-2">
                <a href=""><img src="https://preview.colorlib.com/theme/eden/img/instagram/6.jpg" alt="" data-pagespeed-url-hash="1743119892"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
        </div>
    </section>
    <!-- ================ Instargram Area End ================= -->
    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>About Us</h4>
                    <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                    <div class="footer-logo">
                        <img src="https://preview.colorlib.com/theme/eden/img/logo.png" alt="" data-pagespeed-url-hash="2634304158"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>Address :Your address goes
                            here, your demo address.</p>
                        <span>Phone : +8880 44338899</span>
                        <span>Email : info@colorlib.com</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Important Link</h4>
                    <ul>
                        <li><a href="#">WHMCS-bridge</a></li>
                        <li><a href="#">Search Domain</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Our Shop</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days
                        open</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->
    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
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
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
<!-- ================ End footer Area ================= -->
<!-- ================ End footer Area ================= -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-2.2.4.min.js.pagespeed.jm.pJg2D_p7ze.js"></script>
<script src="/js/popper.js+bootstrap.min.js+stellar.js.pagespeed.jc.dNpLUAstVq.js"></script><script>eval(mod_pagespeed_qDngLsykIz);</script>
<script>eval(mod_pagespeed_OQW4QBllrd);</script>
<script>eval(mod_pagespeed_rI2L2pOfIy);</script>
<script src="/js/vendors,_popup,_jquery.magnific-popup.min.js+js,_jquery.ajaxchimp.min.js+js,_waypoints.min.js+js,_mail-script.js+js,_contact.js+js,_jquery.form.js.pagespeed.jc.EvdpWaJNJZ.js"></script><script>eval(mod_pagespeed_DvpK6qmaMC);</script>
<script>eval(mod_pagespeed_rApYH7FmlC);</script>
<script>eval(mod_pagespeed_ElEBEi0Ajo);</script>
<script>eval(mod_pagespeed_f9xQRUz2Fa);</script>
<script>eval(mod_pagespeed_3YXsAvJxlq);</script>
<script>eval(mod_pagespeed_FhvypHGIGb);</script>
<script src="/js/jquery.validate.min.js+mail-script.js+theme.js.pagespeed.jc.M0GXsTotjZ.js"></script><script>eval(mod_pagespeed_wtamv5rJxy);</script>
<script>eval(mod_pagespeed_f9xQRUz2Fa);</script>
<script>eval(mod_pagespeed_43YZNSQKOx);</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>
</body>
</html>