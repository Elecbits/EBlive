<?php

if (isset($_GET['delete_admin'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_admin'];

	$delete_cat=" DELETE FROM admin WHERE user_id= '$delete_id'";

	


	$run_delete = mysql_query( $delete_cat, $con);

	
	 if (($run_delete)) {
		
		echo "<script>alert('Admin has been deleted !')</script>";
		echo "<script>window.open('index.php?view_admins','_self')</script>";
	}
}



?>