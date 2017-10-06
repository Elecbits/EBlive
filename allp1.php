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
<?php

include("public/menubar.php");

?>
 <!-- Menu bar end-->

 <div class="body" >
  <div class="container">


<!--Panel1 algo bar start--> 
 
  
  
     <!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">

     <!-- Sidebar begins-->
     
 

<!-- Sidebar begins-->
<!-- Main product panel start -->


<div  class="col-lg-12 ">

         <div id="cbp-vm " class="cbp-vm-switcher cbp-vm-view-list">
        
          <div class="cbp-vm-options">
            <a href="#" class="cbp-vm-icon cbp-vm-grid " data-view="cbp-vm-view-grid">Grid View</a>
            <a href="#" class="cbp-vm-icon cbp-vm-list  cbp-vm-selected" data-view="cbp-vm-view-list">List View</a>
          </div>

          <?php
   
   $get_pro = "SELECT * FROM products ";

   $run_pro = mysql_query( $get_pro,$con );

   while ($row_pro = mysql_fetch_array($run_pro)) 
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
               <div class=" hidden-lg col-xs-3">
               <p class="cbp-vm-details" ><a href="details1.php?pro_id=<?php echo $pro_id; ?>" style="font-family: 'Muli', sans-serif; font-size:15px;"><?php echo" $pro_title;"  ?></a></p>
               </div>
              <div class="cbp-vm-details"style="font-family: 'Muli', sans-serif;">
              <?php echo "$pro_cat1, $pro_cat3"; ?>&nbspand <?php echo" $pro_cat4;"?>
              </div>
              <a class="cbp-vm-icon cbp-vm-add" href="all_products.php?rp_cart=<?php echo $pro_id;?>">Cart</a>
            </li>
          
      
          </ul>

          <hr style="background-color: black;">
<?php

}
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










</body>
</html>

<script src="styles/alp/js/classie.js"></script>
    <script src="styles/alp/js/cbpViewModeSwitch.js"></script>