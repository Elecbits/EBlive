<!DOCTYPE html>
<?php
session_start();
include("functions/functions.php");

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
   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 
  
 

<!--Panel1 algo bar end-->
<div class="tag126" class="col-lg-12 bg-primary">


     <!-- Sidebar starts-->
     <div class="hidden-lg ">
<?php

include("public/sidebar.php");

?>
   </div>

<!-- sidebar ends -->

<!-- Main product panel start-->


<div  class="col-lg-12 col-xs-12 col-md-12 col-sm-12 ">

  
    <div  class="panel-body" style=" padding: 10px 0px 10px 0px; ">
    
    <?php

    if ( isset($_GET['pro_id']) ) {
      
    $product_id= $_GET['pro_id'];

    $get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

    $run_pro = mysqli_query( $con , $get_pro );

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];
        $pro_desc= $row_pro['product_desc'];
        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        $pro_diy = $row_pro['product_diy_price'];
        $pro_high = $row_pro['product_high'];
        $pro_hs = $row_pro['product_hs'];
        $pro_block = $row_pro['product_block'];
        $pro_doc = $row_pro['product_doc'];


        
      echo "
       <div>

       
      
      <div  class = 'col-lg-4 col-xs-12'  style=' padding: 10px 10px 10px 10px;'>
      
      
       <img src='admin_area/product_img/$pro_image' width='auto' />
      
     

       </div>

        <div  class = 'col-lg-8'>
      
       <img src='admin_area/block_diagram/$pro_block' width='200' height='180' />
      <a href='admin_area/doc/$pro_doc'>Download</a>
      

     

       </div>



       <div class='panel panel-default' class=' col-lg-4 '>
      <div class='panel-body'>

     
      
      <h4 style='font-family: cursive ';>$pro_title </h4>

      
      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>
      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_diy</p>



      <a href='index.php?rp_cart=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      <a href='index.php?diy_cart=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      <a href='index.php?buy_now=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

            

      </div>

      <p> $pro_desc </p>

      $pro_hs
      $pro_high
 


      </div>
      </div>

      ";

    }

  }

?>



   </div>

   </div>

    </div>
       
</div>
    
  
</div>
</div>
<!-- Main product panel end -->

 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->










</body>
</html>