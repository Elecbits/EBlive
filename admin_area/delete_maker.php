<?php

if (isset($_GET['delete_pro'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_pro'];

	$delete_pro=" DELETE FROM makerclan WHERE email= '$delete_id'";

	$run_delete = mysqli_query($con , $delete_pro);

	if ($run_delete) {
		
		echo "<script>alert('Project has been deleted !')</script>";
		echo "<script>window.open('index.php?add_makers','_self')</script>";
	}
}



?>