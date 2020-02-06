<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?php echo base_url(); ?>login/login_user" method="post">
					<span class="login100-form-title p-b-59">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="ekopz@admin.com">
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
									<a href="<?php echo base_url(); ?>login/koperasi" class="txt2 hov1">
										Pengurus Koperasi
									</a>
								</span>
					</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<a href="<?php echo base_url(); ?>daftar" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Daftar
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</form>
		</div>
