<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Another index of php</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<div>
				<h3>php == vs === difference</h3>
				<ul>
					<li>==(equal)</li>$x == $y then Returns true if $x is equal to $y.<br>
					Example:<br>
					<code>
					$x = 5;<br>
					$y = '5';<br>
					if ($x == $y) {<br>
					echo 'Both the value are same';<br>
					}else{<br>
					echo 'values are same but data types are different.';<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$x = 5;
					$y = '5';
					if ($x == $y) {
						echo 'Both the value are same';
					}else{
						echo 'values are same but data types are different.';
					}
					?><br><br>
					<li>===(Identical)</li> $x === $y Returns true if 4x is equal to $y, and they are of the same data type.<br>
					Example:<br>
					<code>
					$x = 5;<br>
					$y = '5';<br>
					if ($x === $y) {<br>
					echo 'Both the value are same';<br>
					}else{<br>
					echo 'values are same but data types are different.';<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$x = 5;
					$y = '5';
					if ($x === $y) {
						echo 'Both the value are same';
					}else{
						echo 'values are same but data types are different.';
					}
					?><br><br>
				</ul>
			</div><br><hr><br>
			<div>
				<h3>Generate Random Number</h3>
				Example:<br>
				<code>
				$num = rand(0,50);<br>
				echo $num;<br>
				</code><br>
				<kbd>Result:</kbd>
				<h2>
				<?php
				$num = rand(0,50);
				echo $num;
				?>
				</h2>
				Just refresh the brower for another number.
			</div><br><hr><br>
			<div>
				<h3>FIZZ BUZZ Program</h3>
				Example:<br>
				if a number is a multiple of 3 then output FIZZ instead of the number.<br>
				if a number is a multiple of 5 then output BUZZ instead of the number.<br>
				if a number is a multiple of both 3 and 5 then output FIZZ BUZZ instead of the number.<br>
				<code>
				for ($i=1; $i<=20; $i++) { <br>
				if (($i%3 == 0) && ($i%5 == 0)) {<br>
				echo "FIZZ BUZZ"; <br>
				}elseif ($i%3 == 0) {<br>
				echo "FIZZ"; <br>
				}elseif ($i%5 == 0){<br>
				echo "BUZZ"; <br>
				}else{<br>
				echo $i.";<br>
				}<br>
				}	<br>
				</code><br>
				<kbd>Result:</kbd><br>
				<?php
				for ($i=1; $i<=20; $i++) {
					if (($i%3 == 0) && ($i%5 == 0)) {
						echo "FIZZ BUZZ <br>";
					}elseif ($i%3 == 0) {
						echo "FIZZ <br>";
					}elseif ($i%5 == 0){
						echo "BUZZ <br>";
					}else{
						echo $i. "<br>";
					}
				}
				?>
			</div><br><hr><br>
			<div>
				<h3>HEADS, I WIN! TAILS YOU WIN!</h3>
				Eample:<br>
				<code>
				$heads = 0;<br>
				$tails = 0;<br>
				for ($i=1; $i < 20; $i++) {<br>
				$num = rand(1,2);<br>
				echo $num;<br>
				if ($num == 1) {<br>
				$heads++;<br>
				echo "Heads, I win!";"</br>
				}else{<br>
				$tails++;<br>
				echo "Tails, You win!";<br>
				}<br>
				}<br>
				echo " There were {$heads} heads and {$tails} tails." ;<br>
				if ($heads > $tails) {<br>
				echo "Heads, I win!";<br>
				}elseif($tails > $heads){<br>
				echo "Tails, You win!";<br>
				}else{<br>
				echo "Match DRAW";<br>
				}	<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				$heads = 0;
				$tails = 0;
				for ($i=1; $i < 20; $i++) {
					$num = rand(1,2);
					echo $num;
					if ($num == 1) {
						$heads++;
						echo "Heads, I win! </br>";
					}else{
						$tails++;
						echo "Tails, You win! <br>";
					}
				}
				echo " There were {$heads} heads and {$tails} tails.<br>" ;
				if ($heads > $tails) {
					echo "Heads, I win! <br>";
				}elseif($tails > $heads){
					echo "Tails, You win! <br>";
				}else{
					echo "Match DRAW";
				}
				?>
			</div><br><hr><br>
			<div>
				<h3>String Function</h3>
				<ul>
					<li>strlen( )</li>The strlen() function returns the length of a string.<br>
					It's use To find the length of word or sentance<br>
					Example:<br>
					<code>
					$name = 'My name is rabi krishna yadav';<br>
					$length = strlen($name);<br>
					echo "The length of the string is ".$length;<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$name = 'My name is rabi krishna yadav';
					$length = strlen($name);
					echo "The length of the string is ".$length;
					?><br><br>
					<li>str_word_count( )</li> The str_word_count( ) function counts the number of words in a string.<br>
					Example:<br>
					<code>
					$name = 'My name is rabi krishna yadav';<br>
					$wordCount = str_word_count($name);<br>
					echo "The number of words are ".$wordCount;<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$name = 'My name is rabi krishna yadav';
					$wordCount = str_word_count($name);
					echo "The number of words are ".$wordCount;
					?><br><br>
					<li>str_replace( )</li>The str_replace( )function replaces some characters with some other characters in a string.<br>
					This Finction is case-sensitive.<br>
					Example:<br>
					<code>
					$name = 'Rabi Kumar yadav';<br>
					$newName = str_replace("kumar", "krishna", $name);<br>
					echo "My correct name is ".$newName;<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$name = 'Rabi Kumar yadav';
					$newName = str_replace("kumar", "krishna", $name);
					echo " My correct name is ".$newName;
					?><br><br>
					<li>str_ireplace( )</li>The str_replace( )function replaces some characters with some other characters in a string.<br>
					This Finction is case-insensitive.<br>
					Example:<br>
					<code>
					$name = 'Rabi Kumar Yadav';<br>
					$newName = str_ireplace("kumar", "krishna", $name);<br>
					echo "My correct name is ".$newName;<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$name = 'Rabi Kumar yadav';
					$newName = str_ireplace("kumar", "krishna", $name);
					echo " My correct name is ".$newName;
					?><br><br>
				</ul>
			</div><br><hr><br>
			<div>
				<h2 align="center">For Calculate the Temperature <a href="temperature.php">Click Here</a></h2>
			</div><br><hr><br>
			<div>
				<h3>PHP Function</h3>
				Beside the built-in PHP functions, it is possible to create your own functions.<br>
				A function is block of statement  that can be used repeatedly in a program.<br>
				A function will not execute automatically ehen a page loads.<br>
				A function will be execute by a call to the function.<br>
				Function names follow the same rules as other labels in PHP.<br>
				A valid function name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.<br>
				Example:<br>
				<code>
				// function define
				function myfun(){<br>
				echo "My name is Rabi";<br>
				}<br>
				myfun(); //function call<br>
				</code>
				<kbd>Result:</kbd>
				<?php
				// function define
				function myfun(){
						echo "My name is Rabi";
					}
					myfun(); // function call
				?><br><br>
				<h5>Parameters and Arguments in Function</h5>
				Example:<br>
				<code>
				function sum($a, $b) // here $a or $b both are the parameters<br>
				{<br>
				$add = $a + $b;<br>
				echo $add;<br>
				}<br>
				sum(4,5); // here 4 or 5 both are the arguments<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				function sum($a, $b) // here $a or $b both are the parameters
				{
					$add = $a + $b;
					echo $add;
				}
				sum(4,5); // here 4 or 5 both are the arguments
				?><br><br>
				<h5>Default value in PHP</h5>
				Example:<br>
				<code>
				function sub($a, $b=5){<br>
				$sub = $a - $b;<br>
				echo $sub;
				}<br>
				sub(10);<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				function sub($a, $b=5){
					$sub = $a - $b;
					echo $sub;
				}
				sub(10);
				?><br><br>
				<h5>Returning Value In Function</h5>
				Example:<br>
				<code>
				function calc($a, $b){<br>
				$add = $a + $b;<br>
				return $add;<br>
				}<br>
				$result = calc(5,4); // here is store the calc value<br>
				echo "The Addition of Two number is ". $result;<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				function calc($a, $b){
					$add = $a + $b;
					return $add;
				}
				$result = calc(5,4); // here is store the calc value
				echo "The Addition of Two number is ". $result;
				?>
			</div><br><hr><br>
			<div>
				<h3>Array in Php</h3>
				An array is a special variable, which can hold more than one value at a time.<br>
				Arrays can be used to store linear data of similar types.<br>
				In php array() function is used to create an array.<br>
				Syntax: array();<br>
				<h5>There are three types of arrays:</h5>
				1) Indexed arrays :- Arrays with a numeric index<br>
				2) Associative arrays :- Array with named keys<br>
				3) Multidimensional arrays :- Arrays contaaining one or more arrays.<br>
				Example:<br>
				<code>
				$friends = array('ram','laxman','bharat','satrudhan');<br>
				print_r($friends);<br>
				echo $friends[2];<br>
				$arrayLength = count($friends);<br>
				echo "The length of the array is ". $arrayLength;<br>
				for ($i=0; $i < $arrayLength; $i++) { <br>
				echo $friends[$i]";<br>
				}<br>
				$friends[5] = 'sita';<br>
				$friends[6] = 'gita';<br>
				print_r($friends);<br>
				$friends[5] = 'sita';<br>
				$friends[6] = 'gita';<br>
				print_r($friends);<br>
				</code><br>
				<kbd>Result:</kbd><br>
				<?php
				$friends = array('ram','laxman','bharat','satrudhan');
				echo "<pre>";
					print_r($friends);
				echo "</pre>";
				echo $friends[2];
				$arrayLength = count($friends);
				echo "<br> The length of the array is ". $arrayLength;
				echo "<ol>";
							for ($i=0; $i < $arrayLength; $i++) {
								echo "<li>".$friends[$i]."</li>";
							}
				echo "</ol>";
				$friends[5] = 'sita';
				$friends[6] = 'gita';
				echo "<pre>";
					print_r($friends);
				echo "</pre>";
				?><br>
				<h5>The foreach Loop</h5>
				The foreach loop - Loops through a block of code for each element in an array.<br>
				The foreach loop loop works only on arrays, and is used to loop through each key/value pair in an array.<br>
				Syntax:<br>
				foreach($array as $value){<br>
				code to be execute;<br>
				}<br>
				Example:<br>
				<code>
				$friends = array('ram','laxman','bharat','satrudhan');<br>
				foreach ($friends as $names) {<br>
				echo $names;<br>
				}<br>
				</code>
				<kbd>Result:</kbd>
				<?php
				$friends = array('ram','laxman','bharat','satrudhan');
				echo "<ol>";
							foreach ($friends as $names) {
								echo "<li>" . $names . "</li>";
							}
				echo "</ol>";
				?><br>
				<h5>Sort and reverse data</h5>
				<ul>
					<li>Sort( )</li>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					sort($friends);<br>
					foreach ($friends as $names) {<br>
					echo $names;<br>
					}<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					sort($friends);
					echo "<ol>";
							foreach ($friends as $names) {
								echo "<li>" . $names . "</li>";
							}
					echo "</ol>";
					?><br>
					<li>reverse</li>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					rsort($friends);<br>
					foreach ($friends as $names) {<br>
					echo $names;<br>
					}<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					rsort($friends);
					echo "<ol>";
							foreach ($friends as $names) {
								echo "<li>" . $names . "</li>";
							}
					echo "</ol>";
					?>
				</ul><br>
				<h5>PHP Array Function</h5>
				<ul>
					<li>array_pop($arr)</li>This function removes an element from the end of an array.<br>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					print_r($friends);<br>
					array_pop($friends);<br>
					print_r($friends);<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					array_pop($friends);
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					?>
					<li>array_push($arr, $val)</li>This function adds an element from the end of an array.<br>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					print_r($friends);<br>
					array_push($friends, 'sita');<br>
					print_r($friends);<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					array_push($friends, "sita");
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					?>
					<li>array_shift($arr)</li>This function removes an element from the begning of an array.<br>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					print_r($friends);<br>
					array_shift($friends);<br>
					print_r($friends);<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					array_shift($friends);
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					?>
					<li>array_unshift($arr)</li>This function adds an element from the begning of an array.<br>
					Example:<br>
					<code>
					$friends = array('ram','laxman','bharat','satrudhan');<br>
					print_r($friends);<br>
					array_unshift($friends,'sita');<br>
					print_r($friends);<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					array_unshift($friends, 'sita');
					echo "<pre>";
						print_r($friends);
					echo "</pre>";
					?>
				</ul>
				<h5>Implode and Explode Function</h5>
				<ul>
					<li>implode( )</li>This function is used to join elements of an array with a string.<br>
					The implode function in php is easily remembered as "array to string", which simply means that it takes an array and returns a string.<br>
					Example:<br>
					<code>
					$colors = array('red','green','blue');<br>
					$res = implode(" ", $colors);<br>
					echo "My fav Colors are " . $res . ".";<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$colors = array('red','green','blue');
					$res = implode(" ", $colors);
					echo "My fav Colors are " . $res . ".";
					?><br>
					<li>explode( )</li>This function is used to split a string by a specified string into pieces i.e. it breaks a string into an array.<br>
					Example:<br>
					<code>
					$village_name = "Bardibash Bhangaha Loharpatti";<br>
					$res = explode(" ", $village_name);<br>
					print_r($res);<br>
					</code>
					<kbd>Result:</kbd>
					<?php
					$village_name = "Bardibash Bhangaha Loharpatti";
					$res = explode(" ", $village_name);
					echo "<pre>";
						print_r($res);
					echo "</pre>";
					?>
				</ul>
				<h5>Combine Two array and remove duplicate</h5>
				Example:<br>
				<code>
				
				</code>
				<kbd>Result:</kbd>
				<?php
				function arrayUnion($array1, $array2){
					$merge = array_merge($array1,$array2);
				echo "Without Remove duplicate <br>";
				echo "<pre>";
					print_r($merge);
				echo "</pre>";
				$rmdup = array_unique($merge);
				echo "With Removed duplicate <br>";
				echo "<pre>";
					print_r($rmdup);
				echo "</pre>";
				}
				$array1 = array('red', 'green', 'pink');
				$array2 = array('yellow', 'blue', 'red');
				arrayUnion($array1, $array2);
				?>
			</div><br><hr><br>
			<div>
				<h3>Date and Time Function</h3>
				<h6>Parameter with description</h6>
				d - The day of the month(from 01 to 31)<br>
				D - A textual representation of a day (three letters)<br>
				j - The day of the month without leading zeros(from 1 to 31)<br>
				l - A full textual representation of a day<br>
				N - The ISO-8601 numeric representation of a day(1 for monday, 7 for sunday)<br>
				S - The english ordial suffix for the day of the month(2 character st, nd, rd or th. Works well with j)<br>
				w - A numeric representation of the day (0 for Sunday, 6 for Saturday)<br>
				z - The day of the year (from 0 through 365)<br>
				W - The ISO-8601 week number of year (weeks starting on Monday)<br>
				F - A full textual representation of a month( January through December)<br>
				m - A numeric representation of a month(from 01 to 12)<br>
				M - A short textual representation of a month(three letters)<br>
				n - A numric representation of a month, without leading zeros(1 to 12)<br>
				t- The number of the days in the given month<br>
				L - Wheather it's a leap year (1 if it is a leap year, 0 otherwise)<br>
				o - The ISO-8601 year number<br>
				Y - A four digit representation of a year<br>
				y - A two digit representation of a year<br>
				a - Lowercase am or pm<br>
				A - Uppercase am or pm<br>
				B - Swatch Internet time(000 to 999)<br>
				g - 12-hour format of an hour(1 to 12)<br>
				G - 24-hour format of an hour(0 to 23)<br>
				h - 12-hour format of an hour(01 to 12)<br>
				H - 24-hour format of an hour(00 to 23)<br>
				i - Minutes with leading zeros(00 to 59)<br>
				s - Second with leading zero(00 to 59)<br>
				u - Microseconds<br>
				e - The timezone identifier(Examples: UTC, GMT, Atlantic/Azores)<br>
				I - Whether the date in daylights saving time(1 if daylight saving time, 0 otherwise)<br>
				O - Difference to Greenwich time(GMT) in hours(Example: +0100)<br>
				p - Difference to Greenwich time(GMT) in hoour:minutes<br>
				T - Timezone abbreviation (Example: EST, MDT)<br>
				Z - Timezone offset in seconds, The offset for timezones west of UTC is negative(-43200 to 50400)<br>
				c - The ISO-8601 date(e.g. 2021-12-15T16:34:42+00:00)<br>
				r - The RFC 2822 formatted date(e.g. Fri, 12 Dec 2021 12:01:05 +0200)<br>
				U - The seconds since the unix Epoch(January 1 1970 00:00:00 GMT)<br>

				<br>
				Example:<br>
				<code>
				//for getting the current timezone<br>
				$timezone = date_default_timezone_get();<br>
				echo "The current server timezone is : ". $timezone;<br>
				echo date('h:i:sA');<br>

				//for set the new or own timezone<br>
				$nptimezone = date_default_timezone_set('Asia/Kathmandu');<br>
				echo "The Nepal Kathmandu server timezone is : ". $nptimezone;<br>
				echo date('h:i:sA');<br>
				echo date('d l M');<br>
				echo date('d F o l e T');<br>
				echo date('r');<br>
				</code>
				<kbd>Result:</kbd><br>
				<?php 
				//for getting the current timezone
				$timezone = date_default_timezone_get();
				echo "The current server timezone is : ". $timezone ."<br>";
				echo date('h:i:sA');

				//for set the new or own timezone
				$nptimezone = date_default_timezone_set('Asia/Kathmandu');
				echo "<br> The Nepal Kathmandu server timezone is : ". $nptimezone;
				echo date('h:i:sA'). "<br>";
				echo date('d l M'). "<br>";
				echo date('d F o l e T'). "<br>";
				echo date('r')."<br>";
				echo date('c')."<br>";
				?>
			</div><br><hr><br>
		</div>
	</body>
</html>
<div>
</div>