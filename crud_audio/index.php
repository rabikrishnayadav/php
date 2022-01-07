<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include '../links.php' ?>
	<style type="text/css">
		.main-div{
				height: 100%;
			}
			.center-div{
				height: 600px;
				width: 50%;
				background-color: gray;

			}
	</style>
</head>
<body>
<div class="main-div">
			<div class="center-div m-5 p-5">
				<h2 class="text-center">Audio File Upload</h2>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="file" name="audioFile" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="submit" name="save_audio" value="Upload Audio" class="btn btn-success">
				</div>
			</form><br>
			<div class="bg-light text-dark" style="padding:10px; border-radius:20px; min-height: 300px;">
				<h3 class="text-center">List of the Uploaded Audios</h3>
				<?php include 'upload.php'; displayAudios(); ?>
			</div>
			</div>
		</div>

</body>
</html>