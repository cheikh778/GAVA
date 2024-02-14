@extends('layouts.app')

 @section('content')

  {{-- style="background-image: url('{{asset("storage/images/jet1-new.jpg")  }}');"--}}

  {{-- <div class="hero-wrap ftco-degree-bg" data-stellar-background-ratio="0.5" style="background-image: url('{{asset("storage/images/jet1-new.jpg")  }}');">
    <div class="overlay">
    </div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center " >
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5" data-stellar-background-ratio="0.5">
            <h1 id="animated-text" class="mb-4">Efficient &amp; Seamless Airfield Services for Jets and Civilian Aircraft</h1>
            <p style="font-size: 18px;">A meandering stream known as GAVA flows adjacent to their location, providing essential support for the airport's operational needs. This idyllic setting embodies a country focused on efficient airport services, ensuring smooth and seamless operations.</p>
          </div>
        </div>
      </div>
    </div>
  </div>  --}}

  
  
  
  

  
  



  





  <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
          <h2 class="mb-2">Featured Services</h2>
        </div>
      </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="carousel-car owl-carousel">
                      <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset("storage/images/hootel.jpg") }}');">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('conciergeServices') }}">Hotel Booking</a></h2>
                                  <div class="d-flex mb-3">


                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/residence.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('conciergeServices') }}">Residence Rental</a></h2>
                                  <div class="d-flex mb-3">


                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/catering2.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('conciergeServices') }}">Catering</a></h2>
                                  <div class="d-flex mb-3">


                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/ticket3.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('conciergeServices') }}">Ticket Sales</a></h2>
                                  <div class="d-flex mb-3">


                                  </div>

                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/GH-new.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Ground Handling</a></h2>
                                  <div class="d-flex mb-3">


                                  </div>

                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/SS.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Security Services</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/LANDING_2400-new.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Landing Permit</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/GH-new.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Ground Transport</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/fuel.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Fuel Arrangement</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/car.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('car') }}">Car Rental</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/meet_greet-1-new.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Meet and Greet</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

            <div class="item">
                          <div class="car-wrap rounded ftco-animate">
                              <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("storage/images/11085.jpg") }});">
                              </div>
                              <div class="text">
                                  <h2 class="mb-0"><a href="{{ route('groundService') }}">Weather Report</a></h2>
                                  <div class="d-flex mb-3">
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-section ftco-about" id="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset("storage/images/logo2.jpeg") }});">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Welcome to GAVA</h2>

                    <p>Welcome to GAVA, your premier destination for comprehensive ground support services and seamless travel experiences. Nestled in a picturesque landscape, our commitment is to enhance your journey with unparalleled assistance and convenience.</p>
                    <p>Embark on a voyage where every detail is meticulously handled. Whether it's ground assistance, car rentals, flight reservations, hotel bookings, or accommodation arrangements, GAVA is your trusted partner for a hassle-free travel experience.</p>
                    <p><a href="{{ route('services') }}" class="btn btn-primary py-3 px-4">Explore Our Services</a></p>
                </div>
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
              <div class="row">
        <div class="col-md-4">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-airplane"><img src="{{ asset("storage/images/direct-flight.png") }}" style="width: 100px;" alt="" srcset=""></span></div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Ground Services</h3>
                    <p>Efficient ground support tailored to your needs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-hotel"><img src="{{ asset("storage/images/hotel.png") }}" style="width: 100px;" alt="" srcset=""></span></div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Concierge & Ticket Sales</h3>
                    <p>Concierge excellence and seamless ticket sales at your service.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class=""><img src="{{ asset("storage/images/lease.png") }}" style="width: 100px;" alt="" srcset=""></span></div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Car Rental</h3>
                    <p>Reliable car rental solutions tailored to you.</p>
                </div>
            </div>
        </div>
    </div>


              </div>
          </div>
      </section>

      <section class="ftco-section ftco-intro" style="background-image: url('{{ asset("storage/images/AG.jpg") }}');">
          <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-md-6 heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Allow us to take care of everything for you in Senegal. Don't hesitate – entrust your journey to us and experience reliability without delay.</h2>
          <a href="{{ route('services') }}" class="btn btn-primary btn-lg">Book Now</a>
        </div>
              </div>
          </div>
      </section>

      <script>

        let text = "Efficient & Seamless Airfield Services for Jets and Civilian Aircraft";
        let charIndex = 0;


        function animateText() {
            const animatedText = document.getElementById('animated-text');

            animatedText.textContent = text.slice(0, charIndex);

            charIndex++;

            if (charIndex > text.length) {
                charIndex = 0;
            }

            const randomSpeed = 100 + Math.random() * 100;
            setTimeout(animateText, randomSpeed);
        }


        animateText();


        $(document).ready(function(){
            $('.hero-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                fade: true,
                cssEase: 'linear'
            });
        });


    </script>
    <!-- Inclure la bibliothèque Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });
      </script>


@endsection
