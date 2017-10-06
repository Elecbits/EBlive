<!DOCTYPE html>
<?php

include("db.php");

if (isset($_GET['post_id'])) {
  
$post_ide = $_GET['post_id'];

}

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

$get_post = "SELECT *  from  post where post_id='$post_ide' ";

$run_post =mysql_query( $get_post, $con);

while ($row_post = mysql_fetch_array($run_post) ){
  
$post_title = $row_post['post_title'];

$post_snippet = $row_post['code_snippet'];

$post = $row_post['code'];
$post1 = $row_post['code1'];
$post2 = $row_post['code2'];
$post3 = $row_post['code3'];

$post_explain = $row_post['code_explain'];


$author_name = $row_post['author_name'];

$author_face = $row_post['author_face'];

$author_linkedIn = $row_post['author_linkedIn'];

$author_youtube = $row_post['author_youtube'];

$author_image = $row_post['author_image'];

$author_bio = $row_post['author_bio'];

$m_category = $row_post['m_category'];



?>










<?php


if ($m_category == 'C')
{
  include("sidebar_c.php");  
}

if ($m_category == 'C++')
{
  include("sidebar_cplus.php");  
}

if ($m_category == 'Java')
{
  include("sidebar_java.php");  
}

if ($m_category == 'Android')
{
  include("sidebar_android.php");  
}

?>







<div class="hidden-lg">
  <br>
  <br>
</div>




    <div class="col-sm-10 text-left"> 

<strong >Code Explaination</strong>
<br>
<?php


echo $post_explain;

?>
    
   
    </div>


  </div>


<br>
<br>
<hr>
<div class="container" style="text-align: left;">

 <h3><?php  echo $post_title; ?></h3>
     <div style="height: 400px; width: auto; overflow-x: scroll; overflow-y: scroll;    " >
              
      <hr>
      <?php 
      echo $post;
      echo "<br>";
      echo $post1;
      echo "<br>";
      echo $post2;
      echo "<br>";
      echo $post3;
      echo "<br>";

      ?>


     </div>

</div>









<hr>
<br>

<div class="col-lg-12">
   <br>
    <br>
   
  <div class="col-lg-4 hidden-xs">

 <iframe width="400" height="315" src="<?php echo $author_youtube ;?>" frameborder="0" allowfullscreen></iframe>
      
      </div>       

        <div class="col-lg-4 hidden-lg">

 <iframe width="300" height="215" src="<?php echo $author_youtube ;?>" frameborder="0" allowfullscreen></iframe>
      
      </div>                 

<div class="hidden-lg">
  
  <br>
  <hr>
</div>  

<div class="col-lg-1">
  
</div>

<div class="col-lg-7" style="text-align: left;">

About the author
<br>
<hr>
<div class="col-lg-12">
<div class="col-lg-4">
  
<img src="<?php echo $author_image; ?>"  width="100" height="auto" >

</div>


<div class="col-lg-8" style="text-align: left;">
  
<?php echo $author_name; ?>

<br>
<hr>
<a href="<?php echo $author_face; ?>" ><img src="images/facebook.png"></a>
<span style="padding: 10px;"></span>
<a href="<?php echo $author_linkedIn; ?>"><img src="images/li.png"></a>

  

</div>

<div class="col-lg-8" style="text-align: left;">
  
<?php echo $author_bio; ?>



</div>




</div>



    
  </div>



</div>


</div>


<br>
<br>
<hr>









<?php

}
?>











<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
