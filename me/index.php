<!DOCTYPE html>  
 <html>  
      <head>  
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="Elecbits" content=" We make Electronics Easy.">
		<meta name="author" content="Elecbits">
           <title>Elecbits | We make Electronics Easy.</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            <script type="text/javascript" src="../ckeditor/ckeditor.js"></script> 
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;" > 
           <h2 style="font-family:curasive;" >Mail Service </h2>
                <form method="post" action="">  
                     <label>Email</label>  
                     <input type="email" name="name"  class="form-control" />  
                     <br /> 
                     <label>Name you want to use.</label>  
                     <input type="text" name="na" class="form-control" />  
                     <br />
                     <label>Subject</label>  
                     <input type="text" name="subject"  class="form-control" />  
                     <br />
                     <label>Your message</label>  
                     <textarea class="form-control ckeditor"  name="message" class="form-control" ></textarea>
                     <br /> 
                     <label>Pass for admin</label>
                     <input type="password" name="pass" class="form-control" /> 
                      
                      <br />  
                     <input type="submit" name="submit"  class="btn btn-info" value="Submit" />  
                    
                </form>  
           </div>  
      </body>  
 </html>  
 <?php  


 if(isset($_POST["submit"]))  
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
           echo "<script>alert('Response has been added')</script>";
    echo "<script>window.open('index.php','_self')</script>";
      }  
 }  
 
 
 }
 
 
 else
 {
 echo "Wrong Email, please enter again";
 }
 
 }
 
 
 ?>  
 
