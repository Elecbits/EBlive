<!DOCTYPE html>
<html>
<head>
<?php

include("../functions/functions.php");

?>

	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
</head>
<style type="text/css">
  .btn{
    font-size: 14px;
  }
</style>
<body>

<div  class="container">


<br>
<blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
 <img src="../images/eb_new.png " height="30" width="auto"> 
</blockquote>




 <blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Current Order List <a type="button" href="add_proj.php" class="btn btn-primary">Insert Project</a></p>
</blockquote>


<div class="col-lg-12" >
<table class="table ">
  <thead>
    <tr>
      
    <th>Project ID</th>
      <th>Executive Assigned</th>
      <th>Status</th>
      <th>Complete Info</th>

   
    </tr>
  </thead>

  <tbody>










<?php


$emp_data = "SELECT *  from status where status != 'Completed' ;";

$run_pro = mysqli_query($con, $emp_data);

while ($row_pro = mysqli_fetch_array($run_pro))
{



$proj_id = $row_pro['order_id'];
$proj_info = $row_pro['project_info'];
$assigned = $row_pro['assign'];
$proj_status = $row_pro['status'];

  $modal_info = explode(",", $proj_info);
$p_name1 = $modal_info[0]; 
$desc1 = $modal_info[1];
$c_name1 = $modal_info[2];
$c_contact1 = $modal_info[3];
$t_date1 = $modal_info[4];
$cost1 = $modal_info[5];

?>



    <tr>
     
      <td><?php echo $proj_id; ?></td>
      <td><?php echo $assigned; ?></td>
      <td><?php echo $proj_status; ?></td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $proj_id; ?>">
  Complete Info
</button></td>
          
     
    </tr>
   
 

<div class="modal fade" id="exampleModal<?php echo $proj_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $p_name1; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <p> <?php echo $desc1; ?></p>
 <p> <?php echo $c_name1; ?>, <?php echo $c_contact1; ?></p>
  <p> <?php echo $t_date1; ?></p>
 <p> <?php echo $cost1; ?></p>

    <a href="delete_proj.php?delete_id=<?php echo $proj_id ; ?>"><button type="button" class="btn btn-primary">Delete</button></a>

        <a href="edit_proj.php?edit_id=<?php echo $proj_id ; ?>"><button type="button" class="btn btn-primary">Edit</button></a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>





<?php




}



?>




 </tbody>

</table>

</div>






  

    </div>





</body>
</html>


<?php

if (isset($_POST['add_p'])) {




 $p_id = $_POST['p_id']; 
$p_name = $_POST['p_name'];
$desc = $_POST['desc'];
$c_name = $_POST['c_name'];
$c_contact = $_POST['c_contact'];
$e_assgn = $_POST['e_assgn'];
$t_date = $_POST['t_date'];
$cost = $_POST['cost'];
$p_status = $_POST['p_status'];


$p_info = "$p_name,$desc,$c_name,$c_contact,$t_date,$cost";


$emp_count = "SELECT * from status where order_id = '$p_id'";
$row_count = mysqli_query($con, $emp_count);

$count_upsert_query = mysqli_num_rows($row_count);

if ($count_upsert_query == 0)
{

$insert_emp = "INSERT INTO status (order_id, project_info, assign, status) VALUES ('$p_id',  '$p_info' , '$e_assgn', '$p_status') " ;


 echo "Error: " . $insert_emp . "<br>" . mysqli_error($con);

if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Project Added')</script>";  
   echo "<script>window.open('index.php','_self')</script>";

}





}



else
{

  echo "<script>alert('Project Already exist')</script>";  
   echo "<script>window.open('index.php','_self')</script>";

}





}






?>