<script src='modul/mod_autentikasi/js_autentikasi.js'></script>
<form action="<?php echo base_url('modul/mod_autentikasi/aksi_autentikasi.php?act=login'); ?>" method="POST" name="form_login" role="form">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" id="username" placeholder ="Username" />
		<p class="form_error"></p>
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
		<p class="form_error"></p>
	</div>

	<input type="submit" name="submit_login" value="Login" class="btn btn-primary" />
</form>