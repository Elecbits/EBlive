<!DOCTYPE html>
<?php

session_start();


if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>




<?php


include("../functions/functions.php");

?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  <?php
  include("public/link.php");
  ?>
</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->
<?php 

include("public/topbar.php");

?>

<!--Top bar end-->

	

<!--Logo bar start-->
<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 
<br>

<br>

   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 


  <div  class="hidden-lg " >
<br>
<br>

</div>
  
  

<!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">


     <!-- Sidebar starts-->

 <div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   


<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px;  "> My Account </div> 



<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?my_orders" style=" color: black; ">My orders</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?edit_account" style=" color: black; ">Edit Profile</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?change_pass" style=" color: black; ">Change Password</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?delete_account" style=" color: black; ">Delete  Account</a></div>


 





</div>
</div>
<div id="tag91" class="col-lg-9 ">


   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">


    


<?php

if (!isset($_GET['my_orders'])) {

  if (!isset($_GET['edit_account'])) {

    if (!isset($_GET['change_pass'])) {

      if (!isset($_GET['delete_account'])) {
        
      }
    }
  }
}

 ?>

<?php

if (isset($_GET['edit_account'])) {
  
  include("edit_account.php");
}

if (isset($_GET['change_pass'])) {
  
  include("change_pass.php");
}

if (isset($_GET['delete_account'])) {
  
  include("delete_account.php");
}

if (isset($_GET['my_orders'])) {
  
  include("my_orders.php");
}




?>




   </div>

   </div>

    </div>


<!-- sidebar ends -->

<!-- Main product panel start -->

<div id="tag91" class="col-lg-9 ">

<div  class="hidden-xs " >

</div>

  

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">








   </div>

   </div>

    </div>


    <!-- Main product panel -->
       
</div>
    
  
</div>
</div>

<!--Panel1 end-->  

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->










</body>
</html>

<?php


}

?>