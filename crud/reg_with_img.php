<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<?php include 'links.php' ?>
</head>
<body class="bg-info">
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left" align="center">
			<h3 class="text-primary" style="margin-top:100px;">Welcome</h3>
			<p class="font-weight-bold">Please fill all the details carefully. This form can change your life.</p>
			<a href="display_with_img.php" class="btn">Check Form</a><br>
		</div>
		<div class="col-md-9 register-right">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane show active" id="home" role="tabpane1" aria-labelledby="home-tab">
					<h3 class="register-heading">Apply for Web 
					Dveloper post</h3>
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="row register-form">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="username" placeholder="enter your name" class="form-control" value="" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="enter your email" class="form-control" value="" required>
								</div>
								<div class="form-group">
									<input type="file" name="photo" class="form-control" value="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="degree" placeholder="enter your qualification" class="form-control" value="" required>
								</div>
								<div class="form-group">
									<input type="text" name="lang" placeholder="enter your language" class="form-control" value="" required>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btnRegister" value="Register" required>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>