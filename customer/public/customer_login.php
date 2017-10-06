<?php


include("includes/db.php");


?>

<div>

<form method="post" action="">
	<table align="center" cellspacing="100"  >
		
		<tr align="center">

			<td colspan="4"><h2>Login/Register to buy</h2></td>
		</tr>
		<tr >
			<td align="center">Email :</td>
			<td style=" padding: 10px 10px 10px 10px ; " > <input type="text" name="email" placeholder="Enter Email" required> </td>
		</tr>
		<tr >
			<td align="center">Password :</td>
			<td style=" padding: 10px 10px 10px 10px ; "> <input type="password" name="pass" placeholder="password" required> </td>
		</tr>
       <tr align="center">
			<td align="center" colspan="5" style=" padding: 10px 10px 10px 10px ; "><a href="checkout.php?forgot_pass">Forgot Password</a> </td>
		</tr>
		<tr align="center">
			<td align="center" colspan="5"> <input type="submit" name="login" value="Login"> </td>
		</tr>
		


	</table>

	 <h2 style=" float: right; text-decoration: none; padding-right: 10px; "> <a href="customer_register.php" style=" text-decoration: none; ">Register Here </a></h2> 
</form>

<?php

if (isset($_POST['login'])) {
	

	$c_email = $_POST['email'];
	$c_pass = $_POST['pass'];

	$sel_c="SELECT * FROM customers WHERE customer_email='$c_email' AND customer_pass = '$c_pass' ";

	$run_c = mysql_query( $sel_c, $con );

	$check_customer = mysql_num_rows($run_c);

	if ($check_customer == 0) {
		
		echo "<script>alert('Password or email is incorrect !')</script>";
		exit();
	}


$ip = getIp();

$sel_cart ="SELECT * FROM cart WHERE ip_add='$ip'";

$run_cart= mysql_query ($sel_cart, $con);

$check_cart = mysql_num_rows($run_cart);

if ($check_customer > 0 AND $check_cart == 0)  {
	
	 $_SESSION['customer_email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('customer/my_account.php','_self')</script>";
}

else{

$_SESSION['customer_email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('checkout.php','_self')</script>";
}
}


?>


</div>