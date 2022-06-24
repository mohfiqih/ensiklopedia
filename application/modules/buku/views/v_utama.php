<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>EPIN PHB</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png"
        href="<?php echo base_url('assets'); ?>/menu/images/favicon.png" type="image/png" />

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/animate.css" />

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/magnific-popup.css" />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/slick.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/LineIcons.css" />

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/font-awesome.min.css" />

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/bootstrap.min.css" />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/menu/css/style.css" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/epin-mini.png'); ?>">
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <nav class="navbar navbar-expand-lg">
                            <a>
                                <img width="50px" height="50px"
                                    src="<?php echo base_url(); ?>/assets/frontend/images/logo.svg" />
                            </a>
                        </nav>
                    </div>
                    <div class="col-lg-7">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#footer">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->

        <div id="home" class="header-hero bg_cover"
            style="background-image: url(<?php echo base_url('assets/menu/images/banner-bg.svg'); ?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Welcome To
                            </h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                EPIN PHB
                            </h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                Ensiklopedia Pintar - Seri Buah<br />
                                Aplikasi Baca Buku Untuk Anak Usia 7-9 Tahun
                            </p>
                            <!-- <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                                        data-wow-delay="1.1s">Get Started</a> -->
                        </div>
                        <!-- header hero content -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">
                            <img src="<?php echo base_url('assets'); ?>/frontend/images/anak.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
                <!-- row -->
            </div>
            <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div>
        <!-- header hero -->
    </header><br />

    <section class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40"><br />
                        <div class="line m-auto"></div>
                        <h3 class="title" id="features">
                            Features<br />
                            <!-- <span>Aplikasi baca buku untuk anak usia 7-9 tahun</span> -->
                        </h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.2s" style="
                  background-image: url(https://i.pinimg.com/564x/58/a9/e0/58a9e0e73595dc368d89896fe2a4c346.jpg);
                  background-size: cover;">
                        <div class="services-icon">
                            <img class="shape" src="<?php echo base_url('assets/menu/images/services-shape.svg') ?>"
                                alt="shape" />
                            <img class="shape-1" src="<?php echo base_url('assets/menu/images/services-shape-2.svg') ?>"
                                alt="shape" />
                            <i class="lni-book"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">
                                <a href="#">Membaca</a>
                            </h4>

                            <p class="text">
                                Pada menu ini akan ditampilkan beberapa slide buah-buahan.
                                Terdapat gambar animasi buah, deskripsi singkat, serta audio yang dapat membantu proses
                                belajar membaca.
                            </p><br />
                            <a target="_blank" href="<?php echo base_url('buku/pisang') ?>"
                                class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Baca</a>
                        </div>
                    </div>
                    </a>
                    <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s" style="
                background-image: url(https://i.pinimg.com/564x/4c/ff/1f/4cff1f911ab5490884f4210b2b435628.jpg);
                background-size: cover;
              ">
                        <div class="services-icon">
                            <img class="shape" src="<?php echo base_url('assets/menu/images/services-shape.svg') ?>"
                                alt="shape" />
                            <img class="shape-1" src="<?php echo base_url('assets/menu/images/services-shape-3.svg') ?>"
                                alt="shape" />
                            <i class="lni-video"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Menonton</a></h4>
                            <p class="text">
                                Pada menu ini akan ditampilkan sebuah dongeng singkat dalam bentuk video animasi.
                                Dongeng singkat ini bertujuan untuk menarik perhatian anak-anak agar lebih senang dalam
                                membaca.
                            </p><br />
                            <a target="_blank" href="<?php echo base_url('buku/dongeng') ?>"
                                class="main-btn wow fadeInUp bg-yellow" data-wow-duration="1.3s"
                                data-wow-delay="1.1s">Tonton</a>
                        </div>
                    </div>
                    <!-- single services -->
                </div>
                <!-- <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s" style="
                background-image: url();
                background-size: cover;
              ">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape" />
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape" />
                            <i class="lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Cooming Soon</a></h4>
                            <p class="text">
                                Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                                seddiam nonu eirmod tempor invidunt labore.
                            </p><br />
                            <a href="#features" class="main-btn bg-warning" data-wow-duration="1.3s"
                                data-wow-delay="1.1s">Cooming Soon</a>
                        </div>
                    </div>
                     single services
            </div> -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section><br /><br />

    <!-- <section id="facts" class="video-counter pt-120">
        <div class="container">
            <div class="row justify-content center">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="<?php echo base_url('assets/menu/images/dots.svg'); ?>" alt="epin" />
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="<?php echo base_url('assets/frontend/images/bg.png'); ?>" alt="video" />
                            </div>
                            <div class="video-icon">
                                <a href="<?php echo base_url('https://youtu.be/sMW_fy8Lttg'); ?>" class="video-popup"><i
                                        class="lni-play"></i></a>
                            </div>
                        </div>
                         video wrapper
                    </div>
                    video content
                </div> -->
    <section id="about" class="about-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>About of</span> Project</h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- <div class="col-lg-5" id="about">
                    <div class="section-title text-center pb-30">
                        <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="counter-content">
                                <div class="section-title">
                                    <div class="line"></div>
                                    <h3 class="title">About of <span> Project</span></h3>
                                </div>
                            </div>
                        </div>
                    </div> -->
            <!-- section title -->
            <p class="text-justify">
                EPIN PHB merupakan sebuah aplikasi baca buku ensiklopedia pintar seri buah berbasis website untuk anak
                usia
                7-9 tahun.
                Website ini digunakan sebagai media pembelajaran untuk memudahkan proses belajar membaca anak-anak
                dengan cara pengenalan macam-macam buah.
                Nama-nama buah yang ditampilkan juga dilengkapi dengan Bahasa Inggris, hal ini tentunya dapat melatih
                anak-anak dalam belajar Bahasa Inggris.
                Selain itu, website ini juga dilengkapi dengan animasi yang sangat menarik dan audio yang dapat membantu
                proses belajar membaca.
            </p>
        </div>
    </section><br /><br />
    <!-- counter content -->
    <!-- <div class="row no-gutters">
                            <div class="col-4">
                                <div
                                    class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">125</span>K</span>
                                        <p class="text">Downloads</p>
                                    </div>
                                </div>
                                single counter
                            </div><br /> -->
    <!-- <div class="col-4">
                                <div
                                    class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">87</span>K</span>
                                        <p class="text">Active Users</p>
                                    </div>
                                </div>
                                single counter
                            </div> -->
    <!-- <div class="col-4">
                                <div
                                    class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div>
                                single counter
                            </div>
                        </div> -->
    <!-- row -->
    <!-- </div> -->
    <!-- counter wrapper -->
    <!-- </div>
        </div> -->
    <!-- row -->
    <!-- </div> -->
    <!-- container -->
    <!-- </section> -->

    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Team</span> Tugas Akhir</h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <!-- <div class="team-image">
                            <img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2022/04/20720340df7292e525b8b72ab3c7a980.JPG"
                                alt="Team" />
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="lni-facebook-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-twitter-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-instagram-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Ajeng Nur Sya'bani</a></h5>
                            <p class="text">19040176</p>
                        </div>
                    </div>
                    <!-- single team -->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <div class="team-image">
                            <img src="https://cdn0-production-images-kly.akamaized.net/1ASJ-hbgZcyRur6ctSqdq0pCGoE=/1200x900/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2408594/original/026886000_1542204229-Chelsea_Islan_foto_by_Bambang_E_Ros__2_.jpg"
                                alt="Team" />
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="lni-facebook-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-twitter-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-instagram-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Nisa Hudani Nabilla</a></h5>
                            <p class="text">19040004</p>
                        </div>
                    </div>
                    <!-- single team -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <br /><br /><br /><br /><br />
            <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <h4 class="contact-content">
                                <font color='white'>Contact Us</font>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa-gmail">
                                            <img width="20" height="20"
                                                src="<?php echo base_url('assets'); ?>/frontend/images/ig.png"
                                                alt="logo" />
                                        </i> nhdnbilla</a>
                                </li><br />
                                <li>
                                    <a href="#"><i class="fa-gmail">
                                            <img width="20" height="20"
                                                src="<?php echo base_url('assets'); ?>/frontend/images/wa.png"
                                                alt="logo" />
                                        </i> 081902654771</a>
                                </li><br />
                                <li>
                                    <a href="#"><i class="fa-gmail">
                                            <img width="20" height="20"
                                                src="<?php echo base_url('assets'); ?>/frontend/images/gmail.png"
                                                alt="logo" />
                                        </i> nisahudani99@gmail.com</a>
                                </li><br />
                                <li>
                                    <a href="#"><i class="fa-gmail">
                                            <img width="20" height="20"
                                                src="<?php echo base_url('assets'); ?>/frontend/images/wa.png"
                                                alt="logo" />
                                        </i> 085725265173</a>
                                </li><br />
                                <li>
                                    <a href="#"><i class="fa-gmail">
                                            <img width="20" height="20"
                                                src="<?php echo base_url('assets'); ?>/frontend/images/gmail.png"
                                                alt="logo" />
                                        </i> ajengns592@gmail.com</a>
                                </li><br />
                            </ul><br />
                            <div class="footer-copyright">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="copyright d-sm-flex justify-content-between">
                                            <div class="copyright-content">
                                                <p class="text">
                                                    Copyright © 2022 EPIN PHB - AJENG BILLA
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer about -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-2"></div>
    </footer>
    <!-- <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"> -->
    <!-- <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul> -->
    <!-- </div> -->
    <!-- footer wrapper -->
    <!-- <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"> -->
    <!-- <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul> -->
    <!-- </div> -->
    <!-- footer wrapper -->
    <!-- </div> -->
    <!-- footer link -->
    <!-- </div> -->
    <!-- <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"> -->
    <!-- <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+809272561823</li>
                                <li>info@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>
                                    123 Stree New York City , United <br />
                                    States Of America 750.
                                </li>
                            </ul> -->
    <!-- </div> -->
    <!-- footer contact -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- row -->
    <!-- </div> -->
    <!-- footer widget -->
    <!-- <div class="footer-copyright">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="copyright d-sm-flex justify-content-between">
                                        <div class="copyright-content"> -->
    <!-- <p class="text">
                                    Designed and Developed by
                                    <a href="https://uideck.com" rel="nofollow">UIdeck</a>
                                </p> -->
    <!-- <p class="text">
                                                Copyright © EPIN PHB - AJENG BILLA 2022
                                            </p>
                                        </div> -->
    <!-- copyright content -->
    <!-- </div> -->
    <!-- copyright -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- row -->
    <!-- </div> -->
    <!-- footer copyright -->
    <!-- </div> -->
    <!-- container -->
    <!-- <div id="particles-2"></div>
    </footer> -->

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== Jquery js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/vendor/jquery-1.12.4.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/vendor/modernizr-3.7.1.min.js">
    </script>

    <!--====== Bootstrap js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/popper.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/bootstrap.min.js">
    </script>

    <!--====== Plugins js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/slick.min.js">
    </script>

    <!--====== Ajax Contact js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/ajax-contact.js">
    </script>

    <!--====== Counter Up js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/jquery.magnific-popup.min.js">
    </script>

    <!--====== Scrolling Nav js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/particles.min.js">
    </script>

    <!--====== Main js ======-->
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/menu/js/main.js"></script>
</body>

</html>