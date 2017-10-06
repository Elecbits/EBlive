<!DOCTYPE html>

<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{


?>


 


<html>
<title>Learn Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- Angular Material requires Angular.js Libraries -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js"></script>	

  <!-- Angular Material Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
.logo{
      width: 150px;
    margin: 14px 44px;
}
.sidebar-h1{
  font-family: 'Roboto',sans-serif;
    color: white;
    margin-top: -4px;
    text-align: center;
    font-size: 28px;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.sidebar-h3{
  color: white;
  margin: 16px;
  font-size: 16px;
}
.w3-button{
  color: white;
  padding-bottom: 19px;
  font-family: 'Roboto',sans-serif;
}
.w3-button:hover {
    color: white!important;
    background-color: #0071CC!important;
}

.tabsdemoDynamicHeight md-content {
  background-color: transparent !important; }
  .tabsdemoDynamicHeight md-content md-tabs {
    background: #f6f6f6;
    border: 1px solid #e1e1e1; }
    .tabsdemoDynamicHeight md-content md-tabs md-tabs-wrapper {
      background: white; }
  .tabsdemoDynamicHeight md-content h1:first-child {
    margin-top: 0; }

    md-tabs md-ink-bar {
    color: #2374C6;
    background: #2374C6;
}

.fabSpeedDialdemoBasicUsage .text-capitalize {
  text-transform: capitalize; }

.fabSpeedDialdemoBasicUsage .md-fab:hover, .fabSpeedDialdemoBasicUsage .md-fab.md-focused {
  background-color: #000 !important; }

.fabSpeedDialdemoBasicUsage p.note {
  font-size: 1.2rem; }

.fabSpeedDialdemoBasicUsage .lock-size {
  min-width: 300px;
  min-height: 300px;
  width: 300px;
  height: 300px;
  margin-left: auto;
  margin-right: auto; }
 
.md-padding {
    padding: 44px;
}
.md-button.md-warn.md-fab {
    color: rgb(255,255,255);
    background-color: #216fbe;
    padding: 7px;
}
.material-icons{
	padding-top: 9px; 
}
</style>

 <?php


            $c_email =  $_SESSION['customer_email'];

      global $con;
      $name_query="SELECT * FROM learn WHERE customer_email='$c_email'";

      $run_name_query = mysqli_query($con , $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['customer_name'];
     
}

            ?>


<body ng-app="myApp" ng-controller="DemoCtrl as demo">

<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" style="width:240px;background: linear-gradient(#185694, rgb(41, 132, 224));" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  
  <a href="home.php" style="text-decoration: none;"><h1 class="sidebar-h1" style=" margin-top: 20px; margin-left: 0px;"> <img src="transymbol.png"  width="30" height="30"> Elecduino</h1> </a>
   
  <br>

   <ul class="nav nav-pills hidden-xs hidden-sm">

    <li class="active"><a data-toggle="pill" href="#home" style="font-size: 24px;">Learn</a></li>
    <li><a data-toggle="pill" href="#menu1" style="font-size: 24px;" >Download</a></li>
    </ul>


   <ul class="nav nav-pills hidden-lg">

    <li class="active"><a data-toggle="pill" href="#home" >Learn</a></li>
    <li><a data-toggle="pill" href="#menu1" >Download</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
      <h3 class="sidebar-h3">Learning Panel</h3>
      <br>

<?php

$get_lesson = "SELECT * FROM lesson";

$run_lesson = mysqli_query($con , $get_lesson);

 while ( $row_lesson = mysqli_fetch_array($run_lesson)) {
   
  
$lesson_title = $row_lesson['lesson_title'];
$lesson_id = $row_lesson['lesson_id'];





?>

  <a href="index.php?lesson_id=<?php echo $lesson_id; ?>" class="w3-bar-item w3-button" style="text-decoration: none;"><?php echo $lesson_title; ?></a>

  <?php 

}

 ?>
  <!--<a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">2. Potentiometer</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">3. Photo Resistor</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">4. Serial Monitor Display</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">5. Seven Segment Display</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">6. Piezo Buzzer</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">7. Functions</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">8. Pulse Width Modulation</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">9. Quick Read Thermometer</a>-->

    </div>




    <div id="menu1" class="tab-pane fade">
    <br>
       <h3 class="sidebar-h3">Download Panel</h3>
       <br>
     <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">1. Digital input with switch</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">2. Potentiometer</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">3. Photo Resistor</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">4. Serial Monitor Display</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">5. Seven Segment Display</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">6. Piezo Buzzer</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">7. Functions</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">8. Pulse Width Modulation</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;">9. Quick Read Thermometer</a>

    </div>
   
   
     
  </div>

<br>




 
</div>

<div class="w3-main" style="margin-left:240px; ">



<?php


include("central_content.php");

?>

</div>

<script>
var app=angular.module('myApp', ['ngMaterial']);
app.controller('DemoCtrl',function($scope){
	$scope.topDirections = ['left', 'up'];
      $scope.bottomDirections = ['down', 'right'];

      $scope.isOpen = false;

      $scope.availableModes = ['md-fling', 'md-scale'];
      $scope.selectedMode = 'md-fling';

      $scope.availableDirections = ['up', 'down', 'left', 'right'];
      $scope.selectedDirection = 'up';

});
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>


<?php
}


?>