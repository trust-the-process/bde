<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../winkel/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('../winkel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('../winkel/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('../winkel/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('../winkel/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('../winkel/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('../winkel/css/style.css')}}">
</head>
<body onload="name()">
    <div id="app">
  
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/home_winkel">bde IUI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/home_winkel" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
          <li class="nav-item"><a href="/events" class="nav-link">Events</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activity</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            @php
                $i = 42;
                $category_shop = DB::select('select DISTINCT club from activity');
                $count = count($category_shop);
            @endphp
            @if (count($category_shop) >= 1)
            @foreach ($category_shop as $item)
                <a class="dropdown-item" href="/specific_activity/{{ $item->club }}">Club {{ $item->club }}</a>
            @endforeach
            @endif
            <a class="dropdown-item" href="/idea">Boite à idée</a>
            <a class="dropdown-item" href="/gallery">Gallery</a>
          </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="/shop">Shop</a>
            <a class="dropdown-item" href="/cart">Cart</a>
            <a class="dropdown-item" href="/checkout">Checkout</a>
          </div>
          </li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contacts</a></li>
          <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
          <li>
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-" data-close="true" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('logout') }}
                        <i class="fa fa-power"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                    </a>
                </li>
            @endguest
    </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{asset('../winkel/js/jquery.min.js')}}"></script>
<script src="{{asset('../winkel/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('../winkel/js/popper.min.js')}}"></script>
<script src="{{asset('../winkel/js/bootstrap.min.js')}}"></script>
<script src="{{asset('../winkel/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('../winkel/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('../winkel/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('../winkel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('../winkel/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('../winkel/js/aos.js')}}"></script>
<script src="{{asset('../winkel/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('../winkel/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('../winkel/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('../winkel/js/google-map.js')}}"></script>
<script src="{{asset('../winkel/js/main.js')}}"></script>
<script src="{{asset('../js/sweetalert.min.js')}}"></script>
</html>
