<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
		
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen"> Login
					</div>
				</div>
				<form class="form-detail" action="<?php echo base_url('loginn/loginAction'); ?>" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('full_name'); ?>
								<input type="text" name="full_name" id="full_name" class="input-text">
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('password'); ?>
								<input type="password" name="password" id="password" class="input-text">
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('role'); ?>
								<div class="form-group">
									<select name="role" class="form-control" id="exampleFormControlSelect1">
										<option value="perusahaan">perusahaan</option>
										<option value="pelamar">pelamar</option>
									</select>
								</div>
							</label>
						</div>
						<?php echo $this->session->flashdata('errors'); ?>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Sign In">
						</div>
						<p><center>Belum punya akun? <a href="<?= base_url()?>loginn/register" class="klik">Klik Disini </a>untuk membuat akun</center></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>