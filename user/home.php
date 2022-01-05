<?php
session_start();
if (!isset($_SESSION['username'])) {
	echo 'you are logged out';
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>home page</title>
		<?php
		include 'link.php';
		include 'connection.php';
		?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Hello <?php echo $_SESSION['username']; ?>.</h1>
			<div class="text-right">
				<a href="logout.php" class="btn btn-warning">Logout</a>
			</div>
		</div>
	</body>
</html>