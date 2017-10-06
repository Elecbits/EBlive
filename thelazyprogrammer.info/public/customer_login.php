<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
   <?php

session_start();
include("../functions/functions.php");
include("../includes/db.php");

?>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>
  <style type="text/css">
  	/* CSS Document */

/*
 * IMporting the font
*/	
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab|Roboto);

/*
 * General styling
 */
body {
	padding:0;
	margin:0;
	background-color:#ecf0f1;
	}
	
.clear {
	clear:both;
	width:100%;
	}	
	
h1{
	margin:40px auto;
	padding:0;
	font-family: 'Roboto Slab', serif;
	font-size:100px;
	font-weight:1000;
	color:#2980b9;
	text-align:center;
	}	

/*
 * Styling the container for the login form.
 */

.login {
	width:350px;
	padding:25px;
	margin:50px auto;
	background-color:#2c3e50;
	}
/*
 * Styling the Lables and checkbox font
 */
		
label {
	font-size:24px;
	font-family: 'Roboto Slab', serif;
	color:#fff;
	}
	
.check {
	font-size:15px;
	font-family: 'Roboto Slab', serif;}		

/*
 * General Input Style
 */
		
input[type="text"],
input[type="password"],
input[type="submit"],
input[type="button"]  {
	width: calc(100% - 33px);
	margin:10px 0 10px 0;
	padding:15px;
	border: solid 1px #ccc;
	font-size:20px;
	background-color:#ecf0f1;
	}	

/*
 * Styling the Buttons
 */
		
input[type="submit"],
input[type="button"] {
	position:relative;
	width:calc(50% - 13px);
	background-color:#3498db;
	border:none;
	color:#FFF;
	
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	transition: all 0.1s;
	
	-webkit-box-shadow: 0px 9px 0px #2980b9;
    -moz-box-shadow: 0px 9px 0px #2980b9;
    box-shadow: 0px 9px 0px #2980b9;
	}
	
input[type="submit"]:active,
input[type="button"]:active{
	
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	transition: all 0.1s;
	
    position:relative;
    top:7px;
	
    -webkit-box-shadow: 0px 2px 0px #16a085;
    -moz-box-shadow: 0px 2px 0px #16a085;
    box-shadow: 0px 2px 0px #16a085;
}	
	
input[type="submit"] {
	float:right;
	}	

/*
 * Styling the checkbox
 */
		
input[type="checkbox"] {
	-webkit-appearance: none;
	background-color: #fafafa;
	border: 1px solid #cacece;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
	padding: 9px;
	border-radius: 3px;
	position: relative;
}

input[type="checkbox"]:active, .input[type="checkbox"]:checked:active {
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
}

input[type="checkbox"]:checked {
	background-color: #e9ecee;
	border: 1px solid #adb8c0;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
	color: #99a1a7;
}

input[type="checkbox"]:checked:after {
	content: '\2714';
	font-size: 14px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: #99a1a7;
}

  </style>

  <body>

   
<!-- Login Container -->
<section class="login">
    <form action="" method="post">
    	
        <!-- The Username Field -->
        <label for="username">Username
        <input type="text" name="email" placeholder="Enter Email" required>
    	</label>
        
        <!-- The Password Field -->
        <label for="password">Password
        <input type="password" name="pass" placeholder="password" required>
        </label>
        
        <!-- The Remember Me Checkbox -->
      
        <!-- Clearn both sides -->
        <div class="clear"></div>
        
        <!-- Recover Button -->
       <a href="../customer_register.php "> <input type="button" value="Register" /> </a>
        
        <!-- The Login Button -->
       <input type="submit" name="login" value="Login">
    </form>
    </section>
    
    
    
    
    
  </body>
</html>



<?php

if (isset($_POST['login'])) {
	

	$c_email = $_POST['email'];
	$c_pass = $_POST['pass'];

	$sel_c="SELECT * FROM customers WHERE customer_email='$c_email' AND customer_pass = '$c_pass' ";

	$run_c = mysqli_query($con, $sel_c);

	$check_customer = mysqli_num_rows($run_c);

	if ($check_customer == 0) {
		
		echo "<script>alert('Password or email is incorrect !')</script>";
		exit();
	}


$ip = getIp();

$sel_cart ="SELECT * FROM cart WHERE ip_add='$ip'";

$run_cart= mysqli_query($con, $sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if ($check_customer > 0 AND $check_cart == 0)  {
	
	 $_SESSION['customer_email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('../customer/my_account.php','_self')</script>";
}

else{

$_SESSION['customer_email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('../checkout1.php','_self')</script>";
}
}


?>


</div>