 <?php



if(!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>  




<div class="panel panel-default"> 

 
 <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">

<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">

 
  <form action="  "  method="post" enctype="mutlipart/form-data" > 
  
  
    
   
    <tr align="center">
      <td> <input type="text"  name = "email" placeholder ="Enter your email" required/> </td>
    </tr>



    <tr align="center">
      <td> <input type="submit"  name="c_order" value = "Confirm Your Order" required/> </td>
    </tr>


     

</form>

</table>



   </div>

   </div>

   </div>






<?php
if (isset($_POST['c_order'])) {
  
$user_email = $_SESSION['customer_email'];

$ip =getIp();



$sel_cart = "SELECT * FROM cart WHERE ip_add='$ip' ";

$run_cart_add = mysqli_query( $con, $sel_cart);


while ($row_cart = mysqli_fetch_array($run_cart_add)){

  $p_id = $row_cart['p_id'];
  $qty = $row_cart['qty'];
  $pxq = $row_cart['pxq'];
  
 echo $p_id. $pxq ;



$sel_order = "INSERT  INTO orders (p_id, c_id , qty, pxq) VALUES ('$p_id','$user_email','$qty', '$pxq')";

$run_order = mysqli_query( $con ,$sel_order );

echo $ip . $p_id;

$delete_cart = "DELETE  FROM cart WHERE  ip_add = '$ip' and p_id ='$p_id'";

$run_delete_cart = mysqli_query(  $con , $delete_cart );

echo "Error: 1"  . "<br>" . mysqli_error($con);

  



}

echo "<script>alert('Order placed !')</script>";
  echo "<script>window.open('account.php?my_orders','_self')</script>";   

}






?>

 
   <?php



}

   ?>