<!DOCTYPE html>
<?php
include("functions/functions.php");

?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  
   <link rel="stylesheet" type="text/css" href="styles/alp/css/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/alp/css/component.css" />
    <script src="styles/alp/js/modernizr.custom.js"></script>
  
  
  
  
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
<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 
   <!-- Menu bar end-->  
  <div class="body" >
  <div class="container">


  
  
     <div class="tag126" class="col-lg-12 bg-primary">
     
 <!-- Sidebar starts-->
 <div class="hidden-lg" > 
     
 <?php

include("public/sidebar.php");

 ?>

</div>

<div class="hidden-xs hidden-md hidden-sm " > 
     
 <?php

include("public/sidebarlg.php");

 ?>

</div>
<!-- sidebar ends -->



<!-- Main panel start -->

<div  class="col-lg-9 ">

   <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-list">
          <div class="cbp-vm-options">
           
          
          </div>
    
   <?php

   if (isset($_GET['search'])) {

    $search_query = $_GET['user_query'];
     
   
   
   $get_pro = "SELECT * FROM products WHERE product_keywords like '%$search_query%' ";

   $run_pro = mysqli_query( $con , $get_pro );

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
       
         $pro_cat1 = $row_pro['product_cat1'];
         $pro_cat2 = $row_pro['product_cat2'];
          $pro_cat3 = $row_pro['product_cat3'];
           $pro_cat4 = $row_pro['product_cat4'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      
      
      ?>
      
      <ul>
            <li>
              <a  href="#"><img src="admin_area/product_img/<?php echo $pro_image; ?>" width='180' height='160' ></a>
              <h3 class="cbp-vm-title hidden-xs"><a href="details1.php?pro_id=<?php echo $pro_id; ?>" style="font-family: 'Muli', sans-serif;"><strong><?php echo $pro_title;  ?></strong></a></h3>
              
              <div class="cbp-vm-price" style="color:black;font-family: 'Muli', sans-serif;"> ₹ <?php echo $pro_price;  ?></div>
               <p class="cbp-vm-details hidden-lg"><a href="details1.php?pro_id=<?php echo $pro_id; ?>" style="font-family: 'Muli', sans-serif; font-size:15px;"><br><?php echo $pro_title;  ?></a></p>
              <div class="cbp-vm-details"style="font-family: 'Muli', sans-serif;">
              <?php echo "$pro_cat1, $pro_cat3"; ?>&nbspand <?php echo" $pro_cat4;"?>
              </div>
            
            </li>
          
      
          </ul>

          <hr style="height:1px;border:none;color:#333;background-color:#333;" />
<?php

}}
?>



    
      </div><!-- /main -->


  

    </div>


    <!-- Main product panel -->
       
</div>
    
  
</div>
</div>
<br>
<br>
  

<!--footer start-->

<?php

include("public/footer.php");

?>

<!--footer end-->
<?php
include("flt.php");
?>










</body>
</html>

<script src="styles/alp/js/classie.js"></script>
    <script src="styles/alp/js/cbpViewModeSwitch.js"></script>