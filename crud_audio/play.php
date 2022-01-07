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
				width: 70%;
				background-color: gray;
			}
	</style>
</head>
<body>
<div class="main-div">
	<div class="center-div m-5 p-5">
		<button onclick="openHome()" class="btn btn-success">Home</button>
		<!-- first method -->
		<div align="center">
			<audio controls>
				<source src="<?php echo $_GET['name'];?>" type="audio/mpeg"></source>
			</audio><br><br>
		</div>


		<!-- second method -->
		<!-- <div><br><br>
			<audio autobuffer autoloop loop controls>
				<source src="" type="audio/mp3">
				<object type="audio/x-wav" data="/media/audio.wav" width="290" height="45">
					<param name="src" value="/media/audio.wav">
					<param name="autoplay" value="false">
					<param name="autoStart" value="0">
					<p><a href="/media/audio.wav">Download this audio file.</a></p>
				</object>
			</audio>
		</div> -->
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	function openHome(){
		window.location.assign("index.php");
	}
</script>