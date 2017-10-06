<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}


else{


  ?>
<!DOCTYPE html>


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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT CATEGORY</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Category ID</td>

     <td> <input type="text" name="cat_id" required/> </td>
   </tr>
<tr>
 <tr>
     <td>Insert New Category</td>

     <td> <input type="text" name="category" required/> </td>
   </tr>

 <tr>
     <td>Main Category</td>

     <td> <select name="m_category"/>
      <option>C</option>
      <option>Java</option>
      <option>Android</option>
      <option>C++</option>
           
    </select> </td>
   </tr>



<tr>
  <td></td>
  <td> <input type="submit" name="add_cat" value="Add new Category"> </td>
</tr>

</form> 

  </table>
</div>



</div>

<?php

include("include/db.php");

if (isset($_POST['add_cat'])) {
  
$cat_id=$_POST['cat_id'];
$category= $_POST['category'];
$m_category= $_POST['m_category'];


$insert_cat= "INSERT INTO categories (cat_id,category, main_category) VALUES ('$cat_id','$category','$m_category') ";

$run_cat = mysql_query( $insert_cat, $con);

if($run_cat)
{
echo"<script>alert('Category has been added !')</script>";
echo"<script>window.open('index.php?view_cats','_self')</script>";
}

}
?>


         

</body>
</html>

<?php } ?>