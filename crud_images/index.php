<?php
include '../links.php';
require 'config.php';
if (isset($_POST['upload'])) {
	$uploadDirectory = "upload/";
	$validExtensions = array('jpg','png','jpeg','bmp');
	$message = $errorType = $errorSize = $errorImage = "";
	$img_ref = rand();
	$sqlValues = "";
	foreach ($_FILES['image']['tmp_name'] as $imageKey => $imageValue) {
		$image = $_FILES['image']['name'][$imageKey];
		$imageSize = $_FILES['image']['size'][$imageKey];
		$imageTmp = $_FILES['image']['tmp_name'][$imageKey];
		$imageType = pathinfo($uploadDirectory.$image, PATHINFO_EXTENSION);
		// get image new name
		if ($image != '') {
			$imageNewName = uniqid().".".$imageType;
		}else{
			$imageNewName = "";
			$errorImage .= "<span style='color:red'>Image Required...!</span>";
		}
		if ($imageSize > 1024000) {
			$errorImage .= "<span style='color:red'>Large Image Size must be under 1MB</span>";
		}else if (!empty($image) && !in_array($imageType, $validExtensions)) {
			$errorType .= "<span style='color:red'>File Must be an Image...!</span>";
		}else if (empty($message)) {
			$sqlValues .= "('".$imageNewName."', '".$img_ref."'),";
			$store = move_uploaded_file($imageTmp, $uploadDirectory.$imageNewName);
		}
	}
	if (empty($_POST['name'])) {
		$message .= "<span style='color:red'>Name Required...!</span>";
	}elseif (!empty($errorType) || !empty($errorSize) || !empty($errorImage)) {
		$message .= $errorType .= $errorSize .= $errorImage;
	}else{
		$sqlInsert = "insert into crud_images_user(name, img_ref) values('".$_POST['name']."', '".$img_ref."');";
		$sqlInsert .= "insert into crud_images(image, img_ref) values $sqlValues";
		$sqlInsert = rtrim($sqlInsert, ",");
		$result = mysqli_multi_query($connection, $sqlInsert);
		if ($result) {
			header("location:index.php?message=success$name=".$_POST['name']."$img_ref=".$img_ref);
		}else{
			$message .= "<span style='color:red'>Process Failed...!</span>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload Multiple Imange</title>
		<style type="text/css">
			.main-div{
				height: 100%;
			}
			.center-div{
				height: 500px;
				width: 50%;
				background-color: gray;
			}
			img{
				height: 100px;
				width: 100px;
			}
			span{
				font-weight: bolder;
				font-size: 30px;
			}
		</style>
	</head>
	<body>
		<div class="main-div">
			<h4 class="text-center">Upload Multiple Imange Using Php and MySQL</h4>
			<div class="name">
				<?php
				if (isset($_GET['name'])) {
					echo "<p>Thank You '".ucfirst($_GET['name'])."'</p>";
				}
				?>
			</div>
			<div class="border border-dark m-3 p-2">
				<?php
				if (isset($_GET['img_ref'])) {
					$sql = "select * from crud_images where img_ref = '".$_GET['img_ref']."'";
					$sqlresult = mysqli_query($connection, $sql);
					while ($row = mysqli_fetch_assoc($sqlresult)) {
						echo '<img src="upload/'.$row['img_ref'].'">';
					}
				}else{
					echo '
						<img src="img/profile_image.png" >
						<img src="img/profile_image.png" >
						<img src="img/profile_image.png" >
						<img src="img/profile_image.png" >
						
					';
				}
				?>
				
			</div>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="name" placeholder="Your name" class="form-control">
				</div>
				<div class="form-group">
					<input type="file" name="image[]" class="form-control" multiple>
				</div>
				<div class="form-group">
					<input type="submit" name="upload" value="Upload" class="form-control btn btn-success">
				</div>
			</form>
			<?php
			if (isset($message)) {
				echo $message;
			}elseif (isset($_GET['message'])) {
				echo "<span style='color:green'>Image Uploaded...!</span>";
				header("Refresh:10; url=index.php");
			}
			?>
		</div>
	</body>
</html>