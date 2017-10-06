<!DOCTYPE html>
<html>
<head>
	<title>Elecbits Invoice</title>
</head>
<?php

include("public/link.php");

?>
<body>



<div class="container">
<div class="jumbotron">
	<h3>Elecbits Invoice Generator</h3>
</div>

<form method="post" action="invoice.php"> 
 <div class="form-group">
    <label >Invoice Number:</label>
    <input type="number" name="inv1" class="form-control" >
  </div>
  <div class="form-group">
    <label >Customer Name:</label>
    <input type="text" name="c_name" class="form-control" >
  </div>

    <div class="form-group">
    <label >Customer Phone:</label>
    <input type="text" name="c_phone" class="form-control" >
  </div>

    <div class="form-group">
    <label >Customer Email:</label>
    <input type="text" name="c_mail" class="form-control" >
  </div>

   <div class="form-group">
    <label >Customer Address:</label>
    <textarea type="text"  name="c_address" class="form-control" style="margin: 0px -1px 0px 0px; height: 137px; width: 1140px;"  > </textarea> 
  </div>

<div class="col-lg-6">
	
<div class="form-group">
    <label >Item1:</label>
    <input type="text"  name="Item1"       class="form-control" >
  </div>
  <div class="form-group">
    <label >Item2:</label>
    <input type="text"  name="Item2"  class="form-control" >
  </div>
  <div class="form-group">
    <label >Item3:</label>
    <input type="text"   name="Item3"  class="form-control" >
  </div>
  <div class="form-group">
    <label >Item4:</label>
    <input type="text" name="Item4" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item5:</label>
    <input type="text" name="Item5" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item6:</label>
    <input type="text" name="Item6" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item7:</label>
    <input type="text" name="Item7" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item8:</label>
    <input type="text" name="Item8" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item9:</label>
    <input type="text" name="Item9" class="form-control" >
  </div>
  <div class="form-group">
    <label >Item10:</label>
    <input type="text" name="Item10" class="form-control" >
  </div>




</div>



<div class="col-lg-6">
	
<div class="form-group">
    <label >Price1:</label>
    <input type="number"  name="Price1"       class="form-control" >
  </div>
  <div class="form-group">
    <label >Price2:</label>
    <input type="number"  name="Price2"  class="form-control" >
  </div>
  <div class="form-group">
    <label >Price3:</label>
    <input type="number"   name="Price3"  class="form-control" >
  </div>
  <div class="form-group">
    <label >Price4:</label>
    <input type="number" name="Price4" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price5:</label>
    <input type="number" name="Price5" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price6:</label>
    <input type="number" name="Price6" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price7:</label>
    <input type="number" name="Price7" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price8:</label>
    <input type="number" name="Price8" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price9:</label>
    <input type="number" name="Price9" class="form-control" >
  </div>
  <div class="form-group">
    <label >Price10:</label>
    <input type="number" name="Price10" class="form-control" >
  </div>




</div>








<div class="form-group">
    <label >Discount Percentage:</label>
    <input type="number" name="disc" class="form-control" >
  </div>




  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pass" class="form-control" id="pwd">
  </div>

  <button type="submit" name="generator" class="btn btn-default">Submit</button>
</form>

<br>
<br>
</div>

</body>
</html>