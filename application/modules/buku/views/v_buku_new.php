<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />

     <title>Web Application Ensiklopedia Pintar Series Buah</title>
     <meta content="" name="description" />
     <meta content="" name="keywords" />

     <!-- Favicons -->
     <link href="<?php echo base_url('Appland'); ?>/assets/img/favicon.png" rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/img/apple-touch-icon.png" rel="stylesheet" />

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet" />

     <!-- Vendor CSS Files -->
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/aos/aos.css" rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css"
          rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
     <link href="<?php echo base_url('Appland'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

     <!-- Template Main CSS File -->
     <link href="<?php echo base_url('Appland'); ?>/assets/css/style.css" rel="stylesheet" />

     <!-- =======================================================
  * Template Name: Appland - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top  header-transparent ">
          <div class="container d-flex align-items-center justify-content-between">

               <div class="logo">
                    <h3> <img class="d-inline" style="width: 110px;height: 40px;"
                              src="<?php echo base_url('assets/frontend/images/epin.png'); ?>"></h3>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
               </div>

               <nav id="navbar" class="navbar">
                    <ul>
                         <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                         <li><a class="nav-link scrollto" href="#features">App Features</a></li>
                         <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                   <li><a href="#">Drop Down 1</a></li>
                                   <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                                  class="bi bi-chevron-right"></i></a>
                                        <ul>
                                             <li><a href="#">Deep Drop Down 1</a></li>
                                             <li><a href="#">Deep Drop Down 2</a></li>
                                             <li><a href="#">Deep Drop Down 3</a></li>
                                             <li><a href="#">Deep Drop Down 4</a></li>
                                             <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                   </li>
                                   <li><a href="#">Drop Down 2</a></li>
                                   <li><a href="#">Drop Down 3</a></li>
                                   <li><a href="#">Drop Down 4</a></li>
                              </ul>
                         </li>
                         <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                         <!-- <li><a class="getstarted scrollto" href="#features">Get Started</a></li> -->
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
               </nav><!-- .navbar -->

          </div>
     </header><!-- End Header -->

     <!-- ======= Hero Section ======= -->
     <?php
				if ($data_buah){
				foreach ($data_buah as $d){ 
	?>
     <section id="hero" class="d-flex align-items-center"
          style="background-image: url('<?php echo base_url(); ?>assets/images/<?php echo $d->bg; ?>');background-size: cover;">
          <div class="container">
               <div class="row">
                    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                         data-aos="fade-up">
                         <div>
                              <h1><?php echo $d->nama_buah; ?></h1>
                              <h2>
                                   <?php echo $d->deskripsi; ?>
                              </h2>
                              <a href="#">
                                   <audio controls data-seq class="title" style="">
                                        <source src="horse.ogg" type="audio/ogg">
                                        <source src="<?php echo base_url('assets'); ?>/audio/mangga.mp3"
                                             type="audio/mpeg">
                                        Your browser does not support the audio tag.
                                   </audio>
                              </a> <br /><br />
                              <a href="#" style="width: 295px;height: 40px;" class="download-btn">
                                   <center><i class="bx bxl-play-store"></i>Baca Lengkap</center>
                              </a>

                         </div>
                    </div>
                    <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                         data-aos="fade-up">
                         <img width="400" height="400" style="float: right"
                              src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>" class="img-fluid"
                              alt="" />
                    </div>
               </div>
          </div>
     </section>
     <?php }} else { ?>
     <td class="text-center" colspan="6">Tidak ada data</td>
     <?php } ?>
     <!-- End Hero -->

     <main id="main">
          <!-- ======= App Features Section ======= -->
          <section id="features" class="features">
               <div class="container">
                    <div class="section-title">
                         <h2>App Features</h2>
                         <p>
                              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                              Quia fugiat sit in iste officiis commodi quidem hic quas.
                         </p>
                    </div>

                    <div class="row no-gutters">
                         <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                              <div class="content d-flex flex-column justify-content-center">
                                   <div class="row">
                                        <div class="col-md-6 icon-box" data-aos="fade-up">
                                             <i class="bx bx-receipt"></i>
                                             <h4>Codeigniter 3</h4>
                                             <p>
                                                  Consequuntur sunt aut quasi enim aliquam quae harum
                                                  pariatur laboris nisi ut aliquip
                                             </p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                             <i class="bx bx-cube-alt"></i>
                                             <h4>Bootstrap</h4>
                                             <p>
                                                  Excepteur sint occaecat cupidatat non proident, sunt in
                                                  culpa qui officia deserunt
                                             </p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                             <i class="bx bx-images"></i>
                                             <h4>Javascript</h4>
                                             <p>
                                                  Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                                                  maiores omnis facere
                                             </p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                             <i class="bx bx-shield"></i>
                                             <h4>PHP v.</h4>
                                             <p>
                                                  Expedita veritatis consequuntur nihil tempore laudantium
                                                  vitae denat pacta
                                             </p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                             <i class="bx bx-atom"></i>
                                             <h4>Terenkripsi</h4>
                                             <p>
                                                  Et fuga et deserunt et enim. Dolorem architecto ratione
                                                  tensa raptor marte
                                             </p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                             <i class="bx bx-id-card"></i>
                                             <h4>Explicabo consectetur</h4>
                                             <p>
                                                  Est autem dicta beatae suscipit. Sint veritatis et sit
                                                  quasi ab aut inventore
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                              data-aos="fade-left" data-aos-delay="100">
                              <img src="<?php echo base_url('Appland/assets/img/features.svg'); ?>" class="img-fluid"
                                   alt="" />
                         </div>
                    </div>
               </div>
          </section>
          <!-- End App Features Section -->

          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials section-bg">
               <div class="container" data-aos="fade-up">
                    <div class="section-title">
                         <h2>About Application</h2>
                         <p>
                              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                              Quia fugiat sit in iste officiis commodi quidem hic quas.
                         </p>
                    </div>

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                         <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                   <div class="testimonial-item">
                                        <img src="<?php echo base_url('Appland/assets/img/testimonials/testimonials-1.jpg'); ?>"
                                             class="testimonial-img" alt="" />
                                        <h3>Ajeng Nur Sya'bani</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                             Proin iaculis purus consequat sem cure digni ssim donec
                                             porttitora entum suscipit rhoncus. Accusantium quam,
                                             ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                             risus at semper.
                                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                   </div>
                              </div>

                              <div class="swiper-slide">
                                   <div class="testimonial-item">
                                        <img src="<?php echo base_url('Appland/assets/img/testimonials/testimonials-1.jpg'); ?>"
                                             class="testimonial-img" alt="" />
                                        <h3>Nisa Hudani Nabilla</h3>
                                        <h4>Designer</h4>
                                        <p>
                                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                             Export tempor illum tamen malis malis eram quae irure esse
                                             labore quem cillum quid cillum eram malis quorum velit fore
                                             eram velit sunt aliqua noster fugiat irure amet legam anim
                                             culpa.
                                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                   </div>
                              </div>

                              <!-- <div class="swiper-slide">
                                   <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                             alt="" />
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <p>
                                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                             Enim nisi quem export duis labore cillum quae magna enim
                                             sint quorum nulla quem veniam duis minim tempor labore quem
                                             eram duis noster aute amet eram fore quis sint minim.
                                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                   </div>
                              </div>

                              <div class="swiper-slide">
                                   <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                             alt="" />
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <p>
                                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                             Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                                             multos export minim fugiat minim velit minim dolor enim duis
                                             veniam ipsum anim magna sunt elit fore quem dolore labore
                                             illum veniam.
                                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                   </div>
                              </div>

                              <div class="swiper-slide">
                                   <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                             alt="" />
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <p>
                                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                             Quis quorum aliqua sint quem legam fore sunt eram irure
                                             aliqua veniam tempor noster veniam enim culpa labore duis
                                             sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                                             fore nisi cillum quid.
                                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                   </div>
                              </div> -->
                         </div>
                         <div class="swiper-pagination"></div>
                    </div>
               </div>
          </section>
          <!-- End Testimonials Section -->


     </main>
     <!-- End #main -->

     <!-- ======= Footer ======= -->
     <footer id="footer">
          <!-- <div class="footer-newsletter">
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-lg-6">
                              <h4>Join Our Newsletter</h4>
                              <p>
                                   Tamen quem nulla quae legam multos aute sint culpa legam noster
                                   magna
                              </p>
                              <form action="" method="post">
                                   <input type="email" name="email" /><input type="submit" value="Subscribe" />
                              </form>
                         </div>
                    </div>
               </div>
          </div> -->
          <center>
               <div class="footer-top">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-6 col-md-12 footer-contact">
                                   <h3>Appland</h3>
                                   <p>
                                        A108 Adam Street <br />
                                        New York, NY 535022<br />
                                        United States <br /><br />
                                        <strong>Phone:</strong> +1 5589 55488 55<br />
                                        <strong>Email:</strong> info@example.com<br />
                                   </p>
                              </div>

                              <!-- <div class="col-lg-3 col-md-6 footer-links">
                                   <h4>Useful Links</h4>
                                   <ul>
                                        <li>
                                             <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i>
                                             <a href="#">Terms of service</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i>
                                             <a href="#">Privacy policy</a>
                                        </li>
                                   </ul>
                              </div>

                              <div class="col-lg-3 col-md-6 footer-links">
                                   <h4>Our Services</h4>
                                   <ul>
                                        <li>
                                             <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i>
                                             <a href="#">Web Development</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i>
                                             <a href="#">Product Management</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                                        </li>
                                        <li>
                                             <i class="bx bx-chevron-right"></i>
                                             <a href="#">Graphic Design</a>
                                        </li>
                                   </ul>
                              </div> -->

                              <div class="col-lg-6 col-md-6 footer-links">
                                   <h4>Our Social Networks</h4>
                                   <p>
                                        Cras fermentum odio eu feugiat lide par naso tierra videa magna
                                        derita valies
                                   </p>
                                   <div class="social-links mt-3">
                                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>


               <div class="container py-4">
                    <div class="copyright">
                         &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                         <!-- All the links in the footer should remain intact. -->
                         <!-- You can delete the links only if you purchased the pro version. -->
                         <!-- Licensing information: https://bootstrapmade.com/license/ -->
                         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
               </div>
          </center>
     </footer>
     <!-- End Footer -->

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
               class="bi bi-arrow-up-short"></i></a>

     <!-- Vendor JS Files -->
     <script type="text/javascript" src="<?php echo base_url('Appland'); ?>/assets/vendor/aos/aos.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('Appland'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('Appland'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('Appland'); ?>/assets/vendor/swiper/swiper-bundle.min.js">
     </script>
     <script type="text/javascript" src="<?php echo base_url('Appland'); ?>/assets/vendor/php-email-form/validate.js">
     </script>

     <!-- Template Main JS File -->
     <script type="text/javascript" src="<?php echo base_url('Appland'); ?>/assets/js/main.js"></script>
</body>

</html>