<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>





<body>


    
    <div class="panel panel-default hidden-xs" style=" border-style: solid; border-color: grey;">
 
    <div id="pb1" class="panel-body" style=" padding: 0px 0px 10px 20px; margin-top: 10px;  ">
    
    <div class="Algo bar">

    <h4>Get the finest projects in your range.</h4>

    <form method="post" action="searchproject.php" enctype="multipart/form-data" >

    <div class="col-lg-4" style=" padding: 10px 0px 0px 10px;  ">
      
      <label>Slect Price </label>
       <select name="range">       
       <option>0-3999 </option>
       <option>4000-6999</option>
       <option>7000-9999</option>
       <option>10,000-Above </option> 

       </select>

      </div>

      <div class="col-lg-6" style=" padding: 10px 0px 0px 10px;  ">
      
       <label>Categories</label>
       <select name="cats">     
       
       <?php 

        $get_cats = "select * from categories";
    $run_cats = mysqli_query($con,$get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       

       </select>
      
      </div>


      <div class="col-lg-2" style=" padding: 10px 0px 0px 10px;   ">
      
         <button type="submit" name="proj" class="bg-primary">Get Project</button>
     
  

     </div>

      </form>
      
     </div> 
     </div>
     </div>


<div class="hidden-lg" style="text-align: center; ">
  

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
Need help !
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Get the finest projects in your price range.</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="searchproject.php" enctype="multipart/form-data" >

    <div class="col-lg-4" style=" padding: 10px 0px 0px 10px;  ">
      
      <label>Slect Price </label>
       <select name="range">       
       <option>0-3999 </option>
       <option>4000-6999</option>
       <option>7000-9999</option>
       <option>10,000-Above </option> 

       </select>

      </div>

      <div class="col-lg-6" style=" padding: 10px 0px 0px 10px;  ">
      
       <label>Categories</label>
       <select name="cats">     
       
       <?php 

        $get_cats = "select * from categories";
    $run_cats = mysqli_query($con,$get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       

       </select>
      
      </div>


      <div class="col-lg-2" style=" padding: 10px 0px 0px 10px;   ">
      
         <button type="submit" name="proj" class="bg-primary">Get Project</button>
     
  

     </div>

      </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

</div>


</body>
</html>


