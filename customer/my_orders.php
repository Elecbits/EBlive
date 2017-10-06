<?php



if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>
<html>
<head>
	<title>View Orders</title>
	<meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

<div  >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">Orders</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
 
    



    

	<?php

	$user = $_SESSION['customer_email'];

  $get_customer = "SELECT * FROM customers where customer_email='$user'";

  $run_get_customers = mysqli_query( $con , $get_customer );

  $row_customers = mysqli_fetch_array($run_get_customers);

  $cname = $row_customers['customer_name'];
  $ccontact = $row_customers['customer_contact'];
  $ddate = $row_customers['ddate'];

 $get_orders = "SELECT * FROM orders WHERE c_id = '$user'";

 $run_orders = mysqli_query( $con , $get_orders );

 $count_orders = mysqli_num_rows($run_orders);

 

 $i=0;

 while ($row_orders = mysqli_fetch_array($run_orders)) {
 	
 	$pid = $row_orders['p_id'];
 	$qty = $row_orders['qty'];
 	$t_o = $row_orders['track_order'];
  $pxq = $row_orders['pxq'];
 

 $get_product = "SELECT * FROM products WHERE product_id = '$pid'";

 $run_product = mysqli_query( $con , $get_product );

 

 while ($row_product = mysqli_fetch_array($run_product)) {
 	
 	$product_id = $row_product['product_id'];
 	$product_title = $row_product['product_title'];
 	$product_price = $row_product['product_price'];
 	$product_image = $row_product['product_image'];
  $single_price = $row_product['product_price'];
 	 	
 $i++;

 

?>

 
    
    <div class="panel-body hidden-xs">
      
      <div class="col-lg-12 col-xs-12" style="border-style: solid;  border-color: grey ; padding: 5px 5px 5px 5px ; ">

      <div class= "col-lg-2 col-xs-12"  style="border-style: solid;  border-color: #D0D3D4 ; padding: 20px 20px 30px 10px ; "  >
         
        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="90" height = "90" />
        
      </div>

      <div class= "col-lg-3 col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 20px 10px 20px ; " >

      <strong> <?php echo $product_title; ?></strong>
         
      

       <br>

      
        
        <strong style="font-size:25px;">₹ <?php echo $pxq; ?></strong>

        <br>
        <br>
        Status:

        <?php echo $t_o; ?>
        
      </div>

       <div class= "col-lg-4 col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 20px 10px 20px ; " >

       
         <button type="submit"  style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " >Print Order</button>

         <br>
         <br>


         <strong>Delivery Details:</strong> 
         <br>
        <?php echo $cname; ?>
        <br>
        <?php echo $ccontact;?>



             
      </div>
       <div class= "col-lg-3 col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >
        
       Expected Delivery Date:  
       <br>
        
       <?php echo $ddate ; ?>
      

    </div>
       
       

        
      
     </div>
   
          

       
</div>


 <div class="panel panel-default hidden-lg">
    
    <div class="panel-body">
      
      <div class="col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; ">

      <div class= "col-xs-4"   style="border-style: solid;  border-color: #D0D3D4 ; padding: 7px 7px 7px 7px ; " >

        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="80" height = "80" />
        
      </div>

      <div class= "col-xs-8" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       <strong style="font-size:15px;" class="word-break: break-word; " ><?php echo $product_title; ?></strong> 
       
        &nbsp<strong style="font-size:20px;">₹ <?php echo $single_price; ?></strong> 
        <br>

        Status:

        <?php echo $t_o; ?>
       
      </div>
       <div class= "col-xs-8" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       
         <button type="submit"  style="padding : 7px 7px 7px 7px; background-color: #0070FF; color: white; font-size:12px;" >Print Order</button>
         <br>
         <br>

          Delivery Details:            
                   <br>
        <?php echo $cname; ?>
        <br>
        <?php echo $ccontact;?>

        
      </div>
     </div>
   
          

       
</div>
</div>




  <?php } }  ?>




</div>



</div>



         

</body>
</html>


<?php  } ?>