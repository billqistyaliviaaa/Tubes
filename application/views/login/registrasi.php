<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Registrasi</button>
					</div>
				</div>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('full_name'); ?>
								<input type="text" name="full_name" id="full_name" class="input-text">
								<span class="label">Nama Lengkap</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('username'); ?>
								<input type="text" name="username" id="username" class="input-text">
								<span class="label">Username</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('your_email'); ?>
								<input type="text" name="your_email" id="your_email" class="input-text">
								<span class="label">E-Mail</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('handphone'); ?>
								<input type="text" name="handphone" id="handphone" class="input-text">
								<span class="label">Nomor Telepon</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<?php echo form_error('ttl'); ?>
								<!-- <span class="label">Tanggal Lahir</span> -->
								<!-- <input type="date" name="ttl" id="ttl" class="input-text" required> -->
								<input placeholder="Tanggal Lahir" name="ttl" class="input-text" type="text" onfocus="(this.type='date')">
								<!-- <span class="border"></span> -->
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
								<?php echo form_error('comfirm_password'); ?>
								<input type="password" name="comfirm_password" id="comfirm_password" class="input-text">
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<!-- <div class="form-row">
							<label class="form-row-inner">
								<span class="labels">Pas Foto</span>
							</label>
							<input type="file" name="foto" class="input-file">		
							<span class="border"></span>
						</div> -->
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
						<p><center>Sudah punya akun? <a href="<?= base_url()?>loginn/login"class="klik">Klik Disini </a>untuk masuk ke akun</center></p>
					</div>
				</form>
			</div>
		</div>
	</label>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
