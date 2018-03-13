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
      <th>Email</th>
      <th>Name</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Username</th>
      <th>Pass</th>
      <th>Delete</th>

    
  </tr>


<?php

$get_pro="SELECT * FROM makerclan";

$run_pro =mysqli_query($con , $get_pro);

$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  

  $maker_name= $row_pro['name'];
  $maker_email= $row_pro['email'];
  $maker_contact= $row_pro['contact'];
  $maker_address= $row_pro['address'];
  $maker_username= $row_pro['username'];
  $maker_pass= $row_pro['pass'];
  $maker_pincode= $row_pro['pincode'];


  $i++;

?>
<tr>
      <td> <?php echo $maker_name; ?></td>
      <td> <?php echo $maker_email; ?></td>
      <td> <?php echo $maker_contact; ?> </td>
      <td> <?php echo $maker_address; ?> | <?php echo $maker_pincode; ?></td>
      <td> <?php echo $maker_username; ?></td>
      <td> <?php echo $maker_pass; ?></td>
       <td> <a href="delete_maker.php?delete_pro=<?php echo $maker_email ?>" style="color: black; "> Delete </a> </td>      


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

  $name = $worksheet->getCell('A'.'2')->getValue();
  $email = $worksheet->getCell('B'.'2')->getValue();
  $contact = $worksheet->getCell('C'.'2')->getValue();
 $address =  $worksheet->getCell('D'.'2')->getValue();
  $username = $worksheet->getCell('E'.'2')->getValue();
  $pass = $worksheet->getCell('F'.'2')->getValue();
  $pincode = $worksheet->getCell('G'.'2')->getValue();

 $upload_date = date("Y/m/d");



$upsert_query = "SELECT email from makerclan where email = '$email'";

$run_upsert_query = mysqli_query($con , $upsert_query);

$count_upsert_query = mysqli_num_rows($run_upsert_query);

if ($count_upsert_query == 0) {
 
//Insert here
 $insert_info = "INSERT INTO makerclan (name, email, contact, address, username, pass, pincode) values ('$name', '$email', '$contact', '$address', '$username', '$pass' , '$pincode')";



if (mysqli_query($con , $insert_info)) {
    echo "<script>alert('Product has been added')</script>";
    echo "<script>window.open('index.php?add_makers','_self')</script>";
} else {
    echo "Error: " . $insert_info . "<br>" . mysqli_error($con);
}

}

else
{

$update_info = "UPDATE makerclan SET name = '$name' , contact = '$contact' , address = '$address' , username = '$username' , pass = '$pass' , pincode = '$pincode'  where email = '$email'";

if (mysqli_query($con , $update_info)) {
    echo "<script>alert('Product has been updated')</script>";
    echo "<script>window.open('index.php?add_makers','_self')</script>";
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