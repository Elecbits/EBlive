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
	<title>Edit Sub Categories</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">CATEGORIES</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Category ID</th>
      
      <th>Parent Category</th>
      <th>Sub Category</th>
      <th>Edit</th>
      <th>Delete</th>

		
	</tr>
	<?php

$get_cat ="SELECT * FROM subcategories";

$run_cat =mysql_query( $get_cat, $con);

$i=0;
while ($row_cat=mysql_fetch_array($run_cat)) {
  

  $cat_id= $row_cat['subcat_id'];
  $cat_p_title=$row_cat['pcat'];
    $cat_title= $row_cat['subcat'];

  

  $i++;


?>
<tr>
      <td> <?php echo $cat_id; ?></td>
      <td> 


<?php echo $cat_p_title; ?>


      </td>
      <td> <?php echo $cat_title; ?></td>
      <td> <a href="index.php?edit_subcat=<?php echo $cat_id ; ?>" style="color: black; "> Edit </a> </td> 
       <td> <a href="delete_subcat.php?delete_subcat=<?php echo $cat_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>


<?php } ?>