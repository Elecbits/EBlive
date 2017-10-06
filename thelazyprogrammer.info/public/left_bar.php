<?php

include("includes/db.php");
$user= $_SESSION['customer_email'];

$get_customer = "SELECT * FROM customers WHERE customer_email='$user'";

$run_get_customer=mysqli_query($con, $get_customer);

while ($row_customer = mysqli_fetch_array($run_get_customer)) {

$c_id = $row_customer['customer_id'];

$name = $row_customer['customer_name'];

$address = $row_customer['customer_address'];

$contact = $row_customer['customer_contact'];






?>






  <form action=" " method="post" enctype="multipart/formdata"> 

   <table  >
     
     

     <tr>
       
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_name" value="<?php echo $name; ?>" required/> </td>
     </tr>
      
     <tr>
      
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_contact"  value="<?php echo $contact; ?>" /> </td>
     </tr>
     <tr>
      
       <td style="padding: 10px 10px 10px 10px ; "><input type="text"  cols="20" rows="10" name="c_address" value="<?php echo $address; ?>" ></textarea> </td>
     </tr>
     <tr>

     
       <td align="center" > </td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="submit" name="update" value="Edit" required/> </td>
     </tr>
<?php } ?>

   </table>




   </form>



  
   
    
  

<!--Panel1 end-->  

<!--footer start-->



   <?php
if (isset($_POST['update'])) {


  $ip= getIp();

  $customer_id= $c_id;

  $c_name= $_POST['c_name'];


  $c_contact= $_POST['c_contact'];

  $c_address= $_POST['c_address'];



 $update_c ="UPDATE customers SET customer_name='$c_name', customer_contact='$c_contact', customer_address='$c_address' WHERE customer_id ='$customer_id'  ";


$run_c= mysqli_query($con, $update_c);



if ($run_c) {
  
  

  echo "<script>window.open('checkout.php','_self')</script>";
}


}


?>




 






