<?php



if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>


<?php


$user= $_SESSION['customer_email'];

$get_customer = "SELECT * FROM customers WHERE customer_email='$user'";

$run_get_customer=mysqli_query( $con  , $get_customer);

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


<h2>UPDATE YOUR  ACCOUNT</h2>

  <form action=" " method="post" enctype="multipart/formdata"> 

  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-6">
        <input type="text" name="c_name" class="form-control" value="<?php echo $name; ?>" required/>
      </div>
    </div>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-6">
        <input type="text" name="c_email" value="<?php echo $email; ?>"  class="form-control" disabled>
      </div>
    </div>
    <br>
    <br>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Contact:</label>
      <div class="col-sm-6">
        <input type="text" name="c_contact"  value="<?php echo $contact; ?>"" class="form-control" required/>
      </div>
    </div>
    <br>
    <br>
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Address:</label>
      <div class="col-sm-6">
      <textarea type="text" style="margin: 0px; height: 100px; width: 515px; width: 100%;" name="c_address" ><?php echo $address; ?></textarea>
      </div>
    </div>
    <br>
    <br>
   

        <div class="col-lg-12">
   <div class="col-lg-2">
      <label >City</label>
      </div>

      <div class="col-lg-6">
        <select name="c_city" style="width: 100%;" >
         <option><?php echo $city; ?></option>
         <option>Delhi</option>
         <option>Ghaziabad</option>

         <option>Noida</option>

         <option>Gurgaon</option>

       </select>



    </div>
    </div>
    <br>
    <br>

       <div class="form-group" style="text-align: right; ">

      <label class="control-label col-sm-2" for="email"></label>

     <input type="submit" name="update" value="Update account" required/>
     
    </div>




 
<?php } ?>

  




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



 $update_c ="UPDATE customers SET customer_name='$c_name',   customer_country='$c_country',customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_address' WHERE customer_id ='$customer_id'  ";


$run_c= mysqli_query( $con , $update_c );



if ($run_c) {
  echo "<script>alert('Your account is updated')</script>";
  

  echo "<script>window.open('account.php?edit_account','_self')</script>";
}


}


?>




 


<?php  } ?>



