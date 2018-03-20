<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if ($_GET['edit_pro']) {
  
  $product_id = $_GET['edit_pro'];
$get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

$run_pro = mysqli_query( $con , $get_pro );

 $row_pro = mysqli_fetch_array($run_pro);
  
  $product_title = $row_pro['product_title'];
  $product_cat1 = $row_pro['product_cat1'];
  $product_cat2 = $row_pro['product_cat2'];
  $product_cat3 = $row_pro['product_cat3'];
  $product_cat4 = $row_pro['product_cat4'];
  $product_price = $row_pro['product_price'];
   $product_diy = $row_pro['product_diy_price'];
   $product_desc= $row_pro['product_desc'];  
   $product_high = $row_pro['product_high'];
   $product_hs = $row_pro['product_hs'];
   $product_keywords= $row_pro['product_keywords'];
   $product_where = $row_pro['product_where'];


}
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">EDIT THE PRODUCTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action=" " method="post" enctype="mutlipart/form" >
    <tr>
      <td>Product ID :</td>
    <td> <input type="text" name="product_id" size="60" value="<?php echo $product_id ;?>"" required /></td> 
  </tr>
  <tr>
      <td>Product Title :</td>
    <td> <input type="text" name="product_title" size="60"  value="<?php echo $product_title; ?>" required /></td> 
  </tr>
  <tr>
      <td>Product Category 1:</td>
    <td> <select name="product_cat1" required />
      <option><?php echo $product_cat1; ?></option>
             <?php
              
                  global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query( $con, $get_cats );


                     while ($row_cats = mysqli_fetch_array($run_cats) ) 
               {
                   $cat_id = $row_cats['cat_id'];
                   $cat_title = $row_cats['cat_title'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?>

    </select>
     </td> 
  </tr>
  <tr>
      <td>Product Category 2 :</td>
    <td> <select name="product_cat2" id="mydropdown" required/>
      <option><?php echo $product_cat2; ?></option>
             <?php
              
                  global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con, $get_cats);


                     while ($row_cats = mysqli_fetch_array($run_cats) ) 
               {
                   $cat_id = $row_cats['cat_id'];
                   $cat_title = $row_cats['cat_title'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?>

    </select>
     </td> 
  </tr>
  <tr>
      <td>Product Category 3:</td>
    <td> <select name="product_cat3" id="mydropdown" required/>
      <option><?php echo $product_cat3; ?></option>
             <?php
               
                  global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con, $get_cats);


                     while ($row_cats = mysqli_fetch_array($run_cats) ) 
               {
                   $cat_id = $row_cats['cat_id'];
                   $cat_title = $row_cats['cat_title'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?>

    </select>
     </td> 
  </tr>

  <tr>
      <td>Product Category 4 :</td>
    <td> <select name="product_cat4" id="mydropdown" required/>
      <option><?php echo $product_cat4; ?></option>
             <?php
              
                  global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query( $con , $get_cats );


                     while ($row_cats = mysqli_fetch_array($run_cats) ) 
               {
                   $cat_id = $row_cats['cat_id'];
                   $cat_title = $row_cats['cat_title'];

        
          
                    echo "<option> $cat_title </option> ";
                  

                 } 

              

             ?>

    </select>
     </td> 
  </tr>
<!--
  <tr>
      <td>Product Image 1:</td>
    <td> <input type="file" name="uploadedfile" required/>
         
      </td> 
  </tr>

  
  <tr>
      <td>Product Image 2:</td>
    <td> <input type="file" name="product_image2" required/></td> 
  </tr>

    <tr>
      <td>Product Image :</td>
    <td> <input type="file" name="product_image" required/></td> 
  </tr>
-->

  <tr>
      <td>Product Ready Made Price :</td>
    <td> <input type="text" name="product_price" value="<?php echo $product_price; ?>" required/></td> 
  </tr>

  <tr>
      <td>Product DIY Price :</td>
    <td> <input type="text" name="product_diy" value="<?php echo $product_diy; ?>" required/></td> 
  </tr>

  <tr>
      <td>Product Description :</td>
    <td> <textarea name="product_desc"  cols="20" rows="10"><?php echo $product_desc; ?></textarea> </td> 
  </tr>


  <tr>
      <td>Product Hardware and Software :</td>
    <td> <textarea name="product_hs"  cols="20" rows="10"><?php echo $product_hs; ?></textarea> </td> 
  </tr>


  <tr>
      <td>Product Highlights :</td>
    <td> <textarea name="product_high"  cols="20" rows="10"><?php echo $product_high; ?></textarea> </td> 
  </tr>
  <tr>
      <td>Product Keywords :</td>
    <td> <input type="text" name="product_keywords" size="50" value="<?php echo $product_keywords; ?>" required/></td> 
  </tr>

  <tr>
      <td>Where to put the product :</td>
    <td> <select name="product_where" id="mydropdown" required/>
       <option> <?php echo $product_where; ?> </option>
      <option>New_arrivals</option>
      <option>Trending_now</option>
      <option>General</option>
            

    </select>
     </td> 
  </tr>
  <tr>
      <td></td>
    <td> <input type="submit" name="update_post" value="Update the product" ></td> 
  </tr>




  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['update_post'])) ) {
  //getting the text data

   $product_ids=$_POST['product_id']; 
   $product_titles= $_POST['product_title'];
   $product_cat1s= $_POST['product_cat1'];
   $product_cat2s= $_POST['product_cat2'];
   $product_cat3s= $_POST['product_cat3'];
   $product_cat4s= $_POST['product_cat4'];  
   $product_prices= $_POST['product_price'];
   $product_diys = $_POST['product_diy'];
   $product_descs= $_POST['product_desc'];  
   $product_highs = $_POST['product_high'];
   $product_hss = $_POST['product_hs'];
   $product_keywordss= $_POST['product_keywords'];
   $product_wheres = $_POST['product_where'];
   



   
 



   $update_product = "UPDATE products SET product_id ='$product_ids' , product_title= '$product_titles', product_cat1='$product_cat1s', product_cat2 ='$product_cat2s', product_cat3= '$product_cat3s', product_cat4='$product_cat4s',product_price = '$product_prices', product_diy_price='$product_diys',  product_desc = '$product_descs', product_high='$product_highs' , product_hs='$product_hss', product_keywords = '$product_keywordss', product_where='$product_wheres' WHERE product_id ='$product_ids'  ";


 



  
if (mysqli_query( $con , $update_product )) {
    echo "New record created successfully";

    echo "<script>alert('Product has been edited successfully')</script>";

    echo "<script>window.open('index.php?view_products','_self')</script>";
} else {
    echo "Error: "  . "<br>" . mysqli_error($con);
}
}




 


    
?>

 
<?php } ?>