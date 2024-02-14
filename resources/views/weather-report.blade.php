@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('storage/images/weather1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Weather Report</h1>
        </div>
      </div>
    </div>
  </section> 

  <section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" id="weather-background">
                <!-- Cette div affichera des couleurs et des icones selon le temps -->
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">Weather Report</span>
                    <div id="weather-info">
                        <!-- Cette div affichera les données météorologiques -->
                    </div>
                    <div id="search-form">
                        <input type="text" id="city-input" placeholder="Enter city name">
                        <button id="search-button">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
@endsection

<script>
    
    function displayWeather(city) {
        var apiKey = '16d3747ad2055c65953128d8982b8b02';
        var apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=' + apiKey;

        
        fetch(apiUrl)
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                
                var weatherInfo = document.getElementById('weather-info');
                weatherInfo.innerHTML = '<h2 class="mb-4" style="">Weather in ' + city + '</h2>';
                weatherInfo.innerHTML += '<p>Description: ' + data.weather[0].description + '</p>';
                weatherInfo.innerHTML += '<p>Temperature: ' + (data.main.temp - 273.15).toFixed(1) + '°C</p>';
                weatherInfo.innerHTML += '<p>Humidity: ' + data.main.humidity + '%</p>';
                weatherInfo.innerHTML += '<p>Wind Speed: ' + data.wind.speed + ' m/s</p>';

                var weatherBackground = document.getElementById('weather-background');
                var weatherIcon = data.weather[0].icon;
                var backgroundClass = 'default'; 
                var iconUrl = 'http://openweathermap.org/img/wn/' + weatherIcon + '.png';

                if (weatherIcon.includes('01')) {
                    backgroundClass = 'clear-sky';
                } else if (weatherIcon.includes('02')) {
                    backgroundClass = 'few-clouds';
                } else if (weatherIcon.includes('03') || weatherIcon.includes('04')) {
                    backgroundClass = 'scattered-clouds';
                } else if (weatherIcon.includes('09') || weatherIcon.includes('10')) {
                    backgroundClass = 'rain';
                } else if (weatherIcon.includes('11')) {
                    backgroundClass = 'thunderstorm';
                } else if (weatherIcon.includes('13')) {
                    backgroundClass = 'snow';
                } else if (weatherIcon.includes('50')) {
                    backgroundClass = 'mist';
                }

                weatherBackground.classList = 'col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center ' + backgroundClass;
                weatherBackground.style.backgroundImage = 'url(' + iconUrl + ')';
                
            })
            // .catch(function(error) {
            //     document.write('Error fetching weather data:', error);
            // });
    }

    
    displayWeather('Dakar');

    
    document.getElementById('search-button').addEventListener('click', function() {
        var city = document.getElementById('city-input').value;
        displayWeather(city);
    });
</script>
