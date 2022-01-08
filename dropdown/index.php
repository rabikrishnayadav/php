<?php 
require_once('dbcontroller.php');
$db_handle =  new dbController();
$query = "select * from country";
$results = $db_handle->runQuery($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select Option</title>
	<?php include '../user/link.php' ?>

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: 'Baloo Paaji 2' cursive;
		}
		.mycls{
			width: 300px;
			float: left;
			padding: 10px;
		}
		.myfrm{
			border: 5px solid #7ddaff;
			border-radius: 10px;
			border-color: black;
			min-height: 400px;
			background: -webkit-linear-gradient(left, gold, green);
		}
	</style>
</head>
<body  style="background-color:#b4c8d0">
<h2 class="text-center bg-info p-2">Dependent Dropdown List</h2><br><br>
<div class="container myfrm">
	<h4 class="text-center text-center my-5">Please select the Country then State and City to continue</h4>
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<form>
				<div class="form-content">
					<div class="input-group mb-3 mycls">
						<div class="input-group-prepend">
							<span class="input-group-text">Country</span>
						</div>

						<select class="form-control" name="country" id="country-list" aria-describedby="basic-addon1" data-toggle="tooltip" title="Please Select The Country"  onChange="getState(this.value);">
							<option value disabled selected>Select Country</option>
							<?php
							foreach($results as $country){
							?>
							<option value="<?php echo $country['id']; ?>"><?php echo $country['country_name'];?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="input-group mb-3 mycls">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon2">State</span>
						</div>

						<select class="form-control" name="state" id="state-list" aria-describedby="basic-addon1" onChange="getCity(this.value);">
							<option value disabled selected>Select State</option>
						</select>
					</div>
					<div class="input-group mb-3 mycls">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">City</span>
						</div>

						<select class="form-control" name="city" id="city-list" aria-describedby="basic-addon1">
							<option value disabled selected>Select City</option>
						</select value disabled selected>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="jquery-3.5.1.min.js"></script>

<script type="text/javascript">
	
	function getState(value){
		$.ajax({
			type: "POST",
			url: "getState.php",
			data: 'country_id='+value,
			success: function(data){
				$("#state-list").html(data);
				getCity();
			}
		});
	}

	function getCity(value){
		$.ajax({
			type: "POST",
			url: "getCity.php",
			data: 'state_id='+value,
			success: function(data){
				$("#city-list").html(data);
			}
		})
	}

</script>



</body>
</html>