<!DOCTYPE html>
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



</head>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");



?>
<link rel="stylesheet" type="text/css" href="styles/css/table.css">
<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits | Careers</title>
  <?php
  include("public/link.php");
  ?>
</head>
<style type="text/css">
  .top-heading{
    font-family: 'Muli',sans-serif;
    text-align: center;
    font-size: 25px;

  }
  .job-card{
    border-radius: 6px;
    padding: 3%;
    margin: 12px 16px 8px 0px;
    width: 290px;
    background-color: #f6f6f6;
    box-shadow: 1px 1px 1px 1px #d0d0d0;
  }
  .job-btn{
    font-family:'Muli',sans-serif;
    font-size: 13px;
    padding: 10px;
    background-color: rgb(0, 112, 255);
    color: #fff;
    border-radius: 3px;
    border-width: 0;
    height: 35px;
    width: 104px;
    text-decoration: none;
    font-weight: 700;
  }
  .job-btn:hover{
    background-color: #337ab7;
    color: #fff;
  }
  .modal-title{
    font-size: 19px;
    font-weight: 600;
  }
  .modal-2{
    font-size: 14px;
    font-weight: 600;
  }





  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  /*.container-fluid {
      padding: 60px 50px;
  }*/
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #0070ff;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }






</style>
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

  <div class="top-heading">
    We are hiring!
  </div>
  <div class="conatiner">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <div class="container">
          <div class="row" style="padding: 0px 50px 0px 50px;"> 
            <div class="col-sm-6 job-card">
             <span class="job-title" style="font-weight: 900;"><strong> Arduino Engineer </strong></span>

            <div class="job-location">Positions- <strong>2</strong></div>
          <div class="job-location">New Delhi</div><br>
             <button class="job-btn" data-toggle="modal" data-target="#myModal">View Details</button>
             <button class="job-btn" data-toggle="modal" data-target="#myModal3">Apply</button>
           </div>
           <div class="col-sm-6 job-card">
             <span class="job-title"style="font-weight: 900;"><strong> Delivery Boy </strong></span><br>
              <div class="job-location">Positions- <strong>2</strong></div>
             <div class="job-location">New Delhi</div><br>
             <button class="job-btn" data-toggle="modal" data-target="#myModal2">View Details</button>
             <button class="job-btn" data-toggle="modal" data-target="#myModal1">Apply</button>
           </div>
         </div>
       </div>

       <!--
       <div class="container">
        <div class="row" style="padding: 0px 50px 0px 50px;"> 
          <div class="col-sm-6 job-card">
           <span class="job-title"style="font-weight: 900;"><strong> Embedded Electronics Intern </strong></span><br>
              <div class="job-location">Positions- <strong>2</strong></div>
           <div class="job-location">New Delhi</div><br>
           <button class="job-btn" data-toggle="modal" data-target="#myModal">View Details</button>
           <button class="job-btn" data-toggle="modal" data-target="#myModal1">Apply</button>
         </div>
         <div class="col-sm-6 job-card">
           <span class="job-title">Delivery Boy</span><br>
           <div class="job-location">New Delhi</div><br>
           <button class="job-btn" data-toggle="modal" data-target="#myModal">View Details</button>
           <button class="job-btn" data-toggle="modal" data-target="#myModal1">Apply</button>
         </div>
       </div> -->
     </div>
    <!-- <div class="container">
      <div class="row" style="padding: 0px 50px 0px 50px;"> 
        <div class="col-sm-6 job-card">
         <span class="job-title">Embedded Electronics Intern</span><br>
         <div class="job-location">New Delhi</div><br>
         <button class="job-btn" data-toggle="modal" data-target="#myModal">View Details</button>
         <button class="job-btn" data-toggle="modal" data-target="#myModal1">Apply</button>
       </div>
       <div class="col-sm-6 job-card">
         <span class="job-title">Delivery Boy</span><br>
         <div class="job-location">New Delhi</div><br>
         <button class="job-btn" data-toggle="modal" data-target="#myModal">View Details</button>
         <button class="job-btn" data-toggle="modal" data-target="#myModal1">Apply</button>
       </div>
     </div>
   </div> -->
 </div>
 <div class="col-sm-3">
 </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #0070ff;font-weight:900;">Do the most meaningful work of your career here at Elecbits !</h4>
      </div>

      <div class="modal-body">
        <h4 class="modal-title">Job Title/Designation</h4>
        <div class="modal-2">Arduino Engineer</div><br>

        <h4 class="modal-title">Experience</h4>
        <div class="modal-2">Must be experienced in struggling and failing while trying new innovations. We want a passionate person, who never quits.
        </div><br>

        <h4 class="modal-title">Skills Required</h4>
        <div class="modal-2">Skilled in basic electronics, but must be starving to learn new things everyday.<br>
          Well versed in all cycles of life and can bring out innovative fix for different problems.<br>
          Excellent communication skills.
        </div><br>

        <h4 class="modal-title">Job Description</h4>
        <div class="modal-2">The position will design products and document the details for technical team.
        </div><br>


        <h4 class="modal-title">Job Location</h4>
        <div class="modal-2">New Delhi</div>
      </div>

    </div>

  </div>
</div>
<!-- Modal2-->
<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #0070ff;font-weight:900;">Do the most meaningful work of your career here at Elecbits !</h4>
      </div>

      <div class="modal-body">
        <h4 class="modal-title">Job Title/Designation</h4>
        <div class="modal-2">Delivery Boy</div><br>

        <h4 class="modal-title">Experience</h4>
        <div class="modal-2">At least rode 20,000 KM on two-wheelers in Delhi/NCR. Must love his bike/scooty. 
        </div><br>

        <h4 class="modal-title">Skills Required</h4>
        <div class="modal-2">Skilled in riding two wheelers, but must be starving to learn new things everyday.<br>
          Well versed in all cycles of life and can bring out innovative fix for different problems.<br>
          Excellent communication skills.
        </div><br>

        <h4 class="modal-title">Job Description</h4>
        <div class="modal-2">The position will deliver and bring electronics products/components from various sources around Delhi/NCR.
        </div><br>


        <h4 class="modal-title">Job Location</h4>
        <div class="modal-2">New Delhi</div>
      </div>

    </div>

  </div>
</div>

<!-- Modal Form -->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #0070ff;font-weight:900;">Do the most meaningful work of your career here at Elecbits!</h4>
      </div>

      <div class="modal-body">
        
         <h2 style="font-weight:900">Work with us</h2>
         <form action="" method="post">
              <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email" >Name:</label>
           
             <input type="text" class="form-control" name="name" placeholder="Enter name" required/>
           
         </div>


      <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email" >Positon:</label>
           
             <input type="text" class="form-control" name="position" value="Delivery Boy" disabled/>
           
         </div>



          <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email">Email:</label>
           
             <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
           
         </div>
              <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email">Phone:</label>
           
             <input type="number" class="form-control" name="phone" placeholder="Enter Phone" required/>
           
         </div>
             

                  <div class="form-group" style="padding: 0px 20px 0px 20px; text-align: center;">
          
             <button type="submit" class="btn btn-success btn-large" name="career1" >Submit</button>         
         </div>

</form>


       
     </div>
   </div>

 </div>
 
 </div>


<!-- Modal Form -->
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #0070ff;font-weight:900;">Do the most meaningful work of your career here at Elecbits!</h4>
      </div>

      <div class="modal-body">
        
         <h2 style="font-weight:900">Work with us</h2>
         <form action="" method="post">
             <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email" >Name:</label>
           
             <input type="text" class="form-control" name="name" placeholder="Enter name" required/>
           
         </div>


      <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email" >Positon:</label>
           
             <input type="text" class="form-control" name="position" value="Embedded Electronics Intern" disabled/>
           
         </div>



          <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email">Email:</label>
           
             <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
           
         </div>
              <div class="form-group" style="padding: 0px 20px 0px 20px;">
           <label  for="email">Phone:</label>
           
             <input type="number" class="form-control" name="phone"  placeholder="Enter Phone" required/>
           
         </div>
             

                  <div class="form-group" style="padding: 0px 20px 0px 20px; text-align: center;">
          
             <button type="submit" class="btn btn-success btn-large" name="career" >Submit</button>         
         </div>

</form>


       
     </div>
   </div>

 </div>
 
 </div>
























 </div>
 </div>
 </div>
 </div>


<hr>
<!-- Container (Services Section) -->
<div class="container text-center">
  <h2 style="margin-top:5%">Why work at Elecbits?</h2>
  <div style="margin:0px 16%;line-height:25px; font-weight: 600;">We thrive on learning and we thrive on innovation, more so because that’s who we are and less because our business may require us to be so. We do things and make stuff happen and we sometimes make mistakes, but what never stops is doing and creating and getting better.<br> 

Are you like that too? Come, be with us then.</div>
  

<br>
<hr>


  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>START NOW</h4>
      <p>We are young and rebellious. We are changing the way electronics has been taught and mastered. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Skills will take you to an important place. Passion will take you to something you can't even imagine.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>WORK FROM HOME</h4>
      <p>Increase your productivity by being at the most comfortable enviroment, that is your own home. </p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>The earth needs us and we are fulfilling this need by providing smarter enviroment every single day.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-fire logo-small"></span>
      <h4>NEWEST TECH</h4>
      <p>We are doing what the world is planning to be in upcoming years. Using the newest technologies and creating trends is our way out.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Every single day we are trying to make this world a better place and for this hard work is a trait, we can't miss out.
      Work "SUPER" hard.</p>
    </div>
  </div>
</div>







</body>

<br>
<hr>

<?php

include("public/footer.php");

?>


 <div style="float:left;  top: 100px; width:40;height:60; padding:6px; position: fixed; border-radius:8px;">

 
   <b style="color:black;">

   <br>
<a href="https://www.facebook.com/elecbits7" target="blank" class="tips" title="follow me on Facebook"><img src="images/facebook.png"> </a><br>
<br>
  <a href="https://twitter.com/elecbits16" target="blank" class="tips" title="follow me on Twitter"><img src="images/twitter.png"></a><br>


  </b>  

</div>


<?php
include("flt.php");
?>




</html>








<?php

if (isset($_POST['career'])) {

  $name = $_POST['name'];  
  $email = $_POST['email'];  
  $phone = $_POST['phone'];
  $position = "Intern Electronics";


   $msg = "$name,  $email,  $phone, $position ";

   $message = "Thanks for applying at Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Career_Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Careers", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>


<?php

if (isset($_POST['career1'])) {

  $name = $_POST['name'];  
  $email = $_POST['email'];  
  $phone = $_POST['phone'];
  $position = "Delivery Boy";


   $msg = "$name,  $email,  $phone, $position ";

   $message = "Thanks for applying at Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Career_Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Project", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>













