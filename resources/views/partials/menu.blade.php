
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="height: 60px;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset("storage/images/logo3.png") }}" alt="" style="width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active  @if(Request::is('home')) active @endif"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item  @if(Request::is('home')) active @endif"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item  @if(Request::is('services','conciergeServices', 'groundService')) active @endif"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                <li class="nav-item  @if(Request::is('weatherReport')) active @endif"><a href="{{ route('weatherReport') }}" class="nav-link">Weather Report</a></li>
                <li class="nav-item  @if(Request::is('cars')) active @endif"><a href="{{ route('car') }}" class="nav-link">Cars</a></li>
                <li class="nav-item  @if(Request::is('contact')) active @endif"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                
                <!-- Dropdown pour le changement de langue -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">English</a>
                        <a class="dropdown-item" href="{{ route('lang.switch', 'fr') }}">Français</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
