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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE PROJECTS SYNOPSIS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">

       <form action=" " method="POST" enctype="multipart/form-data">
   

   
   <tr>
      <td>Project ID:</td>
    <td> <input type="text" name="product_id1"  required /></td>

</tr>

<tr>
<td> DOC FILE :  </td>
 
 <td><input type="file" name="uploadedfile" required /> </td>

</tr>
<!--
<tr>
<td> uploadedfile FILE :  </td>
 
 <td><input type="file" name="uploadedfile2" required /> </td>

</tr>

<tr>
<td> uploadedfile FILE :  </td>
 
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


if(isset($_FILES['uploadedfile'])){

      $errors= array();
      $file_name = $_FILES['uploadedfile']['name'];
      $file_size =$_FILES['uploadedfile']['size'];
      $file_tmp =$_FILES['uploadedfile']['tmp_name'];
      $file_type=$_FILES['uploadedfile']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
      
      $expensions= array("doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a .xlsx or .xls file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"design_doc/".$file_name);


        
echo "<script>alert('File uploaded successfully')</script>";


echo $file_name;

$product_id= $_POST['product_id1'];

        
   // $insert_product = "INSERT INTO products (product_uploadedfile ) VALUES ('$file_tmp')  ";

    $insert_doc = "UPDATE project_details SET design_doc= '$file_name' WHERE project_id = '$product_id'  ";

   $run_insert_product = mysqli_query($con , $insert_doc);
 

  
if ($run_insert_product) {
    echo "New record created successfully";

    echo "<script>alert('Project Doc has been added')</script>";
} else {
    echo "Error: " . $insert_product .  "<br>" . mysqli_error($con);

   }




}

}
}


?>

 <?php } ?>

  


