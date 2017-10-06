<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
  <?php
  include("public/link.php");
  ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  


  



</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->
<?php 

include("public/topbar.php");

?>

<!--Top bar end-->

  

<!--Logo bar start-->
<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 

<div class="content">



 
<form class="cbp-mc-form" method="post" action=" " >
  <div class="cbp-mc-column">
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" required/>
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name" required/>
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required/>
    
    
    <label for="colg">College</label>
    <input type="text" id="colg" name="colg" >
    
    
  </div>
  <div class="cbp-mc-column">
  <label for="colg">Semester (Optional)</label>
  <select id="sem" name="sem">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      
    </select>
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" >
    <label for="affiliations">Queries</label>
    <textarea id="affiliations" name="affiliations" required/></textarea>
    
    
  </div>
  <div  style="text-align:center" class="cbp-mc-column">
  
   <h2>E-mail</h2>
   <p style="color:#10689a">elecbits16@gmail.com</p><br>

   <hr>

   <h2>Phone</h2>
   <p style="color:#10689a">+91-9911806843</p><br>
   <hr>

   <h2>Location</h2>
   <p style="color:#10689a">New Delhi</p>
   <hr>
  </div>
  <div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="update" value="Send your data" />
  
  </div>
</form>
</div>
<br>

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->
<?php

if (isset($_POST['update'])) {

  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $email = $_POST['email'];
  $colg = $_POST['colg'];
  $sem = $_POST['sem'];
  $phone = $_POST['phone'];
   $affiliations = $_POST['affiliations'];


   $msg = "$fname, $lname, $email, $colg, $sem, $phone, $affiliations ";

   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Info@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "New Addition", $msg, $from) && mail("elecbits16@gmail.com", "New Addition", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>









</body>
</html>