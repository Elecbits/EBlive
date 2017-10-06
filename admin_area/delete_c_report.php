<?php

if (isset($_GET['delete_c_report'])) {
	

	include("includes/db.php");

	$order_id = $_GET['delete_c_report'];

	$delete_cat=" DELETE FROM c_report WHERE order_id= '$order_id'";

	
	$run_delete = mysqli_query($con , $delete_cat);


	 if (($run_delete)) {
		
		echo "<script>alert('Report has been deleted !')</script>";
		echo "<script>window.open('index.php?view_c_report','_self')</script>";
	}
}



?>