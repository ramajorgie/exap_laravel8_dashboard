<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/bootstrap-5.0.5-alpha.min.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/glightbox.min.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/selectr.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/date.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/animate.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{URL::asset('assets_view')}}/css/main.css" />
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

      <header id="home" class="header">
        <div class="header-wrapper">
          <div class="header-top theme-bg">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <div class="header-top-left text-center text-md-left">
                    <ul>
                      <li>
                        <a href="#"><i class="lni lni-phone"></i> +463281626556</a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-envelope"></i> <span class="__cf_email__" data-cfemail="e78f828b8b888a82838e84a7808a868e8bc984888a">[email&#160;protected]</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="header-top-right d-none d-md-block">
                    <ul>
                      <li>
                        <a href="#"><i class="lni lni-facebook-filled"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-twitter-filled"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-linkedin-original"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                      <img src="{{URL::asset('assets_view')}}/img/logo/full-noor.png" alt="Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                      <ul id="nav" class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="active" href=" ">Home</a>
                        </li>
                        <li class="nav-item">
                          <a href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                          <a href="service.html">Service</a>
                        </li>
                        <li class="nav-item">
                          <a href="team.html">Doctor</a>
                        </li>
                        <li class="nav-item">
                          <a href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a href="#contact">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-wrapper">
          <section class="slider-section">
            <div class="slider-active slick-style">
              <div class="single-slider img-bg" style="background-image: url('{{URL::asset('assets_view/img/slider/slider-1.jpg')}}'')">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                      <div class="slider-content">
                        <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Complete Healthcare Solution</h1>
                        <p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s">
                          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </p>
                        <a href="#about" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s" data-delay=".9s">Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slider img-bg" style="background-image: url('{{URL::asset('assets_view/img/slider/slider-2.jpg')}}'')">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                      <div class="slider-content">
                        <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Best Doctors and Equipments in Town</h1>
                        <p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s">
                          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </p>
                        <a href="#contact" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s" data-delay=".9s">Make Appoinment</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slider img-bg" style="background-image: url('{{URL::asset('assets_view/img/slider/slider-3.jpg')}}'')">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                      <div class="slider-content">
                        <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Your Health is Our Top Priority</h1>
                        <p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s">
                          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </p>
                        <a href="#services" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s" data-delay=".9s">Our Services</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>

      @yield('container')

      <footer class="footer pt-100 img-bg" style="background-image: url('{{URL::asset('assets_view/img/bg/footer-bg.jpg')}}')">
        <div class="container">
          <div class="footer-widget-wrapper">
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="footer-widget mb-30">
                  <a href="index-2.html" class="logo"><img src="{{URL::asset('assets_view')}}/img/logo/logo.svg" alt="" /></a>
                  <p>Lorem ipsum dolor serit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat diam voluptua.</p>
                  <div class="footer-social-links">
                    <ul>
                      <li>
                        <a href="#"><i class="lni lni-facebook-filled"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-twitter-filled"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-linkedin-original"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="lni lni-instagram-original"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="footer-widget mb-30">
                  <h4>Quick Link</h4>
                  <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Doctor</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-5">
                <div class="footer-widget mb-30">
                  <h4>Quick Link</h4>
                  <ul class="footer-links">
                    <li><a href="#">Cardiology</a></li>
                    <li><a href="#">Neurology</a></li>
                    <li><a href="#">Gastroenterology</a></li>
                    <li><a href="#">Routine Checkup</a></li>
                    <li><a href="#">Orthopedics</a></li>
                    <li><a href="#">Dental Surgery</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 col-md-7">
                <div class="footer-widget mb-30">
                  <h4>Medical Location</h4>
                  <div class="map-canvas">
                    <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-area">
            <p class="mb-0 text-center">Designed and Developed By <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
          </div>
        </div>
      </footer>

      <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
      </a>

    <script data-cfasync="false" src="{{URL::asset('assets_view')}}../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/contact-form.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/selectr.min.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/wow.min.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/date.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/tiny-slider.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/glightbox.min.js"></script>
    <script src="{{URL::asset('assets_view')}}/js/main.js"></script>
  </body>

  <!-- Mirrored from preview.uideck.com/items/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 11:24:34 GMT -->
</html>
