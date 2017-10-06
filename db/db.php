<!DOCTYPE html>

<?php




//$con=mysql_connect ("localhost:3306", "elecbksb_aurav", "gtbit@1216") or die ('I cannot connect to the database.');

//mysql_select_db ("elecbksb_lasthope")or die("error");


$con= mysqli_connect("localhost","root","","elecbksb_lasthope");




?>
<html>
<head>
	<title>
		test
	</title>
</head>
<body>

<form action="" method="post" >
<input type="text" name="name">

<input type="submit" name="submit" value="ssubmit">

</form>
</body>
</html>

<?php


if (isset($_POST['submit'])) {
	
	$name= $_POST['name'];

	$run_query = "INSERT INTO keep (value) VALUES (8)";

	$p_query = mysqli_query($con , $run_query);


	if ($p_query !=false) {
		echo "Success";
	}

	else {
		

		 echo "Error: " . $run_query .  "<br>" . mysqli_error($run_query,$con);

		 	}


}




?>