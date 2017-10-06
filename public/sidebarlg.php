<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   


<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px;  ">    CATEGORIES  </div> 
<div id="allp"><p style=" text-align: center; background-color: #333333; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="all_products.php" style=" color:white;"  >ALL PROJECTS</a></p></div>

 <?php getcats() ?>
 
<hr>
 <form method="post"  action=" ">
<div class="form-group">
    <label for="email" style="text-align: center;">NEWSLETTER</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
  </div>
<button type="submit" class="btn btn-default" name="sub">Subscribe</button>
</form>

<hr>

</div>
</div>

</body>
</html>

<?php
   if (isset($_POST['sub']))

    {

      $email = $_POST['email'];
     
     
      $msg = "$email";

       $from= "from: Subscribe_Elecbits@elecbits.in";

       if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Newsletter", $msg, $from) && mail("elecbits16@gmail.com", "Newsletter", $msg, $from) &&mail($email, "We appreciate your concern","Thank you for subscribing to our NEWSLETTER, For more details visit http://elecbits.in/blog" , $from) ) 
      {  
           echo "<script>alert('Thank you for subscribing to our Newsletter.')</script>";  
      }  

}

   }


?>