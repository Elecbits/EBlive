<?php

if (isset($_GET['delete_cat'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_cat'];

	$delete_cat=" DELETE FROM categories WHERE cat_id= '$delete_id'";

	


	$run_delete = mysql_query( $delete_cat, $con);

	
	 if (($run_delete)) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
	}
}



?>