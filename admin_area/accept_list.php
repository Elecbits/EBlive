<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{

?>


<!DOCTYPE html>
<?php

include("include/db.php");

?>

<html>
<head>
	<title>Insert Products</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">PRODUCTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Product ID</th>
      <th>Product Title</th>
      <th>Product Price</th>
      <th>Product Keywords</th>
      <th>Product Description</th>
      <th>Edit</th>
      <th>Delete</th>

		
	</tr>
	<?php

$get_pro="SELECT * FROM products";

$run_pro =mysqli_query($con, $get_pro);

$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  

  $product_id= $row_pro['product_id'];
  $product_title= $row_pro['product_title'];
  $product_desc= $row_pro['product_desc'];
  $product_price= $row_pro['product_price'];
  $product_keywords= $row_pro['product_keywords'];

  $i++;


?>
<tr>
      <td> <?php echo $product_id; ?></td>
      <td> <?php echo $product_title; ?></td>
      <td> <?php echo $product_price; ?></td>
      <td> <?php echo $product_keywords; ?></td>
      <td> <?php echo $product_desc; ?></td>
      <td> <a href="index.php?edit_pro=<?php echo $product_id ; ?>" style="color: black; "> Edit </a> </td> 
       <td> <a href="delete_pro.php?delete_pro=<?php echo $product_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>




<?php } ?>