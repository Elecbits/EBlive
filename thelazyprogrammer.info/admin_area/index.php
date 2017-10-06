<?php

session_start();
include("includes/db.php");
if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>



<!DOCTYPE html>


<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  <meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles/custom.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->

<div class="container-fluid" style="font-family: 'Montserrat', sans-serif; font-size: 12px;   background-color: #ECECEB; padding:10px 0px 0px 0px; margin: 0px 0px 
0px 0px;">

<!-- Top bar start -->


<!--Top bar end-->

	

<!--Logo bar start-->
<div id="logobar" >
<div class="container">
    <div id="tag121"  class="col-lg-12">
          <a href="index.php">  <img src="../images/logo.png" width="250" style="padding: 20px 0px 20px 10px; "></a>

<h3 style="float: right; padding: 10px 100px 0px 100px; ">MANAGE YOUR CONTENT</h3>
     
    
     
    </div>
    
</div>
</div>
<!--Logo bar end-->

<!--Menu bar start-->

   <!-- Menu bar end--> 

<!--Panel1--> 
  <div class="body" >
  <div class="container">
  
  <div class="panel panel-default">
 
    <div id="pb1" class="panel-body" style=" padding: 100px 0px 100px 20px; ">
    
   
     <div class="tag126" class="col-lg-12 bg-primary">
     
 <div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   


<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px;  "> ADMIN PANEL </div> 

<hr>


<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a style=" color: black; ">Insert Posts</a></div>
<br>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_product_android" style=" color: black; ">Insert Android posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_product_c" style=" color: black; ">Insert C posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_product_cplus" style=" color: black; ">Insert C++ posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_product_java" style=" color: black; ">Insert Java posts</a></div>

<hr>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_products" style=" color: black; ">View Posts</a></div>

<br>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_products_android" style=" color: black; ">Android Posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_products_c" style=" color: black; ">C posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_products_cplus" style=" color: black; ">C++ Posts</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_products_java" style=" color: black; ">Java Posts</a></div>

<hr>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_cat" style=" color: black; ">Insert Categories</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_cats" style=" color: black; ">View Categories</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?insert_subcat" style=" color: black; ">Insert Sub-Categories</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_subcats" style=" color: black; ">View Sub-categories</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?add_users" style=" color: black; ">Add admins</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="index.php?view_admins" style=" color: black; ">View admins</a></div>

<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="logout.php" style=" color: black; ">Admin Logout</a></div>


 





</div>
</div>
<div id="tag91" class="col-lg-9 ">


   

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 20px 100px 20px; ">

   <?php echo @$_GET['logged_in']; ?>

   
   <?php

   if (isset($_GET['insert_product'])) {
     

     include("insert_products.php");
   }

   if(isset($_GET['view_products'])) {
     

     include("view_products.php");
   }

  
   if(isset($_GET['edit_pro'])) {
     

     include("edit_pro.php");
   }


   if(isset($_GET['insert_cat'])) {
     

     include("insert_cat.php");
   }
   if(isset($_GET['view_cats'])) {
     

     include("view_cats.php");
   }

   if(isset($_GET['edit_cat'])) {
     

     include("edit_cat.php");
   }
   if(isset($_GET['edit_subcat'])) {
     

     include("edit_subcat.php");
   }

   if(isset($_GET['insert_subcat'])) {
     

     include("insert_subcat.php");
   }
   if(isset($_GET['view_subcats'])) {
     

     include("view_subcats.php");
   }

    if(isset($_GET['add_users'])) {
     

     include("add_user.php");
   }

       if(isset($_GET['view_admins'])) {
     

     include("view_admins.php");
   }


 if(isset($_GET['insert_product_android'])) {
     

     include("insert_products_android.php");
   }


 if(isset($_GET['insert_product_c'])) {
     

     include("insert_product_c.php");
   }

 if(isset($_GET['insert_product_cplus'])) {
     

     include("insert_product_cplus.php");
   }

 if(isset($_GET['insert_product_java'])) {
     

     include("insert_product_java.php");
   }


   if(isset($_GET['view_products_android'])) {
     

     include("view_products_android.php");
   }

 if(isset($_GET['view_products_c'])) {
     

     include("view_products_c.php");
   }


  if(isset($_GET['view_products_cplus'])) {
     

     include("view_products_cplus.php");
   }


 if(isset($_GET['view_products_java'])) {
     

     include("view_products_java.php");
   }


  
   ?>



      

   </div>

   </div>

    </div>
       
</div>
    
  
</div>
</div>
</div>
</div>
<!--Panel1 end-->  

<!--footer start-->

<div class="container-fluid" style="font-family: 'Montserrat', sans-serif; font-size: 12px;   background-color: #0070FF; padding:10px 0px 0px 0px; margin: 0px 0px 
0px 0px;">

<!-- footer start -->
<div id="footbar">
  <div class="nav navbar-nav" style=" float: left;  padding: 0px 40px 10px 40px; margin: 0px 0px 0px 0px; ">

  <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspTerms & Condition</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-heart" style="vertical-align: text-top; padding-right:10px;"></span>&nbspPrivacy policy</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-phone-alt" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspCustomer Service</a> 
    <a href="#" style="padding-left: 20px; "><span  id="g2" class="glyphicon glyphicon-thumbs-up" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspPartner Us</a> 
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-envelope" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspContact Us</a> 
  
   
    </div>
 </div> 

</div> 

<!--footer end-->

</div>








</body>
</html>

<?php } ?> 