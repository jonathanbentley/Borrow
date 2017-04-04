<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
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
<meta charset="UTF-8">
<title>Sign In</title>
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
			<li><a class="w3-padding-large" href="aboutus.html">About</a></li>
		</ul>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<!-- Main -->
		<article id="main">
			<section class="wrapper style5">
				<div style="padding-left: 30ex; padding-right: 30ex;">
					<h2 style="float: center;">My Profile</h2>
					<div id="profile">
						<div class="top-row" style="padding-bottom: 5ex">
							<b id="welcome">Welcome <i><?php echo $_SESSION['firstname']; ?></i></b>
						</div>
						<div class="top-row" style="padding-bottom: 5ex">
							<b class="button special" id="logout"><a href="logout.php">Log Out</a></b>
						</div>

					</div>
				</div>
			</section>
		</article>

		<!-- Footer -->
		<footer id="footer">
			<a href="signup.html" class="button special">Sign Up!</a> <br /> <br />
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</footer>

	</div>

</body>
</html>