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
	// for seperating(split) file name and extension
	$file_extension = explode('.',$file_name); // this will split into two part 'name' or 'extension'
	$file_extension_ceck = strtolower(end($file_extension)); // this will convert extension into lower case and selecting the last name of the file mean extension name
	$valid_file_extension = array('png','jpg','jpeg'); // creating array for valid file only user will upload

	if ($file_error == 0) {
	// for compare user file extension and valid file extension
	if (in_array($file_extension_ceck, $valid_file_extension)) {
	
		$destination_of_file = 'profile_image/' .$file_name; // variable create for store file destination path with file name
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
	}else{echo 'Profile extension not valid<br>Please use png / jpg / jpeg extension photo';}
	}
	}
	?>