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
	<title>Insert softwares</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE SOFTWARE </h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>Software ID :</td>
		<td> <input type="text" name="soft_id" size="60" required /></td> 
	</tr>
	<tr>
	    <td>Software project Title :</td>
		<td> <input type="text" name="soft_title" size="60" required /></td> 
	</tr>



	



 

	<tr>
	    <td>Project Description :</td>
		<td> <textarea name="soft_desc"  cols="20" rows="10"></textarea> </td> 
	</tr>

<tr>
      <td>Project Coding:</td>
    <td> <textarea name="soft_code"  cols="20" rows="10"></textarea> </td> 
  </tr>


 
<tr>
      <td>Uploaded By:</td>
    <td> <input type="text" name="soft_person" size="60" required/></td> 
  </tr>

<tr>
      <td>LinkedIn Link:</td>
    <td> <input type="url" name="soft_profile" size="60" required/></td> 
  </tr>

<tr>
      <td>.txt url</td>
    <td> <input type="url" name="link2" size="60" required/></td> 
  </tr>




<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the software" ></td> 
  </tr>


  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['insert_post']))  ) {
	//getting the text data

   $software_id=$_POST['soft_id']; 
   $software_title= $_POST['soft_title'];
  
   $soft_desc = $_POST['soft_desc'];
   $soft_code= $_POST['soft_code'];
   $soft_person = $_POST['soft_person'];
   $soft_profile = $_POST['soft_profile'];
   
   
 $link2 = $_POST['link2'];


   $insert_software = "INSERT INTO software (soft_id , soft_title, soft_person_name, soft_desc, soft_coding, soft_profile, output1 ) VALUES ('$software_id','$software_title','$soft_person', '$soft_desc','$soft_code', '$soft_profile', '$link2') ";


 



  
if (mysqli_query( $con , $insert_software)) {
    echo "New record created successfully";

    echo "<script>alert('software has been added')</script>";
    echo "<script>window.open('index.php?view_soft','_self')</script>";
} else {
    echo "Error: " . $insert_software . "<br>" . mysqli_error($con);
}
}




 


    
?>


<?php } ?>