@extends('layouts.main')

@section('title')
HM Fitness | Make It Happen | Gym and Fitness Club
@endsection

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1>HM Fitness</h1>
    <h2>Number One Fitness Center in the Country.</h2>
    <a href="#about" class="btn-get-started scrollto">Join Us</a>
</div>
</section><!-- End Hero -->
@endsection

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
        <img src="{{ URL::asset('img/about.jpg') }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
        <h3>Fitness is not a hobby, its a lifestyle!</h3>
        <p class="font-italic">
        It has been proven scientifically that taking out time for a workout or sport helps you to:
        </p>
        <ul>
          <li><i class="icofont-check-circled"></i>Help you control your weight. 
          Along with diet, exercise plays an important role in controlling your weight and preventing obesity. 
          To maintain your weight, the calories you eat and drink must equal the energy you burn. 
          To lose weight, you must use more calories than you eat and drink.</li>
          <li><i class="icofont-check-circled"></i>Help keep your thinking, learning, and judgment skills sharp as you age.</li>
          <li><i class="icofont-check-circled"></i>Increase your chances of living longer.</li>
        </ul>
        <p>
        Exercise offers incredible benefits that can improve nearly every aspect of your health from the inside out.
        Regular physical activity can increase the production of hormones that make you feel happier and help you sleep better.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up">
        <div class="box">
          <span>01</span>
          <h4>Follow us on Facebook</h4>
          <p>Follow us on Instagram and Facebook for daily updates and promotions.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
        <div class="box">
          <span>02</span>
          <h4>Register on our Website</h4>
          <p>Register now on our website and you'll get 50% off for the first month!</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <span>03</span>
          <h4>Free Visit For a Day</h4>
          <p>Spend a day at HM Fitness as a visitor without having to pay!</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Why Us Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <span>Facilities</span>
      <h2>Facilities</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Imported Equipment</a></h4>
          <p>State of the art equipment imported all the way from USA.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="">Environmental hygiene</a></h4>
          <p>All the equipment sanitized after every hour to maintain environmental hygiene</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4><a href="">Separate Gym For Ladies</a></h4>
          <p>We have a separate section for ladies and Female Coaches.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4><a href="">Nutrition Specialists</a></h4>
          <p>Nutrition specialists to provide you with proper diet plans as per your needs</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-slideshow"></i></div>
          <h4><a href="">Juice Corner</a></h4>
          <p>On site juice corner to provide you all the nutrition you need for your workout!</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-arch"></i></div>
          <h4><a href="">Complete Fitness Assessment</a></h4>
          <p>Your fat/muscle percentage, BMI and body weight monitored regularly</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->


@endsection
