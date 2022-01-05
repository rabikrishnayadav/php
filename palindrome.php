<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Palindrome Checker</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body class="bg-success text-center">
		<div class="container bg-light" style="max-width:600px; max-height:400px; margin-top:100px;">
			<h3 class="card-title mt-3 text-center font-weight-bolder" style="padding-top:40px;">Palindrome Checker</h3>
			<h6>
			<?php
			if (isset($_POST['submit'])) {
				$data = $_POST['text'];
				$reverse = strrev($data);
				if ($data === $reverse) {
					echo "Yes, ". $data . " is a Palindrome";
				}else{
					echo "No, ". $data . " is not a Palindrome";
				}
			}
			?>
			</h6>
			<form id="contact" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
				<fieldset>
					<textarea placeholder="Type your word..." name="text" rows="5" cols="50" required></textarea>
				</fieldset>
				<fieldset>
					<button type="submit" name="submit" id="contact-submit" class="btn btn-primary btn-block">Check Now</button>
				</fieldset>
				<p class="blockquote-footer" class="text-center">Designed by<a href="https://rabikrishnayadav.com.np">Rabi Kr Yadav</a></p>
			</div>
		</form>
	</div>
</body>
</html>