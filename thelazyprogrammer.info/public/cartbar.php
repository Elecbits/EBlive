<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		
		<link rel="stylesheet" type="text/css" href="public/css/default.css" />
		<link rel="stylesheet" type="text/css" href="public/css/component.css" />
		<script src="public/js/modernizr.custom.js"></script>
	</head>
	<body class="cbp-spmenu-push">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow: scroll; ">
			<div style="background-color: white; color: black; "><strong>Categories</strong><button id="showLeftPush1t">Close</button></div>


			<p style="  background-color: #99ff99; font-size: 16px;"><a href="all_products.php"  style=" color: black;"  ><strong> ALL PROJECTS </strong></a></p>
			
			 <?php getcats(); ?>
			 
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2" style="overflow: scroll; ">
			 <?php
     if (!isset($_SESSION['customer_email'])) {

       echo "
       <br><p style='padding: 0px 0px 0px 10px;'><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px; '> </span>Hi Guest</p>" ; 

      
     }
     else
     {

      $c_email =  $_SESSION['customer_email'];

      global $con;
      $name_query="SELECT * FROM customers WHERE customer_email='$c_email'";

      $run_name_query = mysqli_query($con, $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['customer_name'];
     


      echo "<br><br><p style='padding: 0px 0px 0px 10px;'><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px; '> </span>Hi $customer_name</p>";      

    }

     }

    ?>
    
    <a href="cart1.php" style="padding:0px 0px 0px 10px; ">&nbspCart :<?php total_items(); ?></a> 
    <?php
     if (!isset($_SESSION['customer_email'])) {

      echo "<a href='checkout1.php' style='padding:0px 0px 0px 10px; '>Login</a> ";
     }
     else
     {

       echo "<a href='customer/logout.php' style='padding:0px 0px 0px 10px; '>logout</a> ";

     }
?>

             <p> <button id="showRightPush1b">Close</button> </p>  

                <?php carts(); ?>

   

 

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="mutlipart/form-data" > 
  
  
   

    <?php

    $total = 0;
    $single_price=0; 
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while ($p_price = mysqli_fetch_array($run_price)) {

        $pxq =  $p_price['pxq'];

       $pro_id = $p_price['p_id'];

       $qty2 = $p_price['qty'];

       $single_price = $p_price['uv'];

       $pro_price = "SELECT * FROM products WHERE product_id='$pro_id' ";

       $run_pro_price = mysqli_query($con, $pro_price);

       while ($pp_price=mysqli_fetch_array($run_pro_price)) {
           
           $product_price =  array($pp_price['product_price']);

           $product_title = $pp_price['product_title'];

           $product_image = $pp_price['product_image'];

           $pro_cat1 = $pp_price['product_cat1'];

           $pro_cat2 = $pp_price['product_cat2'];
           $pro_cat3 = $pp_price['product_cat3'];
           $pro_cat4 = $pp_price['product_cat4'];
          
          $pro_high = $pp_price['product_high'];

          $test[] = $single_price;

          foreach ($test as $key => $txn) {
             
            
            
       $pxq_price = "UPDATE cart SET pxq = '$txn' WHERE p_id='$pro_id' and ip_add= '$ip' ";
            
       $run_pxq_price = mysqli_query(  $con , $pxq_price  );
       
}
                  
             

    ?>

  
  
  <div class="panel panel-default hidden-xs" >
    
    <div class="panel-body">
      
      <div class="col-lg-12 col-xs-12" style="border-style: solid;  border-color: grey ; padding: 5px 5px 5px 5px ; ">

      <div class= "col-lg-4 col-xs-12"  style="border-style: solid;  border-color: grey ; padding: 20px 20px 30px 20px ; "  >
         
        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="180" height = "200" />
        
      </div>

      <div class= "col-lg-8 col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 20px 10px 20px ; " >

       <strong style="font-size:25px;"><a href="details1.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a></strong>
         
      <div style="font-size:13px"><?php echo $pro_cat1; ?>,<?php echo $pro_cat2; ?>,  <?php echo $pro_cat3; ?> and  <?php echo $pro_cat4; ?> </div>

       <br>

       <a style="color:#0070FF;">ReadyMade Kit</a>: Plug and play set, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a><br>
        <a style="color:#05ad40;">Do It Yourself Kit</a>: Complete set of components, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a>
       
        <br>
        <strong style="font-size:25px;">₹ <?php echo $single_price; ?></strong>
        
      </div>
       <div class= "col-lg-8 col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 20px -50px 20px ; " >

       
       
        <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>

    </div>
       
       

        
      
     </div>
   
          

       
</div>
</div>

  

  <div class="panel panel-default hidden-lg">
    
    <div class="panel-body">

    <div class= "col-xs-12"   style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; " >

        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="200" height = "200" />
        
      </div>
      
      <div class="col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; ">

      

      <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >

       <h3><?php echo $product_title; ?></h3>

        <div style="font-size:13px"><?php echo $pro_cat1; ?>,<?php echo $pro_cat2; ?>,  <?php echo $pro_cat3; ?> and  <?php echo $pro_cat4; ?> </div>

       <br>

       <a style="color:#0070FF;  ">ReadyMade Kit</a>: Plug and play set, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a><br>
        <a style="color:#05ad40;">Do It Yourself Kit</a>: Complete set of components, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a>
       
        <br>
        <strong style="font-size:25px;">₹ <?php echo $single_price; ?></strong>

        

        
      </div>
       <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >

        <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>

        
      </div>
     </div>
   
          

       
</div>
</div>

     
       
      
     
       
       

     
     

      <?php 
  global $con;



  $ip = getIp();
      
      if (isset($_POST['delete_cart'])) {

        foreach ($_POST['delete_cart'] as $remove_id) {
          
          $delete_product ="DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add='$ip'";

          $drop_table = " ALTER TABLE cart DROP id ";

          $add_table=  "ALTER TABLE cart ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ";

         

          $run_delete = mysqli_query($con, $delete_product);
          $run_drop = mysqli_query($con, $drop_table);
          $run_add_table = mysqli_query($con, $add_table);

          if (($run_delete)&&($run_drop)&&($run_add_table)) {
            
            echo "<script>window.open('cart1.php','_self')</script>";
          }


        }

        
      }



      

     ?>
  
      
     

             
      
  
  
  

  
      

    
  <?php

 
   } } 

  
  

 ?>


<?php

$ip = getIp();

        $get_item = "SELECT * FROM cart WHERE ip_add='$ip'";

        $run_item = mysqli_query($con, $get_item);

        $count_item = mysqli_num_rows($run_item);

        $t = $count_item;

    $l = $t-1;
 $total_value=0;
     
       
for ($j=0; $j < $t ; $j++) { 

 
  $total_value += $test[$j];
  
}
     


     
?>       
        
     
    
      

<div class="panel panel-default" >
    
   
<div style="padding: 20px 20px 20px 20px; float: right; ">

<h3> Sub Total:

<?php

echo $total_value; 

?>

  </h3>
  <br>
 
 <?php 

if ($t > 0) {
	


 ?>
     <button  class="btn btn-primary " > <a href="checkout1.php" style="text-decoration: none;color:white; "><strong>Checkout</strong> </a> </button> 
      <br>
     <br>
     <button> <a href="index.php" style="text-decoration: none; color: black; ">Continue shopping </a> </button>

     
    


    <?php } ?>
 

</div>
</div>




  <div  style="padding: 20px 20px 20px 20px; float: right; ">


  
  
  </div> 



  

  



 

  </form>

			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-bottom" id="cbp-spmenu-s4">
			<h3>Menu</h3>
			
		</nav>
		<div class="col-lg-3">
			
			<div class="main" style=" padding: 0px 0px 0px 0px; " >

			
					
					<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
					
					
					<a ><i class="fa fa-shopping-cart fa-2x"  id="showRightPush1c" aria-hidden="true">:<?php total_items(); ?></i></a>
			
				
				
			</div>
		</div>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="public/js/classie.js"></script>
		<script>

			var  
                showLeftPush1 = document.getElementById( 'showLeftPush1t' ), 
				showRightPush = document.getElementById( 'showRightPush1c' ),
				showRightPush1b = document.getElementById( 'showRightPush1b' ),
			      menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				
				body = document.body;

             showLeftPush1.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush1t' );
			};	
				
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush1c' );
			};
			showRightPush1b.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush1b' );
			};	

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
	</body>
</html>
