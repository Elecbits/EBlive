<!doctype html>
<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{




?>



<html>
<head>
 <link rel="stylesheet" type="text/css" href="../../styles/alp/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../../styles/alp/css/component.css" />
    <script src="styles/alp/js/modernizr.custom.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Makerclan - Dashboard</title>
  <link href="https://cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.muicss.com/mui-latest/js/mui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


        
  <style>
    .elec-logo{
      max-width: 154px;
    }

   .form-control{
    font-size: 15px;
   }


  </style>
</head>
<body style="font-size: 16px;">
  <div id="sidedrawer" class="border-r mui--no-user-select">
    <div id="sidedrawer-brand" class="mui--appbar-line-height">
      <!-- <span class="mui--text-title">Brand.io</span> -->
      <a href="../index.php"><img class="elec-logo" src="logo.png"></a>
    </div>
    <div class="mui-divider" ></div>
    <ul >
      <li>
      <a href="index.php" style="text-decoration: none; color: black;"><strong>Trending Bids</strong></a>
     
      </li>
      <li>
        <a href="my_bids.php" style="text-decoration: none; color: black;"><strong>My Bids</strong></a>
      
      </li>
          <li>
        <a href="settings.php" style="text-decoration: none; color: black;"><strong>Settings</strong></a>
   
      </li>
    </ul>
  </div>
  <header id="header" >
    <div class="mui-appbar mui--appbar-line-height">
      <div class="mui-container-fluid" style="background-color: #f7f7f7">
        <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer" style="color: black;">☰</a>
        <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer" style="color: black;">☰</a>
        <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">
          <a href="www.elcbits.com"><img class="elec-logo" src="logo.png"></a>
        </span>






        <div class="dropdown" >

    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="font-size: 16px;">  Hi

     <?php


            $c_email =  $_SESSION['email'];

      global $con;



      $name_query="SELECT * FROM makerclan WHERE email='$c_email' or username = '$c_email'";

      $run_name_query = mysqli_query($con , $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['name'];
        $m_contact = $row_name_pro['contact'];
        $m_pin = $row_name_pro['pincode'];
        $m_address = $row_name_pro['address'];

        $add_part = explode(",", $m_address);  
     
       echo $customer_name;  }

 ?> !

            <span class="caret"></span></button>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 16px;">
    <a class="dropdown-item" href="../logout.php">Logout</a>
   
  </div>
           
          </div>





        </div>
      </div>
    </header>
    <div id="content-wrapper" style="background-color: white">
      <div class="mui--appbar-height"></div>



<br>


      <div class="mui-container-fluid">

<div class="col-lg-8">

<blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Edit your profile</p>
</blockquote>




<form method="post" action="">

<br>

<div style="border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; padding: 20px 20px 20px 20px;">


<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Name</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="name_info" value="<?php echo $customer_name ; ?>" id="example-url-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Contact</label>
  <div class="col-10">
    <input class="form-control" type="tel" name="contact" value="<?php echo $m_contact ; ?>" id="example-tel-input" required> 
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="mailid" value="<?php  echo $c_email ; ?>" id="example-password-input" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Flat/House No</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="add1" value="<?php  echo $add_part[0] ; ?>" id="example-url-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Street Name</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="add2" value="<?php  echo $add_part[1] ; ?>" id="example-url-input" required>
  </div>
</div>

<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Area/District</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="add3" value="<?php  echo $add_part[2] ; ?>" id="example-url-input" required>
  </div>
</div>


<div class="form-group row">

  <label for="example-url-input" class="col-2 col-form-label">Your location</label>
<div style="padding-left: 17px;">
     <select  name="district" required >
                      <option value="delhi" selected="selected"><?php  echo $add_part[3] ; ?></option>
                      <option value="noida">Noida</option>
                      <option value="Gurgaon">Gurgaon</option>
                      <option value="Ghaziabad">Ghaziabad</option>
                      <option value="NCR">Outside NCR</option>
                    </select>
</div>
</div>


<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Pin Code</label>
  <div class="col-10">
    <input class="form-control" type="number"  name="pin" value="<?php  echo $m_pin ; ?>" id="example-url-input" required>
  </div>
</div>



</div>

<br>


<div style="text-align: center; ">
<button type="submit" name="accept" style="font-size: 25px; padding: 10px 10px 10px 10px;" class="btn btn-success">Submit</button>

      
</div>

</form>


</div>
       





      </div>
    </div>



<br>
<br>
<br>






    <footer id="footer" style="height: 100px;">
      <div class="mui-container-fluid">
        <br>
        Made with ♥ by <a href="https://www.elecbits.in">Elecbits</a>
      </div>
    </footer>
  </body>
  </html>
<?php

if (isset($_POST['accept'])) {
  
$proj_id_application = $proj_id;
$name = $_POST['name_info'];
$contact = $_POST['contact']; 
$mailid = $_POST['mailid']; 
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$district = $_POST['district'];
$pin = $_POST['pin'];


$maker_info = "$add1, $add2, $add3, $district";




$update_info = "UPDATE makerclan SET   name = '$name' , contact = '$contact' , address = '$maker_info'  where  email = '$c_email'";

if (mysqli_query($con , $update_info)) {
    echo "<script>alert('Your form has been updated')</script>";
    echo "<script>window.open('index.php?clan_project','_self')</script>";
} else {
    echo "Error: " . $insert_info . "<br>" . mysqli_error($con);
}






}






}






?>