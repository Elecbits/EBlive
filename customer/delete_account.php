<?php



if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>
<h2>Do you really wanna delete your account ?</h2>

<form action="" method="post">
<input type="submit" name="yes" value="Yes I want">
<input type="submit" name="no" value="No I was Joking">
</form>

<?php

include("../includes/db.php");

$user = $_SESSION['customer_email'];


if (isset($_POST['yes'])) {
	

	$delete_customer = "DELETE FROM customers WHERE customer_email='$user'";

	$run_delete_customer = mysqli_query( $con, $delete_customer );

	echo "<script>alert('Your account has been deleted !')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
}


if (isset($_POST['no'])) {
	

	

	echo "<script>alert('You are a valuable customer to us !')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";
}


?>


<?php  }  ?>