<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo site_url('assets/login/images/icons/favicon.ico')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/animate/animate.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/css-hamburgers/hamburgers.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/animsition/css/animsition.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/select2/select2.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/vendor/daterangepicker/daterangepicker.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/login/css/main.css')?>">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo site_url('Welcome/Admin')?>" method="post">
					<span class="login100-form-title">
						Deposer argent
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="number" name="idUsers" placeholder="User">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="number" name="portefeuille" placeholder="Montant">
						<span class="focus-input100"></span>
					</div>
					<div class="text-right p-t-13 p-b-23">
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Valider
						</button>
					</div>
					<div class="flex-col-c p-t-170 p-b-40">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo site_url('assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/animsition/js/animsition.min.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/select2/select2.min.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?php echo site_url('assets/login/vendor/countdowntime/countdowntime.js')?>"></script>
	<script src="<?php echo site_url('assets/login/js/main.js')?>"></script>
</body>
</html>