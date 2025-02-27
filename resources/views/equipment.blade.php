@extends('layouts.main')

@section('title')
Equipment - HM Fitness
@endsection

@section('content')

<div class="container-fluid mt-5">
    <div class="row mt-5">
        <div class="col-md-12">
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                    <span>Equipment</span>
                    <h2>Equipment</h2>
                    <p>HM Fitness has the best Equipment imported all the way from USA.</p>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ URL::asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ URL::asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ URL::asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ URL::asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ URL::asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ URL::asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ URL::asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ URL::asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ URL::asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ URL::asset('img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

        </div>
    </div>
</div>
@endsection