<?php


if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if (isset($_GET['edit_c_report'])) {


  $c_report_id = $_GET['edit_c_report'];

  $get_comp = "SELECT * FROM c_report WHERE order_id='$c_report_id'";

  $run_get_comp= mysqli_query( $con , $get_comp);

$row_get_comp = mysqli_fetch_array($run_get_comp);

$order_id_o = $row_get_comp['order_id'];
$hw_cost_o = $row_get_comp['hardware_cost'];
$t_construct_o = $row_get_comp['time_construct'];
$extra_cost_o = $row_get_comp['extra_cost'];
$t_extra_o = $row_get_comp['time_to_deliver'];
$title_p_o = $row_get_comp['title_p'];

}


?>

<html>
<head>
  <title>Update Report</title>
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT Report</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Order ID</td>

     <td> <label ><?php echo $order_id_o; ?></label></td>
   </tr>


   <tr>
     <td>Name of the project</td>

     <td> <input type="text" name="title_p"  value="<?php echo $title_p_o;  ?>" required/> </td>
   </tr>

<tr>
 <tr>
     <td>Insert Hardware Cost</td>

     <td> <input type="text" name="hw_cost"  value="<?php echo $hw_cost_o;  ?>" required/> </td>
   </tr>


 <tr>
     <td>Insert Time to construct (In Hours)</td>

     <td> <input type="text" name="t_construct" value="<?php echo $t_construct_o;  ?>" required/> </td>
   </tr>



 <tr>
     <td>Insert Extra Cost (Convience and packaging) </td>

     <td> <input type="text" name="extra_cost" value="<?php echo $extra_cost_o;  ?>" required/> </td>
   </tr>


 <tr>
     <td>Insert Time to Deliver/Buying raw materials (In Hours)</td>

     <td> <input type="text" name="t_extra"  value="<?php echo $t_extra_o;  ?>" required/> </td>
   </tr>




<tr>
  <td></td>
  <td> <input type="submit" name="report" value="Submit Report"> </td>
</tr>

</form> 

  </table>
</div>



</div>

<?php



if (isset($_POST['report'])) {
  


$hw_cost = $_POST['hw_cost'];
$t_construct = $_POST['t_construct'];
$extra_cost = $_POST['extra_cost'];
$t_extra = $_POST['t_extra'];
$title_p = $_POST['title_p'];

$get_profit = "SELECT * from invoice where invoice_no = '$order_id_o'";


$run_profit  = mysqli_query($con , $get_profit);

$row_get_profit = mysqli_fetch_array($run_profit);

$total = $row_get_profit['total'];

$profit = ($total - ($hw_cost + $extra_cost));



$update_cat= "UPDATE c_report SET hardware_cost= '$hw_cost' ,  time_construct =  '$t_construct' , time_to_deliver = '$t_extra' ,  extra_cost= '$extra_cost' , title_p = '$title_p', profit = '$profit' WHERE order_id = '$order_id_o' ";

echo $update_cat;

$run_cat = mysqli_query($con , $update_cat);

if($run_cat)
{
echo"<script>alert('Components has been updated !')</script>";
echo"<script>window.open('index.php?view_c_report','_self')</script>";
}

}
?>


         

</body>
</html>


<?php } ?>

