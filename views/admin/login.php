<?php

use ionmvc\packages\asset\classes\asset;

?>
<div class="login-form">
	<form action="index.html">
		<div class="top">
			<img src="<?php echo asset::image('admin/kode-icon.png'); ?>" alt="icon" class="icon">
			<h1>Kode</h1>
			<h4>Bootstrap Admin Template</h4>
		</div>
		<div class="form-area">
			<div class="group">
				<input type="text" class="form-control" placeholder="Username">
				<i class="fa fa-user"></i>
			</div>
			<div class="group">
				<input type="password" class="form-control" placeholder="Password">
				<i class="fa fa-key"></i>
			</div>
			<div class="checkbox checkbox-primary">
				<input id="checkbox101" type="checkbox" checked>
				<label for="checkbox101"> Remember Me</label>
			</div>
			<button type="submit" class="btn btn-default btn-block">LOGIN</button>
		</div>
	</form>
	<div class="footer-links row">
		<div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
		<div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
	</div>
</div>