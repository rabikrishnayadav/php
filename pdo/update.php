<?php 
include 'connection.php';

$id = 6; // write the name of the id which will find the row
$name = 'Ramesh Kumar'; // write the new value for update

$updatequery = "update studentstable set name = :name where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['name'=>$name, 'id'=>$id]);


$id = 1; // write the name of the id which will find the row
$name = 'Sita Kumari'; // write the new value for update
$updatequery = "update studentstable set name = :name where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['name'=>$name, 'id'=>$id]);

$id = 1; // write the name of the id which will find the row
$gender = 'Female'; // write the new value for update
$updatequery = "update studentstable set gender = :gender where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['gender'=>$gender, 'id'=>$id]);


$id = 2; // write the name of the id which will find the row
$name = 'hey Handsome'; // write the new value for update
$updatequery = "update studentstable set name = :name where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['name'=>$name, 'id'=>$id]);

$id = 2; // write the name of the id which will find the row
$gender = 'Other'; // write the new value for update
$updatequery = "update studentstable set gender = :gender where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['gender'=>$gender, 'id'=>$id]);

$id = 2; // write the name of the id which will find the row
$age = 22; // write the new value for update
$updatequery = "update studentstable set age = :age where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['age'=>$age, 'id'=>$id]);

$id = 3; // write the name of the id which will find the row
$name = 'Vidsik Company'; // write the new value for update
$updatequery = "update studentstable set name = :name where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['name'=>$name, 'id'=>$id]);

$id = 3; // write the name of the id which will find the row
$gender = 'Rather Not Say'; // write the new value for update
$updatequery = "update studentstable set gender = :gender where id = :id";
$stmt = $db_connection->prepare($updatequery);
$stmt->execute(['gender'=>$gender, 'id'=>$id]);


?>