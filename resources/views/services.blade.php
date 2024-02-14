<link rel="stylesheet" href="{{ asset('storage/css/service.css') }}">
@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('storage/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Our Services</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
              
      </section>

       <!-- Dining Start -->
       <div class="dining-area dining-padding-top">
        <!-- Single Left img -->
        <div class="single-dining-area left-imgGS">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption">
                            <!-- <span>Our resturent</span> -->
                            <h3>Ground Services</h3>
                              <p>Experience seamless travel with our Ground Services! From swift airport transfers to personalized assistance, we ensure your journey begins and ends with comfort and convenience. Let our professional team handle your luggage and transportation needs while you relax and focus on your trip ahead. With us, your travel experience will be nothing short of exceptional.</p>

                            <a href="{{ route('groundService') }}" class="btn border-btn1">Learn More <i class="ti-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- single Right img -->
        <div class="single-dining-area right-img">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption text-right">
                            <!-- <span>Our Pool</span> -->
                            <h3>Concierge & Tickets Sales</h3>
                              <p>Elevate your travel experience with our Concierge & Ticket Sales service! Whether you need assistance with booking tickets for your dream vacation or arranging personalized concierge services during your stay, we've got you covered. Our dedicated team ensures every detail of your trip is taken care of with precision and care. Say goodbye to travel hassles and hello to a seamless journey filled with unforgettable moments. Trust us to make your travel dreams a reality!</p>

                            <a href="{{ route('conciergeServices') }}" class="btn border-btn2">Learn More  <i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Left img -->
        <div class="single-dining-area left-imgCR">
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-lg-8 col-md-8">
                      <div class="dining-caption">
                          <!-- <span>Our resturent</span> -->
                          <h3>Car Rental</h3>
                            <p>Unlock the freedom to explore with our Car Rental service! Whether you're embarking on a road trip adventure or simply need a reliable ride for your daily commute, we offer a diverse fleet of vehicles to suit your needs. From sleek sedans to spacious SUVs, our rentals are meticulously maintained and ready to hit the road. Experience convenience and flexibility like never before with our hassle-free booking process and top-notch customer service. Start your journey with us and make every mile count!</p>

                          <a href="{{ route('car') }}" class="btn border-btn1">Learn More <i class="ti-angle-right"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Dining End -->
      
    
@endsection