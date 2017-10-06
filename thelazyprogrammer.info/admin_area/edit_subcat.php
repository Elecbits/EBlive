<?php


if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if (isset($_GET['edit_subcat'])) {


  $cat_id = $_GET['edit_subcat'];

  $get_cat = "SELECT * FROM subcategories WHERE subcat_id='$cat_id'";

  $run_get_cat= mysql_query( $get_cat, $con);

$row_get_cat = mysql_fetch_array($run_get_cat);

  $cat_id = $row_get_cat['subcat_id'];
  $cat_pcat = $row_get_cat['pcat'];
  $cat_subcat = $row_get_cat['subcat'];

}


?>

<html>
<head>
  <title>Edit the Category</title>
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT SUB CATEGORY</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Category ID</td>

     <td> <input type="text" name="new_cat_id"  value="<?php echo $cat_id; ?>" disabled/> </td>
   </tr>
<tr>
 <tr>
     <td>Insert Parent Category</td>
     
<td>
<select name="pcat" >
      <option><?php echo $cat_pcat ; ?></option>
             <?php
              
                  global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysql_query($get_cats, $con);


                     while ($row_cats = mysql_fetch_array($run_cats) ) 
               {
                  
                   $cat_title = $row_cats['category'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?>

    </select>




      </td>
   </tr>

    <tr>
     <td>Insert Sub Category</td>

     <td> <input type="text" name="new_subcat" value="<?php echo $cat_subcat; ?>" required/> </td>
   </tr>

<tr>
  <td></td>
  <td> <input type="submit" name="add_cat" value="Update Category"> </td>
</tr>

</form> 

  </table>
</div>



</div>

<?php



if (isset($_POST['add_cat'])) {
  

$new_subcat = $_POST['new_subcat'];
$pcat = $_POST['pcat'];

$update_cat= "UPDATE subcategories SET subcat = '$new_subcat', pcat = '$pcat' WHERE  subcat_id =  '$cat_id'";

$run_cat = mysql_query( $update_cat, $con);

if($run_cat)
{
echo"<script>alert('Category has been added !')</script>";
echo"<script>window.open('index.php?view_subcats','_self')</script>";
}

}
?>


         

</body>
</html>


<?php } ?>

