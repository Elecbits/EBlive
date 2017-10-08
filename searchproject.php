<!DOCTYPE html>
<?php
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
<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 
   <!-- Menu bar end-->  
  <div class="body" >
  <div class="container">


  
  <!--Panel1 algo bar start--> 
   <br>
 <br>
  
  <?php
 
include("public/algobar.php");
  ?>

<!--Panel1 algo bar end--> 
     <div class="tag126" class="col-lg-12 bg-primary" style="font-family: 'Muli', sans-serif; " >
     
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

  <div class="panel panel-default"  > 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; "   >
    
   <?php

   if (isset($_POST['proj'])) {

    $search_range = $_POST['range'];
    $category = $_POST['cats'];


    
     
   if ($search_range == '0-3999') {
   
    if($category == 'All projects')
    {
    
      $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 0 AND 3999 OR product_diy_price BETWEEN 0 AND 3999 )  " ;
             
    }
    
    else{

       $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 0 AND 3999 OR product_diy_price BETWEEN 0 AND 3999 ) AND (product_cat1='$category' OR product_cat2='$category' OR product_cat3='$category' OR product_cat4='$category') " ;

}

   $run_pro = mysqli_query( $con , $get_pro);

    $count = mysqli_num_rows($run_pro);

    if ($count==0) {
      
      echo "No products in this range or category";
    }

    else

    

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      echo "
      <div class = col-lg-4>
      <div class='panel panel-default' style='border-style:solid;border-color:black;border-width: 3px;'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details1.php?pro_id=$pro_id'>
      
       <h5 style= 'font-family: 'Muli', sans-serif;'><strong>$pro_title</strong> </h5>
      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?pro_id=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>



      ";

    }

     
     
   }

   if ($search_range == '4000-6999') {
   
   
   if($category == 'All projects')
    {
    
    $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 4000 AND 6999 OR product_diy_price BETWEEN 4000 AND 6999 ) " ;
     
             
    }
    
    else{
     
            $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 4000 AND 6999 OR product_diy_price BETWEEN 4000 AND 6999 ) AND (product_cat1='$category' OR product_cat2='$category' OR product_cat3='$category' OR product_cat4='$category') " ;

}

   $run_pro = mysqli_query( $con , $get_pro );

    $count = mysqli_num_rows($run_pro);

    if ($count==0) {
      
      echo "No products in this range or category";
    }

    else

    

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      echo "
      <div class = col-lg-4>
      <div class='panel panel-default' style='border-style:solid;border-color:black;border-width: 3px;'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details1.php?pro_id=$pro_id'>
      
      <h5 style= 'font-family: 'Muli', sans-serif;'><strong>$pro_title</strong> </h5>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?pro_id=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>



      ";

    }
   }

   if ($search_range == '7000-9999') {
   
    if($category == 'All projects')
    {
    
      $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 7000 AND 9999 OR product_diy_price BETWEEN 7000 AND 9999 )  " ;
             
    }
   
     else{
            $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 7000 AND 9999 OR product_diy_price BETWEEN 7000 AND 9999 ) AND (product_cat1='$category' OR product_cat2='$category' OR product_cat3='$category' OR product_cat4='$category') " ;

}

   $run_pro = mysqli_query( $con , $get_pro );

    $count = mysqli_num_rows($run_pro);

    if ($count==0) {
      
      echo "No products in this range or category";
    }

    else

    

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      echo "
      <div class = col-lg-4>
      <div class='panel panel-default' style='border-style:solid;border-color:black;border-width: 3px;'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details1.php?pro_id=$pro_id'>
      
      <h5 style= 'font-family: 'Muli', sans-serif;'><strong>$pro_title</strong> </h5>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?pro_id=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>



      ";

    }




   }

   if ($search_range == '10,000-Above') {
   
   
    if($category == 'All projects')
    {
    
      $get_pro =  "SELECT * FROM products WHERE (product_price BETWEEN 10000 AND 50000 OR product_diy_price BETWEEN 10000 AND 50000 ) " ;
             
    }

else{
           $get_pro = "SELECT * FROM products WHERE (product_price BETWEEN 10000 AND 50000 OR product_diy_price BETWEEN 10000 AND 50000 ) AND (product_cat1='$category' OR product_cat2='$category' OR product_cat3='$category' OR product_cat4='$category') " ;

}

   $run_pro = mysqli_query( $con , $get_pro);

    $count = mysqli_num_rows($run_pro);

    if ($count==0) {
      
      echo "No products in this range or category";
    }

    else

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
    

      echo "
      <div class = col-lg-4>
      <div class='panel panel-default' style='border-style:solid;border-color:black;border-width: 3px;'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details1.php?pro_id=$pro_id'>
      
      <h5 style= 'font-family: 'Muli', sans-serif;'><strong>$pro_title</strong> </h5>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?pro_id=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>



      ";

    }
     
    
   }
   
   
  





    }

    ?>

   </div>

   </div>

    </div>
       
</div>
    
  
</div>
</div>
<!--Menu  Bar end -->
<!--Panel1 end-->  

<!--footer start-->
<?php

include("public/footer.php");

?>

<?php
include("flt.php");
?>


<!--footer end-->









</body>
</html>