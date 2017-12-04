<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}


else{


  ?>
<!DOCTYPE html>


<html>
<head>
	<title>Insert Stock</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT Components</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Components Name</td>

     <td> <input type="text" name="comp_name" required/> </td>
   </tr>

 <tr>
     <td>Price</td>

     <td> <input type="number" name="comp_price" required/> </td>
   </tr>

    <tr>
     <td>Stock</td>

     <td> <input type="number" name="comp_stock" required/> </td>
   </tr>
<tr>
  <td></td>
  <td> <input type="submit" name="add_comp" value="Add Stock"> </td>
</tr>

</form> 

  </table>
</div>



</div>

<?php

include("include/db.php");

if (isset($_POST['add_comp'])) {
  
$comp_name=$_POST['comp_name'];
$comp_price= $_POST['comp_price'];
$comp_stock= $_POST['comp_stock'];

$total = $comp_price*$comp_stock;


$insert_comp= "INSERT INTO components (name,price,stock, total) VALUES ('$comp_name','$comp_price', '$comp_stock','$total') ";

$run_comp = mysqli_query($con , $insert_comp);

if($run_comp)
{
echo"<script>alert('Components has been added !')</script>";
echo"<script>window.open('index.php?view_comp','_self')</script>";
}

}
?>


         

</body>
</html>

<?php } ?>