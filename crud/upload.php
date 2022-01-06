<?php

include 'connection.php';

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$degree =$_POST['degree'];
	$email = $_POST['email'];
	$lang = $_POST['lang'];
	$file = $_FILES['photo'];
	// echo "<pre>";
	// print_r($file);
	// when we upload a file by default 5 row is comming in array form they are below.  
	$file_name = $file['name'];
	$file_type = $file['type'];
	$file_path = $file['tmp_name'];
	$file_error = $file['error'];
	$file_size = $file['size'];

	if ($file_error == 0) {
		$destination_of_file = 'profile_image/' .$name; // variable create for store file destination path with file name
		// echo $upload_to_db_file;
		move_uploaded_file($file_path, $destination_of_file); // for upload the file on the server

		$insertquery = "insert into reg_with_img(name,degree,email,lang,pic) values('$name','$degree','$email','$lang','$destination_of_file')";

		$insertquery_into_db = mysqli_query($connection, $insertquery);

		if ($insertquery_into_db) {
			echo "data inserted";
		}else{
			echo 'Data not inserted';
		}
		header('location:reg_with_img.php');
	}
}



?>