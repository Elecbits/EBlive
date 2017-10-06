<!doctype html>

<?php

session_start();

include("functions/functions.php");



?>

<head>
<style type="text/css">

</style>
<link rel="stylesheet" type="text/css" href="styles/css/form.css">

</head>





<div class="form-style-5">
<form method="post" action=" ">
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="name" placeholder="Your Name *">
<input type="email" name="email" placeholder="Your Email *">
<input type="number" name="phone" placeholder="Your mobile number *">

 <label><input type="radio" value="F" name="gender" checked="checked"><span></span>&nbsp Female</label>
                    <label><input type="radio" value="M" name="gender"><span></span>&nbsp  Male</label>


 <label for="sectional-text-2">Your location</label>
                    <select name="location" >
                      <option selected="selected" >Your Location</option>
                      <option >New Delhi</option>
                      <option >Noida</option>
                      <option >Gurgaon</option>
                                            <option value="us">Ghaziabad</option>
                                            <option value="us">Outside NCR</option>
                    </select>

<textarea name="address" cols="30" rows="4" placeholder="Your Address"></textarea>

     
</fieldset>
<fieldset>
<legend><span class="number">2</span> Product Details</legend>
<label for="job">Category *</label>
<select name="cat"  >
                      <option   >Choose a category</option>
                       <?php 

        $get_cats = "select * from categories";
    $run_cats = mysqli_query($con , $get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       
                    </select>

<label for="job">Project *</label>
 <select name="pro" data-required="true">
                      <option  selected="selected" >Choose a project.</option>
                      
 <?php 

        $get_pro = "select * from products";
    $run_pro = mysqli_query($con , $get_pro);


    while ($row_pro = mysqli_fetch_array($run_pro) ) 
    {
      
      $pro_title = $row_pro['product_title'];

        
          
        echo "<option><strong>$pro_title<strong></option>";
        
        
     
        

    } ?>
       






                    </select>

<label for="job">Your plan *</label>
<select id="job" name="plan">
  <option >Choose your plan</option>
  <option >1 day - Get a project for a day at &#8377; 600 - &#8377; 1000 (Depending on the project.)</option>
  <option>1 week - Get a project for a week at &#8377; 1000 - &#8377; 2000 (Depending on the project.) </option>
  <option>1 month - Get a project for a month (Security money and deductions later on.)</option>
</select> 

  <label >Delivery date <span style="font-size: 12px; color: green; ">(Closest date  <?php echo date('d-m-Y', strtotime("+3 day")); ?>) :</span> </label>
              &nbsp  &nbsp<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+3 day")); ?>' >
              

<label for="job">Pickup Location </label>
<select id="job" name="pickl" >
  <option >Choose Pickup Location</option>
  <option >South Delhi </option>
  <option >West Delhi</option>
</select> 

<label for="job">Other details</label>
<textarea name="otherd" cols="30" rows="4"  placeholder="If you needed a customized product, not present in our list. Please mention the details."></textarea>



</fieldset>
<input type="submit" value="Apply" name="sc" />
</form>
</div>













<?php

if (isset($_POST['sc']))

 {
  
$name = $_POST['name'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$cat = $_POST['cat'];
$project = $_POST['pro'];
$plan = $_POST['plan'];
$devd= $_POST['ddate'];
$pickl = $_POST['pickl'];
$otherd = $_POST['otherd'];




$yourdetails = "$name $location $email $phone $gender $address";
$projdetails = "$cat $project $devd $pickl $otherd $plan";

$send = "$yourdetails $projdetails";
$from = "From: Techsupport@elecbits.in";



$run_rent ="INSERT into rent (yourdetails, projdetails) values ('$yourdetails', '$projdetails')  ";

$run_query_rent = mysql_query( $run_rent, $con);

if (  ($run_query_rent)  && (mail("saurav.rav67@gmail.com", "Rent", $send, $from)) && (mail($email, "Successfully Registered ", "Your rent application has been successfully registered at Elecbits, Have a great shopping experience.  Meanwhile visit us at http://elecbits.in " , $from)) && (mail("elecbits16@gmail.com", "New Addition", $send, $from) ) ) {



  
 echo "<script>alert('Response has been added')</script>";
    echo "<script>window.open('rent.php','_self')</script>";
} 








 }


?>