<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<?php include 'link.php' ?>
	<?php include 'connection.php' ?>
</head>
<body>
	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width:400px">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get start with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Gmail</a>
				<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>Login via Facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>
			<form action="" method="post">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					</div>
					<input type="text" name="username" class="form-control" placeholder="Full name" required>
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
					</div>
					<input type="text" name="email" class="form-control" placeholder="Email address" required>
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-phone"></i></span>
					</div>
					<input type="text" name="number" class="form-control" placeholder="Phone number" required>
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
					<input type="text" name="password" class="form-control" placeholder="Create password" required>
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
					<input type="text" name="con_password" class="form-control" placeholder="Repeat Password" required>
				</div>
				<div class="form-group input-group">
					<input type="submit" name="submit" class="form-control" value="Create Account" class="btn btn-success">
				</div>
				<div class="form-group input-group">
				<p class="text-center">Have an account?<a href="login.php">Log In</a></p>	
				</div>
			</form>
		</article>
	</div>

</body>
</html>