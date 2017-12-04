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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE DATA FILE </h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">

       <form action=" " method="POST" enctype="multipart/form-data">
   

   

        
       
     
<tr>
<td> DATA FILE :  </td>
 
 <td> <input type="file" name="image" /> </td>

</tr>
<!--
<tr>
<td> IMAGE FILE :  </td>
 
 <td><input type="file" name="uploadedfile2" required /> </td>

</tr>

<tr>
<td> IMAGE FILE :  </td>
 
 <td><input type="file" name="uploadedfile3" required /> </td>

</tr>
-->
     <td>     <input type="submit" value="there you go johnny" /> </td>
      </form>


  </table>



</div>
        




<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    

    <tr>
      <th>Project ID</th>
      <th>Project Name</th>
      <th>Project Description</th>
      <th>Max Bid</th>
      <th>Raw Material</th>
      <th>Last Date</th>
      <th>Delete</th>

    
  </tr>


<?php

$get_pro="SELECT * FROM project_details";

$run_pro =mysqli_query($con , $get_pro);

$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  

  $proj_id= $row_pro['project_id'];
  $proj_title= $row_pro['project_name'];
  $proj_desc= $row_pro['project_desc'];
  $skills= $row_pro['skills'];
  $max_bid= $row_pro['max_bid'];
  $proj_raw_materials= $row_pro['raw_materials'];
  $proj_last_date= $row_pro['last_date'];


  $i++;

?>
<tr>
      <td> <?php echo $proj_id; ?></td>
      <td> <?php echo $proj_title; ?></td>
      <td> <?php echo $skills; ?> | <br><?php echo $proj_desc; ?></td>
      <td> <?php echo $max_bid; ?></td>
      <td> <?php echo $proj_raw_materials; ?></td>
      <td> <?php echo $proj_last_date; ?></td>
       <td> <a href="delete_proj.php?delete_pro=<?php echo $proj_id ?>" style="color: black; "> Delete </a> </td>      


  </tr>

<?php    }      ?>


      </table>
</div>



</div>


<?php




if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("xls","xlsx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a .xlsx or .xls file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"project_data/".$file_name);
        
echo "<script>alert('File uploaded successfully')</script>";
require_once "Classes/PHPExcel.php";

    $tmpfname = "project_data/".$file_name;
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
  //  $worksheet = $excelObj->getSheet(1);
  //  $worksheet2 = $excelObj->getSheet(2);
    $worksheet = $excelObj->getSheet(0);


   // $lastRow = $worksheet3->getHighestRow();
  //  $lastcol = $worksheet->getHighestColumn();

  $project_id = $worksheet->getCell('A'.'2')->getValue();
  $project_name = $worksheet->getCell('B'.'2')->getValue();
  $project_desc = $worksheet->getCell('C'.'2')->getValue();
 $max_bid =  $worksheet->getCell('D'.'2')->getValue();
  $raw_material = $worksheet->getCell('E'.'2')->getValue();
  $last_date = $worksheet->getCell('F'.'2')->getValue();
  $skills = $worksheet->getCell('G'.'2')->getValue();

 $upload_date = date("Y/m/d");



$upsert_query = "SELECT project_id from project_details where project_id = '$project_id'";

$run_upsert_query = mysqli_query($con , $upsert_query);

$count_upsert_query = mysqli_num_rows($run_upsert_query);

if ($count_upsert_query == 0) {
 
//Insert here
 $insert_info = "INSERT INTO project_details (project_id, project_name, project_desc, max_bid, raw_materials, last_date, upload_date, skills) values ('$project_id', '$project_name', '$project_desc', '$max_bid', '$raw_material', '$last_date' , '$upload_date', '$skills')";



if (mysqli_query($con , $insert_info)) {
    echo "<script>alert('Product has been added')</script>";
    echo "<script>window.open('index.php?clan_project','_self')</script>";
} else {
    echo "Error: " . $insert_info . "<br>" . mysqli_error($con);
}

}

else
{

$update_info = "UPDATE project_details SET project_name = '$project_name' , project_desc = '$project_desc' , max_bid = '$max_bid' , raw_materials = '$raw_material' , last_date = '$last_date' , upload_date = '$upload_date' , skills = '$skills' where project_id = '$project_id'";

if (mysqli_query($con , $update_info)) {
    echo "<script>alert('Product has been updated')</script>";
    echo "<script>window.open('index.php?clan_project','_self')</script>";
} else {
    echo "Error: " . $insert_info . "<br>" . mysqli_error($con);
}




}


$myFile = "project_data/".$file_name;

unlink($myFile) or die("Couldn't delete file");


      }

      else{
         print_r($errors);
      }
   }

} 








?>


</body>
</html>