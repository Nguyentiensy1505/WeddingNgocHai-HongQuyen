<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Vĩnh & Uyên - Happy Wedding</title>

    <link rel="icon" href="images/favicon.jpg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css" media="screen">
    <!-- Pace -->
    <link rel="stylesheet" href="css/preloader.css" media="screen">
    <link rel="stylesheet" href="css/preloader-default.css" media="screen">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider/flexslider.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate/animate.css" type="text/css">
    <!-- Countdown -->
    <link rel="stylesheet" href="css/countdown/jquery.countdown.css" type="text/css">
    <!-- Magnific Popup -->
    <!-- <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" type="text/css"> -->
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.css" type="text/css">
    <!-- Icon -->
    <link rel="stylesheet" href="css/fonts/fontello/css/fontello.css" type="text/css" media="screen">

    <!-- Font -->
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <!-- Slidebars -->
    <link rel="stylesheet" href="css/slidebars/slidebars.css" type="text/css" media="screen">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">

    <!-- Skin CSS -->
    <!-- <link href="css/skin/light-teal/light-teal.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/skin/light-teal/light-teal-reverse-navbar.css" rel="stylesheet" media="screen">  -->
    <!-- <link href="css/skin/pattern/pattern-1.css" rel="stylesheet" media="screen"> -->

</head>

<body>
<div class="curtain">
    <div class="curtain__wrapper">
        <div class="gift-container">
            <div class="bubble">
                <div class="bubble-content">Chờ một chút nha...!</div>
            </div>
            <div class="gift">
                <img src="./images/icons/gift.gif"/>
            </div>
        </div>
        <div class="curtain__panel curtain__panel--left curtain-close"></div> <!-- curtain__panel -->

        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99"
                 style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <!--PRELOADER-->
        <div id="preloader">

            <div class="alignment">
                <div class="v-align center-middle">

                    <!-- LEFT HEART -->
                    <div class="heart-animation">
                        <i class="de-icon-heart"></i>
                    </div>

                    <!-- RIGHT HEART -->
                    <div class="heart-animation-reverse">
                        <i class="de-icon-heart"></i>
                    </div>

                </div>
            </div>

        </div>
        <!--END of PRELOADER-->

        <!-- SIDE NAVBAR -->
        <nav class="sb-slidebar sb-right sb-style-push">

            <div id="side-navbar-header">

                <div id="logo-inner-wrapper">
                    <!-- LOGO -->
                    <div class="logo-wrapper">
                        <!-- CSS LOGO -->
                        <a href="">
                            <div class="css-logo rounded">
                                <div class="css-logo-text">
                                    <strong>V</strong><i class="de-icon-heart-1"></i><strong>U</strong>
                                </div>
                            </div>
                        </a>

                    </div>
                    <!-- END of LOGO -->
                </div>

                <div id="close-inner-wrapper">
                    <a href="#" id="close-button"><i class="de-icon-cancel-2"></i></a>
                </div>

            </div>

        </nav> <!-- END of SIDE NAVBAR -->

        <!-- SLIDEBAR CONTENT WRAPPER -->
        <div id="sb-site">

            <!-- NAVIGATION -->
            <header>
                <nav id="menuicon-bar" class="fluid-width menuicon-right">

                    <!-- LOGO -->
                    <div class="logo-outter-wrapper">
                        <div class="logo-wrapper">
                            <!-- CSS LOGO -->
                            <a href="">
                                <div class="css-logo rounded">
                                    <div class="css-logo-text">
                                        <strong>V</strong><i class="de-icon-heart-1"></i><strong>U</strong>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- END of LOGO -->

                    <!-- RESET FLOAT -->
                    <div class="clearboth"></div>

                    <!-- STICKY MENU ICON -->
                    <div id="sticky-menuicon">
                        <a href="#" class="sb-toggle-right">
                            <i class="de-icon-menu"></i>
                        </a>
                    </div>

                </nav>

            </header><!-- END of NAVIGATION -->

            @include('slider')

            <!--CONTENT SECTION-->
            <section id="content">

                @include('wedding')

                @include('countdown')

                @include('memories')

                @include('couple')

            </section>

            @include('modal')

            @include('footer')

        </div> <!-- END of SLIDEBAR CONTENT WRAPPER -->


        <div class="curtain__panel curtain__panel--right curtain-close"></div> <!-- curtain__panel -->
    </div> <!-- curtain__wrapper -->
</div> <!-- curtain -->
<!-- jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Pace -->
<script src="js/pace/pace.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap/bootstrap.js"></script>
<!-- Modernizr -->
<script src="js/modernizr/modernizr.js"></script>
<!-- Device JS -->
<script src="js/devicejs/device.js"></script>
<!-- TinyNav -->
<!-- <script src="js/tinynav/tinynav.min.js"></script> -->
<!-- SmoothScroll -->
<script src="js/smoothscroll/jquery.smooth-scroll.js"></script>
<!-- Flexslider -->
<script src="js/flexslider/jquery.flexslider.js"></script>
<!-- Sticky -->
<!-- <script src="js/sticky/jquery.sticky.js"></script> -->
<!-- Waypoint -->
<script src="js/waypoint/jquery.waypoints.min.js"></script>
<!-- DoubleTapToGo -->
<!-- <script src="js/jquery-ui-widget/jquery.ui.widget.js"></script> -->
<!-- <script src="js/jquery-doubletaptogo/jquery.dcd.doubletaptogo.js"></script> -->
<!-- Vide -->
<!-- <script src="js/vide/jquery.vide.js"></script> -->
<!-- Stellar -->
<!-- <script src="js/stellar/jquery.stellar.js"></script> -->
<!-- Masonry -->
<!-- <script src="js/masonry/masonry.pkgd.min.js"></script> -->
<!-- Countdown -->
<script src="js/countdown/jquery.plugin.js"></script>
<script src="js/countdown/jquery.countdown.js"></script>
<!-- Countdown Labels / Localisation -->
<script src="js/countdown/jquery.countdown-custom-label.js"></script>
<!-- Magnific Popup -->
<!-- <script src="js/magnific-popup/jquery.magnific-popup.js"></script> -->
<!-- Owl Carousel -->
<script src="js/owlcarousel/owl.carousel.js"></script>
<!-- <script src="js/sweetalert/sweetalert.min.js"></script> -->
<!-- Slidebars -->
<script src="js/slidebars/slidebars.js"></script>


<!-- Custom Core Script -->
<script type="text/javascript" src="js/script.js"></script>
<!-- Custom Additional Script -->
<script type="text/javascript" src="js/main-slider-image-animation.js"></script>
<!-- <script type="text/javascript" src="js/side-navbar.js"></script> -->

</body>

</html>
