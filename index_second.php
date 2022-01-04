<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Another index of php</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
		</div>
	</body>
</html>