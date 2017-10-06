<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mada" rel="stylesheet">

<style type="text/css">


.error {color: #FF0000;}

	
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}



</style>
</head>


<body>

     <?php

      if (isset($_GET['lesson_id'])) {
     
     $less_id = $_GET['lesson_id'];


     $get_pro = "SELECT * FROM lesson WHERE lesson_id='$less_id'";

$run_pro = mysqli_query($con, $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);
  
  $lesson_title = $row_pro['lesson_title'];
   $lesson_youtube = $row_pro['lesson_youtube'];
   $lesson_compo = $row_pro['lesson_compo'];
   $lesson_aim= $row_pro['lesson_aim'];  
   $lesson_inst = $row_pro['lesson_inst'];
   $lesson_quiz_id = $row_pro['lesson_quiz_id'];
   $points= $row_pro['points'];
   


}

      
?>    



<div class="panel panel-default">
  <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; "><?php echo $lesson_title ;?> </div>
 <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $lesson_youtube; ?>" frameborder="10" allowfullscreen></iframe>
</div>
</div>


<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">AIM</div>
  <div class="panel-body"><?php echo $lesson_aim ;?> </div>
</div>

<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">COMPONENTS</div>
  <div class="panel-body"><?php echo $lesson_compo ;?> </div>
</div>


<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">INSTRUCTIONS</div>
  <div class="panel-body"><?php echo $lesson_inst ;?></div>
</div>

<div class="col-lg-3" style="text-align: center;">
  



</div>


<div class="panel-group">
    <div class="panel panel-default" >
      <div class="panel-heading" style="background-color: transparent; text-align: center;">
        <h4 class="panel-title" style="background-color: transparent; text-align: center;">
                 <button type="button" class="btn btn-success btn-lg" data-toggle="collapse" href="#collapse1">Start Quiz</button>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">







<?php

$get_quiz = "SELECT * FROM quiz where quiz_lesson_id ='$less_id'";

$run_quiz = mysqli_query($con , $get_quiz);

$row_quiz = mysqli_fetch_array($run_quiz) ;

  $question_id1 = $row_quiz['question_id1'];
 $question1 = $row_quiz['question1'];
   $opt_A1 = $row_quiz['opt_A1'];
   $opt_B1 = $row_quiz['opt_B1'];
  
   $opt_C1 = $row_quiz['opt_C1'];

   $opt_D1 = $row_quiz['opt_D1'];
   $correct_opt1 = $row_quiz['correct_opt1'];




  $question_id2 = $row_quiz['question_id2'];
 $question2 = $row_quiz['question2'];
   $opt_A2 = $row_quiz['opt_A2'];
   $opt_B2 = $row_quiz['opt_B2'];
  
   $opt_C2 = $row_quiz['opt_C2'];

   $opt_D2 = $row_quiz['opt_D2'];
   $correct_opt2 = $row_quiz['correct_opt2'];



   $question_id3 = $row_quiz['question_id3'];
 $question3 = $row_quiz['question3'];
   $opt_A3 = $row_quiz['opt_A3'];
   $opt_B3 = $row_quiz['opt_B3'];
  
   $opt_C3 = $row_quiz['opt_C3'];

   $opt_D3 = $row_quiz['opt_D3'];
   $correct_opt3 = $row_quiz['correct_opt3'];




   $question_id4 = $row_quiz['question_id4'];
 $question4 = $row_quiz['question4'];
   $opt_A4 = $row_quiz['opt_A4'];
   $opt_B4 = $row_quiz['opt_B4'];
  
   $opt_C4 = $row_quiz['opt_C4'];

   $opt_D4 = $row_quiz['opt_D4'];
   $correct_opt4 = $row_quiz['correct_opt4'];

$opt_11err =  $opt_22err = $opt_33err = $opt_44err = " ";




if (isset($_POST['quiz'])) {

$opt_11 = $_POST['opt_11'] ; 
$opt_22 = $_POST['opt_22'] ; 
$opt_33 = $_POST['opt_33'] ; 
$opt_44 = $_POST['opt_44'] ; 

   
  



if ( ($opt_11 == $correct_opt1) && ($opt_22 == $correct_opt2) && ($opt_33 == $correct_opt3) &&  ($opt_44 == $correct_opt4) ) {


   echo "<script>alert('Correct Ansswers')</script>";  
  
}


else

{
  

 if (($opt_11 != $correct_opt1)) {

    $opt_11err = "Incorrect answer" ;
   
   }


   if (($opt_22 != $correct_opt2)) {

    $opt_22err = "Incorrect answer" ;
   
   }

if (($opt_33 != $correct_opt3)) {

    $opt_33err = "Incorrect answer" ;
   
   }

if (($opt_44 != $correct_opt4)) {

    $opt_44err = "Incorrect answer" ;
   
   }






}

}







?>




<form action="" method="post">

<div class="col-lg-6">
<p><?php echo $question1 ?>  <span class="error">* <?php echo $opt_11err ?></span> </p>
  
      <div class="radio">
      <label><input type="radio" name="opt_11" value="A" required><?php echo $opt_A1; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" name="opt_11" value="B"><?php echo $opt_B1; ?></label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="opt_11" value="C" ><?php echo $opt_C1; ?></label>
    </div>
<div class="radio ">
      <label><input type="radio" name="opt_11" value="D" ><?php echo $opt_D1; ?></label>
    </div>




<p><?php echo $question2 ?>  <span class="error">* <?php echo $opt_22err ?></span> </p>
  
    <div class="radio">
      <label><input type="radio" name="opt_22" value="A" required><?php echo $opt_A2; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" name="opt_22" value="B"><?php echo $opt_B2; ?></label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="opt_22" value="C" ><?php echo $opt_C2; ?></label>
    </div>
<div class="radio ">
      <label><input type="radio" name="opt_22" value="D" ><?php echo $opt_D2; ?></label>
    </div>



</div>



<div class="col-lg-6">
<p><?php echo $question3 ?>  <span class="error">* <?php echo $opt_33err ?></span> </p>
  
    <div class="radio">
      <label><input type="radio" name="opt_33" value="A" required><?php echo $opt_A3; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" name="opt_33" value="B"><?php echo $opt_B3; ?></label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="opt_33" value="C" ><?php echo $opt_C3; ?></label>
    </div>
<div class="radio ">
      <label><input type="radio" name="opt_33" value="D" ><?php echo $opt_D3; ?></label>
    </div>




<p><?php echo $question4 ?>  <span class="error">* <?php echo $opt_44err ?></span> </p>
  
    <div class="radio">
      <label><input type="radio" name="opt_44" value="A" required><?php echo $opt_A4; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" name="opt_44" value="B"><?php echo $opt_B4; ?></label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="opt_44" value="C" ><?php echo $opt_C4; ?></label>
    </div>
<div class="radio ">
      <label><input type="radio" name="opt_44" value="D" ><?php echo $opt_D4; ?></label>
    </div>





</div>







<div >
      <button type="submit" name="quiz" style="padding : 10px 10px 10px 10px; "">Submit</button>
    </div>

</form>








          
















        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>
  </div>



<div class="col-lg-6" style="text-align: center;">
  
 


</div>

<div class="col-lg-3" style="text-align: center;">
  



</div>



























    </div>
  </div>
  







































</body>
</html>