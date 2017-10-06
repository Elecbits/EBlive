<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


    
    <div class="panel panel-default" style=" border-style: solid; border-color: grey;" style="font-family: 'Muli', sans-serif; ">
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 40px 20px; margin-top: 10px;  ">
    
    <div class="Algo bar" style="font-family: 'Muli', sans-serif; " >

    <h3>Get the finest projects in your range.</h3>

    <form method="post" action="searchproject.php" enctype="multipart/form-data" >

    <div class="col-lg-4" style=" padding: 30px 0px 0px 10px;  ">
      
      <label>Select Price </label>
       <select name="range">       
       <option>0-3999 </option>
       <option>4000-6999</option>
       <option>7000-9999</option>
       <option>10,000-Above </option> 

       </select>

      </div>

      <div class="col-lg-6" style=" padding: 30px 0px 0px 10px;  ">
      
       <label>Categories</label>
       <select name="cats">     
       
       <?php 

        $get_cats = "select * from categories";
    $run_cats = mysql_query($get_cats, $con);


    while ($row_cats = mysql_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       

       </select>
      
      </div>


      <div class="col-lg-2" style=" padding: 30px 0px 0px 10px;   ">
      
         <button type="submit" name="proj" class="bg-primary">Get Project</button>
     
  

     </div>

      </form>
      
     </div> 
     </div>
     </div>

</body>
</html>