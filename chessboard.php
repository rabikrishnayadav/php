<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chessboard Maker</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			table{
				border: 1px solid black;
			}
			td{
				padding: 20px;
				border: 1px solid black;
			}
			.bgcolor{
				background-color: black;
			}
		</style>
	</head>
	<body class="text-center">
		<h2 class="font-weight-bold">Chessboard Maker</h2>
		<div class="container m-5">
			<div class="row">
				<div class="col-md-12">
					<form method="post">
						<input type="text" name="given_no" value="" placeholder="enter the number" required>
						<input type="submit" name="submit" value="Submit" required>
					</form>
				</div><br><br>
				<div class="row">
					<div class="col-md-12">
						<table>
							<?php
								if (isset($_POST['submit'])) {
									$num = $_POST['given_no'];
									for($row=1; $row <= $num; $row++)
									{
										echo "<tr>";
											for($col=1; $col <= $num; $col++){
												if(($row + $col) % 2 == 0){
													echo '<td class="bgcolor"> </td>';
												}else{
													echo '<td> </td>';
												}
											}
										echo "</tr>";
									}
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>