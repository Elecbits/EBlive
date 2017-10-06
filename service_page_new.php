<!DOCTYPE html>
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  


    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>



    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



 <meta name="description" content="We provide more than 14 services that could make things easier for you at an amazing pace.">
  <title>Elecbits - Service Request</title>
  <?php
  include("public/link.php");
  ?>

 <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>


</head>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");



?>

 


<html>

<body >
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

<div class="hidden-lg">
<?php

include ("services/bottom.php");


?>
</div>


<div class="col-lg-12">
<div class="hidden-xs col-lg-3" >
  
<table>
  <tr>
    <th>Choose a service</th>
   
  </tr>
  <tr>
    <td>  Readymade Project </td>
   
  </tr>
  <tr>
    <td>DIY Projects</td>
  
  </tr>
  <tr>
    <td>Buy COmponents</td>
   
  </tr>
  <tr>
    <td>Rent Projects</td>
   
  </tr>
  <tr>
    <td>Manufacture Project</td>
   
  </tr>
  <tr>
    <td>Sell a project</td>
   
  </tr>
  <tr>
    <td>Circuit Designing</td>
   
  </tr>

<tr>
    <td>Documentation of Projects</td>
   
  </tr>
  <tr>
    <td>Need a starter Kit</td>
   
  </tr>
  <tr>
    <td>Software projects</td>
   
  </tr>
  <tr>
    <td>Web Projects</td>
   
  </tr>
  <tr>
    <td>Industrial Prototypes</td>
   
  </tr>
  <tr>
    <td>Android Projects</td>
   
  </tr>

   <tr>
    <td>Custom Orders</td>
   
  </tr>

</table>








</div>




<div class="col-lg-9">
<?php

include ("services/readymade.php");

?>
</div>

</div>














</div>





<br>
<br>
<br>






<!--footer start-->
<?php

include("public/footer.php");

?>


  



<!--footer end-->





</body>


</html>

<!-- 1. Readymade project
2. DIY project
3. Buy Components
4. Manufacture a project ( Coding and other segment )
5. Rent a project
6. Sell a project. ( We'll buy a project if the condition is good )
7. Circuit designing
8. Documentation of projects.
9. Need a starter kit
10. Software projects
11. Web projects
12. Industrial prototypes
13. Custom order/Other services.
14. Android development -->








