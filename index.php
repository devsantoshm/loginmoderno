<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1 shrink-to-fit=no">
	<title>Signup & Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<?php include "parts/nav.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 content">
				<h1>Its always free</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga modi neque, harum, autem illum, commodi voluptatibus sequi debitis enim obcaecati animi amet libero ipsa tempora atque rem qui iste aliquam?</p>
			</div>
			<div class="col-md-4 content">
				<div class="signup-cover">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-9">
									<h3 class="form-heading">Signup</h3>
									<p>Account creating is 100% free so please create the account</p>
								</div>
								<div class="col-md-3 text-right">
									<i class="fa fa-pencil-square-o fa-3x"></i>
								</div>
							</div>
						</div>
						<div class="card-body">
							<form id="signup_submit">
								<div class="form-group show-progress">
									
								</div>
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="name">
									<div class="name-error error"></div>
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="email">
									<div class="email-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="password">
									<div class="password-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" id="confirm" class="form-control" placeholder="Confirm Password">
									<div class="confirm-error error"></div>
								</div>
								<div class="form-group">
									<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>
								</div>
								<div class="form-group">
									<a href="#" id="login">Already have an account?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="login-cover">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-9">
									<h3 class="form-heading">Login</h3>
									<p>Enter Email and password</p>
								</div>
								<div class="col-md-3 text-right">
									<i class="fa fa-lock fa-3x"></i>
								</div>
							</div>
						</div>
						<div class="card-body">
							<form id="login-submit-form">
								<div class="form-group">
									<input type="email" name="login_email" id="login-email" class="form-control" placeholder="email">
									<div class="login-email-error error"></div>
								</div>
								<div class="form-group">
									<input type="password" name="login_password" id="login-password" class="form-control" placeholder="password">
									<div class="login-password-error error"></div>
								</div>
								<div class="form-group">
									<button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Login</button>
								</div>
								<div class="form-group">
									<a href="#" id="signup">Create New Account?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>