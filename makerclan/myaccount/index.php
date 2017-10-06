<!doctype html>
<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{






?>


<html>
<head>
 <link rel="stylesheet" type="text/css" href="../../styles/alp/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../../styles/alp/css/component.css" />
    <script src="styles/alp/js/modernizr.custom.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Makerclan - Dashboard</title>
  <link href="https://cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.muicss.com/mui-latest/js/mui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

        
  <style>
    .elec-logo{
      max-width: 154px;
    }
  </style>
</head>
<body style="font-size: 16px;">
  <div id="sidedrawer" class="border-r mui--no-user-select">
    <div id="sidedrawer-brand" class="mui--appbar-line-height">
      <!-- <span class="mui--text-title">Brand.io</span> -->
      <a href="../index.php"><img class="elec-logo" src="logo.png"></a>
    </div>
    <div class="mui-divider"></div>
    <ul>
      <li>
        <strong>Trending Bids</strong>
        <ul>
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
        </ul>
      </li>
      <li>
        <strong>My Bids</strong>
        <ul>
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
        </ul>
      </li>
          <li>
        <strong>Settings</strong>
        <ul>
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <header id="header" >
    <div class="mui-appbar mui--appbar-line-height">
      <div class="mui-container-fluid" style="background-color: #f7f7f7">
        <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer" style="color: black;">☰</a>
        <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer" style="color: black;">☰</a>
        <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">
          <a href="www.elcbits.com"><img class="elec-logo" src="logo.png"></a>
        </span>






        <div class="dropdown" >

    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="font-size: 16px;">  Hi

     <?php


            $c_email =  $_SESSION['email'];

      global $con;



      $name_query="SELECT * FROM makerclan WHERE email='$c_email' or username = '$c_email'";

      $run_name_query = mysqli_query($con , $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['name'];
     
       echo $customer_name;  }

 ?> !

            <span class="caret"></span></button>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 16px;">
    <a class="dropdown-item" href="../logout.php">Logout</a>
   
  </div>
           
          </div>





        </div>
      </div>
    </header>
    <div id="content-wrapper" style="background-color: white">
      <div class="mui--appbar-height"></div>



<br>


      <div class="mui-container-fluid">
       
<div  class="col-lg-12 ">


<br>


<table class="table">
  <thead class="thead-inverse">
  
  
    <tr>
      <th style="text-align: center;">Project</th>
      <th style="text-align: center;">Design</th>
      <th style="text-align: center;">Last Date</th>
      <th style="text-align: center;">Max Bid</th>
      
    </tr>
  </thead>
  <tbody>

 <?php
   
  $get_pro="SELECT * FROM project_details";

$run_pro =mysqli_query($con , $get_pro);

$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  

  $proj_id= $row_pro['project_id'];
  $proj_title= $row_pro['project_name'];
  $proj_desc= $row_pro['project_desc'];
  $proj_doc= $row_pro['design_doc'];

  $max_bid= $row_pro['max_bid'];
  $proj_raw_materials= $row_pro['raw_materials'];
  $proj_last_date= $row_pro['last_date'];


  $i++;
            

?>





    <tr>
      <th scope="row"  style="font-weight: 500; text-align: justify; width: 500px;">
      
       <span style="font-size: 18px;"> <?php echo $proj_title;  ?> </span>
        <br>
        <span style="font-size: 14px; text-align: justify;"><?php echo $proj_desc ; ?> </span>
      
      </th>

      <td style="text-align: center; width: 200px;"><a href="../../admin_area/design_doc/<?php echo $proj_doc;?>"><img src="../../images/downloads.png" width="60" height="60"></a></td>
      <td style="text-align: center;"><?php echo $proj_last_date ; ?>
</td>
      
      <td style="text-align: center;">₹ <?php echo $max_bid;  ?>
        <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="font-size: 16px;">Make Bid</button>  
      </td>
</tr>


    
 
<?php
}

?>


  </tbody>
</table>
 
    
      
      <!-- <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-list">

           <div class="cbp-vm-options">
           <a href="#" class="cbp-vm-icon cbp-vm-grid " data-view="cbp-vm-view-grid">Grid View</a> 
            <a href="#" class="cbp-vm-icon cbp-vm-list  cbp-vm-selected" data-view="cbp-vm-view-list">List View</a>
       </div>   

         
          <ul>

            <li>


      
                        
  <h3 class="cbp-vm-title"><a href=""></a></h3>



              <div class="cbp-vm-price" style="color:black;"> </div>
              <div class="cbp-vm-details">
              
              </div>

            <a class="cbp-vm-icon cbp-vm-add" href="all_products.php?rp_cart=<?php// echo $pro_id;?>">Cart</a> 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Make Bid</button>
            </li>
          
      
          </ul>

          <hr style="background-color: black;">




    
      </div>-->


  

    </div>









       

     

      



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        

      </div>
    </div>



<br>
<br>
<br>






    <footer id="footer" style="height: 100px;">
      <div class="mui-container-fluid">
        <br>
        Made with ♥ by <a href="https://www.elecbits.in">Elecbits</a>
      </div>
    </footer>
  </body>
  </html>
<?php


}
?>