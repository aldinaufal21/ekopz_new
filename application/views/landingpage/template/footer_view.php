<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row">
					<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Ekopz</h2>
							<p>eKopz adalah sistem yang dapat mempermudah baik pengurus maupun anggota koperasi dalam berorganisasi yang merupakan solusi bagi permasalahan koperasi diindonesia.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Menu</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Ekopz Strore</a></li>
								<li><a href="#" class="py-2 d-block">About Us</a></li>
								<li><a href="#" class="py-2 d-block">Join Koperasi</a></li>
								<li><a href="#" class="py-2 d-block">Profile</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon icon-map-marker"></span><span class="text">StartupHub CoWorking Lab Gd. Manterawu Lt. 3 R. 304 & R. 305 Faculty of Communications and business Kec. Dayeuhkolot, Bandung, West Java 40257</span></li><br>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">+628814068380</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">admin@ekopz.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		<script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru

			var locations = [
				<?php foreach ($maps as $m) { ?>
					{lat: <?php echo $m->lat; ?>, lng: <?php echo $m->lng; ?>},
				<?php } ?>
					// {lat: -6.716737, lng: 107.517748},
					// {lat: -6.816737, lng: 107.817748}
			];

		  // The map, centered at Uluru
		  var mappp = new google.maps.Map(
		      document.getElementById('map'), {zoom: 10, center: locations[0]});
		  // The marker, positioned at Uluru

			locations.map(function(item) {
			 		marker = new google.maps.Marker({position: item, map: mappp});
			});
		}
    </script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5zpP9tToTtZo-Nvk_0KxcLTZHRi62utQ&callback=initMap"
  type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/aos.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/jquery.animateNumber.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/scrollax.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landingpage/js/main.js"></script>

		<script>
	 $(document).ready(function(){

		 var quantitiy=0;
				$('.quantity-right-plus').click(function(e){

						 // Stop acting like a button
						 e.preventDefault();
						 // Get the field name
						 var quantity = parseInt($('#quantity').val());

						 // If is not undefined

								 $('#quantity').val(quantity + 1);


								 // Increment

				 });

					$('.quantity-left-minus').click(function(e){
						 // Stop acting like a button
						 e.preventDefault();
						 // Get the field name
						 var quantity = parseInt($('#quantity').val());

						 // If is not undefined

								 // Increment
								 if(quantity>0){
								 $('#quantity').val(quantity - 1);
								 }
				 });

		 });
	 </script>

	</body>
	</html>
