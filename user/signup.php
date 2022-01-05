<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up</title>
		<?php include 'link.php' ?>
		<?php include 'connection.php' ?>
	</head>
	<body>
		<?php
		if (isset($_POST['submit'])) {
			
			$name = mysqli_real_escape_string($connection,$_POST['username']);
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$mobile = mysqli_real_escape_string($connection,$_POST['number']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$con_password = mysqli_real_escape_string($connection,$_POST['con_password']);
			// for secure password from hackers
			$secure_password = password_hash($password, PASSWORD_BCRYPT);
			$secure_con_password = password_hash($con_password, PASSWORD_BCRYPT);
			// for email validation already exits or not.
			$emailquery = "select * from user_reg where email = '$email' ";
			$emailquery_db = mysqli_query($connection, $emailquery);
			$emailcount = mysqli_num_rows($emailquery_db);
			if ($emailcount >0) {
				echo 'email already exists';
			}else{
				if ($password === $con_password) { // for password matching validation
					
					$insertquery = "insert into user_reg(name,email,mobile,password,confirm_password) values('$name','$email','$mobile','$secure_password','$secure_con_password')";
			$insertquery_into_db = mysqli_query($connection, $insertquery);
			if ($insertquery_into_db) {
		?>
		<script type="text/javascript">
			alert('Registration Successful');
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert('Registration Not Successful');
		</script>
		<?php
		}
		}else {
			echo 'password are not matching';
		}
		}
		}
		?>
		<div class="card bg-light">
			<article class="card-body mx-auto" style="max-width:400px">
				<h4 class="card-title mt-3 text-center">Create Account</h4>
				<p class="text-center">Get start with your free account</p>
				<p>
					<a href="" class="btn btn-block btn-gmail bg-danger text-light"><i class="fa fa-google"></i>Login via Gmail</a>
					<a href="" class="btn btn-block btn-facebook bg-primary text-light"><i class="fa fa-facebook"></i>Login via Facebook</a>
				</p>
				<p class="divider-text">
					<span class="bg-light">OR</span>
				</p>
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
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
						<input type="email" name="email" class="form-control" placeholder="Email address" required>
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
						<input type="password" name="password" class="form-control" placeholder="Create password" required>
					</div>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
						</div>
						<input type="password" name="con_password" class="form-control" placeholder="Repeat Password" required>
					</div>
					<div class="form-group input-group">
						<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
					</div>
					<div class="form-group input-group">
						<p class="text-center">Have an account?<a href="login.php">Log In</a></p>
					</div>
				</form>
			</article>
		</div>
	</body>
</html>