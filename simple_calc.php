<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simple Calculator</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<style type="text/css">
			.input1{
				width: 250px;
				height: 40px;
				padding: 5px;
				outline: none;
				border-radius: 1px solid gray;
				border-radius: 5px;
		</style>
	</head>
	<body class="bg-success">
		<div class="container">
			<div class="bg-dark m-5 p-5" style="border-radius: 20px; display: flex; flex-direction: column; ">
				<div class="row">
					<div class="col-xl-6 font-weight-bold">
						<div class="app-title">
							<div class="animated infinite pluse text-success">
								PHP <br> Calculator <br>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="screen-body-item">
							<div class="app-form">
								<form method="POST">
									<div class="app-form-group">
										<input type="text" name="num1" placeholder="Enter First Number" class=" input1 app-form-control" autocomplete="off">
									</div><br>
									<div class="app-form-group">
										<input type="text" name="num2" placeholder="Enter Second Number" class=" input1 app-form-control" autocomplete="off">
									</div><br>
									<div class="select-style">
										<select name="operation">
											<option value="add">Add</option>
											<option value="sub">Sub</option>
											<option value="mult">Mult</option>
											<option value="div">Div</option>
										</select>
									</div>
									<div>
										<input type="submit" name="submit" value="Calculate" class="app-form-button btn btn-success">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="app-form-group showdata text-light text-center p-5">
					<p>
						<?php
						
						if (isset($_POST['submit'])) {
							$num1 = $_POST['num1'];
							$num2 = $_POST['num2'];
							$operation = $_POST['operation'];
							switch ($operation) {
								case 'add': $sum = $num1 + $num2;
									echo "The Addition of Two number is {$sum}";
									break;
								case 'sub': $sub = $num1 + $num2;
									echo "The Subtraction of Two number is {$sub}";
									break;
								case 'mult': $mult = $num1 * $num2;
									echo "The Multiplication of Two number is {$mult}";
									break;
								case 'div': $div = $num1 / $num2;
									echo "The Division of Two number is {$div}";
									break;
								
								default: echo 'Please Select the operation';
							}
						}
						?>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>