<?php

$server = 'localhost';
$database = 'crudphp';
$user = 'root';
$password = '';

$connection = mysqli_connect($server, $user, $password, $database);

if ($connection) {
	echo "connection Successful";
}else{
	echo 'connection faild';
}