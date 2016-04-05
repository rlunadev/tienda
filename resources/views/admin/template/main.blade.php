<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','Default')</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
	@include('admin.template.partials.nav')
	<!-- @include('admin.template.partials.cuerpo') -->
	<section>
		@yield('content')
	</section>
	<footer>
		@include('admin.template.partials.footer')
	</footer>
</body>
<script src="{{asset('bootstrap/js/jquery-2.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</html>