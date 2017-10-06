<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if ($_GET['edit_quiz']) {
  
  $quz_id = $_GET['edit_quiz'];
$get_pro = "SELECT * FROM quiz WHERE quiz_id='$quz_id'";

$run_pro = mysqli_query( $con , $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);

   $quiz_lesson_id= $row_pro['quiz_lesson_id'];


  $question_id1 = $row_pro['question_id1'];
  $question1 = $row_pro['question1'];
   $opt_A1 = $row_pro['opt_A1'];
   $opt_B1 = $row_pro['opt_B1'];  
   $opt_C1 = $row_pro['opt_C1'];
   $opt_D1 = $row_pro['opt_D1'];
   $correct_opt1 = $row_pro['correct_opt1'];



  $question_id2 = $row_pro['question_id2'];
  $question2 = $row_pro['question2'];
   $opt_A2 = $row_pro['opt_A2'];
   $opt_B2 = $row_pro['opt_B2'];  
   $opt_C2 = $row_pro['opt_C2'];
   $opt_D2 = $row_pro['opt_D2'];
   $correct_opt2 = $row_pro['correct_opt2'];  




   $question_id3 = $row_pro['question_id3'];
  $question3 = $row_pro['question3'];
   $opt_A3 = $row_pro['opt_A3'];
   $opt_B3 = $row_pro['opt_B3'];  
   $opt_C3 = $row_pro['opt_C3'];
   $opt_D3 = $row_pro['opt_D3'];
   $correct_opt3 = $row_pro['correct_opt3'];  



   $question_id4 = $row_pro['question_id4'];
  $question4 = $row_pro['question4'];
   $opt_A4 = $row_pro['opt_A4'];
   $opt_B4 = $row_pro['opt_B4'];  
   $opt_C4 = $row_pro['opt_C4'];
   $opt_D4 = $row_pro['opt_D4'];
   $correct_opt4 = $row_pro['correct_opt4'];  




      


}
?>



<html>
<head>
  <title>View Quizes</title>
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">EDIT THE QUIZ</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action=" " method="post" enctype="mutlipart/form" >
      <tr>
      <td>QUIZ ID :</td>
    <td> <input type="text" name="quiz_id" size="60" value="<?php echo $quz_id; ?>" disabled></td> 
  </tr>

      <tr>
      <td> Corrosponding Lesson ID :</td>
    <td> <input type="text" name="quiz_lesson_id" size="50" value="<?php echo $quiz_lesson_id ; ?>"required/></td> 
  </tr>



   <tr>
      <td>Question ID :</td>
    <td> <input type="text" name="question_id1" size="60" value="<?php echo $question_id1; ?>" ></td> 
  </tr>



  <tr>
      <td>Question :</td>
    <td> <textarea name="question1"  cols="20" rows="10"> <?php echo $question1 ; ?> </textarea> </td> 
  </tr>
 

 <tr>
      <td>Option 1 :</td>
    <td> <input type="text" name="opt_A1" size="60"  value="<?php echo $opt_A1;?>" required /></td> 
  </tr>
<tr>
      <td>Option 2 :</td>
    <td> <input type="text" name="opt_B1" size="60" value="<?php echo $opt_B1;?>" required /></td> 
  </tr>
<tr>
      <td>Option 3 :</td>
    <td> <input type="text" name="opt_C1" size="60"  value="<?php echo $opt_C1;?>" required /></td> 
  </tr>

<tr>
      <td>Option 4 :</td>
    <td> <input type="text" name="opt_D1" size="60" value="<?php echo $opt_D1 ;?>" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt1" size="60"  value="<?php echo $correct_opt1; ?>"required /></td> 
  </tr>







   <tr>
      <td>Question ID2 :</td>
    <td> <input type="text" name="question_id2" size="60" value="<?php echo $question_id2; ?>" ></td> 
  </tr>



  <tr>
      <td>Question2 :</td>
    <td> <textarea name="question2"  cols="20" rows="20"> <?php echo $question2 ; ?> </textarea> </td> 
  </tr>
 

 <tr>
      <td>Option  A2 :</td>
    <td> <input type="text" name="opt_A2" size="60"  value="<?php echo $opt_A2;?>" required /></td> 
  </tr>
<tr>
      <td>Option B2:</td>
    <td> <input type="text" name="opt_B2" size="60" value="<?php echo $opt_B2;?>" required /></td> 
  </tr>
<tr>
      <td>Option C2:</td>
    <td> <input type="text" name="opt_C2" size="60"  value="<?php echo $opt_C2;?>" required /></td> 
  </tr>

<tr>
      <td>Option D2 :</td>
    <td> <input type="text" name="opt_D2" size="60" value="<?php echo $opt_D2 ;?>" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt2" size="60"  value="<?php echo $correct_opt2; ?>"required /></td> 
  </tr>





     <tr>
      <td>Question ID3 :</td>
    <td> <input type="text" name="question_id3" size="60" value="<?php echo $question_id3; ?>" ></td> 
  </tr>



  <tr>
      <td>Question3 :</td>
    <td> <textarea name="question3"  cols="30" rows="30"> <?php echo $question3 ; ?> </textarea> </td> 
  </tr>
 

 <tr>
      <td>Option  A3 :</td>
    <td> <input type="text" name="opt_A3" size="60"  value="<?php echo $opt_A3;?>" required /></td> 
  </tr>
<tr>
      <td>Option B3:</td>
    <td> <input type="text" name="opt_B3" size="60" value="<?php echo $opt_B3;?>" required /></td> 
  </tr>
<tr>
      <td>Option C3:</td>
    <td> <input type="text" name="opt_C3" size="60"  value="<?php echo $opt_C3;?>" required /></td> 
  </tr>

<tr>
      <td>Option D3 :</td>
    <td> <input type="text" name="opt_D3" size="60" value="<?php echo $opt_D3 ;?>" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt3" size="60"  value="<?php echo $correct_opt3; ?>"required /></td> 
  </tr>






   <tr>
      <td>Question ID4 :</td>
    <td> <input type="text" name="question_id4" size="60" value="<?php echo $question_id4; ?>" ></td> 
  </tr>



  <tr>
      <td>Question4 :</td>
    <td> <textarea name="question4"  cols="40" rows="40"> <?php echo $question4 ; ?> </textarea> </td> 
  </tr>
 

 <tr>
      <td>Option  A4 :</td>
    <td> <input type="text" name="opt_A4" size="60"  value="<?php echo $opt_A4;?>" required /></td> 
  </tr>
<tr>
      <td>Option B4:</td>
    <td> <input type="text" name="opt_B4" size="60" value="<?php echo $opt_B4;?>" required /></td> 
  </tr>
<tr>
      <td>Option C4:</td>
    <td> <input type="text" name="opt_C4" size="60"  value="<?php echo $opt_C4;?>" required /></td> 
  </tr>

<tr>
      <td>Option D4 :</td>
    <td> <input type="text" name="opt_D4" size="60" value="<?php echo $opt_D4 ;?>" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt4" size="60"  value="<?php echo $correct_opt4; ?>"required /></td> 
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

$quiz_lesson_ids = $_POST['quiz_lesson_id'];
  


  $question_id1s = $_POST['question_id1'];
  $question1s= $_POST['question1'];
  $opt_A1s = $_POST['opt_A1'];
  $opt_B1s= $_POST['opt_B1'];
  $opt_C1s= $_POST['opt_C1'];
  $opt_D1s= $_POST['opt_D1'];
  $correct_opt1s = $_POST['correct_opt1'];



  $question_id2s = $_POST['question_id2'];
  $question2s= $_POST['question2'];
  $opt_A2s = $_POST['opt_A2'];
  $opt_B2s= $_POST['opt_B2'];
  $opt_C2s= $_POST['opt_C2'];
  $opt_D2s= $_POST['opt_D2'];
  $correct_opt2s = $_POST['correct_opt2'];


  $question_id3s = $_POST['question_id3'];
  $question3s= $_POST['question3'];
  $opt_A3s = $_POST['opt_A3'];
  $opt_B3s= $_POST['opt_B3'];
  $opt_C3s= $_POST['opt_C3'];
  $opt_D3s= $_POST['opt_D3'];
  $correct_opt3s = $_POST['correct_opt3'];



  $question_id4s = $_POST['question_id4'];
  $question4s= $_POST['question4'];
  $opt_A4s = $_POST['opt_A4'];
  $opt_B4s= $_POST['opt_B4'];
  $opt_C4s= $_POST['opt_C4'];
  $opt_D4s= $_POST['opt_D4'];
  $correct_opt4s = $_POST['correct_opt4'];




   

   
 
   $update_lesson = "UPDATE quiz SET quiz_lesson_id = '$quiz_lesson_ids', question_id1='$question_id1s' , question1 ='$question1s' , opt_A1 = '$opt_A1s' , opt_B1 = '$opt_B1s' , opt_C1 = '$opt_C1s' , opt_D1 = '$opt_D1s' , correct_opt1 = '$correct_opt1s' , question_id2='$question_id2s' , question2 ='$question2s' , opt_A2 = '$opt_A2s' , opt_B2 = '$opt_B2s' , opt_C2 = '$opt_C2s' , opt_D2 = '$opt_D2s' , correct_opt2 = '$correct_opt2s'  , question_id3='$question_id3s' , question3 ='$question3s' , opt_A3 = '$opt_A3s' , opt_B3 = '$opt_B3s' , opt_C3 = '$opt_C3s' , opt_D3 = '$opt_D3s' , correct_opt3 = '$correct_opt3s' , question_id4='$question_id4s' , question4 ='$question4s' , opt_A4 = '$opt_A4s' , opt_B4 = '$opt_B4s' , opt_C4 = '$opt_C4s' , opt_D4 = '$opt_D4s' , correct_opt4 = '$correct_opt4s' WHERE quiz_id ='$quz_id'  ";


 

  
if (mysqli_query($con , $update_lesson)) {
    echo "New record created successfully";

    echo "<script>alert('Quiz has been edited successfully')</script>";

    echo "<script>window.open('index.php?view_quiz','_self')</script>";
} else {
    echo "Error: "  . "<br>" . mysqli_error($con);
}
}




 


    
?>

 
<?php } ?>