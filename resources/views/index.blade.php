<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BDE UCAC ICAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  <body class="goto-here" onload="name()">

    @include('header')

    @yield('content')
    @include('footer')
  </body>
</html>