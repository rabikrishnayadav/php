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
	</style>
</head>
<body>
<h2 class="text-center bg-info p-2">Dependent Select Option Box</h2><br><br>
<div class="container">
	<h4 class="text-center text-center my-5">Please select the program and framework to continue</h4>
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<form>
				<div class="form-content">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">PROGRAM</span>
						</div>

						<select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip" title="Please Select Your Fav Lang" onchange="mylang(this.value)">
							<option>Select Here</option>
							<option>PHP</option>
							<option>JAVASCRIPT</option>
							<option>PYTHON</option>
						</select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon2">FRAMEWORK</span>
						</div>

						<select class="form-control" id="frameworklist" aria-describedby="basic-addon1">
							<option>Select Here</option>
						</select>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	
function mylang(data){

	const ajaxreq = new XMLHttpRequest();
	ajaxreq.open('GET','http://localhost/php/select_option/getdata.php?selectvalue='+data,'TRUE');
	ajaxreq.send();

	ajaxreq.onreadystatechange = function(){
		if (ajaxreq.readyState == 4 && ajaxreq.status ==200) {
			document.getElementById('frameworklist').innerHTML = ajaxreq.responseText;
		}
	}
}

</script>



</body>
</html>