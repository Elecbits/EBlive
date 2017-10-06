<?php




if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{

?>


<h2 style=" text-align: center; " >Change Your password</h2>
<form method="post" action="">

<table cellspacing="20">
<tr>
 <td >Enter your password: </td> 

<td style=" padding: 10px 10px 10px 10px ; "> <input type="password" name="current_pass" required></br> </td> 
</tr>

<tr>
<td> New Password: </td>
<td style=" padding: 10px 10px 10px 10px ; "><input type="password" name="new_pass" required></br></td>

</tr>

<tr>

<td>Confirm:</td>
<td style=" padding: 10px 10px 10px 10px ; "> <input type="password" name="new_pass_again" required></td>
</tr>
<tr>
<td style=" padding: 10px 10px 10px 10px ; "><input type="submit" name="change_pass" value="change password"></td>
</tr>	

</table>
</form>

<?php

include("../includes/db.php");

if (isset($_POST['change_pass'])) {

	$user = $_SESSION['customer_email'];
	
	$current_pass = $_POST['current_pass'];

	$new_pass = $_POST['new_pass'];

	$new_pass_again = $_POST['new_pass_again'];

	$sel_pass = "SELECT * FROM customers WHERE customer_pass = '$current_pass' AND customer_email='$user' ";

	$run_pass = mysqli_query(   $con , $sel_pass   );

	$check_pass = mysqli_num_rows($run_pass);

	if ($check_pass == 0) {

		echo "<script>alert('Your current password is incorrect')</script>";
		
		exit();

		}

	if ($new_pass != $new_pass_again ) {
		
		echo "<script>alert('New password do not match!')</script>";

		exit();
	}

	else{

		$update_pass = "UPDATE customers SET customer_pass='$new_pass' WHERE customer_email ='$user'";

		$run_update_pass = mysqli_query( $con , $update_pass );

		echo "<script>alert('Your password updated successfully !')</script>";
		echo "<script>window.open('account.php','_self')</script>";

	}


}
?>


<?php  } ?>