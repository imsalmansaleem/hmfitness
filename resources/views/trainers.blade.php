@extends('layouts.main')

@section('title')
Trainers - HM Fitness
@endsection

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h2>HM Fitness has the best local coaches to train you...</h2>
</div>
</section><!-- End Hero -->
@endsection

@section('content')
<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title">
      <span>Team</span>
      <h2>Team</h2>
      <p>Our team consists of the best and most talented coaches in the country</p>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
        <div class="member">
          <img src="{{ URL::asset('img/team/haroon.jpg') }}" alt="">
          <h4>Mr. Haroon Rashid</h4>
          <span>Senior Coach / Co-owner</span>
          <p>
            International Rowing Player / Coach
          </p>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
        <div class="member">
          <img src="{{ URL::asset('img/team/musabeha.jpg') }}" alt="">
          <h4>Mr. Musabeaha Saeed</h4>
          <span>Senior Coach / Co-owner</span>
          <p>
            --Senior Body Builder --Mr Pakistan 2020 Runner Up 
          </p>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
        <div class="member">
          <img src="{{ URL::asset('img/team/nafees.jpg') }}" alt="">
          <h4>Mr. Nafees Mushtaq</h4>
          <span>Coach</span>
          <p>--Rowing National Champion</p> 
          <p>--Expert in Cross Fit Training</p> 
          <p>--Certified Coach</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
        <div class="member">
          <img src="{{ URL::asset('img/team/faisal.jpg') }}" alt="">
          <h4>Mr. Faisal Maqsood</h4>
          <span>Coach</span>
          <p>--Senior Body Builder</p> 
          <p>--Mr Pakistan 2002 Participant</p> 
          <p>--Nutrition Specialist</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
        <div class="member">
          <img src="{{ URL::asset('img/team/team-3.jpg') }}" alt="">
          <h4>Mr. Aqeel</h4>
          <span>Coach</span>
          <p>--Expert in weight training</p> 
          <p>--Multiple Courses Holder</p> 
          <p>--Certified Coach</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->
@endsection