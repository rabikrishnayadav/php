<?php
// We have to write each and every file in first line this syntax for start the session.
session_start();
// for read the session
if (isset($_SESSION['username'])) { // this if condition for there is username set or not befor the read
	echo "My name is " .$_SESSION['username'] . "<br>";
	if (isset($_SESSION['age'])) { // this if condition for there is age set or not before the read
		echo "My age is " .$_SESSION['age'];
	}else{
		echo 'No age is set';
	}
}else{
	echo "No Username is set";
}
// this will show on brower just open this file on browser
?>