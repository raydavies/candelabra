<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	@section('head-title')
		<title></title>
	@show

	@section('head-meta')
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	@show

	@section('head-assets')
		<link rel="stylesheet" href="<?php echo asset('/css/vendor/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('/css/vendor/normalize.css'); ?>">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo asset('/css/fonts.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('/css/front.css'); ?>">

		<!--scripts for adobe fonts-->
		<script src="//use.typekit.net/xfa2uul.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js" async></script>
		<script src="<?php echo asset('/js/vendor/bootstrap.min.js'); ?>" async></script>
		<script src="<?php echo asset('/js/analyticstracking.js'); ?>" async></script>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	@show
</head>

<body>

<body>
	<div class="head_wrapper">
		<div class="header">
			<header class="title">
				@section('title')
					<h1></h1>
				@show
			</header>
			<nav>
				@yield('navigation')
			</nav>
		</div>
	</div><!--END HEAD WRAPPER-->

	<div class="content_wrapper">
		<main class="clearfix">
			@yield('content')
		</main>
	</div><!--END CONTENT WRAPPER-->

	<div class="footer_wrapper">
		<footer></footer>
	</div><!--END FOOTER WRAPPER-->
</body>
</html>