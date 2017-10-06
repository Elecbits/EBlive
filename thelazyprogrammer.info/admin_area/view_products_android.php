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
	<title>View Products</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">ANDROID POSTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>Product ID</th>
      <th>Product Title</th>
      <th>Product Price</th>
     
      <th>Edit</th>
      <th>Delete</th>

		
	</tr>
	<?php

$get_pro="SELECT * FROM post where m_category = 'Android'";

$run_pro =mysql_query($get_pro, $con);

$i=0;
while ($row_pro=mysql_fetch_array($run_pro)) {
  

  $post_id= $row_pro['post_id'];
  $product_title= $row_pro['post_title'];

  $product_keywords= $row_pro['post_keywords'];

  $i++;


?>
<tr>
      <td> <?php echo $post_id; ?></td>
      <td> <?php echo $product_title; ?></td>
      <td> <?php echo $product_keywords; ?></td>
      <td> <a href="index.php?edit_pro=<?php echo $post_id ; ?>" style="color: black; "> Edit </a> </td> 
       <td> <a href="delete_pro.php?delete_pro=<?php echo $post_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>




<?php } ?>