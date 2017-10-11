<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Innodite</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/navBar.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/panel.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
        @yield('estilos')
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	@include('menu.menu')

	@yield('content')
       
	<!-- Scripts -->
        
        
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        @yield('scripts')
        @include('footer.footer')

</body>
</html>
