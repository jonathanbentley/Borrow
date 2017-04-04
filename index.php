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
			<li><a class="w3-padding-large" href="#aboutDiv">About</a></li>
		</ul>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>
					<img src="images/logo.png" alt="" style="zoom: 30%; padding: 5ex;" />
				</h2>
				<p style="padding: 2ex;">
					If you've got it, loan it<br /> If you don't, [borrow]<br />
				</p>
				<ul class="actions">
					<li><a href="signup.html" class="button special">Sign Up!</a></li>
				</ul>
			</div>
			<a href="#one" class="more scrolly">Learn More</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h2>
						What is [borrow]?<br />
					</h2>
					<br />
					<p>
						[Borrow] is a rental system that allows you to profit off of items
						you would otherwise not be using.<br /> <br /> Let people near you
						[borrow] your tools, books, sporting goods, camping supplies, etc.<br />
						<br /> Or [borrow] something for yourself and save money on items
						you don't need long-term.
					</p>
				</header>
			</div>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image">
					<img src="images/book.jpeg" alt="" />
				</div>
				<div class="content">
					<h2>How can I lend?</h2>
					<p>
						Simply post the item you'd like to lend and the dates that you
						will not be using your item. <br /> <br /> [Borrow]ers can then
						rent your items when you're not using them! <br /> <br /> You set
						the price, you earn the profit.
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/tent.jpeg" alt="" />
				</div>
				<div class="content">
					<h2>How can I [borrow]?</h2>
					<p>
						[Borrow]ers can browse a wide selection of rentable items. <br />
						<br />Select the dates you would like to [borrow] the item. <br />
						<br /> Once your offer is accepted, the item is yours to [borrow]
						for the selected period.
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/surf.jpeg" alt="" />
				</div>
				<div class="content">
					<h2>How am I protected?</h2>
					<p>
						Letting others [borrow] your stuff can seem like risky busines...
						we get that! <br /> <br /> That's why we have a damage
						accountability program that keeps [borrow]ers liable for damages
						incurred to your goods.
					</p>
				</div>
			</section>
		</section>


		<!-- CTA -->
		<section id="cta" class="wrapper style4">
			<div class="inner">
				<header>
					<img src="images/logo.png" alt="" style="zoom: 20%" />
					<p>
						If you've got it, loan it. <br /> If you don't, [borrow].<br />
					</p>
				</header>
				<ul class="actions vertical">
					<li><a href="signup.html" class="button fit special">Sign Up!</a></li>
					<li><a href="aboutus.html" class="button fit">Learn More</a></li>
				</ul>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
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
