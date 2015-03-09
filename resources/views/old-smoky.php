<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Smoky Mountain Tour</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<link rel="stylesheet" href="<?php echo asset('/css/themes/smoky/master.css'); ?>">

<!--scripts for adobe fonts-->
<script type="text/javascript" src="//use.typekit.net/xfa2uul.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo asset('/scripts/routeTracer.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('/scripts/itinerary.js'); ?>"></script>
</head>
<body>
<div id="container">
<div id="head_wrapper">
	<header id="title">
	<h1>Jordan & Meg's Smoky Mountain Tour</h1>
	</header>

	<nav>
	<ul>
		<a href='lexington.php'><li>Lexington</li></a>
		<a href='knoxville.php'><li>Knoxville</li></a>
		<a href='asheville.php'><li>Asheville</li></a>
		<a href='charleston.php'><li>Charleston</li></a>
		<a href='charlotte.php'><li>Charlotte</li></a>
		<a href='nashville.php'><li>Nashville</li></a>
	</ul>
	</nav>
</div><!--END HEAD WRAPPER-->

<div id="content_wrapper">
	<section id="route">
	<img id="routepic" src="<?php echo asset('/img/route.png'); ?>" alt="" usemap="#routemap">
	<img id="chi_star" class="star" src="<?php echo asset('/img/star.png'); ?>">
	<a href="lexington.php"><img id="lex_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>
	<a href="knoxville.php"><img id="knox_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>
	<a href="asheville.php"><img id="ashe_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>
	<a href="charlotte.php"><img id="chrl_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>
	<a href="charleston.php"><img id="chrs_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>
	<a href="nashville.php"><img id="nash_star" class="star" src="<?php echo asset('/img/star.png'); ?>"></a>

	<img id="routepicsmall" src="<?php echo asset('/img/routesmall.png'); ?>" alt="">

	<map name="routemap">
		<area shape="rect" coords="318,280,335,300" href='mountains.php' alt="Smoky Mountains">
		<area id="symbol" shape="circle" coords="513,116,10" href='admin/login.php' alt=''>
	</map>
	</section>

	<img id="hrulepic" src="<?php echo asset('/img/hrule.png'); ?>">

	<div id="frame_left" class="frame">
	<section>
	<header id="itinerary">
	<h1>Itinerary</h1>
	</header>

	<p><time datetime="2012-12-25T23:59:59">December 25</time><br>
	Depart from Chicago, IL<br>
	Lexington, KY</p>

	<p><time datetime="2012-12-26T23:59:59">December 26</time><br>
	Bourbon Distillery<br>
	Knoxville, TN</p>

	<p><time datetime="2012-12-27T23:59:59">December 27</time><br>
	Smoky Mountain National Park<br>
	Cherokee Indian Reservation</p>

	<p><time datetime="2012-12-28T23:59:59">December 28</time><br>
	Asheville, NC</p>

	<p><time datetime="2012-12-29T23:59:59">December 29</time><br>
	Wedding in Charleston, SC</p>

	<p><time datetime="2012-12-30T23:59:59">December 30</time><br>
	Charlotte, NC</p>

	<p><time datetime="2012-12-31T23:59:59">December 31</time><br>
	NYE in Nashville, TN</p>

	</section>
	</div><!--END FRAME LEFT-->

	<div id="frame_right" class="frame">
	<section>
	<header id="blog">
	<h1><a id="bloglink" href="blog.php">Blog<span id="more"> (Click here for more)</span></a></h1>
	</header>
	<!--Jordan gets eaten by bears, Meg is kinda sad for a little while.<br><br>
	Meg gets eaten by bears.-->

<?php
	require('admin/info.php');
	@$link = mysqli_connect(DB_HOST,DB_GET,DB_GETPASS,DB_NAME) or die('Could not connect ('.mysqli_connect_errno().'): '.mysqli_connect_error());
	$query = "SELECT username,entry,entry_date FROM blog,users WHERE users.userid = blog.userid ORDER BY entry_date DESC LIMIT 3";
	@$result = mysqli_query($link,$query) or die('MySQL Query Error ('.mysqli_errno($link).'): '.mysqli_error($link));
	$numrows = mysqli_num_rows($result);
	for ($i=0;$i<$numrows;$i++){
		$row = mysqli_fetch_assoc($result);
		echo "<p>";
		$newdate = date_create($row['entry_date']);
		echo date_format($newdate,'l, F j');
		echo "<br>";
		echo date_format($newdate,'g:ia');
		echo "<br>";
		echo $row['entry'];
		echo "<br>";
		echo "~ ".$row['username'];
		echo "</p>";
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>

	</section>
	</div><!--END FRAME RIGHT-->
</div><!--END CONTENT WRAPPER-->

<a href="admin/login.php"><img id="crest" src="<?php echo asset('/img/crest.png'); ?>" alt=''></a>

</div><!--END CONTAINER-->
</body>
</html>
