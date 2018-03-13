<!doctype html>
<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{


if (isset($_GET['project'])) {


  $proj_id = $_GET['project'];



 $get_pro="SELECT * FROM project_details where project_id = '$proj_id'";

$run_pro =mysqli_query($con , $get_pro);

$row_pro=mysqli_fetch_array($run_pro);

  $proj_id= $row_pro['project_id'];
  $proj_title= $row_pro['project_name'];
  $proj_desc= $row_pro['project_desc'];
  $proj_doc= $row_pro['design_doc'];

  $max_bid= $row_pro['max_bid'];
$bid = explode("|", $max_bid);


  $proj_raw_materials= $row_pro['raw_materials'];
  $proj_last_date= $row_pro['last_date'];            

}


 


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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


        
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

$comp_req = '';

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

<div class="col-lg-12 row">

  <div class="col-lg-8">

<blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Applying For - <?php echo $proj_title; ?></p>
</blockquote>


<br>







<hr>




<div style="border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; padding: 20px 20px 20px 20px;">



<form method="post" action="">

<!--

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Max Bid</label>
  <div class="col-10">

<div ng-app="myApp" ng-controller="myCtrl">

<input type="radio" ng-model="components" name="components" value="Use our components">Our Components<br/>
<input type="radio" ng-model="components" name="components" value="Use your components">Your Components<br/>

   <input class="form-control"  min="1" max="{{components=='Use our components'?<?php echo $bid[0]; ?>:<?php echo $bid[1]; ?>}}"  type="number" name="bid" value="{{components=='Use our components'?<?php echo $bid[0]; ?>:<?php echo $bid[1]; ?>}}" id="example-text-input" required>
    <input type="hidden" class="form-control"  name="compo" value="{{components=='Use our components'?<?php echo $bid[0]; ?>:<?php echo $bid[1]; ?>}}" id="example-text-input" >



{{components}}
</div>


 
  </div>
</div>-->
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Expected Date</label>
  <div class="col-10">
    <input class="form-control" type="date" name="exp_date" value="<?php  echo $proj_last_date ; ?>" max='<?php  echo $proj_last_date ; ?>' id="example-datetime-local-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Raw Material</label>
  <div class="col-10">
    <textarea class="form-control" cols="10" rows="3" type="text" name="raw_mat" id="example-email-input" required><?php echo $proj_raw_materials; ?></textarea>
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Additional Instructions</label>
  <div class="col-10">
    <textarea class="form-control" cols="10" rows="3" type="text" name="add_inst" id="example-email-input" required></textarea>
  </div>
</div>


</div>
<br>
<hr>
<br>

</div>

<div class="col-lg-4">

<div style="border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; padding: 20px 20px 20px 20px;">

 <p style="font-weight: 900;">Address</p>
 <?php echo $customer_name ; ?><br>
 <?php echo $m_contact ; ?> <br>
 <?php  echo $c_email ; ?> <br>
 <?php  echo $add_part[0] ; ?>
 <?php  echo $add_part[1] ; ?><br>
 <?php  echo $add_part[2] ; ?><br>
 <?php  echo $add_part[3] ; ?> -
 <?php  echo $m_pin ; ?> 

 <br>
 <br>
 

 <a href='settings.php'><button type="button"   class="btn btn-primary"  style="font-size: 16px;">Update Address</button></a>


<div class="form-group row">
   <div class="col-10">
    <input class="form-control" type="hidden"  name="name_info" value="<?php echo $customer_name ; ?>" id="example-url-input" required>
  </div>
</div>
<div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="hidden" name="contact" value="<?php echo $m_contact ; ?>" id="example-tel-input" required> 
  </div>
</div>
<div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="hidden"  name="mailid" value="<?php  echo $c_email ; ?>" id="example-password-input" disabled>
  </div>
</div>
<div class="form-group row">
 
  <div class="col-10">
    <input class="form-control" type="hidden"  name="add1" value="<?php  echo $add_part[0] ; ?>" id="example-url-input" required>
  </div>
</div>
<div class="form-group row">
 
  <div class="col-10">
    <input class="form-control" type="hidden"  name="add2" value="<?php  echo $add_part[1] ; ?>" id="example-url-input" required>
  </div>
</div>

<div class="form-group row">
  
  <div class="col-10">
    <input class="form-control" type="hidden"  name="add3" value="<?php  echo $add_part[2] ; ?>" id="example-url-input" required>
  </div>
</div>


<div class="form-group row">

  
<div style="padding-left: 17px;">
     <select  name="district" hidden >
                      <option value="delhi" selected="selected"><?php  echo $add_part[3] ; ?></option>
                        </select>
</div>
</div>


<div class="form-group row">
 
    <input class="form-control" type="hidden"  name="pin" value="<?php  echo $m_pin ; ?>" id="example-url-input" required>

</div>



</div>

</div>

<br>


<div style="text-align: center; ">
<button type="submit" name="accept" style="font-size: 25px; padding: 10px 10px 10px 10px;" class="btn btn-success">Submit</button>

      




</form>




</div>

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

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
});
</script>





  </body>
  </html>
<?php

if (isset($_POST['accept'])) {
  
$bid_a = $_POST['compo'] ; 
$proj_id_application = $proj_id;
$bid = $_POST['bid'];
$exp_date = $_POST['exp_date'];
$raw_mat = $_POST['raw_mat']; 
$add_tt = $_POST['add_inst']; 
$name = $_POST['name_info'];
$contact = $_POST['contact']; 
$mailid = $_POST['mailid']; 
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$district = $_POST['district'];
$pin = $_POST['pin'];

$add_inst = "$bid_a , $add_tt";




$maker_info = "$add1, $add2, $add3, $district, $pin";

$upsert_query = "SELECT project_id from applied_form where project_id = '$proj_id_application' and user = '$c_email'";

$run_upsert_query = mysqli_query($con , $upsert_query);

$count_upsert_query = mysqli_num_rows($run_upsert_query);

if ($count_upsert_query == 0) {
    $insert_form = "INSERT INTO applied_form (project_id , user, max_bid, pick_up_date, raw_mat_add, add_info, maker_info) VALUES ('$proj_id_application','$c_email','$bid','$exp_date','$raw_mat','$add_inst','$maker_info') ";


if (mysqli_query( $con , $insert_form )) {
    echo "New record created successfully";

    echo "<script>alert('You have successfully applied')</script>";
    echo "<script>window.open('index.php','_self')</script>";
} 



else {
    echo "Error: " . $insert_product . "<br>" . mysql_error($con);
}

}

else

{


$update_info = "UPDATE applied_form SET   max_bid = '$bid' , pick_up_date = '$exp_date' , raw_mat_add = '$raw_mat' , add_info = '$add_inst' , maker_info = '$maker_info'  where project_id = '$proj_id_application' and user = '$c_email'";

if (mysqli_query($con , $update_info)) {
    echo "<script>alert('Your form has been updated')</script>";
    echo "<script>window.open('index.php?clan_project','_self')</script>";
} else {
    echo "Error: " . $insert_info . "<br>" . mysqli_error($con);
}






}






}





}
?>