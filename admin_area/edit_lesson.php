<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if ($_GET['edit_lesson']) {
  
  $less_id = $_GET['edit_lesson'];
$get_pro = "SELECT * FROM lesson WHERE lesson_id='$less_id'";

$run_pro = mysqli_query($con , $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);
  
  $lesson_title = $row_pro['lesson_title'];
   $lesson_youtube = $row_pro['lesson_youtube'];
   $lesson_compo = $row_pro['lesson_compo'];
   $lesson_aim= $row_pro['lesson_aim'];  
   $lesson_inst = $row_pro['lesson_inst'];
   $lesson_code = $row_pro['lesson_code'];
   $lesson_quiz_id = $row_pro['lesson_quiz_id'];
   $points= $row_pro['points'];
   


}
?>



<html>
<head>
  <title>View lessons</title>
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">EDIT THE lessons</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action=" " method="post" enctype="mutlipart/form" >
    <tr>
      <td>lesson ID :</td>
    <td> <input type="text" name="lesson_id" size="60" value="<?php echo $less_id ;?>" disabled></td> 
  </tr>
  <tr>
      <td>lesson Title :</td>
    <td> <input type="text" name="lesson_title" size="60"  value="<?php echo $lesson_title; ?>" required /></td> 
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
    <td> <input type="url" name="lesson_youtube" size="60" value="<?php echo $lesson_youtube; ?>" required/></td> 
  </tr>

 

  <tr>
      <td>Lesson AIM :</td>
    <td> <textarea name="lesson_aim"  cols="20" rows="10"><?php echo $lesson_aim; ?></textarea> </td> 
  </tr>

  

   <tr>
      <td>Lesson Components :</td>
    <td> <textarea name="lesson_compo"  cols="20" rows="10"><?php echo $lesson_compo; ?></textarea> </td> 
  </tr>

  
 <tr>
      <td>Lesson Instruction :</td>
    <td> <textarea name="lesson_inst"   cols="20" rows="10"><?php echo $lesson_inst; ?></textarea> </td> 
  </tr>

   <tr>
      <td>Lesson Code :</td>
    <td> <textarea name="lesson_code"   cols="20" rows="10"><?php echo $lesson_code; ?></textarea> </td> 
  </tr>

   <tr>
      <td>Lesson Quiz ID :</td>
    <td> <input type="text" name="lesson_quiz_id" size="50" value="<?php echo $lesson_quiz_id; ?>" required/></td> 
  </tr>

     <tr>
      <td>Lesson Points :</td>
    <td> <input type="text" name="points" size="50" value="<?php echo $points; ?>" required/></td> 
  </tr>



  <tr>
      <td></td>
    <td> <input type="submit" name="update_post" value="Update the lesson" ></td> 
  </tr>




  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['update_post'])) ) {
  //getting the text data

  
   $lesson_titles= $_POST['lesson_title']; 
   $lesson_youtubes= $_POST['lesson_youtube'];
   $lesson_aims = $_POST['lesson_aim'];
    $lesson_compos = $_POST['lesson_compo'];
   $lesson_insts= $_POST['lesson_inst'];  
   $lesson_code= $_POST['lesson_code'];  

   $lesson_quiz_ids = $_POST['lesson_quiz_id'];
   $pointss = $_POST['points'];


   
 



   $update_lesson = "UPDATE lesson SET  lesson_title= '$lesson_titles',  lesson_youtube = '$lesson_youtubes' , lesson_aim = '$lesson_aims'  , lesson_inst = '$lesson_insts' , lesson_code='$lesson_code' ,lesson_compo = '$lesson_compos' ,   lesson_quiz_id = '$lesson_quiz_ids' , points = '$pointss'  WHERE lesson_id ='$less_id'  ";


 



  
if (mysqli_query($con , $update_lesson)) {
    echo "New record created successfully";

    echo "<script>alert('lesson has been edited successfully')</script>";

    echo "<script>window.open('index.php?view_lesson','_self')</script>";
} else {
    echo "Error: "  . "<br>" . mysqli_error($con);
}
}




 


    
?>

 
<?php } ?>