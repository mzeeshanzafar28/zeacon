<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <title>Zeacon - Payment solution for both Personal and Merchant businesses</title>

    <link rel="icon" type="image/png" href="assets/img/ZEACON.png">
</head>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader -->
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="luvion-responsive-nav">
        <div class="container">
            <div class="luvion-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="assets/img/logo2.png" alt="logo">
                    <img src="assets/img/logo2.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="luvion-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo2.png" alt="logo">
                    <img src="assets/img/logo2.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link" class="{{url()->current() == '/' ?'active':''}}">Home </a>
                        </li>

                        <li class="nav-item"><a href="about" class="nav-link" class="{{url()->current() == 'about' ?'active':''}}">About Us</a></li>

                       

                        <li class="nav-item"><a href="contact" class="nav-link" class="{{url()->current() == 'contact' ?'active':''}}">Contact</a></li>
                          <li class="nav-item"><a href="sign-up" class="nav-link" class="{{url()->current() == 'sign-up' ?'active':''}}">Signup Free</a></li>
                    </ul>

                    <div class="others-options">
                        <a href="login" class="login-btn"><i class="flaticon-user"></i> Log In</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Start Navbar Area -->

@yield('content')

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="/"><img src="assets/img/ZEACON.png" alt="logo"></a>
                        <p>Zeacon's mission is to simplify payments for endless possibilities.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="list">
                        <li><a href="about">About Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Support</h3>

                    <ul class="list">
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>

                    <ul class="footer-contact-info">
                        <li><span>Location:</span> SF-A4, City Complex, 455 Nnebisi Road, Asaba, Delta State</li>
                        <li><span>Email:</span> <a
                                href="/cdn-cgi/l/email-protection#731b161f1f1c331f06051a1c1d5d101c1e"><span
                                    class="__cf_email__"
                                    data-cfemail="afc7cac3c3c0efc3dad9c6c0c181ccc0c2">zeaconglobal.com</span></a>
                        </li>
                        <li><span>Phone:</span> <a href="tel:+321984754">+ (321) 984 754</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>Copyright @2022 Zeacon is proudly created by <a href="#" target="_blank"> ZEACON</a></p>
        </div>
    </div>

    <div class="map-image"><img src="assets/img/map.png" alt="map"></div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<!-- Links of JS files -->
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{('assets/js/jquery.min.js')}}"></script>
<script src="{{('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{('assets/js/meanmenu.js')}}"></script>
<script src="{{('assets/js/nice-select.min.js')}}"></script>
<script src="{{('assets/js/slick.min.js')}}"></script>
<script src="{{('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{('assets/js/appear.min.js')}}"></script>
<script src="{{('assets/js/odometer.min.js')}}"></script>
<script src="{{('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{('assets/js/parallax.min.js')}}"></script>
<script src="{{('assets/js/wow.min.js')}}"></script>
<script src="{{('assets/js/form-validator.min.js')}}"></script>
<!-- < src="{{('assets/js/contact-form-script.js')}}"><script> -->
<script src="{{('assets/js/main.js')}}"></script>
</body>

</html>