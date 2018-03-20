<!DOCTYPE html>
<html>
  <head>
    <title>
    </title>
  </head>
  <style>
    pre {
      white-space: pre-wrap;
      background: #eff0f1
    }
    code {
      background: #eff0f1;
    }
  </style>
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
$lesson_code = $row_pro['lesson_code'];
$lesson_aim= $row_pro['lesson_aim'];  
$lesson_inst = $row_pro['lesson_inst'];
$lesson_quiz_id = $row_pro['lesson_quiz_id'];
$points= $row_pro['points'];
}
?>
    <div class="w3-teal" style="background-color:#0071cc!important;">
      <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;
      </button>
      <span>
        <div class="w3-container" style="display: inline-block;">
          <h3>
            <?php echo $lesson_title ;?>
          </h3>
        </div>
      </span>
    </div>

    <!-- yOUTUBE VIDEO DIV -->
    <div class="w3-container">
      <div class="panel panel-default" style="margin-top:19px">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo $lesson_youtube; ?>" frameborder="10" allowfullscreen>
          </iframe>
        </div>
      </div>

      <!-- TABS DIV -->
      <div>
        <md-content>
          <md-tabs md-dynamic-height md-border-bottom>
            <md-tab label="Components">
              <md-content class="md-padding">
                <h3>Components
                  </h1>
                <br>
                <p>
                  <?php echo $lesson_compo ;?>
                </p>
              </md-content>
            </md-tab>
            <md-tab label="Instructions">
              <md-content class="md-padding">
                <h3>Instructions
                </h3>
                <p>
                  <?php echo $lesson_inst ;?>
                </p>
              </md-content>
            </md-tab>
            <md-tab label="Code">
              <md-content class="md-padding">
                <h3>Code
                </h3>
                <div style="width:100%; border: 1px solid #E4E6E7;padding: 10px">
                  <pre>/*
<p>
<?php echo $lesson_code ;?>
</p>
}
</pre>
                </div>
              </md-content>
            </md-tab>
          </md-tabs>
        </md-content>
      </div>

      <!-- FLOATING ACTION BUTTON -->
      <div>
        <md-content class="md-padding" layout="column" ng-cloak>
          <div class="lock-size" layout="row" layout-align="center center">
            <md-fab-speed-dial class="md-fab-bottom-right" md-direction="left" ng-class="selectedMode">
              <md-fab-trigger>
                <md-button aria-label="menu" class="md-fab md-warn">
                  <i class="material-icons">menu
                  </i>
                </md-button>
              </md-fab-trigger>
              <md-fab-actions>
                <md-button
                 aria-label="Twitter" 
                 class="md-fab md-raised md-mini" 
                 href="https://www.facebook.com/elecbits7/" 
                 target="_blank">
                  <md-tooltip md-direction="top" md-visible="true" md-autohide="false">
                    Like us on FB
                  </md-tooltip>
                  <i class="material-icons">thumb_up
                  </i>
                </md-button>
                <md-button aria-label="Facebook" class="md-fab md-raised md-mini">
                  <md-tooltip md-direction="top" md-visible="true" md-autohide="false">
                    Email you concerns at elecbits16@gmail.com
                  </md-tooltip>
                  <i class="material-icons">question_answer
                  </i>
                </md-button>
              </md-fab-actions>
            </md-fab-speed-dial>
          </div>
        </md-content>
      </div>
    </div>
  </body>
</html>
