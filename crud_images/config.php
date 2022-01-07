<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'crudphp';

$connection = mysqli_connect($server, $user, $password, $database);

if ($connection) {
	echo 'Connected With Database';
}else{
	echo "connection faild";
}