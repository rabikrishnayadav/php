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
		</div>
	</body>
</html>