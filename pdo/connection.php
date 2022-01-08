<?php

try{
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php_pdo';

// creating a PDO and connection with the server and database
$db_connection = new PDO("mysql:host=$server; dbname=$database",$user,$password);  // do not use any extra spaces other wise it will not connect

}catch(PDOException $e){
	echo 'Error: ' .$e->getMessage();
}

?>