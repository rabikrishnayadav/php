<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Log In</title>
		<?php include 'link.php' ?>
		<?php include 'connection.php' ?>
	</head>
	<body>
		<?php
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			//for check and search email
			$email_search = "select * from user_reg where email = '$email' ";
			$emailquery = mysqli_query($connection, $email_search);
			$email_count = mysqli_num_rows($emailquery); // for finding the email id
			if ($email_count) {
				$email_fetch = mysqli_fetch_assoc($emailquery);
				$db_password = $email_fetch['password'];  // it will give the password corresponding to their email from the database
				$_SESSION['username'] = $email_fetch['name']; // it will store the user name for show on different place inside the page
				$veryfied_password = password_verify($password, $db_password); // it will verify password which one user given at login time
				if ($veryfied_password) {
					echo "login successful";
					header('location:home.php');
				}else{
					echo "Incorrect Password";
				}
			}else{
				echo "Invalid Email";
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
						<input type="email" name="email" class="form-control" placeholder="Email ID" required>
					</div>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Enter password" required>
					</div>
					<div class="form-group input-group">
						<button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
					</div>
					<div class="form-group input-group">
						<p class="text-center">Not Have an account?<a href="signup.php">SignUp Here</a></p>
					</div>
				</form>
			</article>
		</div>
	</body>
</html>