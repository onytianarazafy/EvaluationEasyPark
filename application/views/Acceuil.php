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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo site_url('Welcome/ToReserver')?>" method="post">
					<span class="login100-form-title">
						Welcome
					</span>
					<form action="<?php echo site_url('Welcome/ToReserver')?>" method="post">
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Deposer argent
							</button>
						</div>
					</form>
					</br>
					</br>
					<form action="<?php echo site_url('Welcome/ToLogin')?>" method="post">
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Sign in
							</button>
						</div>
					</form>
					</br>
					</br>
					<form action="<?php echo site_url('Welcome/ToSignUP')?>" method="post">
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</form>
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