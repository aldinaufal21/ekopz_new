<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ekopz | <?php echo $nama; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/login/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/landingpage/css/style.css">
	<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>Home">ekopz</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?php echo base_url(); ?>Home" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ekopz Store</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="<?php echo base_url(); ?>Store">Shop</a>
							<a class="dropdown-item" href="wishlist.html">Wishlist</a>
							<a class="dropdown-item" href="product-single.html">Single Product</a>
							<a class="dropdown-item" href="cart.html">Cart</a>
							<a class="dropdown-item" href="checkout.html">Checkout</a>
						</div>
					</li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>About" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>Koperasi" class="nav-link">Join Koperasi</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>Contact" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>Login" class="nav-link">Login</a></li>
				</ul>
			</div>

		</div>
	</nav>

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url(); ?>assets/login/images/bg-01.jpg');"></div>
