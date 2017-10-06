<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>fullPage.js A simple Demo</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage very simple demo." />
	<meta name="keywords"  content="fullpage,jquery,demo,simple" />
	<meta name="Resource-type" content="Document" />

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="fpm/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="fpm/examples/examples.css" />


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="fpm/vendors/scrolloverflow.js"></script>

	<script type="text/javascript" src="fpm/jquery.fullPage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#ffffff', '#ffffff', '#7BAABE', 'whitesmoke', '#ccddff']
			});
		});
	</script>

</head>
<body>


 



<div id="fullpage">



	<div class="section active" id="section0">

	<?php

include("menu.php");

?>
  
<div class="container-fluid text-center ">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="panel-group hidden-xs" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Title 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Content1</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Title 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Content2</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Title 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Content3</div>
      </div>
    </div>
  </div> 
    </div>
    <div class="col-sm-8 text-left"> 
      <p>Text panel</p>
      <hr>
      <h3>Test</h3>
      <p>Text panel2</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


	</div>
	<div class="section" id="section1" >

    <div class="col-lg-12" style="margin-top: -200px;" >
    <div class="col-lg-4">
     
     <iframe width="420" height="315"
src="https://www.youtube.com/embed/XGSy3_Czz8k">
</iframe>	
     
    </div>

    <div class="col-lg-6" >
     
     About author



    </div>
    	
    </div>
   

	   
	</div>
	
</div>

</body>
</html>