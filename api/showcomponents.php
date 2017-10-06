<?php


header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
include "conn.php";

showproduct();



}



function showproduct(){


global $con;

$my_query = "SELECT * FROM components";

$run_pro= mysqli_query($con , $my_query); 

$num_rows = mysqli_num_rows($run_pro);

$temp_value = array();


if ($num_rows>0) {
	

while ($row_pro = mysqli_fetch_assoc($run_pro)) {

$temp_value[]= $row_pro;

	
}

}





header('Content-Type: application/json');
echo json_encode(array("products"=>$temp_value));

}




?>