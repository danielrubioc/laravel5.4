<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administración</title>
	<link rel="stylesheet" type="text/css" href="{{  asset('pluggins/bootstrap/css/bootstrap.min.css')  }}">

</head>
<body>

		@include('admin.template.partials.nav')

		<section>
			
			@include('flash::message') 
			@yield('content')
		</section>

		@include('admin.template.partials.footer')




	<script type="text/javascript" src="{{ asset('pluggins/jquery/jquery-3.2.1.min.js') }}"></script>			
	<script type="text/javascript" src="{{ asset('pluggins/bootstrap/js/bootstrap.min.js') }}"></script>		
</body>
</html>