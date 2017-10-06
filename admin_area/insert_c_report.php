
<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}


else{


  ?>
<!DOCTYPE html>


<html>
<head>
	<title>Insert Category</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT CATEGORY</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Order ID</td>

     <td> <input type="text" name="order_id" required/> </td>
   </tr>


   <tr>
     <td>Name of the project</td>

     <td> <input type="text" name="title_p" required/> </td>
   </tr>

<tr>
 <tr>
     <td>Insert Hardware Cost</td>

     <td> <input type="text" name="hw_cost" required/> </td>
   </tr>


 <tr>
     <td>Insert Time to construct (In Hours)</td>

     <td> <input type="text" name="t_construct" required/> </td>
   </tr>



 <tr>
     <td>Insert Extra Cost (Convience and packaging) </td>

     <td> <input type="text" name="extra_cost" required/> </td>
   </tr>


 <tr>
     <td>Insert Time to Deliver/Buying raw materials (In Hours)</td>

     <td> <input type="text" name="t_extra" required/> </td>
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

include("include/db.php");

if (isset($_POST['report'])) {
  

$order_id = $_POST['order_id'];
$hw_cost = $_POST['hw_cost'];
$t_construct = $_POST['t_construct'];
$extra_cost = $_POST['extra_cost'];
$t_extra = $_POST['t_extra'];
$title_p = $_POST['title_p'];


$get_profit = "SELECT * from invoice where invoice_no = '$order_id'";


$run_profit  = mysqli_query($con , $get_profit);

$row_get_profit = mysqli_fetch_array($run_profit);

$total = $row_get_profit['total'];

$profit = ($total - ($hw_cost + $extra_cost));


echo"$hw_cost , $extra_cost, $total, $profit";



$insert_report= "INSERT INTO c_report (order_id, title_p, hardware_cost, time_construct, extra_cost, time_to_deliver, profit) VALUES ('$order_id','$title_p', '$hw_cost', '$t_construct' , '$extra_cost' , '$t_extra' , '$profit') ";

$run_report = mysqli_query($con , $insert_report);

if($run_report)
{
echo"<script>alert('Report has been added !')</script>";
echo"<script>window.open('index.php?view_c_report','_self')</script>";
}

}
?>


         

</body>
</html>

<?php } ?>