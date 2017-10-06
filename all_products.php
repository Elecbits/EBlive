<!DOCTYPE html>
<?php
session_start();
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
 
  
  <div class="hidden-xs" >
  <?php


include("public/algobar.php");

  ?>
  </div>
  
     <!--Panel1 algo bar end--> 
 <div class="hidden-lg" >
     <br>
     <br>
     <br>
  <?php


include("public/algobarprod.php");

  ?>
  <br>
  <br>
  </div>


     <div class="tag126" class="col-lg-12 bg-primary">

     <!-- Sidebar begins-->
    
 

<!-- Sidebar begins-->
<!-- Main product panel start -->


<div  class="col-lg-12 ">


<h3>Software Projects</h3>

<a href="http://elecbits.in/software.php?soft_id=658"><div class="well well-sm">Red Object detection- MATLAB</div></a>
<a href=" http://elecbits.in/software.php?soft_id=2"><div class="well well-sm">GUI Calculator- MATLAB</div></a>
<a href=" http://elecbits.in/software.php?soft_id=3"><div class="well well-sm">Face Detection- MATLAB</div></a>
<a href=" http://elecbits.in/software.php?soft_id=815916"><div class="well well-sm">Twitter based Sentiment Analysis- MATLAB</div></a>

 
<br>

 
    <h3>Hardware Projects</h3>
      
        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-list">
          <div class="cbp-vm-options">
            <a href="#" class="cbp-vm-icon cbp-vm-grid " data-view="cbp-vm-view-grid">Grid View</a>
            <a href="#" class="cbp-vm-icon cbp-vm-list  cbp-vm-selected" data-view="cbp-vm-view-list">List View</a>
          </div>

          <?php
   
   $get_pro = "SELECT * FROM products ";

   $run_pro = mysqli_query( $con , $get_pro );

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
         $pro_cat2 = $row_pro['product_cat2'];
          $pro_cat3 = $row_pro['product_cat3'];
           $pro_cat4 = $row_pro['product_cat4'];
        $pro_price = $row_pro['product_price'];
   $pro_doc = $row_pro['product_doc'];
        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];


?> 

                <?php

                if (($pro_id=='51') || ($pro_id=='52')|| ($pro_id=='53') ) {
                  
                }


else
{

                ?>





          <ul>
            <li>
              <a  href="details1.php?pro_id=<?php echo $pro_id; ?>"><img src="admin_area/product_img/<?php echo $pro_image; ?>" width='180' height='160' ></a>
              <h3 class="cbp-vm-title hidden-xs"><a href="details1.php?pro_id=<?php echo $pro_id; ?>" style="font-family: 'Muli', sans-serif;"><strong><?php echo $pro_title;  ?></strong></a></h3>
              
              <div class="cbp-vm-price" style="color:black;font-family: 'Muli', sans-serif;"> ₹ <?php echo $pro_price;  ?></div>
               <p class="cbp-vm-details hidden-lg"><a href="details1.php?pro_id=<?php echo $pro_id; ?>" style="font-family: 'Muli', sans-serif; font-size:15px;"><br><?php echo $pro_title;  ?></a></p>
              <div class="cbp-vm-details"style="font-family: 'Muli', sans-serif;">
              <?php echo "$pro_cat1"; ?> &nbsp<a href="admin_area/doc/<?php echo $pro_doc; ?>">  <button type="button" class="btn btn-success" style="float:right;" >Synopsis</button></a>
              </div>
             
              <a class="cbp-vm-icon cbp-vm-add" href="all_products.php?rp_cart=<?php echo $pro_id;?>">Cart</a>
            </li>
          
      
          </ul>

          <hr style="height:1px;border:none;color:#333;background-color:#333;" />
<?php
}
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
  <div style="float:left;  top: 100px; width:40;height:60; padding:6px; position: fixed; border-radius:8px;">

 
   <b style="color:black;">

   <br>
<a href="https://www.facebook.com/elecbits7" target="blank" class="tips" title="follow me on Facebook"><img src="images/facebook.png"> </a><br>
<br>
  <a href="https://twitter.com/elecbits16" target="blank" class="tips" title="follow me on Twitter"><img src="images/twitter.png"></a><br>


  </b>  

</div>

<?php
include("flt.php");
?>










</body>
</html>

<script src="styles/alp/js/classie.js"></script>
    <script src="styles/alp/js/cbpViewModeSwitch.js"></script>