<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDO</title>
	<?php include '../user/link.php' ?>
	<style type="text/css">
		h5{
			text-align: center;
			background-color: aqua;
			height: 40px;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1 class="text-center bg-warning p-2">PHP Data Object(PDO)</h1>
	<div class="container">
		<h3>Introduction</h3><hr>
		<p>
			The PHP Data Object(PDO) extension defines a lightweight, consistent interface for accessing databases in PHP.<br>Each database drive that implements the PDO interface can expose database-specific features as regular extension functions.<br>Note that you cannot perform any database function using PDO extension by itself.<br>You Must use a <u>database-specific PDO</u> driver to access a database server.<br><br>PDO provides a data-access abstraction layer, which means that, regardless of which database you're using.<br>You use the same function to issue queries and fetch data.<br>PDO will work on 12 different database system.<br><br>

			If you want to switch your project to another database, PDO makes the process easy.<br>You only have to change the connection string and a few queries.<br><br>
		</p>
		<h3 class="text-center bg-primary">PDO CRUD Operation</h3>
		<h4>Database Connection</h4><hr>
		<h6>For Connect With the database</h6>
		Syntax:<br>
		<code>
			try{<br>
				$server = 'localhost';<br>
				$user = 'root';<br>
				$password = '';<br>
				$database = 'php_pdo';<br>
				// creating a PDO and connection with the server and database<br>
				// do not use any extra spaces other wise it will not connect<br>
				<b>$db_connection = new PDO("mysql:host=$server; dbname=$database",$user,$password);</b><br>
				}<br>
			catch(PDOException $e){<br>
				echo 'Error: ' .$e->getMessage();<br>
			}<br>
		</code>Where,
		<p class="font-weight-bold" style="font-size:15px">(->) This is a object operator.</p> It's used in object scope to access methods and properties of an object.<br><br><br>
		<h4 class="text-center">Create Table</h4><hr>
		<h5>Insert Query</h5>
		<ol>
			<li class="font-weight-bold">Simple Method Without any Security</li>
			Syntax & Example:<br>
			<code>
				$sqlInsertQuery = "insert into studentstable(name,age,gender) values('Rabi Kr Yadav',25,'male')";<br>
				// With Two Different mehod we can store data into database just use only one either first or second<br>
				$db_connection->query($sqlInsertQuery); // first method to insert data into db<br>
				$db_connection->exec($sqlInsertQuery); // second method to insert data into db<br>
				echo "data inserted successfully";<br>
			</code><br><br>
			<li class="font-weight-bold">With Tight Security Method</li>
			Syntax & Example 1:<br>With the help of bindparam method<br>
			<code>
				$sqlInsertQuery = "insert into studentstable(name,age,gender) values(:name, :age, :gender)";<br>
				$stmt = $db_connection->prepare($sqlInsertQuery); // prepare the connection with database and storing the connection in stmt variable<br><br>
				$stmt->bindparam(':name',$name);  // binding name with creating name variable<br>
				$stmt->bindparam(':age',$age);   // binding age with createing age variable<br>
				$stmt->bindparam(':gender',$gender); // binding gender with creating gender variable<br><br>
				// putting the value of defined(created) variable<br>
				$name = 'Rabi Krishna yadav';<br>
				$age = 26;<br>
				$gender = 'male';<br><br>
				$stmt->execute(); // this will insert the value of variable into database<br>
			</code><br>
			Syntax & Example 2:<br>Without the bindparam method<br>
			<code>
				$sqlInsertQuery = "insert into studentstable(name,age,gender) values(:name, :age, :gender)";<br>
				$stmt = $db_connection->prepare($sqlInsertQuery);<br>
				$name = 'Rabi KR Yadav';<br>
				$age = 25;<br>
				$gender = 'male';<br>
				$stmt->execute(['name'=>$name,'age'=>$age,'gender'=>$gender]);<br>
			</code><br><br>
		</ol><br><hr>
		<h5>Select Query</h5>		
		<ul>
			<li><h6 class="font-weight-bold" style="font-size:20px; color:red">Unsafe Sql Injection</h6>For fetch the data in array form we have 3 method we can use any one.</li>
			<ol>
			<li>Fetch With Associative Method</li>
			Syntax:<br>
			<code>
			$selectquery = "select * from studentstable";<br>
			$stmt =  $db_connection->query($selectquery);<br>
			$result = $stmt->fetch(PDO::FETCH_ASSOC);<br>
			print_r($result);<br>
			// example for show the exact result with assoc on page<br>
			echo "My Name is ".$result['name']. " My Age Is ".$result['age']. " I'm ".$result['gender'];<br>
			// this will work only when fetch with associative array.<br>
			</code><br>
			<li>Fetch With Index Number Method</li>
			Syntax:<br>
			<code>
			$selectquery = "select * from studentstable";<br>
			$stmt =  $db_connection->query($selectquery);<br>
			$result = $stmt->fetch(PDO::FETCH_NUM);<br>
			print_r($result);<br>
			// example for show the exact result with index number <br>
			echo "My Name is ".$result['1']. " My Age Is ".$result['2']. " I'm ".$result['3'];<br>
			// this will work only when we fetch with array index number method.<br>
			</code><br>
			<li>Fetch With Object</li>
			Syntax:<br>
			<code>
			$selectquery = "select * from studentstable";<br>
			$stmt =  $db_connection->query($selectquery);<br>
			$result = $stmt->fetch(PDO::FETCH_OBJ);<br>
			print_r($result);<br>
			//example for show the exact result with obj<br>
			echo "My Name is &nbsp;".$result->name."&nbsp; My Age is &nbsp;".$result->age."&nbsp; I'm &nbsp;".$result->gender;<br>
			// this will work only when we fetch with Object method.<br>
			</code>
			Where,<br>
		<p class="font-weight-bold" style="font-size:15px">(::) This is a Scope reslolution operator.</p>
		also called(paamayim Nekudotayim) or simple terms the double colon.<br>
		it is token that allows access to static,constant and overridden properties or methods of a class.<br>
		<p class="font-weight-bold" style="font-size:15px">(=>) This is a double arrow operator.</p>
		This is used as an access mechanism for arrays.<br>This means that what is on the ledt side of it will have acorresponding value of what is on the right side of it in array context.<br>It is case sensitive mean(Name != name)<br>
		</ol>
			<li><h6 class="font-weight-bold" style="font-size:20px; color:green">Safe From Sql Injection(With tight security Method)</h6><h6 class="font-weight-bold">PREPARED STATEMENTS(Prepare, BindParam and Execute)</h6></li>
			<b>Named Placeholder(parameter) vs Positional Parameter<br>
			Fetch() vs FetchAll()<br></b>
			<ol>
				<li>Prepared statement with a bound variable and Named placeholder(parameter)</li>
				Syntax & Example:<br>
				<code>
					$idnum = 3; // here write the id number which you want to find<br>
					$selectquery = "select * from studentstable where id=:idnum";<br>
					$stmt = $db_connection->prepare($selectquery);  // prepare the statement<br>
					$stmt->bindparam(':idnum',$idnum);  // Bind the statement<br>
					$stmt->execute();  // Execute the statement<br>
					$result = $stmt->fetch();<br>
					print_r($result);<br>
					echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender;<br><br>
				</code>
				<li>Prepared statement without bound variable and Named parameter</li>
				Syntax & Example:<br>
				<code>
				$idnum = 4; // here write the id number which you want to find<br>
				$name = 'rabi'; // here write the name which is store in idnum<br>
				$selectquery = "select * from studentstable where id=:idnum && name=:name";<br>
				$stmt = $db_connection->prepare($selectquery);  // prepare the statement<br>
				$stmt->execute(['idnum'=>$idnum, 'name'=>$name]);  // Execute the statement<br>
				$result = $stmt->fetch();<br>
				print_r($result);<br>
				echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender;<br>
				</code>
				<br><br>
				<li>Prepared statement with a bound variable and Positional Parameter</li>
				Syntax & Example:<br>
				<code>
					$idnum = 2; // here write the id number which you want to find<br>
					$name = 'rabi'; // here write the name which is store in idnum<br>
					$selectquery = "select * from studentstable where id=? && name=?";<br>
					$stmt = $db_connection->prepare($selectquery);  // prepare the statement<br>
					$stmt->execute([$idnum,$name]);  // Execute the statement<br>
					$result = $stmt->fetch();<br>
					print_r($result);<br>
					echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender;<br>
				</code>
			</ol>
			<h5 class="font-weight-bold bg-secondary text-light" style="font-size:15px; height: 30px; text-decoration: none; width:600px;">For Showing All the data which is available in database</h5>
			<ol type="I">
				<li>Result Will show on browser in Array Fromat</li>
				Syntax & Example:<br>
				<code>
					$selectquery = "select * from studentstable";<br>
					$stmt = $db_connection->prepare($selectquery);<br>
					$stmt->execute();<br>
					while($result = $stmt->fetch()){<br>
					print_r($result);<br>
					}<br>
				</code>
				<li>Result Will show on browser in simple(String) Fromat</li>
				Syntax & Example:<br>
				<code>
					$selectquery = "select * from studentstable";<br>
					$stmt = $db_connection->prepare($selectquery);<br>
					$stmt->execute();<br>
					while($result = $stmt->fetch()){<br>
					echo "My Name is ".$result->name. " My Age is ".$result->age. " I'm ".$result->gender";<br>
					}<br>
				</code>
				<li>With the use of fetchall() method and foreach() loop.</li>
				Syntax & Example:<br>
				<code>
					$selectquery = "select * from studentstable";<br>
					$stmt = $db_connection->prepare($selectquery);<br>
					$stmt->execute();<br>
					$result = $stmt->fetchAll(POD::FETCH_ASSOC);<br>
					foreach($result as $value) {<br>
						echo "My Name is". $value['name']. " and My Age is " .$value['age']. " I'm " .$value['gender'];<br>
					}<br>
				</code>
			</ol>
		</ul><br><hr><br>
		<h5>Update Query</h5>
		Syntax & Example:<br>
		<code>
			$id = 6; // write the name of the id which will find the row<br>
			$name = 'Ramesh Kumar'; // write the new value for update<br>
			$updatequery = "update studentstable set name = :name where id = :id";<br>
			$stmt = $db_connection->prepare($updatequery);<br>
			$stmt->execute(['name'=>$name, 'id'=>$id]);<br>
		</code><br><hr><br>
		<h5>Delete Query</h5>
		Syntax & Example:<br>
		<code>
			$id = 8; // write the id name which will find full row and delete<br>
			$deletequery = "delete from studentstable where id = :id";<br>
			$stmt = $db_connection->prepare($deletequery);<br>
			$stmt->execute(['id'=>$id]);
		</code><br><br><hr>
		<h2 class="text-center font-weight-bold">For Practicle Just use links below</h2>
		<ol>
			<li>Insert Query <a href="create.php"> Click Here</a></li>
			<li>Read Query <a href="read.php"> Click Here</a></li>
			<li>Update Query <a href="update.php"> Click Here</a></li>
			<li>Read again After The Update Query <a href="read.php"> Click Here</a></li>
			<li>Delete Query <a href="delete.php"> Click Here</a></li>
			<li>Read again After The Delete Query <a href="read.php"> Click Here</a></li>
		</ol>
	</div><br><hr><h1 class="text-center font-weight-bold bg-success">Thank You So Much</h1>
</body>
</html>