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


<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">Reports</h3>


<?php

$get_total_profit ="SELECT sum(profit) as total_profit FROM c_report order by order_id ";

$run_gtp =mysqli_query( $con , $get_total_profit);

$row_gtp=mysqli_fetch_array($run_gtp);

$total_profit = $row_gtp['total_profit'];

?>

<h4 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: left; ">Total Profit : <?php echo $total_profit; ?></h3>




<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Project</th>
      <th>Hardware Cost</th>   
      <th>Extra Cost</th>  
      <th>Profit</th>
      <th>Edit</th>
      <th>Delete</th>



		
	</tr>
	<?php

$get_cat ="SELECT * FROM c_report order by order_id ";

$run_cat =mysqli_query( $con , $get_cat);

$i=0;
while ($row_cat=mysqli_fetch_array($run_cat)) {
  

$order_id = $row_cat['order_id'];
$hw_cost = $row_cat['hardware_cost'];
$t_construct = $row_cat['time_construct'];
$extra_cost = $row_cat['extra_cost'];
$t_extra = $row_cat['time_to_deliver'];
$title_p = $row_cat['title_p'];
$profit = $row_cat['profit'];

  

  $i++;


?>
<tr>
      <td> <?php echo $order_id; ?></td>
      <td> <?php echo $hw_cost; ?></td>

      <td> <?php echo $extra_cost; ?></td>
      
      <td> <?php echo $profit; ?></td>
      
        <td> <a href="index.php?edit_c_report=<?php echo $order_id ; ?>" style="color: black; "> Edit </a> </td>      
       <td> <a href="delete_c_report.php?delete_c_report=<?php echo $order_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>

 

  </table>
</div>



</div>



         

</body>
</html>


<?php } ?>