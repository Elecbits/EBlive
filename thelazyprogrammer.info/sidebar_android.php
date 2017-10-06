<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <div class="col-sm-2 sidenav" style="height: auto;">
      <div class="panel-group hidden-xs" id="accordion">





<?php

 $get_cat = "SELECT * FROM categories where main_category = 'Android' ";

 $run_cat = mysql_query($get_cat, $con);

 $count = mysql_num_rows($run_cat);

 while ($row_cat = mysql_fetch_array($run_cat)) {
 
$cat = $row_cat['category'];

$count++;
?>




    <div class="panel panel-default">
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
    </div>

<?php
}


?>









   
  </div> 
    </div>

</body>
</html>