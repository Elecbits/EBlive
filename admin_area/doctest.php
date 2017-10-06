<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else {

?>

<!DOCTYPE html>
<?php

include("include/db.php");

?>
<html>
<head>
	<title>Synopsis Upload</title>
		<meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>





<div class="jumbotron" >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE PRODUCTS SYNOPSIS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">

       <form action=" " method="POST" enctype="multipart/form-data">
   

   
   <tr>
      <td>Product ID:</td>
    <td> <input type="text" name="product_id1"  required /></td>

</tr>

<tr>
<td> DOC FILE :  </td>
 
 <td><input type="file" name="uploadedfile" required /> </td>

 <strong>Doc format and less than 500 kb </strong>

</tr>
<!--
<tr>
<td> IMAGE FILE :  </td>
 
 <td><input type="file" name="uploadedfile2" required /> </td>

</tr>

<tr>
<td> IMAGE FILE :  </td>
 
 <td><input type="file" name="uploadedfile3" required /> </td>

</tr>
-->
     <td>    <input type="submit" name="submit" value="there you go johnny" /> </td>
      </form>


  </table>



</div>
         
     

</body>
</html>
<?php

    

if(isset($_POST["submit"])){

$fileName=$_FILES["uploadedfile"]["name"];
$fileSize=$_FILES["uploadedfile"]["size"]/1024;
$fileType=$_FILES["uploadedfile"]["type"];
$fileTmpName=$_FILES["uploadedfile"]["tmp_name"];  

if($fileType=="application/msword"){
if($fileSize<=500){

//New file name
$random="Elecbits_";
$newFileName=$random.$fileName;

//File upload path
$uploadPath="doc/".$newFileName;

//function for upload file
if(move_uploaded_file($fileTmpName,$uploadPath)){
  echo "Successful<BR>"; 
  echo "File Name :".$newFileName."<BR>"; 
  echo "File Size :".$fileSize." kb"."<BR>"; 
  echo "File Type :".$fileType."<BR>"; 
}
}
else{
  echo "Maximum upload file size limit is 500 kb";
}
}
else{
  echo "You can only upload a Word doc file.";
}  

$product_id= $_POST['product_id1'];

        
   // $insert_product = "INSERT INTO products (product_image ) VALUES ('$file_tmp')  ";

    $insert_doc = "UPDATE products SET product_doc= '$newFileName' WHERE product_id = $product_id  ";

   $run_insert_product = mysqli_query( $con , $insert_doc );
 

  
if ($run_insert_product) {
    echo "New record created successfully";

    echo "<script>alert('Product has been added')</script>";
} else {
    echo "Error: " . $insert_product .  "<br>" . mysqli_error($con);

   }





}


?>

 <?php } ?>

  


