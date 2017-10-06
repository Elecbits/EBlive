<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<?php

          if (isset($_GET['lesson_id'])) {
     

       $less_id = $_GET['lesson_id'];


     $get_pro = "SELECT * FROM lesson WHERE lesson_id='$less_id'";

$run_pro = mysqli_query($con , $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);
  
  $lesson_title = $row_pro['lesson_title'];
   $lesson_youtube = $row_pro['lesson_youtube'];
   $lesson_compo = $row_pro['lesson_compo'];
   $lesson_aim= $row_pro['lesson_aim'];  
   $lesson_inst = $row_pro['lesson_inst'];
   $lesson_quiz_id = $row_pro['lesson_quiz_id'];
   $points= $row_pro['points'];
   

}
   
          ?>





<div class="w3-teal" style="background-color:#0071cc!important;">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <span><div class="w3-container" style="display: inline-block;">
    <h1><?php echo $lesson_title ;?></h1>
  </div></span>
</div>




<div class="w3-container">
<div class="panel panel-default" style="margin-top:19px">
 <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $lesson_youtube; ?>" frameborder="10" allowfullscreen></iframe>
</div>
</div>



<div >
  <md-content>
    <md-tabs md-dynamic-height md-border-bottom>
      <md-tab label="Components">
        <md-content class="md-padding">
          <h1 class="md-display-2">Components</h1>
          <p><?php echo $lesson_compo ;?></p>
        </md-content>
      </md-tab>
      <md-tab label="Instructions">
        <md-content class="md-padding">
          <h1 class="md-display-2">Instructions</h1>
          <p><?php echo $lesson_inst ;?></p>
          
        </md-content>
      </md-tab>
      <md-tab label="Quiz">
        <md-content class="md-padding">
          <h1 class="md-display-2">Quiz</h1>
          <p>Integer turpis erat, porttitor vitae mi faucibus, laoreet interdum tellus. Curabitur posuere molestie dictum. Morbi eget congue risus, quis rhoncus quam. Suspendisse vitae hendrerit erat, at posuere mi. Cras eu fermentum nunc. Sed id ante eu orci commodo volutpat non ac est. Praesent ligula diam, congue eu enim scelerisque, finibus commodo lectus.</p>
        </md-content>
      </md-tab>
      
    </md-tabs>
  </md-content>
</div>









<div >
  <md-content class="md-padding" layout="column" ng-cloak>
     <div class="lock-size" layout="row" layout-align="center center">
      <md-fab-speed-dial  class="md-fab-bottom-right" md-direction="left" ng-class="selectedMode">
        <md-fab-trigger>
          <md-button aria-label="menu" class="md-fab md-warn">
            <i class="material-icons">menu</i>
          </md-button>
        </md-fab-trigger>

        <md-fab-actions>
          <md-button aria-label="Twitter" class="md-fab md-raised md-mini">
          <md-tooltip md-direction="top" md-visible="true"
                        md-autohide="false">
              Like us on FB
            </md-tooltip>
            <i class="material-icons">thumb_up</i>
          </md-button>
          <md-button aria-label="Facebook" class="md-fab md-raised md-mini">
          <md-tooltip md-direction="bottom" md-visible="true"
                        md-autohide="false">
              Call us for help
            </md-tooltip>
            <i class="material-icons">phone</i>
          </md-button>
         
        </md-fab-actions>
      </md-fab-speed-dial>
    </div>
  </md-content>
</div>




</div>


</body>
</html>