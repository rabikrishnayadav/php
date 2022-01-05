<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'phpuser';
$connection = mysqli_connect($server, $user, $password, $database);

if ($connection) {
	echo 'Connected With Database';
}else{
	echo "Can't Connected With Database";
}
?>