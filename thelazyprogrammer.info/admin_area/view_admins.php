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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">CATEGORIES</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Email</th>
      <th>Password</th>
     <th>Delete</th>

		
	</tr>
	<?php

$get_cat ="SELECT * FROM admin";

$run_cat =mysql_query( $get_cat, $con);

$i=0;
while ($row_cat=mysql_fetch_array($run_cat)) {
  
$user_id = $row_cat['user_id'];
  $cat_id= $row_cat['user_email'];
  $cat_title= $row_cat['user_pass'];
  

  $i++;


?>
<tr>
      <td> <?php echo $cat_id; ?></td>
      <td> <?php echo $cat_title; ?></td>
     
       <td> <a href="delete_admin.php?delete_admin=<?php echo $user_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>


<?php } ?>