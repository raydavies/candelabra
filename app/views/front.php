<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="<?php echo asset('/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('/css/bootstrap-responsive.min.css'); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo asset('/css/fonts.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('/css/front.css'); ?>">

<script src="<?php echo asset('/js/vendor/bootstrap.js'); ?>"></script>

<!--scripts for adobe fonts-->
<script src="//use.typekit.net/xfa2uul.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js" async></script>
<script src="<?php echo asset('/js/analyticstracking.js'); ?>" async></script>
</head>

<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="head_wrapper">
		<div id="header">
			<header id="title">
				<h1></h1>
			</header>
			<nav>
				<ul>
					<?php
					//loop through cities in trip for nav
					/*
					include_once(BASEPATH.'/models/locationmodel.php');
					$location = new Location;
					$cities = $location->get_site_cities();
					foreach ($cities as $city){
					?>
					<a href='/<?php echo $page->site_url; ?>/<?php echo strtolower($city['city']."-".$city['state']);?>/'><li><?php echo $city['city']; ?></li></a>
					<?php
					}
					*/
					?>
				</ul>
			</nav>
		</div><!--END HEAD WRAPPER-->
	</div>

	<div id="content_wrapper">

		<div id="frame_left" class="frame">
			<div id="todo">
				<section>
					<header id="itinerary">
						<h1>Itinerary</h1>
					</header>
					<?php
					//loop through itinerary
					/*
					include_once(BASEPATH.'/models/itinerarymodel.php');
					$itinerary = new Itinerary;
					$plans = $itinerary->get_itinerary();
					foreach ($plans as $plan)
					{
						echo "<p>";
						echo "<time datetime='".$plan['datetime']."'>".$plan['date']."</time>";
						echo "<br>";
						if (isset($plan['city'])) {
							echo $plan['city'];
						}
						if (isset($plan['state'])){
							echo ", ".$plan['state'];
							echo "<br>";
						}
						echo $plan['details'];
						echo "</p>";
					}
					*/
					?>
				</section>
			</div>
		</div><!--END FRAME LEFT-->

		<div id="frame_right" class="frame">
			<div id="chalkboard">
				<section>
					<header id="blog">
						<h1><a id="bloglink" href="/blog">Blog<span id="more"> (Scroll for more)</span></a></h1>
					</header>

					<?php
					//loop through 5 recent blog entries
					/*
					include_once(BASEPATH.'/models/blogmodel.php');
					$blog = new Blog;
					$entries = $blog->get_entries(5);
					foreach ($entries as $entry)
					{
						echo "<p>";
						echo $entry['date'];
						echo "<br>";
						echo $entry['time'];
						echo "<br>";
						echo $entry['entry'];
						echo "<br>";
						echo "~ ".$entry['username'];
						echo "</p>";
					}
					*/
					?>
				</section>
			</div>
		</div><!--END FRAME RIGHT-->

		<div id="polaroid_wrapper">
			<section id="polaroid"></section>
			<a href="/admin"><span id="greeting">Wish You Were Here!</span></a>
		</div>
	</div><!--END CONTENT WRAPPER-->
</body>
</html>
