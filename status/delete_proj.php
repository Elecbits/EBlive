<?php

include("../functions/functions.php");


if (isset($_GET['delete_id'])) {
	



	$delete_id = $_GET['delete_id'];

	$delete_pro=" DELETE FROM status WHERE order_id= '$delete_id'";

	$run_delete = mysqli_query($con , $delete_pro);

	if ($run_delete) {
		
		echo "<script>alert('Project has been deleted !')</script>";
		echo "<script>window.open('index.php?clan_project','_self')</script>";
	}
}

?>