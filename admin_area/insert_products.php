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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE PRODUCTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>Product ID :</td>
		<td> <input type="text" name="product_id" size="60" required /></td> 
	</tr>
	<tr>
	    <td>Product Title :</td>
		<td> <input type="text" name="product_title" size="60" required /></td> 
	</tr>
	<tr>
	    <td>Product Category 1:</td>
		<td> <select name="product_cat1" required />
			<option>Select your category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con , $get_cats );


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
			<option>Select your category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con , $get_cats ) ;


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
			<option>Select your category</option>
             <?php
               
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con, $get_cats );


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
			<option>Select your category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysqli_query($con ,$get_cats );


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
	    <td>Product Ready made Price :</td>
		<td> <input type="text" name="product_price" required/></td> 
	</tr>

  <tr>
      <td>Product  DIY PricePrice :</td>
    <td> <input type="text" name="product_diy" required/></td> 
  </tr>

	<tr>
	    <td>Product Description :</td>
		<td> <textarea name="product_desc"  cols="20" rows="10"></textarea> </td> 
	</tr>

<tr>
      <td>Product Highlights (Make it in points):</td>
    <td> <textarea name="product_high"  cols="20" rows="10"></textarea> </td> 
  </tr>


  <tr>
      <td>Product Hardware Sorftware (Make it in points):</td>
    <td> <textarea name="product_hs"  cols="20" rows="10"></textarea> </td> 
  </tr>


	<tr>
	    <td>Product Keywords :</td>
		<td> <input type="text" name="product_keywords" size="50" required/></td> 
	</tr>
	

<tr>
      <td>Where to put the product :</td>
    <td> <select name="product_where" id="mydropdown" required/>
      <option>New_arrivals</option>
      <option>Trending_now</option>
      <option>General</option>
            

    </select>
     </td> 
  </tr>

<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the product" ></td> 
  </tr>


  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['insert_post'])) || (isset($_FILES['uploadedfile']) )) {
	//getting the text data

   $product_id=$_POST['product_id']; 
   $product_title= $_POST['product_title'];
   $product_cat1= $_POST['product_cat1'];
   $product_cat2= $_POST['product_cat2'];
   $product_cat3= $_POST['product_cat3'];
   $product_cat4= $_POST['product_cat4'];  
   $product_price= $_POST['product_price'];
   $product_diy = $_POST['product_diy'];
   $product_desc= $_POST['product_desc'];  
   $product_high = $_POST['product_high'];
   $product_hs = $_POST['product_hs'];
   $product_keywords= $_POST['product_keywords'];
   $product_where = $_POST['product_where'];
   
   
 



   $insert_product = "INSERT INTO products (product_id , product_title, product_cat1, product_cat2, product_cat3, product_cat4  ,product_price, product_diy_price, product_desc, product_high, product_hs, product_keywords, product_where) VALUES ('$product_id','$product_title','$product_cat1','$product_cat2','$product_cat3','$product_cat4','$product_price', '$product_diy', '$product_desc', '$product_high', '$product_hs', '$product_keywords','$product_where') ";


 



  
if (mysqli_query( $con , $insert_product )) {
    echo "New record created successfully";

    echo "<script>alert('Product has been added')</script>";
    echo "<script>window.open('index.php?view_products','_self')</script>";
} else {
    echo "Error: " . $insert_product . "<br>" . mysql_error($con);
}
}




 


    
?>


<?php } ?>