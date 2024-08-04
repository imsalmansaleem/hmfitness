<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset( (request()->is('/')) ? 'css/style.css' : 'css/style2.css' ) }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +92 311 1999960
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/hmfitness9" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/hmfitness9/" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ URL('/') }}">HM FITNESS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ URL('/') }}">Home</a></li>
          <li class="{{ (request()->is('equipment')) ? 'active' : '' }}"><a href="{{ URL('/equipment') }}">Equipment</a></li>
          <li class="{{ (request()->is('pricing')) ? 'active' : '' }}"><a href="{{ URL('/pricing') }}">Pricing</a></li>
          <li class="{{ (request()->is('trainers')) ? 'active' : '' }}"><a href="{{ URL('/trainers') }}">Trainers</a></li>
          <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ URL('/contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('hero')

  <main id="main">
  @yield('content')
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>HM FITNESS</h3>
              <p>
                Jahanzeb Block Allama Iqbal Town, <br>
                Lahore, Punjab 54000 <br><br>
                <strong>Phone:</strong> +92 311 1999960<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/hmfitness9" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/hmfitness9" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Personal Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nutrition Specialists</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ladies Gym</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HM Fitness</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>