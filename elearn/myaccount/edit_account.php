<?php



if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";


}

else{



?>


<?php


$user= $_SESSION['customer_email'];

$get_customer = "SELECT * FROM learn WHERE customer_email='$user'";

$run_get_customer=mysqli_query($con, $get_customer);

while ($row_customer = mysqli_fetch_array($run_get_customer)) {

$c_id = $row_customer['customer_id'];

$name = $row_customer['customer_name'];

$email = $row_customer['customer_email'];

$pass = $row_customer['customer_pass'];

$country = $row_customer['customer_country'];

$city= $row_customer['customer_city'];

$address = $row_customer['customer_address'];

$contact = $row_customer['customer_contact'];






?>




  <form action=" " method="post" enctype="multipart/formdata"> 

   <table align="center" >
     
     <tr>
       <td><h2>UPDATE YOUR  ACCOUNT</h2> </td>
     </tr>

     <tr>
       <td align="center" > Customer Name:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_name" value="<?php echo $name; ?>" required/> </td>
     </tr>

        <tr>
       <td align="center" > Customer Email:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_name" value="<?php echo $email; ?>" disabled> </td>
     </tr>
    
     <tr>
       <td align="center" > Customer country:</td>
       <td style="padding: 10px 10px 10px 10px ; ">

       <select name="c_country" >
         <option><?php echo $country; ?></option>
         <option>India</option>
       </select>

        </td>
     </tr>

     <tr>
       <td align="center" > Customer city:</td>
       <td style="padding: 10px 10px 10px 10px ; ">

       <select name="c_city" >
         <option><?php echo $city; ?></option>
         <option>Delhi</option>
       </select>

        </td>
     </tr>
     <tr>
       <td align="center" > Customer contact:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_contact"  value="<?php echo $contact; ?>" /> </td>
     </tr>
     <tr>
       <td align="center" > Customer Address:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text"  cols="20" rows="10" name="c_address" value="<?php echo $address; ?>" ></textarea> </td>
     </tr>
     <tr>

     
       <td align="center" > </td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="submit" name="update" value="Update account" required/> </td>
     </tr>
<?php } ?>

   </table>




   </form>



   </div>

   </div>

   
    
  

<!--Panel1 end-->  

<!--footer start-->



   <?php
if (isset($_POST['update'])) {


  $ip= getIp();

  $customer_id= $c_id;

  $c_name= $_POST['c_name'];


 

 

  $c_country= $_POST['c_country'];

  $c_city= $_POST['c_city'];

  $c_contact= $_POST['c_contact'];

  $c_address= $_POST['c_address'];



 $update_c ="UPDATE learn SET customer_name='$c_name',   customer_country='$c_country',customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_address' WHERE customer_id ='$customer_id'  ";


$run_c= mysqli_query($con, $update_c);



if ($run_c) {
  echo "<script>alert('Your account is updated')</script>";
  

  echo "<script>window.open('account.php?edit_account','_self')</script>";
}


}


?>




 


<?php  } ?>



