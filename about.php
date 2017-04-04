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
<title>About Us</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet"
	href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
<body>

	<!-- Navbar -->
	<div class="w3-top" style="z-index: 999">
		<ul class="w3-navbar w3-white w3-card-2 w3-left-align">
			<li class="w3-hide-medium w3-hide-large w3-opennav w3-right"><a
				class="w3-padding-large" href="javascript:void(0)"
				onclick="myFunction()" title="Toggle Navigation Menu"><i
					class="fa fa-bars"></i></a></li>
			<li><a href="index.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">[borrow]</a></li>
			<li class="w3-hide-small"><a href="products.php" class=" w3-padding-large">for rent</a></li>
			<li class="w3-hide-small"><a href="about.php" class=" w3-padding-large">about</a></li>
			<li class="w3-hide-small"><a href="sign_up.html" class=" w3-padding-large">sign up</a></li>
			<?php
				if (isset ( $_SESSION ['login_user'] )) {
					echo  "<li class=\"w3-hide-small\" style=\"float:right;\"><a href=\"profile.php\" class=\" w3-padding-large\">".$_SESSION ["firstname"]."</a></li>";
				}
			?>
			<li class="w3-hide-small" style="float:right"><?php
			if (! isset ( $_SESSION ['login_user'] )) {
				echo "<a href=\"sign_in.php\" class=\"w3-padding-large\">sign in</a>";
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
			<li><a class="w3-padding-large" href="aboutus.html">About</a></li>
		</ul>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<!-- Main -->
		<article id="main">
			<header>
				<img src="images/logo.png" alt=""
					style="float: center; max-width: 20%;">
				<h2>About Us</h2>
				<p></p>
				<p></p>
			</header>
			<section class="wrapper style5">
				<div class="inner">
					<div style="width: 100%;">
						<div style="float: left; max-width: 65%;">
							<h2 style="color: #ff4730">Our Story</h2>
							<p>[borrow] was created to connect people wanting to share
								their items, equipment or skills with those in their area
								looking to rent these goods.</p>
							<p>In every household, countless items sit stagnantly in
								storage, waiting for you to find a use for them. Our platform
								allows you to list these items on a local board for people in
								your community to see. People can then request to rent your
								items for a flat daily fee. The customers rate your items, while
								you rate the customers. [borrow] is the first peer-to-peer
								rental platform allowing anyone to rent any of their posessions.
							</p>

							<p></p>
							<h5>We hope to reduce the amount of time equipment sits idle
								by sharing it amongst the community; benefiting the community
								while allowing renters to make money.</h5>
							<p></p>

							<p>
								<img src="images/canoe.jpg"
									style="max-width: 100%; height: auto; width: auto/9;" alt="">
							</p>

							<p></p>
							<h5>[borrow] reduces the pressure for individuals to
								purchase material items for limited-time use.</h5>
							<p></p>

							<p>Furthermore, we allow people to market their skills as
								freelance professionals. Oftentimes individuals require the
								assistance of someone with a specific skillset for only a short
								period of time (i.e. a DJ for a party, a photographer for a
								wedding). Borrow can also facilitate connections for these
								occasions.</p>
						</div>
						<div style="float: center; text-align: center;">
							<h3>
								Meet the<br />Founders
							</h3>

							<!-- issue when code is collapsed with formatting -->

							<ul style="list-style-type: none; float: center;">
								<li><img src="images/colvin.png"
									style="max-width: 100%; height: auto; width: auto/9;" alt="">
								</li>
								<li><h3>Colvin</h3></li>
								<li><img src="images/molly.png"
									style="max-width: 100%; height: auto; width: auto/9;" alt=""></li>
								<li><h3>Molly</h3></li>
								<li><img src="images/johnathan.png"
									style="max-width: 100%; height: auto; width: auto/9;" alt=""></li>
								<li><h3>Jonathan</h3></li>
							</ul>
						</div>
					</div>
					<div style="clear: both"></div>
				</div>
			</section>
		</article>
		<section id="two" class="wrapper alt style2"
			style="background-color: #567066">
			<section class="spotlight">
				<div class="image">
					<img src="images/bike.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Sharing is easy</h2>
					<p>Post items in less than 60 seconds and start earning money
						off of your unused goods.</p>
					<ul style="text-align: left;">
						<li>Snap some pictures of your item</li>
						<li>Mark our calendar for when you won't be using it</li>
						<li>Set a per-day rent price</li>
					</ul>
					<p></p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/guitar.jpg" alt="" />
				</div>
				<div class="content">
					<h2>[borrow]ing is fun</h2>
					<p>[Borrow] items and equiptment that help you to pursue your
						dreams, for less.</p>
					<ul style="text-align: left;">
						<li>Browse items and select the dates you would like to rent
						</li>
						<li>Pay the listed price-per-day or bargain with the lender
							until an agreement is reached</li>
						<li>Pickup item at a system-designeted location in your area</li>
						<p></p>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/cafe.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Your safety, our priority</h2>
					<ul style="text-align: left;">
						<li>Areas of exchange are mandated by [borrow] to be public,
							likely-populous areas</li>
						<li>If an item is not as pictured or described when you
							arrive at the exchange, you will not be charged and [borrow] will
							freeze the account-in-question, pending review</li>
						<li>Borrowers accepting items at pickup will be held liable,
							via our photo re-exchange process, for any damages incurred
							during their rental</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/open.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Our Part</h2>
					<p>
						As facilitator of transactions, we take a miniscule portion of the
						profits (so we can keep [borrow] running). <br />
						<br /> Our fees are very simple and straightforward. For all
						[borrow] periods earning under $15 total, we take a flat
						commission of $2.95. You keep the rest. For [borrow] periods
						earning $15 or more, you keep 80% of your sale and our commission
						is 20%.
					</p>
				</div>
			</section>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<a href="signup.html" class="button special">Sign Up!</a> <br />
			<br />
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
</body>
</html>
