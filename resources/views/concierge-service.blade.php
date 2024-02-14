<link rel="stylesheet" href="{{ asset('storage/css/ctService.css') }}">
@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('storage/images/CT1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Concierge Services & Ticket Sales</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
          <h2 class="mb-3">Concierge Services & Ticket Sales</h2>
        </div>
      </div>
              
      </section>

       <!-- Dining Start -->
       <div class="dining-area dining-padding-top">
        <!-- Single Left img -->
        <div class="single-dining-area left-img1 ">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption">
                            <!-- <span>Our resturent</span> -->
                            <h3>Hotel Booking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            <a href="{{ route('contact') }}" class="btn border-btn1">Learn More <i class="ti-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- single Right img -->
        <div class="single-dining-area right-img1">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption text-right">
                            <!-- <span>Our Pool</span> -->
                            <h3>Residence Rental</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            <a href="{{ route('contact') }}" class="btn border-btn2">Learn More  <i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Left img -->
        <div class="single-dining-area left-img2">
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-lg-8 col-md-8">
                      <div class="dining-caption">
                          <!-- <span>Our resturent</span> -->
                          <h3>Catering</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                          <a href="{{ route('contact') }}" class="btn border-btn1">Learn More <i class="ti-angle-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- single Right img -->
      <div class="single-dining-area right-img2">
          <div class="container">
              <div class="row justify-content-start">
                  <div class="col-lg-8 col-md-8">
                      <div class="dining-caption text-right">
                          <!-- <span>Our Pool</span> -->
                          <h3>Ticket Sales</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                          <a href="{{ route('contact') }}" class="btn border-btn2">Learn More  <i class="ti-angle-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Dining End -->
    
@endsection