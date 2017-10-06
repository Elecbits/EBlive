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
	<title>Insert Lesson</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE LESSON</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>Lesson ID :</td>
		<td> <input type="text" name="lesson_id" size="60" required /></td> 
	</tr>
	<tr>
	    <td>Lesson Title :</td>
		<td> <input type="text" name="lesson_title" size="60" required /></td> 
	</tr>
<!--
	<tr>
	    <td>lesson Image 1:</td>
		<td> <input type="file" name="uploadedfile" required/>
         
      </td> 
	</tr>

	
	<tr>
	    <td>lesson Image 2:</td>
		<td> <input type="file" name="lesson_image2" required/></td> 
	</tr>

		<tr>
	    <td>lesson Image :</td>
		<td> <input type="file" name="lesson_image" required/></td> 
	</tr>
-->

	<tr>
	    <td>Lesson Youtube Link</td>
		<td> <input type="url" name="lesson_youtube" size="60" required/></td> 
	</tr>

 

  <tr>
      <td>Lesson AIM :</td>
    <td> <textarea name="lesson_aim"  cols="20" rows="10"></textarea> </td> 
  </tr>

  

   <tr>
      <td>Lesson Components :</td>
    <td> <textarea name="lesson_compo"  cols="20" rows="10"></textarea> </td> 
  </tr>

 	
 <tr>
      <td>Lesson Instruction :</td>
    <td> <textarea name="lesson_inst"   cols="20" rows="10"></textarea> </td> 
  </tr>

<tr>
      <td>Lesson code :</td>
    <td> <textarea name="lesson_code"   cols="20" rows="10"></textarea> </td> 
  </tr>

   <tr>
      <td>Lesson Quiz ID :</td>
    <td> <input type="text" name="lesson_quiz_id" size="50" required/></td> 
  </tr>

     <tr>
      <td>Lesson Points :</td>
    <td> <input type="text" name="points" size="50" required/></td> 
  </tr>



<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the lesson" ></td> 
  </tr>


  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['insert_post'])) || (isset($_FILES['uploadedfile']) )) {
	//getting the text data

   $lesson_id=$_POST['lesson_id']; 
   $lesson_title= $_POST['lesson_title'];
  $lesson_compo = $_POST['lesson_compo'];
   $lesson_youtube= $_POST['lesson_youtube'];
   $lesson_aim = $_POST['lesson_aim'];
   $lesson_inst= $_POST['lesson_inst'];  
   $lesson_code= $_POST['lesson_code'];
   $lesson_quiz_id = $_POST['lesson_quiz_id'];
   $points = $_POST['points'];
   
 
    $insert_lesson = "INSERT INTO lesson (lesson_id , lesson_title, lesson_youtube, lesson_aim, lesson_compo, lesson_inst, lesson_code, lesson_quiz_id , points) VALUES ('$lesson_id','$lesson_title','$lesson_youtube' ,  '$lesson_aim' ,'$lesson_compo' ,'$lesson_inst' , '$lesson_code','$lesson_quiz_id' , '$points' ) ";



  
if (mysqli_query($con , $insert_lesson)) {
    echo "New record created successfully";

    echo "<script>alert('lesson has been added')</script>";
    echo "<script>window.open('index.php?view_lesson','_self')</script>";
} else {
    echo "Error: " . $insert_lesson . "<br>" . mysql_error($con);
}
}




 


    
?>


<?php } ?>