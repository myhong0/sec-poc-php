
<!DOCTYPE html>
<?php
header ( 'Content-Type: text/html; charset=utf-8' );
/*
include_once "./include/oci_conn.php";
$conn = oracle_open ();

# insert
$query = "INSERT INTO HR.ACCESS_LOG (ACCESS_DT, ACCESS_URL, ACCESS_IP, BROSWER_TYPE)
	VALUES ( SYSDATE, '" + $_SERVER['HTTP_REFERER'] + "', '" + $_SERVER['REMOTE_ADDR'] + "', '" + $_SERVER['HTTP_USER_AGENT'] + "')";
$stid = oci_parse ( $conn, $query );
oci_execute ( $stid );
oci_free_statement ( $stid );

oci_close ( $conn );
*/
?>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home Page - Demo</title>

<script src="/js/jquery/dist/jquery.js"></script>
<script src="/js/bootstrap/dist/js/bootstrap.js"></script>
<script src="/js/site.js?v=EWaMeWsJBYWmL2g_KkgXZQ5nPe-a3Ichp0LEgzXczKo"></script>

<link rel="stylesheet" href="/js/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" href="/css/site.css" />

</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/images/Samsung_logo.png"
					alt="Samsung" /></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">

					<li><a href="/">Home</a></li>
					<li><a href="/product_spec.php">Product</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container body-content">

		<div id="myCarousel" class="carousel slide" data-ride="carousel"
			data-interval="6000">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/images/banner1.jpg" alt="Galaxy Gear VR"
						class="img-responsive" />
					<div class="carousel-caption" role="option">
						<p>
							Galaxy Gear VR <a class="btn btn-default"
								href="http://www.samsung.com/global/galaxy/gear-vr/"> WebSite </a>
						</p>
					</div>
				</div>
				<div class="item">
					<img src="/images/banner2.jpg" alt="Galaxy Gear3"
						class="img-responsive" />
					<div class="carousel-caption" role="option">
						<p>
							Galaxy Gear3 <a class="btn btn-default"
								href="http://www.samsung.com/global/galaxy/gear-s3/"> WebSite </a>
						</p>
					</div>
				</div>
				<div class="item">
					<img src="/images/banner3.jpg" alt="Galaxy Gear 360" class="img-responsive" />
					<div class="carousel-caption" role="option">
						<p>
							Galaxy Gear 360 <a class="btn btn-default"
								href="http://www.samsung.com/global/galaxy/gear-360/"> WebSite </a>
						</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button"
				data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
				aria-hidden="true"></span> <span class="sr-only">Previous</span>
			</a> <a class="right carousel-control" href="#myCarousel"
				role="button" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="row">
			<div class="col-md-3">
				<h2>Product</h2>
				<ul>
					<li><a href="/product_spec.php">Product Specification</a></li>
					<li><a href="/product_down.php">Product Image Download</a></li>
				</ul>
			</div>
		</div>

		<hr />
		<footer>
			<p>&copy; 2016 - Demo</p>
		</footer>
	</div>

</body>
</html>
