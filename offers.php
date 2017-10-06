<!DOCTYPE html>

<head>



 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

    

  <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>













</head>

<?php



session_start();

include("functions/functions.php");

include("includes/db.php");







?>

<link rel="stylesheet" type="text/css" href="styles/css/table.css">

<html>

<head>  <!-- Links of sheet -->

  <title>Elecbits</title>

  <?php

  include("public/link.php");

  ?>

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



    

     

   





    <br>



<div class="container" style="text-align: center; " >

  

  <h3><strong style="color: black; " >Get the best offers.</strong></h3>





</div>









   <!-- Table starts-->

<table style="margin-top:56px;font-family: 'Muli', sans-serif;" align="center">



  <thead>



    <tr>

      <th style="color:#ffffff;font-size:33px;text-align:center;background-color: #535882"> Our Offers &#x2714;</th>

      <th style="text-align:center;background-color: #E8E7E7 ">Backlogs/Percentage</th>

   

    </tr>

  </thead>

  <tbody style="">

    <tr style="">

      <td  >Discount of 5 % on the total bill.<br>

      <span style="font-size:12px;">

      </span>

      </td>

      <td style="font-size: 18px; ">If you have 1-3 Backlogs.</td>

     

    </tr>

    <tr>

      <td>Discount of 7.5 % on the total bill.<br>

      <span style="font-size:12px;">

     

      </span>

      </td>

      <td style="font-size: 18px; ">If you have more than 3 Backlogs.</td>

     

    </tr>

    <tr>

      <td>Discount of 10 % on the total bill.<br>

      <span style="font-size:12px;">

      

      </span>

      </td>

      <td style="font-size: 18px; ">If you have a year back.</td>

   

    </tr>

    <tr>

      <td>Discount of 12.5 % on the total bill.</td>

      <td style="font-size: 18px; ">If you got your first backlog in 5th, 6th, 7th and 8th Semester.</td>

     

    </tr>





     <tr>

      <td>Discount of 3.5 % on the total bill.</td>

      <td style="font-size: 18px; ">If your aggregate percentage is less than 60.</td>

    

    </tr>

     <tr>

      <td>Discount of 2.5 % on the total bill.</td>

      <td style="font-size: 18px; ">If your aggregate percentage is less than 65.</td>

      

    </tr>

     <tr>

    <td>Discount of 4.5 % on the total bill.</td>

      <td style="font-size: 18px; ">If your aggregate percentage is more than 75.</td>

     

    </tr>



    



    <!-- <tr>

      <td>Readymade project<br>

      <span style="font-size:12px;">

      Ready to use fully working project duly tested. Just plug in and it works.</span>

      </td>

      <td><img src="images/nhi.png"></td>

      <td><img src="images/nhi.png"></td>

      <td><img src="images/nhi.png"></td>

    </tr>-->













  </tbody>

</table>













<br>

<br>



   <!-- Table end-->







<!--footer start-->

<?php



include("public/footer.php");



?>





<!--footer end-->













</body>





</html>



