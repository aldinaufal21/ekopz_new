<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ekopz </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/animate.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/aos.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landingpage/css/style.css">
</head>
<body class="goto-here">
		<!-- <div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
		</div> -->
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
						<?php
						if (!isset($_SESSION['id_anggota'])) { ?>
								<li class="nav-item"><a href="<?php echo base_url(); ?>Login" class="nav-link">Login</a></li>
					  <?php	}
						else { ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-user"></span> <?php echo $_SESSION['nama']; ?></a>
								<div class="dropdown-menu" aria-labelledby="dropdown04">
									<a class="dropdown-item" href="<?php echo base_url(); ?>profile/Mykoperasi">profile</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>profile/Mykoperasi">Koperasi ku</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>Login/logout_user">logout</a>
								</div>
							</li>
						<?php } ?>

					</ul>
				</div>

			</div>
		</nav>
		<!-- END nav -->
