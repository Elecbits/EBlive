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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">COMPONENTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
	    <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Stock</th>

      <th>Edit</th>
      <th>Delete</th>




		
	</tr>
	<?php

$get_comp ="SELECT * FROM components";

$run_comp =mysqli_query($con , $get_comp);

$i=0;
while ($row_comp=mysqli_fetch_array($run_comp)) {
  

  $comp_id= $row_comp['comp_id'];
  $comp_name= $row_comp['name'];
  $comp_price= $row_comp['price'];
  $comp_stock= $row_comp['stock'];

  

  $i++;


?>
<tr>
      <td> <?php echo $comp_id; ?></td>
      <td> <?php echo $comp_name; ?></td>
      <td> <?php echo $comp_price; ?></td>
      <td> <?php echo $comp_stock; ?></td>

      
      <td> <a href="index.php?edit_comp=<?php echo $comp_id ; ?>" style="color: black; "> Edit </a> </td> 
       <td> <a href="delete_comp.php?delete_comp=<?php echo $comp_id ?>" style="color: black; "> Delete </a> </td>      

    
  </tr>


  <?php }  ?>



  </table>
</div>



</div>



         

</body>
</html>


<?php } ?>