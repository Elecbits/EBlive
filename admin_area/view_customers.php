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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">CUSTOMERS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Customer ID</th>
      <th>Customer name</th>
      <th>Customer email</th>
      <th>Customer pass</th>
      <th>Customer Country</th>
      <th>Customer City</th>
      <th>Customer Contact</th>
      <th>Customer Address</th>
      <th>Delete</th>

		
	</tr>
	<?php

$get_customer="SELECT * FROM customers";

$run_customer =mysqli_query( $con , $get_customer );

$i=0;
while ($row_customer=mysqli_fetch_array($run_customer)) {
  

  $customer_id= $row_customer['customer_id'];
  $customer_name= $row_customer['customer_name'];
  $customer_email= $row_customer['customer_email'];
  $customer_pass= $row_customer['customer_pass'];
  $customer_country= $row_customer['customer_country'];
  $customer_city= $row_customer['customer_city']; 
  $customer_contact = $row_customer['customer_contact'];
  $customer_address = $row_customer['customer_address'];
  


  $i++;


?>
<tr>
      <td> <?php echo $customer_id; ?></td>
      <td> <?php echo $customer_name; ?></td>
      <td> <?php echo $customer_email; ?></td>
      <td> <?php echo $customer_pass; ?></td>
      <td> <?php echo $customer_country; ?></td>
      <td> <?php echo $customer_city; ?></td>
      <td> <?php echo $customer_contact; ?></td>
      <td> <?php echo $customer_address; ?></td>
      <td> <a href="delete_customer.php?delete_customer=<?php echo $customer_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>

<?php } ?> 
