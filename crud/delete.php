<?php
include 'connection.php';
$id =$_GET['id'];
$deletequery = "delete from jobregistration where id = $id";
$delete_from_db = mysqli_query($connection, $deletequery);
if ($delete_from_db) {
?>
<script type="text/javascript">
	alert('Data Remove from the Database');
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert('Not Deleted');
</script>
<?php
}
header('location:display.php');
?>


// for reg with img
<?php 
$id =$_GET['id'];
$deletequery = "delete from reg_with_img where id = $id";
$delete_from_db = mysqli_query($connection, $deletequery);
if ($delete_from_db) {
?>
<script type="text/javascript">
	alert('Data Remove from the Database');
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert('Not Deleted');
</script>
<?php
}
header('location:display_with_img.php');
?>
