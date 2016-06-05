<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bem vindo ao NPX</title>

	<!-- Bootstrap -->
	<link href="{{ asset("bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<style>
	body{
		background: url("{{ asset("background-img/bg_login.jpg") }}") no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	div {
		opacity: 0.93;
	}
</style>

<body>

	@yield("content")

	@yield("script")

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="{{ asset("bower_components/jquery/dist/jquery.min.js") }}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset("bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>

	@include('footer_login')

</body>