<?php 
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$age = $_POST['age'];
	$degree = $_POST['degree'];
	setcookie('username', $username, time()+86400);
	setcookie('age', $age, time()+86400);
	setcookie('degree', $degree, time()+86400);
	// time()+86400 it mean after 86400seconds(24hour) cookies will delete from the browser.
	header('location:display.php'); // this function will redirect to the display.php
}
?>