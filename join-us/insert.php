<?php  
 //insert.php  

 if(isset($_POST["name"]))  
 {  
      $email =  $_POST["name"];
      $name =  $_POST["na"];
      $message =  $_POST["message"];
      $pass = $_POST["pass"];
    
      
     $check =" $email , $name, $message, $pass";
     
     
    $from= "from: Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){


      if( mail("saurav.rav67@gmail.com", "New Addition", $check, $from) && mail($email, "Welcome to Elecbits", "Thanks for subscription to Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in " , $from) ) 
      {  
           echo "Message Saved, please check your email confirmation. Meanwhile, <a href='http://elecbits.in'>Visit Us</a>";  
      }  
 }  
 
 else
 {
 echo "Wrong Email, please enter again";
 }
 
 }
 ?>  