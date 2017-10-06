<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>  <!-- Links of sheet -->
 <meta name="description" content="We are a group of Enthusiasts who focus on making things simpler. Technology is an artistic way to turn your imagination into reality. And we are here to make sure that the artistic approach inside you would never go out of resource.">
  <title>Elecbits | We make electronics easy.</title>

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
<div class="hidden-xs">
    <?php

include("public/detailbox.php");


?>
</div>



<div class="hidden-xs" >
<?php

include("slider.php");

  ?>

 </div> 

<div class="hidden-lg">


<?php

include("slider.php");

  ?>

 </div> 
  <br>
  <br>

   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 


  <div  class="hidden-lg " >


  
<?php
include("public/algobar.php");
  ?>
</div>
  
  

<!--Panel1 algo bar end--> 
 

     <div class="tag126" class="col-lg-12 bg-primary">
   
   <br> 
<div class="hidden-lg">
    <?php

include("public/detailbox.php");


?>
</div>


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


  

<div  class="hidden-xs " >
<?php
include("public/algobar.php");
  ?>
</div>

   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 20px 20px; ">

<div style=" font-size: 25px;  font-family: 'Ubuntu', sans-serif; color: purple; ">New Arrivals</div>

 <hr style="height:1px;border:none;color:purple;background-color:purple;" />

      

      <?php newgetpro() ?>


   </div>

   <div id="pb1" class="panel-body" style=" padding: 0px 0px 20px 20px; ">


<div style=" font-size: 25px;  font-family: 'Ubuntu', sans-serif; color: red; "> <i class="material-icons">trending_up</i>&nbsp Trending Now  </div>
<hr style="height:1px;border:none;color:red;background-color:red;" />


      

      <?php trendgetpro() ?>  



  
    
  





   </div>

   

   </div>

    </div>


    <!-- Main product panel -->
       
</div>
    
  
</div>

</div>

<!--Panel1 end--> 


<div class="container">
<br>
<hr>
<strong>WHY YOU SHOULD CHOOSE US ?</strong><br>

<hr>
 <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                <br>
                    <img src="images/np1.png" alt="">
                    <div class="caption">
                        <h3>SAVE TIME</h3>
                        <p style="text-align: justify;">No need to travel all around the city for electronics components and projects, Just click and order.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np2.png" alt="">
                    <div class="caption">
                        <h3 >FREE SHIPPING</h3>
                        <p style="text-align: justify;">We provide free home delivery. Just select your project or order a customized version on the comfort of a click.</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 col1-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np3.png" alt="">
                    <div class="caption">
                        <h3>CASH ON DELIVERY</h3>
                        <p style="text-align: justify;">Easy payments at your door. We believe in our customers and provide payment option after their complete satisfaction. </p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np4.png" alt="">
                    <div class="caption">
                        <h3>EASY RETURNS</h3>
                        <p style="text-align: justify;"> We provide the best quality available in the market, If still you're not satified we will return as soon as possible.</p>
                       
                    </div>
                </div>
            </div>

           
 

        </div>
</div>
        </div>
<hr>
<hr>
<div class="container">
TESTIMONIALS
</div>
<hr>
<?php

include("testimonial.php");

?>
<hr>
<br>
<br>
<!--footer start-->
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



<!--footer end-->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83131652-1', 'auto');
  ga('send', 'pageview');

</script>







</body>
</html>