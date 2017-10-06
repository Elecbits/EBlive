<?php

if (isset($_GET['delete_comp'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_comp'];
	

	$delete_cat = " DELETE FROM components WHERE comp_id= '$delete_id'";

	$drop_table = " ALTER TABLE components DROP comp_id ";

    $add_table =  "ALTER TABLE components ADD comp_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ";


	$run_delete = mysqli_query($con , $delete_cat);

	$run_drop = mysqli_query($con , $drop_table  );
    $run_add_table = mysqli_query($con , $add_table);

	 if (($run_delete)&&($run_drop)&&($run_add_table)) {
		
		echo "<script>alert('components has been deleted !')</script>";
		echo "<script>window.open('index.php?view_comp','_self')</script>";
	}
}



?>