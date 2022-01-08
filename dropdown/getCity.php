<?php 
require_once ('dbcontroller.php');

$db_handle = new dbController(); // calling dbcontroller class which define in another page

if (!empty($_POST['state_id'])) {
	$query = "select * from city where stateID = '" .$_POST['state_id']. "' order by city_name asc";
	$results = $db_handle->runQuery($query);
	?>
	<option value disabled selected>Select City</option>
	<?php
	foreach ($results as $city) {
		?>
		<option value="<?php echo $city['id']; ?>"><?php echo $city['city_name']; ?></option>
		<?php
	}
}

?>