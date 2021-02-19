<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BDE UCAC ICAM.</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('../admin/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('../admin/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('../admin/css/fonts.min.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('../admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('../admin/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('../admin/css/demo.css')}}">
</head>
<body onload="name()">
	<div class="wrapper">

        @include('admin.topbar')
<!-- Sidebar -->
        @include('admin.navbar')
<!-- End Sidebar -->
		<div class="main-panel">
			@yield('content')
			@include('admin.footer')
		</div>
		
        <!-- Custom template | don't include it in your project! -->
        @include('admin.rightbar')
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	@include('admin.script')


<script>
    function add_family() {
        document.getElementById("form_add_family").style.display="block";
    }
    function add_type() {
        document.getElementById("form_add_type").style.display="block";
    }
    function add_categorie() {
        document.getElementById("form_add_categorie").style.display="block";
    }
</script>

@php
	$product = DB::select('select id from product ');$product = count($product);
	$user = DB::select('select id from users ');$user = count($user);
@endphp
<script>
    Circles.create({
        id:'circles-1',
        radius:45,
        value:60,
        maxValue:100,
        width:7,
        text: {{ $product }},
        colors:['#f1f1f1', '#FF9E27'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-2',
        radius:45,
        value:70,
        maxValue:100,
        width:7,
        text: {{ $product }},
        colors:['#f1f1f1', '#2BB930'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-3',
        radius:45,
        value:40,
        maxValue:100,
        width:7,
        text: {{ $user }},
        colors:['#f1f1f1', '#F25961'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })


    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>
</body>
</html>