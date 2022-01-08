<?php 
require_once ('dbcontroller.php');

$db_handle = new dbController(); // calling dbcontroller class which define in another page

if (!empty($_POST['country_id'])) {
	$query = "select * from states where countryID = '" .$_POST['country_id']. "' order by state_name asc";
	$results = $db_handle->runQuery($query);
	?>
	<option value disabled selected>Select State</option>
	<?php
	foreach ($results as $state) {
		?>
		<option value="<?php echo $state['id']; ?>"><?php echo $state['state_name']; ?></option>
		<?php
	}
}

?>