<?php

if (isset($_POST['save_audio']) && $_POST['save_audio'] == "Upload Audio") {
	$dir = 'uploads/';
	$audio_path = $dir.basename($_FILES['audioFile']['name']);

	if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
		echo 'upload successfully.';
		saveAudio($audio_path);

		header('location:index.php');
	}
}

function saveAudio($fileName){
	$con = mysqli_connect('localhost','root','','crudphp');

	if (!$con) {
		die('server not connected');
	}
	$insertquery = "insert into crud_audio(filename) values('{$fileName}')";

	mysqli_query($con, $insertquery);

	if (mysqli_affected_rows($con)>0) {
		echo "Audio File Path saved in database";
	}
	mysqli_close($con);
}

function displayAudios(){
	$con = mysqli_connect('localhost','root','','crudphp');

	if (!$con) {
		die('server not connected');
	}

	$displayQuery = "select * from crud_audio";

	$result = mysqli_query($con, $displayQuery);

	while ($row = mysqli_fetch_array($result)) {
		echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
		echo "<br>";
	}
	mysqli_close($con);
}


?>