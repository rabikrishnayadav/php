<?php 
include 'connection.php';

// insert query

// without tight security method
// $sqlInsertQuery = "insert into studentstable(name,age,gender) values('Rabi Kr Yadav',25,'male')";
// With Two Different method we can store data into database
// $db_connection->query($sqlInsertQuery); // one method to insert data into db
// $db_connection->exec($sqlInsertQuery); // another method to insert data into db
// echo "data inserted successfully";


// With Tight Security Method

$sqlInsertQuery = "insert into studentstable(name,age,gender) values(:name, :age, :gender)";
$stmt = $db_connection->prepare($sqlInsertQuery); // prepare the connection with database and storing the connection in stmt variable

// with the help of bindparam method
$stmt->bindparam(':name',$name);  // binding name with creating name variable
$stmt->bindparam(':age',$age);   // binding age with createing age variable
$stmt->bindparam(':gender',$gender); // binding gender with creating gender variable

// putting the value of defined(created) variable
$name = 'Rabi Krishna yadav';
$age = 26;
$gender = 'male';

$stmt->execute(); // this will insert the value of variable into database

// we can insert value many time with ptting value of defined variable like this.
$name = 'Rabi Kumar';
$age = 25;
$gender = 'male';
$stmt->execute();



// without the bindparam method

$sqlInsertQuery = "insert into studentstable(name,age,gender) values(:name, :age, :gender)";
$stmt = $db_connection->prepare($sqlInsertQuery); // prepare the connection with database and storing the connection in stmt variable

$name = 'Rabi KR Yadav';
$age = 25;
$gender = 'male';
$stmt->execute(['name'=>$name,'age'=>$age,'gender'=>$gender]);



?>