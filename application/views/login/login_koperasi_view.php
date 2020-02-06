<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>login/login_koperasi">
					<span class="login100-form-title p-b-59">
						Login Koperasi
					</span>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">email</span>
						<input class="input100" type="email" name="email" placeholder="E1A745">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
								<span class="txt1">
									Login sebagai
									<a href="<?php echo base_url(); ?>login" class="txt2 hov1">
									   Pengguna
									</a>
								</span>
					</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Login Pengurus
						</button>
					</div>
					<a href="<?php echo base_url(); ?>daftar/daftar_koperasi" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Daftar
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</form>
		</div>
