<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>@yield('title', 'Template')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login-form.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
	
	@include('partials.nav')

	

	
	@if(isset($slider)) 
			@include('partials.slider')
	@endif

	
	<div class="container">
	
		@yield('content')
	
		</div>

	@include('partials.footer')

	

	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	<script src="{{ asset('js/inicio.js') }}"></script>
</body>
</html>
