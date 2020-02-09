<section id="home-section" class="hero">
			<div class="home-slider owl-carousel">
				<div class="slider-item" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/home_1.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-md-12 ftco-animate text-center">
								<h1 class="mb-2">Maju Bersama Ekopz </h1>
								<h2 class="subheading mb-4">Majukan koperasi menjadi digitalisasi</h2>
								<p><a href="#" class="btn btn-primary">View Details</a></p>
							</div>

						</div>
					</div>
				</div>

				<div class="slider-item" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/home_2.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-sm-12 ftco-animate text-center">
								<h1 class="mb-2">Belanja Di ekopz store lebih murah</h1>
								<h2 class="subheading mb-4">Belanja Di ekopz store lebih murah</h2>
								<p><a href="#" class="btn btn-primary">View Details</a></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">About Us</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row no-gutters ftco-services">
					<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner.png" width="50"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Bekerja sama dengan koperasi berbadan hukum</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/transfer.png" width="50"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Easy and safety Transaction</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon-award"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Find your own Koperasi</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services mb-md-0 mb-4">
							<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
								<span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/smart-cart.png" width="50"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Good Quality product in ekopzStore</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Join Koperasi</span>
						<h2 class="mb-4">Daftar Koperasi</h2>
						<p>Koperasi yang telah bekerja sama dengan startup ekopz</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php foreach ($koperasi as $ekopz) { ?>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img style="height: 200px; width: 250px;" class="img-fluid" src="<?php echo base_url(); ?>assets/admin/upload_profile/<?php echo $ekopz->foto; ?>" alt="Colorlib Template">
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#"><?php echo $ekopz->nama; ?></a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="price-sale"><?php echo $ekopz->alamat; ?></span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-home"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<a href="<?php echo base_url(); ?>Koperasi" style="margin-left: 44%;">Lihat Lebih Lengkap</a>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Join Koperasi</span>
					<h2 class="mb-4">Koperasi Terdekat</h2>
					<p>Mari Membangun Indonesia yang lebih baik lagi</p>
				</div>
			</div>
		</div>
		<div id="map"></div>

		<!-- <section class="ftco-section ftco-category ftco-no-pt" style="margin-top: 100px;" >
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Ekopz Store</h2>
										<p>jadikan belanjamu lebih aman dan nyaman</p>
										<p><a href="#" class="btn btn-primary">Belanja sekarang</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/cloth.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Pakaian</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/kosmetik.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Kosmetik</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/sembako.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Sembako</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/pulsa.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Listrik/pulsa</a></h2>
							</div>
						</div>
					</div>

					<a href="#" style="margin-left: 44%; margin-top: 30px;">Lihat Lebih Lengkap</a>
				</div>
			</div>
		</section> -->

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Ekopz store</span>
						<h2 class="mb-4">Our Products</h2>
						<p>Bangga Membeli product Indonesia</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php foreach ($product as $barang) { ?>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="<?php echo base_url(); ?>Store/product_single/<?php echo $barang->id_barang; ?>" class="img-prod"><img style="width:300px; height:230px;" class="img-fluid" src="<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $barang->foto; ?>" alt="Colorlib Template">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#"><?php echo $barang->nama_barang; ?></a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="price">Rp.<?php echo number_format($barang->harga_jual,0,',','.'); ?></span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="<?php echo base_url(); ?>Store/product_single/<?php echo $barang->id_barang; ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<a href="<?php echo base_url(); ?>Store" style="margin-left: 44%;">Lihat Lebih Lengkap</a>
		</section>

		<section class="ftco-section testimony-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<span class="subheading">Testimony</span>
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">

					</div>
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel">
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<p class="name">Garreth Smith</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/person_2.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<p class="name">Garreth Smith</p>
										<span class="position">Interface Designer</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/person_3.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<p class="name">Garreth Smith</p>
										<span class="position">UI Designer</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5" style="background-image: url(<?php echo base_url(); ?>assets/landingpage/images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<p class="name">Garreth Smith</p>
										<span class="position">Web Developer</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<p class="name">Garreth Smith</p>
										<span class="position">System Analyst</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<hr>

		<section class="ftco-section ftco-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
					</div>
					<div class="col-sm ftco-animate">
						<a href="#" class="partner"><img src="<?php echo base_url(); ?>assets/landingpage/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
					</div>
				</div>
			</div>

		</section>



		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
			<div class="container py-4">
				<div class="row d-flex justify-content-center py-5">
					<div class="col-md-6">
						<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
						<span>Get e-mail updates about our latest shops and special offers</span>
					</div>
					<div class="col-md-6 d-flex align-items-center">
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
