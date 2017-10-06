<?php



if (!isset($_SESSION['user_email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

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

<div class="jumbotron" >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">Orders</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    



    <tr>

      <th>Customer ID</th>
	    <th>Customer Name</th>
      <th>Product </th>
      <th>Quantity</th>
      <th>Product Price</th>
      <th>Status</th>
      
  


		
	</tr>

	<?php

	 
 $get_orders = "SELECT * FROM orders ";

 $run_orders = mysqli_query( $con , $get_orders );

 $count_orders = mysqli_num_rows($run_orders);

 

 $i=0;

 while ($row_orders = mysqli_fetch_array($run_orders)) {
 	
 	$pid = $row_orders['p_id'];
 	$qty = $row_orders['qty'];
 	$t_o = $row_orders['track_order'];
  $c_id = $row_orders['c_id'];
  $pxq = $row_orders['pxq'];

  $get_customer ="SELECT * FROM customers WHERE customer_email = '$c_id'";
 
  $run_customer = mysqli_query( $con , $get_customer );

 while ($row_customer = mysqli_fetch_array($run_customer)) {

  $customer_id = $row_customer['customer_email'];

  $customer_name = $row_customer['customer_name'];


 $get_product = "SELECT * FROM products WHERE product_id = '$pid'";

 $run_product = mysqli_query( $con , $get_product  );

 

 while ($row_product = mysqli_fetch_array($run_product)) {
 	
 	$product_id = $row_product['product_id']; 
 	$product_title = $row_product['product_title'];
 	$product_price = $row_product['product_price'];
 	$product_image = $row_product['product_image'];
 	 	
 $i++;

 


?>
<tr>
        <td><?php echo $customer_id; ?></td>

        <td><?php echo $customer_name; ?></td>

      <td> <?php echo $product_title."($product_id)"; ?></br>
      	 <img src="product_img/<?php echo $product_image; ?> "   width="60" height="60"> 
      </td>
      <td> <?php echo $qty; ?></td>
      <td> <?php echo $pxq; ?></td>
        <td>  <?php echo $t_o; ?>
          <button type = "submit" name="status_change" ><a href = "index.php?track_order=<?php echo $product_id; ?>&&cid=<?php echo $customer_id; ?>&&to=<?php echo $t_o; ?>" " style="text-decoration:none; color:black;">Change status</a></button>


        </td>

       

      

 <?php } }  } ?>


         </td>
         

  </tr>

 

 


  



  </table>
</div>



</div>



         

</body>
</html>


<?php  } ?>