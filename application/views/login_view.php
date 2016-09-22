<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
	</head>
	<body>
	  	<div class="container">
	    	<div id="login-form">
			    <h3>Login</h3>
			    <fieldset>
			    	<div align="center"><img src="<?= base_url('assets/logo.jpg'); ?>"/></div>
			    	<form action="<?= site_url('login'); ?>" method="post">
				    	<?php
				    		if($this->session->flashdata('login_error')){
								foreach ($this->session->flashdata('login_error') as $error) {
									echo "<div class='label_danger'><small>".$error."</small></div>";
								}
							}
						?>
				        <input name="username" type="text" placeholder="Username" autocomplete="off">
				        <input name="password" type="password" placeholder="Password" autocomplete="off">
				        <?php
				        $csrf = array(
						        'name' => $this->security->get_csrf_token_name(),
						        'hash' => $this->security->get_csrf_hash()
						);
						?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				        <input type="submit" value="Login">
			         	<footer class="clearfix">
			          	<p><span class="info">?</span><a href="#">Forgot Password</a></p>
			        </footer>
			      	</form>
			    </fieldset>

	  		</div>

		</div>
	</body>
</html>