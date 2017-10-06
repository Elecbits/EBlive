<!DOCTYPE html>
<?php

session_start();
include("../functions/functions.php");
include("../includes/db.php");

if (isset($_SESSION['customer_email'])) {
  
echo "<script>alert('You have already logged in successfully')</script>";  
echo "<script>window.open('index.php','_self')</script>";

}

else{


?>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Elecbits Accounts</title>
    
    
    <link rel="stylesheet" href="../styles/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="../styles/css/stylelogin.css">

    
    
    
  </head>

  <body>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <a href="index.php"><h1><img src="../images/logo1.png"></h1></a>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form method="post" action="" >
      <input type="email"   name="email"  placeholder="Email" required/>
      <input type="password" name="pass" placeholder="Password" required/>
      <button type="submit" name="login">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form method="post" action=" ">
      <input type="text" name="c_name" placeholder="Name"  required/>
      <input type="password"  name="c_pass" placeholder="Password" required/>
      <input type="email" name="c_email" placeholder="Email Address" required/>
      <input type="tel"  name="c_contact" placeholder="Phone Number"  required/>
      <button type="submit" name="register" >Register</button>
    </form>
  </div>
 
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


        <script src="../styles/js/login.js"></script>

    
    
    
  </body>
</html>


<?php

if (isset($_POST['login'])) {
  

  $c_email = $_POST['email'];
  $c_pass = $_POST['pass'];

  $sel_c="SELECT * FROM learn WHERE customer_email='$c_email' AND customer_pass = '$c_pass' ";

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
echo "<script>window.open('myaccount/index.php','_self')</script>";
}

else{

$_SESSION['customer_email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('myaccount/index.php','_self')</script>";
}
}


?>




 <?php
if (isset($_POST['register'])) {


  $ip= getIp();

  $c_name= $_POST['c_name'];


  $c_email= $_POST['c_email'];

  $c_pass= $_POST['c_pass'];

 

  $c_contact= $_POST['c_contact'];

 



 $insert_c ="INSERT INTO learn (customer_ip, customer_name, customer_email, customer_pass, customer_contact) VALUES ('$ip', '$c_name','$c_email','$c_pass', '$c_contact')";


$run_c= mysqli_query($con, $insert_c);

$sel_cart ="SELECT * FROM cart WHERE ip_add='$ip'";

$run_cart= mysqli_query($con, $sel_cart);

$check_cart = mysqli_num_rows($run_cart);



if ($check_cart == 0) {

  $_SESSION['customer_email']= $c_email;

echo "<script>alert('Account has been successfully created')</script>";
echo "<script>window.open('myaccount/index.php','_self')</script>";
  
  }

  else
  {
    $_SESSION['customer_email']= $c_email;

echo "<script>alert('Account has been successfully created')</script>";
echo "<script>window.open('checkout.php','_self')</script>";
  }
  
}

}

?>

