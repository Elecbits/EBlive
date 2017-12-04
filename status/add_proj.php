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
  <p class="mb-0" >Add Projects</p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="">
           <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Project ID</label>
      <div class="col-sm-10" >
        <input type="text" style="font-size: 14px;" class="form-control" id="inputEmail3" name="p_id" placeholder="Order ID">
      </div>
    </div>
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
      <div class="col-sm-10" >
        <input type="text" style="font-size: 14px;" class="form-control" id="inputEmail3" name="p_name" placeholder="Name">
      </div>
    </div>
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10" >
         <textarea class="form-control" id="exampleTextarea" style="font-size: 14px;" rows="3" name="desc" placeholder="Description" required></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
      <div class="col-sm-10" >
        <input type="name" style="font-size: 14px;" class="form-control" id="inputEmail3" name="c_name" placeholder="customer_name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Customer Contact</label>
      <div class="col-sm-10">
        <input type="number" style="font-size: 14px;" class="form-control" id="inputPassword3" name="c_contact" placeholder="contact">
      </div>
    </div>

       <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Executive Assigned</label>
      <div class="col-sm-10">
        <input type="text" style="font-size: 14px;" class="form-control" id="inputPassword3" name="e_assgn"  >
      </div>
    </div>

        <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Tentative Date</label>
      <div class="col-sm-10">
        <input type="date" style="font-size: 14px;"  name="t_date"  >
      </div>
    </div>

  <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Cost Quoted</label>
      <div class="col-sm-10">
        <input type="number" style="font-size: 14px;" class="form-control" id="inputPassword3" name="cost" placeholder="cost">
      </div>
    </div>


  <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
        <input type="text" style="font-size: 14px;" class="form-control" id="inputPassword3" name="p_status" placeholder="status">
      </div>
    </div>



 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="add_p" class="btn btn-primary">Add Projects</button>
      </div>
    </div>
  </form>
</div>     
   


<br>
<hr>








  

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