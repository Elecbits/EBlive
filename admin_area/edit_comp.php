<?php


if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if (isset($_GET['edit_comp'])) {


  $comp_id = $_GET['edit_comp'];

  $get_comp = "SELECT * FROM components WHERE comp_id='$comp_id'";

  $run_get_comp= mysqli_query( $con , $get_comp);

$row_get_comp = mysqli_fetch_array($run_get_comp);

  $comp_id = $row_get_comp['comp_id'];
  $comp_name = $row_get_comp['name'];
  $comp_price = $row_get_comp['price'];
  $comp_stock = $row_get_comp['stock'];
}


?>

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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">Edit components</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Components Name</td>

     <td> <input type="text" name="comp_name_upd" value="<?php echo $comp_name;?>" required/> </td>
   </tr>

 <tr>
     <td>Price</td>

     <td> <input type="number" name="comp_price_upd" value="<?php echo $comp_price;?>" required/> </td>
   </tr>

    <tr>
     <td>Stock</td>

     <td> <input type="number" name="comp_stock_upd" value="<?php echo $comp_stock;?>" required/> </td>
   </tr>
<tr>
  <td></td>
  <td> <input type="submit" name="add_comp" value="Update Stock"> </td>
</tr>


</form> 

  </table>
</div>



</div>

<?php


if (isset($_POST['add_comp'])) {
  
$comp_name_upd  = $_POST['comp_name_upd'];
$comp_price_upd = $_POST['comp_price_upd'];
$comp_stock_upd = $_POST['comp_stock_upd'];

$total = $comp_price_upd*$comp_stock_upd;



$update_cat= "UPDATE components SET name= '$comp_name_upd' , total='$total',  price =  '$comp_price_upd' , stock = '$comp_stock_upd' WHERE comp_id = '$comp_id' ";

$run_cat = mysqli_query($con , $update_cat);

if($run_cat)
{
echo"<script>alert('Components has been updated !')</script>";
echo"<script>window.open('index.php?view_comp','_self')</script>";
}

}
?>


         

</body>
</html>


<?php } ?>

