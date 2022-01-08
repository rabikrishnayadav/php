<?php 
include 'connection.php';
// unsafe sql injection
echo "for fetch the data in array form we have 3 method we can use any one<br>
1)Fetch With Associative Method<br>
2)Fetch With Index Number Method<br>
3)Fetch With Object<br>";

$selectquery = "select * from studentstable";
$stmt =  $db_connection->query($selectquery);

// 1) fetch with associative array method
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<br>1)Fetch with Associative array method <br> <pre>";
print_r($result);
echo "</pre>";
// example for show the exact result with assoc
echo "My Name is ".$result['name']. " My Age Is ".$result['age']. " I'm ".$result['gender']."<br>"; // this will work only when we fetch with associative array.

// 2) fetch with Array index number method
$result = $stmt->fetch(PDO::FETCH_NUM);
echo "<br>2)Fetch with index number array method<br> <pre>";
print_r($result);
echo "</pre>";
// example for show the exact result with index number 
echo "My Name is ".$result['1']. " My Age Is ".$result['2']. " I'm ".$result['3']."<br>"; // this will work only when we fetch with array index number method.

// 3) fetch with object
$result = $stmt->fetch(PDO::FETCH_OBJ);
echo "<br>3)Fetch with Object array method<br> <pre>";
print_r($result);
echo "</pre>";
//example for show the exact result with obj
echo "My Name is &nbsp;".$result->name."&nbsp; My Age is &nbsp;".$result->age."&nbsp; I'm &nbsp;".$result->gender."<br>"; // this will work only when we fetch with Object method.

// fetch data with setAttribute and with we are fixing after this we can only fetch data with obj method
$db_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$result = $stmt->fetch();
echo "<br>4)Fetch with Object array method<br> <pre>";
print_r($result);
echo "</pre><br><hr><br>";

////////////////////////////////////////////////////////////////////////////////////////////////////
// PREPARED STATEMENTS(Prepare, BindParam and Execute)
// Named Placeholder(parameter) vs Positional Parameter
// Fetch() vs FetchAll()


// fetch with prepared statement with a bound variable and with Named placeholder(parameter) 
// Example 1
$idnum = 3; // here write the id number which you want to find
$selectquery = "select * from studentstable where id=:idnum";
$stmt = $db_connection->prepare($selectquery);  // prepare the statement
$stmt->bindparam(':idnum',$idnum);  // Bind the statement
$stmt->execute();  // Execute the statement

$result = $stmt->fetch();

echo "<br>Fetch with prepared statement with a bound variable and Named parameter<br>";
echo "<pre>";
print_r($result);
echo "</pre><br>";
echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender;

// Example 2

$idnum = 4; // here write the id number which you want to find
$name = 'rabi'; // here write the name which is store in idnum

$selectquery = "select * from studentstable where id=:idnum && name=:name";
$stmt = $db_connection->prepare($selectquery);  // prepare the statement
$stmt->execute(['idnum'=>$idnum, 'name'=>$name]);  // Execute the statement
$result = $stmt->fetch();

echo "<br>Fetch with prepared statement with Named parameter<br>";
echo "<pre>";
print_r($result);
echo "</pre><br>";
echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender;
echo $stmt->rowCount();


// fetch with prepared statement with a bound variable and with Positional Parameter

$idnum = 2; // here write the id number which you want to find
$name = 'rabi'; // here write the name which is store in idnum

$selectquery = "select * from studentstable where id=? && name=?";
$stmt = $db_connection->prepare($selectquery);  // prepare the statement
$stmt->execute([$idnum,$name]);  // Execute the statement
$result = $stmt->fetch();

echo "<br>Fetch with prepared statement with Positional parameter<br>";
echo "<pre>";
print_r($result);
echo "</pre><br>";
echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender."<br><br>";


/////////////////////////////////////////////////////////////////////////////////////

// if we want to show all data which is available in our database


// this will show our result in array format on our browser
$selectquery = "select * from studentstable";
$stmt = $db_connection->prepare($selectquery);
$stmt->execute();
while($result = $stmt->fetch()){
	echo "<pre>";
	print_r($result);
	echo "</pre><br>";
}


// this will show our result in simple(string format) on our browser
$selectquery = "select * from studentstable";
$stmt = $db_connection->prepare($selectquery);
$stmt->execute();
while($result = $stmt->fetch()){
	echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender."<br>";
}


// With the use of fetchall() method and foreach() loop.

$selectquery = "select * from studentstable";
$stmt = $db_connection->prepare($selectquery);
$stmt->execute();
$result = $stmt->fetchAll(POD::FETCH_ASSOC);
foreach($result as $value) {
	echo "My Name is". $value['name'] . " and My Age is " . $value['age'] . " I'm " . $value['gender'];
}


?>
