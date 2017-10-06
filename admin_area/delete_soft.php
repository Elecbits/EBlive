<?php

if (isset($_GET['delete_soft'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_soft'];

	$delete_pro=" DELETE FROM software WHERE soft_id= '$delete_id'";

	$run_delete = mysqli_query( $con , $delete_pro);

	if ($run_delete) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?view_soft','_self')</script>";
	}
}



?>