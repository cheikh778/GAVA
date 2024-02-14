@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('storage/images/contactUs.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Contact Us</h1>
          @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4">
              <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-map-o"></span>
                        </div>
                      <p><span>Address:</span> Keur Massar, Rufisque, Dakar, Senegal</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-mobile-phone"></span>
                        </div>
                      <p><span>Phone:</span> <a href="tel://+221777926676">+221 77 792 66 76</a></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-envelope-o"></span>
                        </div>
                      <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-8 block-9 mb-md-5">
            {{--  --}}
            

            
          <form action="{{ route('contact.submit') }}" method="POST" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
     

      <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="map" class="bg-white" style="height: 500px; top:0%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d452.5711877529222!2d-17.30533460572203!3d14.764488829809993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2ssn!4v1707927908723!5m2!1sfr!2ssn" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    </div>
  </section>
    
@endsection