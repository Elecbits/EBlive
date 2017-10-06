<?php  
 //insert.php  

 if(isset($_POST["name"]))  
 {  
      $email =  $_POST["name"];
      $name =  $_POST["na"];
      $message =  $_POST["message"];
      $pass = $_POST["pass"];
      $subject = $_POST["subject"];
      
     $check =" $email , $name, $message, $pass";
     
     
    $from= "from: $name@elecbits.in";
    
    if($pass== "gtbit@1216" ){

if(filter_var($email, FILTER_VALIDATE_EMAIL)){


      if( mail("saurav.rav67@gmail.com", $subject, $check, $from) && mail($email, $subject, $message , $from) && mail("elecbits16@gmail.com", $subject, $check, $from) ) 
      {  
           echo "Message Saved, please check your email confirmation. Meanwhile, <a href='http://elecbits.in'>Visit Us</a>";  
      }  
 }  
 
 
 }
 
 
 else
 {
 echo "Wrong Email, please enter again";
 }
 
 }
 
 
 ?>  