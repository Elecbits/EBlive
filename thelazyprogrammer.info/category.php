<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

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

<br>

   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 
  
  
  

<!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">


     <!-- Sidebar starts-->

<div class="hidden-lg" > 
     
 <?php

include("public/sidebar.php");

 ?>

</div>

<div class="hidden-xs hidden-md hidden-sm " > 
     
 <?php

include("public/sidebarlg.php");

 ?>

</div>


<!-- sidebar ends -->

<!-- Main product panel start -->

<div id="tag91" class="col-lg-9 ">




   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">



      

      
      <?php getcatpro() ?>





   </div>

   </div>

    </div>


    <!-- Main product panel -->
       
</div>
    
  
</div>
</div>

<!--Panel1 end-->  

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->










</body>
</html>