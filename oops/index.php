<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Oops</title>
	<?php include '../user/link.php' ?>
</head>
<body>
	<h1 class="text-center font-weight-bold bg-warning">Object Oriented PHP</h1>
	<div class="container">
		<ul>
		<h3>Some Topics Of Object Oriented php</h3>
		<li>Class</li>
		Class: blueprint if Objects<br>
		Example: Class Car depicting cars<br>
		<li>Object</li>
		Object : real world thing properties(data) and show behaviours(methods)<br>
		Example: car having name and drive behaviour<br>
		<li>Inheritance</li>
		<li>Constructor</li>
		<li>Method Overriding</li>
		<li>Interface</li>
		<li>Abstract Class & Method</li>
		<li>Access Modifiers</li>
	</ul>
	</div><br><hr><br>
	<div class="container">
		<h4>Class and Object</h4>
		Example:<br>
		<code>
			// Create Class<br>
			Class Car<br>
			{<br>
				// data members<br>
				public $name = '';<br>
				// methods<br>
				public function drive(){<br>
					echo $this->name.'is being driven';<br>				}
			}<br>
			// Create Object<br>
			$carjObj = new Car(); // ' new ' keyword asks php to create object<br>
			$carjObj->name='Rabi'; // ' -> ' This is a object operator is used to access members of class<br>
			$carjObj->drive();<br>
		</code>
	</div>
</body>
</html>