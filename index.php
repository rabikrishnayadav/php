<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<h1 class="text-center text-success">Learn PHP</h1><hr>
<div class="container"><br>
	<h5>For comments</h5>
	Syntax for single line comments<br>
	1) //<br>
	2) #<br>
	Syntax for multiple line comments:<br>
	/*........*/<br><br>

	<h5>For display the output </h5>
	Syntax: echo 'display the output';<br><br>

	<h4>Variables in PHP</h4>
	<p>
		Variables can be used to hold values or expressions.<br>
		A variable in php always starts with a dollar sign. $<br>
		$ is must then contain a letter or underscore.<br>
		It's contain the any of the following.<br>
		A-Z, a-z, 0-9<br>
		A variable can contain any number of letters,<br>
		Before numbers or underscores must start with a letter or underscore.<br>
		Examples:<br>
		$name;<br>$name1;<br>$_name;<br>$Name;<br>$first_name;<br>$middleName;<br>
	</p>

<?php

// valid types variable in php
$name;
$name1;
$_name;
$Name;
$first_name;
$myname ="Rabi Kr Yadav"; // assignment defines the type of variable
echo "$myname"; // it's data type is string
echo "<br>";

$num = 15;  // it's data type is integer
echo "$num";
echo "<br>";

$float_num = 15.45; // it's data type is float
echo "$float_num";

?>
</div>
</body>
</html>




