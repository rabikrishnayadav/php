<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Temperature Conversion</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: Muli;
			}
			.main-div{
				width: 100%;
				height: 80vh;
				display: flex;
				justify-content: space-around;
				align-items: center;
			}
			.left-side{
				max-width: 400px;
				height: auto;
			}
			.right-side{
				width: 400px;
				height: 300px;
				background-color: #dfe6e9;
				border-radius: 15px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			.input1{
				width: 250px;
				height: 40px;
				padding: 5px;
				outline: none;
				border-radius: 1px solid gray;
				border-radius: 5px;
			}
			.selection{
				width: 100%;
				margin: 20px 0;
			}
			p{
				margin: 20px 0 0 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<header>
				<h1 align="center">Temperature Conversion</h1>
				<h6>1) The formula to convert from oF to oC is:<br>
				C = (F-32)*5/9</h6>
				<h6>2) The formula to convert from oC to oF is:<br>
				F = C*9/5+32</h6>
				<div class="main-div">
					<div class="left-side">
						
					</div>
					<div class="right-side" align="center">
						<form method="post">
							<input type="text" name="num" placeholder="Enter your number" class="input1">
							<div class="selection">
								<label>Celc</label>
								<input type="radio" name="units" value="celsius">&nbsp;&nbsp;&nbsp;&nbsp;
								<label>Faren</label>
								<input type="radio" name="units" value="fehrenheit">
							</div>
							<input type="submit" name="submit" value="Convert Now" class="btn btn-primary">
						</form>
						<div>
							<p>
								<?php
								if (isset($_POST['submit'])) {
									$num = $_POST['num'];
									$temp = $_POST['units'];
									if ($temp == 'celsius') {
										$result = $num * 9 / 5 + 32;
										echo "The conversion value of celsius in fehrenheit is ". $result;
									}else{
										$result = ($num - 32) * 5 / 9;
										echo "The conversion value of fehrenheit in celsius is ". $result;
									}
								}
								?>
							</p>
						</div>
					</div>
				</div>
			</header>
		</div>
	</body>
</html>