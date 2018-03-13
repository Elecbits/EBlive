<?php

if (isset($_GET['delete_pro']) && isset($_GET['cid']) ) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_pro'];
   $customer_id= $_GET['cid'];


	$delete_pro=" DELETE FROM applied_form WHERE project_id= '$delete_id' && user = '$customer_id' ";

	$run_delete = mysqli_query( $con , $delete_pro  );

	if ($run_delete) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?accept_list','_self')</script>";
	}
}



?>