<?php
	include ('login.php'); // Includes Login Script
?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>[borrow]</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet"
	href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="icon" type="image/png" sizes="192x192"
	href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"
	href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"
	href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"
	href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="landing">

	<!-- Navbar -->
	<div class="w3-top" style="z-index: 999">
		<ul class="w3-navbar w3-white w3-card-2 w3-left-align">
			<li class="w3-hide-medium w3-hide-large w3-opennav w3-right"><a
				class="w3-padding-large" href="javascript:void(0)"
				onclick="myFunction()" title="Toggle Navigation Menu"><i
					class="fa fa-bars"></i></a></li>
			<li><a href="index.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">[borrow]</a></li>
			<li class="w3-hide-small"><a href="products.html" class=" w3-padding-large">for rent</a></li>
			<li class="w3-hide-small"><a href="aboutus.html" class=" w3-padding-large">about</a></li>
			<li class="w3-hide-small"><a href="signup.html" class=" w3-padding-large">sign up</a></li>
			<?php
				if (isset ( $_SESSION ['login_user'] )) {
					echo  "<li class=\"w3-hide-small\" style=\"float:right;\"><a href=\"profile.php\" class=\" w3-padding-large\">".$_SESSION ["firstname"]."</a></li>";
				}
			?>
			<li class="w3-hide-small" style="float:right"><?php
			if (! isset ( $_SESSION ['login_user'] )) {
				echo "<a href=\"sign_in.html\" class=\"w3-padding-large\">sign in</a>";
			} else {
				echo "<a href=\"logout.php\" class=\"w3-padding-large\">sign out</a>";
			}
			?></li>
		</ul>
	</div>

	<!-- Navbar on small screens -->
	<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top"
		style="margin-top: 46px">
		<ul class="w3-navbar w3-left-align w3-black">
			<li><a class="w3-padding-large" href="#aboutDiv">About</a></li>
		</ul>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<!-- Main -->
		<article id="main">
			<section class="wrapper style5">
				<div class="inner">
					<div style="width: 100%;">
						<div style="float: center; max-width: 100%;">
							<h2 style="color: #ff4730">For Rent</h2>
							<br></br>
						</div>
						<div
							style="float: center; text-align: center; box-shadow: 0px 0px 20px #888888; width: 40%; height: 40%">
							<ul style="list-style-type: none; float: center;">
								<li><img src="images/lawnmower.jpg"
									style="max-width: 30%; height: auto; width: auto/9;" alt=""></li>
								<li><h3>Lawnmower</h3></li>
								<li><h3>$10/hour</h3></li>
								<li><div id="paypal-button"></div></li>
							</ul>
						</div>
					</div>
					<div style="clear: both"></div>
				</div>
			</section>
		</article>
		<!-- Footer -->
		<footer id="footer">
			<a href="signup.html" class="button special">Sign Up!</a> <br /> <br />
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span
						class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span
						class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span
						class="label">Email</span></a></li>
			</ul>
		</footer>

	</div>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.scrollex.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.scrolly.min.js" type="text/javascript"></script>
	<script src="assets/js/skel.min.js" type="text/javascript"></script>
	<script src="assets/js/util.js" type="text/javascript"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script src="https://www.paypalobjects.com/api/checkout.js"
		type="text/javascript"></script>

	<script src="https://www.paypalobjects.com/api/checkout.js"
		type="text/javascript"></script>

	<script type="text/javascript">
		paypal.Button
				.render(
						{
							env : 'sandbox', // Optional: specify 'sandbox' environment

							client : {
								sandbox : 'AccB_WRzqrRdouf9xLUzqRUapU-ojcrs9Zsr_43mtaPzIZCwYqWndyP715Du1XHN6QJI0sN8saGUdnlz',
								production : 'xxxxxxxxx'
							},

							payment : function() {

								var env = this.props.env;
								var client = this.props.client;

								return paypal.rest.payment.create(env, client,
										{
											transactions : [ {
												amount : {
													total : '10.00',
													currency : 'USD'
												}
											} ]
										});
							},

							commit : true, // Optional: show a 'Pay Now' button in the checkout flow

							onAuthorize : function(data, actions) {

								// Optional: display a confirmation page here

								return actions.payment.execute().then(
										function() {
											// Show a success page to the buyer
										});
							}

						}, '#paypal-button');
	</script>
</body>
</html>