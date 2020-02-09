<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/landingpage/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Keranjang</span></p>
            <h1 class="mb-0 bread">Keranjang belanja</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Nama Produk</th>
						        <th>Harga</th>
						        <th>Jumlah</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                  <?php foreach ($keranjang as $index => $cart) { ?>
                    <?php $barang = $this->store_model->getBarang($cart['id'])->row(); ?>
                    <tr class="text-center">
  						        <td class="product-remove"><a href="<?php echo base_url(); ?>Store/hapus_cart?id_barang=<?php echo $index ?>"><span class="ion-ios-close"></span></a></td>

  						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $barang->foto; ?>);"></div></td>

  						        <td class="product-name">
  						        	<h3><?php echo $barang->nama_barang; ?></h3>
  						        	<p><?php echo $barang->kategori; ?></p>
  						        </td>

  						        <td class="price">Rp. <?php echo number_format($barang->harga_jual,0,',','.'); ?></td>

  						        <td class="quantity">
  						        	<div class="input-group mb-3">
                          <span class="input-group-btn mr-2">
                            <a id="tambahCart<?php echo $cart['id']; ?>" href="<?php echo base_url(); ?>Store/add_to_cart?id_barang=<?php echo $cart['id']; ?>"></a>
                            <a id="kurangCart<?php echo $cart['id']; ?>" href="<?php echo base_url(); ?>Store/kurang_cart?id_barang=<?php echo $cart['id']; ?>&row_id=<?php echo $index ?>"></a>
          	                	<button type="button" class="quantity-left-minus btn" onclick="document.getElementById('kurangCart<?php echo $cart['id']; ?>').click()" data-type="minus" data-field="">
          	                   <i class="ion-ios-remove"></i>
          	                	</button>
          	            		</span>
  					             	<input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $cart['qty'] ?>" min="1" max="100">
                          <span class="input-group-btn ml-2">
          	                	<button type="button" class="quantity-right-plus btn" onclick="document.getElementById('tambahCart<?php echo $cart['id']; ?>').click()" data-type="plus" data-field="">
          	                     <i class="ion-ios-add"></i>
          	                 </button>
          	             	</span>
                        </div>
  					          </td>

  						        <td class="total">Rp.<?php echo number_format($cart['subtotal'],0,',','.'); ?></td>
  						      </tr>
                    <!-- END TR-->
                  <?php } ?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<!-- <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div> -->
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total Keranjang</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp. <?php echo number_format($this->cart->total(),0,',','.'); ?></span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp. <?php echo number_format($this->cart->total(),0,',','.'); ?></span>
    					</p>
    				</div>
    				<p><a href="<?php echo base_url(); ?>Store/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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
