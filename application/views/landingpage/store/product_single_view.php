<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/landingpage/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $product->foto; ?>" class="image-popup"><img src="<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $product->foto; ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $product->nama_barang; ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>Rp. <?php echo number_format($product->harga_jual,0,',','.'); ?></span></p>
    				<p> <?php echo $product->deskripsi; ?>
						</p>
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio align-self-md-center mr-4">
                <a href=""><img width="130" src="<?php echo base_url(); ?>assets/admin/upload_profile/<?php echo $product->foto_koperasi; ?>" alt="Image placeholder" class="img-fluid mb-4"></a>
              </div>
              <div class="desc align-self-md-center">
                <h3><a href="#"><?php echo $product->nama_koperasi; ?></a></h3>
                <p class="text-left mr-4">
  								<a href="#" class="mr-2">4.0</a>
  								<a href="#"><span class="ion-ios-star-outline"></span></a>
  								<a href="#"><span class="ion-ios-star-outline"></span></a>
  								<a href="#"><span class="ion-ios-star-outline"></span></a>
  								<a href="#"><span class="ion-ios-star-outline"></span></a>
  							</p>
                <p>Alamat : <?php echo $product->alamat; ?> <br>
                   Tahun Berdiri &nbsp: <?php echo $product->tahun_berdiri; ?></p>
              </div>
            </div>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
              <form action="<?php echo base_url(); ?>Store/cart/<?php echo $product->id_barang; ?>" method="post">
  							<div class="input-group col-md-6 d-flex mb-3">
  	             	<input type="text" id="quantity" name="jumlah" class="form-control input-number" value="1" min="1" max="100">
  	          	</div>
  	          	<div class="w-100"></div>
  	          	<div class="col-md-12">
  	          		<p style="color: #000;"><?php echo $product->stok; ?> kg Tersedia</p>
  	          	</div>
            	</div>
                <button type="submit" class="btn btn-primary" style="color: black; width: 300px;">Masukkan Ke Keranjang</button>
            </form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Barang Yang sama.</p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
          <?php foreach ($related_products as $rel) { ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
      				<div class="product">
      					<a href="#" class="img-prod"><img style="height: 200px; width: 220px;" class="img-fluid" src="<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $rel->foto; ?>" alt="Colorlib Template">
      						<div class="overlay"></div>
      					</a>
      					<div class="text py-3 pb-4 px-3 text-center">
      						<h3><a href="#"><?php echo $rel->nama_barang; ?></a></h3>
      						<div class="d-flex">
      							<div class="pricing">
  		    						<p class="price"><span class="price">Rp.<?php echo number_format($rel->harga_jual,0,',','.');; ?></span></p>
  		    					</div>
  	    					</div>
  	    					<div class="bottom-area d-flex px-3">
  	    						<div class="m-auto d-flex">
  	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
