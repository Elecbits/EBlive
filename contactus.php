<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
  
  <!-- Links of sheet -->
  <title>Elecbits | Contact</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/feedback.css">
  <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
  <?php
  include("public/link.php");
  ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .form-input{
    width: 75%;

  }


</style>
<body ng-app="myApp" ng-controller="myCtrl" ng-cloak>


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

  <div class="container">
   
       <div class="container">
  
     <div  style="font-size: 20px; padding: 0px 0px 0px 0px;" > <span style="font-family: 'Faster One', cursive; font-size:48px; color: red;">C</span>ONTACT US</div> 
    <hr>


   </div>
    
      <div class="col-lg-7" style="text-align:center;margin-top: 27px;">
        <iframe class="hidden-lg" width="260" height="155" src="https://www.youtube.com/embed/v3Q-hDO-Ljs" frameborder="0" allowfullscreen></iframe>
         <iframe class="hidden-xs" width="560" height="315" src="https://www.youtube.com/embed/v3Q-hDO-Ljs" frameborder="0" allowfullscreen></iframe>
        <div style="margin-top: 62px;">
          <p>Email</p>
          <p>elecbits16@gmail.com</p><hr style="width:88%">
          <p>Phone</p>
          <p>+91-9911806843</p><hr style="width:88%">
          <p>Location</p>
          <p>New Delhi</p>
        </div>
      </div>
      <form method="post" action="">
      <div class="col-lg-5" style="text-align:center;height: 800px;">
       <md-input-container class="form-input">
        <input class="feedbackInput" name="c_name"  ng-model="user.name" type="text" placeholder="Name" ng-required="true">
      </md-input-container>
      <md-input-container class="form-input">
        <input class="feedbackInput"  name="c_email" ng-model="user.email" type="email" placeholder="Email" ng-required="true">
      </md-input-container>
      <md-input-container class="form-input">
        <input class="feedbackInput" name="c_phone"  ng-model="user.mob" type="number" placeholder="Mobile Number" ng-required="true">
      </md-input-container>
      <md-input-container class="form-input">
        <input class="feedbackInput" name="college"  ng-model="user.college" type="text" placeholder="College" ng-required="true">
      </md-input-container><br>


      <div  style="text-align: -webkit-left;
      margin-left: 58px;">
      <p style="color: #d8d8d8">Semester</p>
      <md-slider-container flex="">
        <md-input-container >
          <input name="sem" flex type="number" style="margin-top: -10px;
          width: 20%;" ng-model="rating2" aria-label="bass" aria-controls="bass-slider">
        </md-input-container>
        <md-slider flex class="md-primary" class="width:85%;margin-top: -19px;" md-discrete ng-model="rating2" step="1" min="1" max="8" aria-label="rating">
        </md-slider></md-slider-container>

        <md-input-container class="md-block">
          <label>Your queries</label>
          <textarea ng-model="user.biography"  name="c_queries" md-maxlength="300" rows="5" md-select-on-focus></textarea>
        </md-input-container>

        <button style="margin-left:40%"  type="submit" name="update" class="btn btn-primary">SUBMIT</button>
      </div>

</form>      
    </div>
  </div>


<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->







</body>
<script type="text/javascript">    
 var app=angular.module('myApp', ['ngMaterial']);
 app.controller('myCtrl', function($scope) {
  $scope.sems=[1,2,3,4];
  console.log("hi");
  $scope.selectedSem;
  console.log($scope.selectedSem);
});
 
</script>

</html>








<?php

if (isset($_POST['update'])) {

  $fname = $_POST['c_name'];
  $email = $_POST['c_email'];
  $colg = $_POST['college'];
  $sem = $_POST['sem'];
  $phone = $_POST['c_phone'];
   $affiliations = $_POST['c_queries'];


   $msg = "$fname,  $email, $colg, $sem, $phone, $affiliations ";

   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Contact@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "New Addition", $msg, $from) && mail("elecbits16@gmail.com", "New Addition", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>