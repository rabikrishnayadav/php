<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registeration Form</title>
	<?php include 'links.php' ?>
	<style type="text/css">
			.input1{
				width: 250px;
				height: 40px;
				padding: 5px;
				outline: none;
				border-radius: 1px solid gray;
				border-radius: 5px;
			}
		</style>
</head>
<body class="bg-info">
<header class="text-center font-weight-bold"><h1>Registration Form</h1><hr></header>
<div class="container bg-primary" style=" height:400px; border-top-left-radius: 65px; border-bottom-left-radius: 65px;">
	<div class="row">
		<div class="col-md-3 text-light text-center" style="margin-top:100px;">
			<h3>Welcome</h3>
			<p>Please fill all the details carefully. This form can change your life</p>
			<a href="display.php" class="btn btn-warning">Check Form</a><br>
		</div>
		<div class="col-md-9" style="background-color: #dfe6e9;
				border-top-left-radius: 65px; border-bottom-left-radius: 65px; margin-top:30px;">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active text-center" id="home" role="tabpane1" aria-labelledby="home-tab" style="padding:50px;">
					<h3 class="register-heading">Apply for Web Developer Post</h3>
					<form action="#" method="Post" onsubmit="return validation()">
						<div>
						<input type="text" name="name" placeholder="enter your name*" class="input1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <input type="text" name="degree" placeholder="enter your qualification*" class="input1">
					    </div>
					    <div style="padding-top:10px;">
						<input type="text" name="mobile" placeholder="mobile number*" class="input1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <input type="text" name="email" placeholder="email id*" class="input1">
					    </div>
					    <div style="padding-top:10px;">
						<input type="text" name="refer" placeholder="Any references*" class="input1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <input type="text" name="jobpost" placeholder="Web Developer*" class="input1" id="jobpost"><br>
					    <span id="postid" class="text-danger font-weight-bold"></span>
					    </div>
					    <div style="padding-right:100px; padding-top:30px; float:right;">
					    	<input type="submit" name="submit" value="Register" class="btn btn-primary">
					    </div><br><br>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php include 'connection.php'; 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$degree = $_POST['degree'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$refer = $_POST['refer'];
	$jobprofile = $_POST['jobpost'];

	$insertquery = "insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile')";

	$insert_into_db = mysqli_query($connection, $insertquery);
    if ($insert_into_db) {
    	?>
    	<script type="text/javascript">
    		alert('data inserted properly');
    	</script>
    	<?php
    }else{
    	?>
    	<script type="text/javascript">
    		alert('data not inserted');
    	</script>
    	<?php
    }

}


?>


<script type="text/javascript">
	function validation(){
	var jobprofile = document.getElementById('jobpost').value;
	if (jobprofile =="") {
		document.getElementById('postid').innerHTML = "**fil this**";
		return false;
	}
	}
</script>