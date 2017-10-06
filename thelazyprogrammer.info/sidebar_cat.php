<!DOCTYPE html>
<html>
<head>
	<title></title>



<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>












</head>
<body>

    <div class="col-sm-3 sidenav">
      <div class="panel-group hidden-xs" id="accordion">





<?php

 $get_cat = "SELECT * FROM categories";

 $run_cat = mysql_query($get_cat, $con);

 $count = mysql_num_rows($run_cat);

 while ($row_cat = mysql_fetch_array($run_cat)) {
 
$cat = $row_cat['category'];

$count++;
?>




  <!--  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>"><?php echo $cat; ?></a>
        </h4>
      </div>
      <div id="collapse<?php echo $count; ?>" class="panel-collapse collapse in">
        <div class="panel-body">
          <?php  
       

$get_sub_cat = "SELECT * FROM subcategories where pcat='$cat' ORDER BY subcat";


$run_subcat = mysql_query($get_sub_cat, $con);

while ($row_subcat = mysql_fetch_array($run_subcat) ) {

$subcat = $row_subcat['subcat'];

$get_post_id = "SELECT * FROM post where sub_category = '$subcat'";

$run_post_id =  mysql_query($get_post_id, $con);

while ($row_post_id = mysql_fetch_array($run_post_id) ) {


$post_id = $row_post_id['post_id'];


?>


<a href="post.php?post_id=<?php echo $post_id; ?>"><li style="text-align: left;"><?php echo $subcat; ?></li></a>
 



<?php

}
}

          ?>
          </div>
      </div>
    </div>-->

<?php
}


?>

<br>
<br>


<div id="fb-root"></div>

<div class="fb-page" data-href="https://www.facebook.com/TheLazyP/" data-tabs="timeline" data-width="100" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TheLazyP/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TheLazyP/">The Lazy Programmer</a></blockquote></div>







   
  </div> 
    </div>

</body>
</html>