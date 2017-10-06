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
	<title>Insert Quiz</title>
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
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE QUIZ</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>QUIZ ID :</td>
		<td> <input type="text" name="quiz_id" size="60" required /></td> 
	</tr>


    <tr>
      <td> Corrosponding Lesson ID :</td>
    <td> <input type="text" name="quiz_lesson_id" size="50" required/></td> 
  </tr>



 <tr>
      <td>Question ID1 :</td>
    <td> <input type="text" name="question_id1" size="60" required /></td> 
  </tr>

  <tr>
      <td>Question 1 :</td>
    <td> <textarea name="question1"  cols="20" rows="10"></textarea> </td> 
  </tr>
	


<tr>
      <td>Option A1 :</td>
    <td> <input type="text" name="opt_A1" size="60" required /></td> 
  </tr>
<tr>
      <td>Option B1 :</td>
    <td> <input type="text" name="opt_B1" size="60" required /></td> 
  </tr>
<tr>
      <td>Option C1 :</td>
    <td> <input type="text" name="opt_C1" size="60" required /></td> 
  </tr>

<tr>
      <td>Option D1 :</td>
    <td> <input type="text" name="opt_D1" size="60" required /></td> 
  </tr>

<tr>
      <td>Correct Option1 :</td>
    <td> <input type="text" name="correct_opt1" size="60" required /></td> 
  </tr>












<tr>
      <td>Question ID2 :</td>
    <td> <input type="text" name="question_id2" size="60" required /></td> 
  </tr>

  <tr>
      <td>Question 2 :</td>
    <td> <textarea name="question2"  cols="20" rows="20"></textarea> </td> 
  </tr>
  


<tr>
      <td>Option A2 :</td>
    <td> <input type="text" name="opt_A2" size="60" required /></td> 
  </tr>
<tr>
      <td>Option B2 :</td>
    <td> <input type="text" name="opt_B2" size="60" required /></td> 
  </tr>
<tr>
      <td>Option C2 :</td>
    <td> <input type="text" name="opt_C2" size="60" required /></td> 
  </tr>

<tr>
      <td>Option D2 :</td>
    <td> <input type="text" name="opt_D2" size="60" required /></td> 
  </tr>

<tr>
      <td>Correct Option2 :</td>
    <td> <input type="text" name="correct_opt2" size="60" required /></td> 
  </tr>










<tr>
      <td>Question ID3 :</td>
    <td> <input type="text" name="question_id3" size="60" required /></td> 
  </tr>

  <tr>
      <td>Question 3 :</td>
    <td> <textarea name="question3"  cols="30" rows="30"></textarea> </td> 
  </tr>
  


<tr>
      <td>Option A3 :</td>
    <td> <input type="text" name="opt_A3" size="60" required /></td> 
  </tr>
<tr>
      <td>Option B3 :</td>
    <td> <input type="text" name="opt_B3" size="60" required /></td> 
  </tr>
<tr>
      <td>Option C3 :</td>
    <td> <input type="text" name="opt_C3" size="60" required /></td> 
  </tr>

<tr>
      <td>Option D3 :</td>
    <td> <input type="text" name="opt_D3" size="60" required /></td> 
  </tr>

<tr>
      <td>Correct Option3 :</td>
    <td> <input type="text" name="correct_opt3" size="60" required /></td> 
  </tr>










<tr>
      <td>Question ID4 :</td>
    <td> <input type="text" name="question_id4" size="60" required /></td> 
  </tr>

  <tr>
      <td>Question 4 :</td>
    <td> <textarea name="question4"  cols="40" rows="40"></textarea> </td> 
  </tr>
  


<tr>
      <td>Option A4 :</td>
    <td> <input type="text" name="opt_A4" size="60" required /></td> 
  </tr>
<tr>
      <td>Option B4 :</td>
    <td> <input type="text" name="opt_B4" size="60" required /></td> 
  </tr>
<tr>
      <td>Option C4 :</td>
    <td> <input type="text" name="opt_C4" size="60" required /></td> 
  </tr>

<tr>
      <td>Option D4 :</td>
    <td> <input type="text" name="opt_D4" size="60" required /></td> 
  </tr>

<tr>
      <td>Correct Option4 :</td>
    <td> <input type="text" name="correct_opt4" size="60" required /></td> 
  </tr>














	 

   


<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the Quiz" ></td> 
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

   $quiz_id=$_POST['quiz_id'];
   $quiz_lesson_id = $_POST['quiz_lesson_id'];


  $question_id1 = $_POST['question_id1'];
  $question1= $_POST['question1'];
  $opt_A1 = $_POST['opt_A1'];
  $opt_B1= $_POST['opt_B1'];
  $opt_C1= $_POST['opt_C1'];
  $opt_D1= $_POST['opt_D1'];
  $correct_opt1 = $_POST['correct_opt1'];



  $question_id2 = $_POST['question_id2'];
  $question2= $_POST['question2'];
  $opt_A2 = $_POST['opt_A2'];
  $opt_B2= $_POST['opt_B2'];
  $opt_C2= $_POST['opt_C2'];
  $opt_D2= $_POST['opt_D2'];
  $correct_opt2 = $_POST['correct_opt2'];
   

  $question_id3 = $_POST['question_id3'];
  $question3= $_POST['question3'];
  $opt_A3 = $_POST['opt_A3'];
  $opt_B3= $_POST['opt_B3'];
  $opt_C3= $_POST['opt_C3'];
  $opt_D3= $_POST['opt_D3'];
  $correct_opt3 = $_POST['correct_opt3'];



  $question_id4 = $_POST['question_id4'];
  $question4= $_POST['question4'];
  $opt_A4 = $_POST['opt_A4'];
  $opt_B4= $_POST['opt_B4'];
  $opt_C4= $_POST['opt_C4'];
  $opt_D4= $_POST['opt_D4'];
  $correct_opt4 = $_POST['correct_opt4'];  


 
    $insert_lesson = "INSERT INTO quiz (quiz_id, quiz_lesson_id , question_id1, question1, opt_A1, opt_B1, opt_C1, opt_D1, correct_opt1 , question_id2, question2, opt_A2, opt_B2, opt_C2, opt_D2, correct_opt2 , question_id3, question3, opt_A3, opt_B3, opt_C3, opt_D3, correct_opt3, question_id4, question4, opt_A4, opt_B4, opt_C4, opt_D4, correct_opt4 ) VALUES ('$quiz_id' , '$quiz_lesson_id' ,  '$question_id1' , '$question1' , '$opt_A1' , '$opt_B1' , '$opt_C1' , '$opt_D1' , '$correct_opt1'  ,  '$question_id2' , '$question2' , '$opt_A2' , '$opt_B2' , '$opt_C2' , '$opt_D2' , '$correct_opt2' ,  '$question_id3' , '$question3' , '$opt_A3' , '$opt_B3' , '$opt_C3' , '$opt_D3' , '$correct_opt3','$question_id4' , '$question4' , '$opt_A4' , '$opt_B4' , '$opt_C4' , '$opt_D4' , '$correct_opt4') ";





  
if (mysqli_query($con , $insert_lesson )) {
    echo "New record created successfully";

    echo "<script>alert('Quiz has been added')</script>";
    echo "<script>window.open('index.php?view_quiz','_self')</script>";
} else {
    echo "Error: " . $insert_lesson . "<br>" . mysql_error($con);
}
}




 


    
?>


<?php } ?>