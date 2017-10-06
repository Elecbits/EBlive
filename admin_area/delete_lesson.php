<?php

if (isset($_GET['delete_less'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_less'];

	$delete_pro=" DELETE FROM lesson WHERE lesson_id= '$delete_id'";

	$run_delete = mysqli_query($con , $delete_pro);

	if ($run_delete) {
		
		echo "<script>alert('lesson has been deleted !')</script>";
		echo "<script>window.open('index.php?view_lesson','_self')</script>";
	}
}



?>