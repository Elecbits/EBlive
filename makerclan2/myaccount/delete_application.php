<?php

if (isset( $_GET['project'] )){
	

include("../../functions/functions.php");
	

	$del = $_GET['project'];
	
	$delete_id = explode(",", $del);
     



	$delete_cat=" DELETE FROM applied_form WHERE project_id= '$delete_id[0]' AND user = '$delete_id[1]'";

	$run_delete = mysqli_query(  $con  , $delete_cat );

	if ($run_delete) {
		
		echo "<script>alert('Application has been deleted !')</script>";
		echo "<script>window.open('my_bids.php','_self')</script>";
	}
}



?>