<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   


<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px; border-radius: 12px; ">    CATEGORIES  </div> 
<div id="allp"><p style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="all_products.php"   >ALL PROJECTS</a></p></div>
<div style=" padding:10px 0px 10px 0px ; border-style: solid; border-radius: 12px; ">
 <?php getcats(); ?>
</div>
<hr>
 <form method="post"  action=" ">
<div class="form-group">
    <label for="email" style="text-align: center;">NEWSLETTER</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
  </div>
<button type="submit" class="btn btn-default" name="submit">Subscribe</button>
</form>


</div>
</div>

</body>
</html>

  <?php
   if (isset($_POST['submit']))

    {

      $email = $_POST['email'];
     
     
      $msg = "$email";

       $from= "from: Subscribe_Elecbits@elecbits.in";

       if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Project", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "We appreciate your concern", "Thank you for subscribing to our NEWSLETTER, For more details visit http://elecbits.in/blog" , $from) ) 
      {  
           echo "<script>alert('Thank you for subscribing to our Newsletter.')</script>";  
      }  

}

   }


?>