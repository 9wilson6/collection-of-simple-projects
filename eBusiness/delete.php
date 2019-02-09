<?php 
if (isset($_REQUEST['id'])) {
	$id= $_REQUEST['id'];
	require 'config.php';
	$query="DELETE FROM orders WHERE id ='$id'";
	$results=mysqli_query($conn, $query)or die(mysqli_error($conn));
	if ($results==1) {
		header("LOCATION:carOrderList.php");
	}
}
 ?>