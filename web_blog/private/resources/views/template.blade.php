<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-widht", initial-scale=1>
	<tittle>Framework Programming</head></tittle>
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/bootstrap_4_3_1/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{
	asset('public/css/style.css') }}">
	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" scr="{{ asset('public/js/html5shiv.min.js') }}"></script>
	<script type="text/javascript" scr="{{ asset('public/js/respond.min.js') }}"></script>
	</head>
	<body>
		<div class="container">
		{{-- Include file navbar.blade.php --}}
		@include('navbarfilm')
		{{-- Memanggil halaman section main --}}
		@yield('main')
	</div>
	{{-- Memanggil halaman section footer --}}
	@yield('footer')

<script type="text/javascript" scr="{{ asset('public/bootstrap_4_3_1.min.js') }}"></script>
<script type="text/javascript" scr="{{ asset('public/js/jquery_3_3_1.min.js') }}"></script>
</body>
</html>