@extends('layout.app')
@section('content')
    <!-- Start Page Title Area -->
<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <p>The Zeacon story</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span>How we were founded</span>
                    <h2>Zeacon is a technology company</h2>
                    <p>Zeacon is a technology company solving payments problems for ambitious
                        businesses. We offer our users a wallet to send and receive money. We
                        allow the user to fund their wallet with cash in bank, online banking, all
                        cards issued in Nigeria.
                        We offer our merchants a wallet to receive money from their Nigeria
                        customers.
                    </p>
                    <p>We provide the technology core needed to provide businesses all around
                        the world a powerful, reliable and intelligent payments gateway.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/about-img1.jpg" alt="image">

                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->


<!-- Start Ready To Talk Area -->
<section class="ready-to-talk">
    <div class="container">
        <div class="ready-to-talk-content">
            <h3>Ready to talk?</h3>
            <p>Our team is here to answer your question about Zeacon</p>
            <a href="contact" class="btn btn-primary">Contact Us</a>
            <span><a href="sign-up">Or, get started now with a free trial</a></span>
        </div>
    </div>
</section>
<!-- End Ready To Talk Area -->

<!-- Start Partner Area -->
<div class="partner-area">
    <div class="container">

        <h3>OUR PARTNERS</h3>
        <span class="text-white">We're working closer with these businesses...

        </span>

        <div class="partner-inner">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-4 col-md-3 col-6">
                    <a href="">
                        <img src="assets/img/fbs.png" alt="partner">
                        <img src="assets/img/fbs.png" alt="partner">
                    </a>
                </div>

                <div class="col-lg-6 col-sm-4 col-md-3 col-6">
                    <a href="">
                        <img src="assets/img/binary.png" alt="partner">
                        <img src="assets/img/binary.png" alt="partner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start App Download Area -->
<section class="app-download-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="app-image">
                    <div class="main-image">
                        <img src="assets/img/mobile-app1.png" class="wow animate__animated animate__fadeInLeft"
                            alt="image">
                        <img src="assets/img/mobile-app2.png" class="wow animate__animated animate__fadeInUp"
                            alt="image">
                    </div>

                    <div class="main-mobile-image">
                        <img src="assets/img/main-mobile.png" class="wow animate__animated animate__fadeInUp"
                            alt="image">
                    </div>

                    <div class="circle-img">
                        <img src="assets/img/circle.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="app-download-content">
                    <h2>You can find all the thing you need to payout</h2>
                    <div class="bar"></div>
                    <p>We process payments in sub-Saharan Africa with cash, bank wire, mobile payments, ATM, credit or
                        debit cards and local agents.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End App Download Area -->

<!-- Start Account Create Area -->
<section class="account-create-area">
    <div class="container">
        <div class="account-create-content">
            <h2>Apply for an account in minutes</h2>
            <p>Get your Zeacon account today!</p>
            <a href="login" class="btn btn-primary">Get Your Zeacon Account</a>
        </div>
    </div>
</section>
<!-- End Account Create Area -->
@endsection