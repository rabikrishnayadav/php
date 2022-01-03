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
			<div>
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
			<br>
			<div>
				<h4>Expression Operators in PHP</h4>
				The combination of operands with an operator to produce a result is called an Expression.<br>
				Operator are used to perform operations on variables and values.<br>
				Examples:<br>
				a = 12;<br>b = 4;<br>
				<?php
				$a = 12;
				$b = 4;
				$sum = $a + $b;
				echo $sum;
				echo '<br>';
				$sub = $a - $b;
				echo $sub;
				?>
			</div>
			<div>
				<h4>Data Types in PHP</h4>
				<ul>
					<li>Integer</li>
					Example:
					<?php
					$num = 98;
					echo $num;
					echo '<br>';
					?>
					<li>String</li>
					Example:
					<?php
					$name = "Rabi Kr Yadav";
					echo "My name is $name.";
					echo "<br>";
					?>
					<li>Float</li>
					Example:
					<?php
					$num = 98.156;
					echo $num;
					echo '<br>';
					?>
					<li>Boolean</li>
					A boolean represents two possible states: TRUE or FALSE.<br>
					Where TRUE = 1; or FALSE = 0;<br>
					<li>Array</li>
					Example: $friends = array('ram','laxman','bharat','satrudhan');<br>echo $friends[0];<br>
					Result:
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo $friends[0];
					?>
				</ul>
			</div>
			<div>
				<h3>Arithmatic Operator</h3>
				<ul>
					<li>Addition</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$sum = $num1 + $num2;<br>
					echo "The Addition of Two Number is: $sum.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$sum = $num1 + $num2;
					echo "The Addition of two Number is: $sum.";
					?>
					<li>Substraction</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$sub = $num1 - $num2;<br>
					echo "The Subtraction of Two Number is: $sub.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$sub = $num1 - $num2;
					echo "The Subtraction of two Number is: $sub.";
					?>
					<li>Multiplication</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$mult = $num1 * $num2;<br>
					echo "The Multiplication of Two Number is: $mult.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$mult = $num1 * $num2;
					echo "The Multiplication of two Number is: $mult.";
					?>
					<li>Division</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$div = $num1 / $num2;<br>
					echo "The Division of Two Number is: $div.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$div = $num1 / $num2;
					echo "The Division of two Number is: $div.";
					?>
					<li>Modulus</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$mod = $num1 % $num2;<br>
					echo "The Modulus of Two Number is: $mod.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$mod = $num1 % $num2;
					echo "The Modulus of two Number is: $mod.";
					?>
				</ul><br><hr>
				<h6>Find the power of number</h6>
				Example:<br>
				$base = 5;<br>
				$power = 2;<br>
				$powerOfNumber = pow(5,2);<br>
				echo $powerOfNumber;<br>
				<kbd>Result:</kbd>
				<?php
				$base = 5;
				$power = 2;
				$powerOfNumber = pow(5,2);
				echo $powerOfNumber;
				?>
				<br><br>
				<h5>Find the Area Of</h5>
				<ul>
					<li>Circle</li>
					Formula: pi*r2<br>
					Example:<br>
					$pi = 3.141;<br>
					$r = 5;<br>
					$areaOfCircle = $pi*pow($r,2);<br>
					echo $powerOfNumber;<br>
					<kbd>Result:</kbd>
					<?php
					$pi = 3.141;
					$r = 5;
					$areaOfCircle = $pi*pow($r,2);
					echo $areaOfCircle;
					?>
					<li>Triangle</li>Formula = (1/2)bh<br>
					Example:<br>
					$h = 5;<br>
					$b = 3;<br>
					$areaOfTriangle = (1/2)*$h*$b;<br>
					echo $areaOfTriangle;<br>
					<kbd>Result:</kbd>
					<?php
					$h = 5;
					$b = 3;
					$areaOfTriangle = (1/2)*$h*$b;
					echo $areaOfTriangle;
					?>
					<li>Square</li>Formula = a*a<br>
					Example:<br>
					$a = 5;<br>
					$areaOfSquare = pow($a,2);<br>
					echo $areaOfSquare;<br>
					<kbd>Result:</kbd>
					<?php
					$a = 5;
					$areaOfSquare = pow($a,2);
					echo $areaOfSquare;
					?>
					<li>Rectangle</li>Formula = l*w<br>
					Example:<br>
					$l = 5;<br>
					$w = 3;<br>
					$areaOfRectangle =$l * $w;<br>
					echo $areaOfRectangle;<br>
					<kbd>Result:</kbd>
					<?php
					$l = 5;
					$w = 3;
					$areaOfRectangle = $l * $w;
					echo $areaOfRectangle;
					?>
				</ul>
			</div>
		</div>
	</body>
</html>