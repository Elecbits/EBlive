<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>



        <?php

          if (isset($_GET['lesson_id'])) {
     

     include("lesson.php");
   }

else

{ 
  echo "<script>window.open('home.php','_self')</script>";

}



          ?>


</html>