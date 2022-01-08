<?php 
include 'connection.php';

$id = 8; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);


$id = 9; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);


$id = 10; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);

$id = 11; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);

$id = 12; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);

$id = 16; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);
$id = 17; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);
$id = 18; // write the id name which will find full row and delete

$deletequery = "delete from studentstable where id = :id";
$stmt = $db_connection->prepare($deletequery);
$stmt->execute(['id'=>$id]);
?>