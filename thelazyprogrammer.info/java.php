<!DOCTYPE html>
<?php

include("db.php");



?>
<html lang="en">
<head>
  <title>The lazy Programmer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
 
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
 <body >
      


<?php

include("menu.php");

?>



  
<div class="container-fluid text-center ">    
  <div class="row content">

  

   <?php

   include("sidebar_cat.php");

   ?>

<div class="hidden-lg">
<br>
<br>

  
</div>



    <div class="col-sm-8 " style="text-align: left;" > 
    <h3>Posts</h3>




<?php

$get_post = "SELECT *  from  post where m_category='Java'";

$run_post =mysql_query($get_post, $con);

while ($row_post = mysql_fetch_array($run_post) ){
  
$post_title = $row_post['post_title'];

$post_snippet = $row_post['code_snippet'];

$post_id = $row_post['post_id'];


 ?>


<br>

<a href="post.php?post_id=<?php echo $post_id; ?> " style="font-size: 20px;" >
<?php  echo $post_title;  ?>
</a>
<br>
<?php echo $post_snippet;  ?>...

<hr>


 <?php

}



?>       










     </div>

















     

    </div>


  </div>


<br>
<br>
<hr>







</div>













<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
