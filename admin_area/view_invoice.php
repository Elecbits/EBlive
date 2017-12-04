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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INVOICES</h3>

<?php

$get_total_revenue ="SELECT sum(total) as total_revenue FROM invoice ";

$run_gtp =mysqli_query( $con , $get_total_revenue);

$row_gtp=mysqli_fetch_array($run_gtp);

$total_revenue = $row_gtp['total_revenue'];

?>

<h4 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: left; ">Total Profit : <?php echo round($total_revenue); ?></h3>



<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Invoice No</th>
      <th>Customer Name</th>
      <th>CustomerEmail</th>
      <th>Total</th>
      <th>Reprint</th>
      <th>Delete</th>

		
	</tr>
	<?php

$get_pro="SELECT * FROM invoice";

$run_pro =mysqli_query( $con , $get_pro);

$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  

  $invoice_id= $row_pro['invoice_no'];
  $customer= $row_pro['c_name'];
  $customer_email= $row_pro['c_mail'];
  $total_price= $row_pro['total'];
 
  $i++;


?>
<tr>
      <td> <?php echo $invoice_id; ?></td>
      <td> <?php echo $customer; ?></td>
      <td> <?php echo $customer_email; ?></td>
      <td> <?php echo $total_price; ?></td>
     
      <td> <a href="invoice-reprint.php?print_pro=<?php echo $invoice_id ; ?>" target="_blank" style="color: black; "> Reprint </a> </td> 
       <td> <a href="delete_invoice.php?delete_pro=<?php echo $invoice_id ?>"  style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>




<?php } ?>