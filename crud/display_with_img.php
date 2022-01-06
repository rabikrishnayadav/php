<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include 'links.php' ?>
		
	</head>
	<body>
		<div class="main-div">
			<h1 class="text-center">List of condidates for web developer job</h1>
			<div class="center-div">
				<div class="table-responsive m-2">
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Degree</th>
								<th>Email</th>
								<th>Language</th>
								<th>Profile</th>
								<th>Operation</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include 'connection.php';
							$selectquery = "select * from reg_with_img";
							$select_from_db = mysqli_query($connection, $selectquery);
							while ($res = mysqli_fetch_array($select_from_db)) {
							?>
							<tr>
								<td><?php echo $res['id']; ?></td>
								<td><?php echo $res['name']; ?></td>
								<td><?php echo $res['degree']; ?></td>
								<td><?php echo $res['email']; ?></td>
								<td><?php echo $res['lang']; ?></td>
								<td><img src="<?php echo $res['pic']; ?>" width="100" height="100"></td>
								<td class="font-weight-bold"><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="remove it">delete</a></td>
							</tr>
							<?php
							}
							?>
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document.ready(function(){
				$('[data-toggle-tooltip]').tooltip();
			}));
		</script>
	</body>
</html>