<!DOCTYPE html>

<?php




$con=mysql_connect ("localhost:3306", "elecbksb_harshit", "mnbvcxz098$") or die ('I cannot connect to the database.');

mysql_select_db ("elecbksb_harshit")or die("error");



?>
<html>
<head>
	<title>
		test
	</title>
</head>
<body>

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

<td> <?php echo $cat_id; ?></td>
      <td> <?php echo $cat_title; ?></td>
     
<?php
}
?>


</body>

</html>

