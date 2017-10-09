<?php

if (isset($_GET['delete_pro'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_pro'];

	$delete_pro=" DELETE FROM applied_form WHERE project_id= '$delete_id'";

	$run_delete = mysqli_query( $con , $delete_pro  );

	if ($run_delete) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?accept_list','_self')</script>";
	}
}



?>