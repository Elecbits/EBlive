<!DOCTYPE html>
<?php
session_start();
include("functions/functions.php");

?>



<html>
<head>  <!-- Links of sheet -->


  <title>Elecbits | Best Prices in India | Elecbits.in</title>
  <?php
  include("public/link.php");
  ?>
  <link rel="stylesheet" type="text/css" href="styles/css/form.css">
</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->

<?php 

include("public/topbar.php");

?>


<!--Top bar end-->

	

<!--Logo bar start-->
<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 
   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 
  <br>
<br>
 <?php

include("public/algobar.php");

?>


<!--Panel1 algo bar end-->
<div class="tag126" class="col-lg-12 bg-primary">


     <!-- Sidebar starts-->
     <div class="hidden-lg ">
<?php

include("public/sidebar.php");

?>
  
    
  
</div>



<?php

    if ( isset($_GET['pro_id']) ) {
      
    $product_id= $_GET['pro_id'];

    $get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

    $run_pro = mysqli_query( $con , $get_pro );

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_cat2 = $row_pro['product_cat2'];
        $pro_cat3 = $row_pro['product_cat3'];
        $pro_cat4 = $row_pro['product_cat4'];
        $pro_price = $row_pro['product_price'];
        $pro_desc= $row_pro['product_desc'];
        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        $pro_diy = $row_pro['product_diy_price'];
        $pro_high = $row_pro['product_high'];
        $pro_hs = $row_pro['product_hs'];
        $pro_block = $row_pro['product_block'];
        $pro_doc = $row_pro['product_doc'];
        $pro_keyword = $row_pro['product_keywords'];




?>






<div class="col-lg-12 col-xs-12 "  style="padding-top: 20px; " >

<div class="col-lg-6 col-xs-12 " style=" padding: 0px 10px 0px 0px ; " >
  
<strong style="font-size:25px; font-family: 'Muli', sans-serif;"> <?php echo $pro_title;  ?></strong>


</div>




<div class="col-lg-6 col-xs-12  " style=" padding: 10px 10px 0px 0px ; " >


  
 <a href="https://www.facebook.com/elecbits7/"><i style="padding-right: 30px; "><img src="images/facebook.png"></i></a>
 
<a href="https://twitter.com/elecbits16"><i c style="padding-right: 30px; "><img src="images/twitter.png"> </i></a>

<a href="https://www.instagram.com/elecbits/"><i c style="padding-right: 30px; "><img src="images/instagram.png"> </i></a>






</div>

</div>

<br>

<div class="col-lg-12 col-xs-12  hidden-xs"  style="height:1px; background:#fff; border-bottom:1px  solid #000; padding-top: 10px;  "    ></div>

<br>
 


<div class="col-lg-12 col-xs-12" >


<div class="col-lg-12 col-xs-12 " style=" padding: 30px 0px 10px 0px ; " >

<div class="col-lg-4 col-xs-12">
  
<span style="padding-right: 0px;  font-size: 14px; ">This project is also present in <strong style="font-family: 'Muli', sans-serif;"><?php echo "$pro_cat1, $pro_cat2, $pro_cat3 and $pro_cat4  " ; ?></strong> </span>

</div>



<div class=" col-lg-8 hidden-xs " >



<div class="col-lg-3 col-xs-3  hidden-xs" style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <!--<div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/freeshipping.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  FREE SHIPPING IN NCR. </span>
 </div>-->
</div>


 
<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/freeshipping.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  FREE SHIPPING IN NCR. </span>
 </div>
</div>

<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/cod.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  CASH ON DELIVERY. </span>
 </div>
</div>

<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/smiley.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 0px; ">
<span  style="font-size: 12px; " >  100% CUSTOMER SATISFACTION </span>
 </div>
</div>

</div>


</div>

</div>

<br>

<div class="col-lg-12 col-xs-12 "  style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>

<div class="col-lg-12 col-xs-12 hidden-xs " >

<div class="col-lg-4  ">


<img src="admin_area/product_img/<?php  echo $pro_image;  ?> " width='300' height='200' ">
  

</div>
<div class=" col-lg-8  " >

 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #05ad40; background-color: #05ad40;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 10px 10px 5px 45px; text-align:  center; color: white ">Do it Yourself</span>
 </div>




<div  style="border-style: solid; border-color: #05ad40;   padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 14px; " style="text-align: center; " >

If you are an enthusiast.

</span>
<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal22">What is DIY?</button>
   
   <div class="modal fade" id="myModal22" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do it yourself</h4>
        </div>
        <div class="modal-body">
        <h3 class="cbp-nttrigger"><strong style="color: #05ad40; ">Do it yourself.</strong></h3>
          
              <p style="color: black; font-weight: 900; text-align: justify;  ">Interested in electronics. Want to make something to craft your imagination ? </p>
              <p style="color: black; font-weight: 900; text-align: justify; ">Do it yourself kits are basically a set of components packed together for a dedicated project. Over that, our kits will also have a flash drive containing all the softwares and explanatory videos. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #05ad40; " >Why you should buy it ?</strong></h4>
                  <div class="cbp-ntcontent">
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Connect. Run. Execute.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Buying a DIY kit saves your time exponentially and help you concentrate only on the project  rather than travelling all across the city just to get components that are not easy to find. The prices at which we sell DIY will eventually cost you the same if you add your travelling dues and components cost but still saves your time, which is priceless. If you're not impressed, we provide you cash on delivery.</p>
                  </div>
       
        
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_diy;  ?>

 <a href='index.php?diy_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>


 </div>
</div>
</div>


 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #ff4646; background-color: #ff4646;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 10px 10px 5px 45px; text-align:  center; color: white; ">ReadyMade Kit</span>
 </div>




<div  style="border-style: solid; border-color: #ff4646; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " > If you need a ready made project,

<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal44">Ready to buy</button>
   
   <div class="modal fade" id="myModal44" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="font-size:15px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Readymade Kit</h4>
        </div>
        <div class="modal-body" style>
        
        <h3 class="cbp-nttrigger"><strong style="color: #ff4646; " >ReadyMade kit</strong></h3>
         
              <p style="color: black; font-weight: 900; text-align: justify;  "> Need to submit a project ?</p>
              <p style="color: black; font-weight: 900; text-align: justify; ">ReadyMade project kits just follow a plug and play mechanism. With your project, we provide you a set of softwares and videos in a flash drive that could easily help you understand the concepts. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #ff4646; " >Why you should buy it ?</strong></h4>
                
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Save time and efforts.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">You don't have to travel across the shops in the other corners of the city. Get evry information on the comfort of a click. If something still bothering you about our product, we provide cash on delivery and return on failure.</p>
                 
                </li>
                
              </ul>
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

 </span>

<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_price; ?>

 <a href='index.php?rp_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>

 </div>
</div>
</div>


 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #0070FF  ;  background-color: #0070FF ;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 15px 10px 5px 50px; text-align:  center; color: white; ">Synopsis/Rent</span>
 </div>




<div  style="border-style: solid; border-color: #0070FF ; padding-right: 0px; ">

 
<div  style="padding: 17px 0px 30px 10px; ">



<span  style="font-size: 12px; " > 


  <div  style="padding-left: 40px " >
                           <a href="admin_area/doc/<?php  echo $pro_doc; ?>" >
                             
 <button type="button" class="btn btn-primary " >Download</button>

                           </a>
                           </div>

<br>


  <div  style="padding-left: 40px " >

   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal33">Rent it out</button>
                          
                           </div>







 <div class="modal fade" id="myModal33" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rent - <?php echo $pro_title ;   ?></h4>
        </div>
        <div class="modal-body">
          
<div class="form-style-5">
<form method="post" action=" ">
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="name" placeholder="Your Name *">
<input type="email" name="email" placeholder="Your Email *">
<input type="number" name="phone" placeholder="Your mobile number *">

 <label><input type="radio" value="F" name="gender" checked="checked"><span></span>&nbsp Female</label>
                    <label><input type="radio" value="M" name="gender"><span></span>&nbsp  Male</label>


 <label for="sectional-text-2">Your location</label>
                    <select name="location" >
                      <option selected="selected" >Your Location</option>
                      <option >New Delhi</option>
                      <option >Noida</option>
                      <option >Gurgaon</option>
                                            <option value="us">Ghaziabad</option>
                                            <option value="us">Outside NCR</option>
                    </select>

<textarea name="address" cols="30" rows="4" placeholder="Your Address"></textarea>

     
</fieldset>
<fieldset>
<legend><span class="number">2</span> Product Details</legend>
<label for="job">Category *</label>
<select name="cat"  >
                      <option   >Choose a category</option>
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



<label for="job">Your plan *</label>
<select id="job" name="plan">
  <option >Choose your plan</option>
  <option >1 day - Get a project for a day at &#8377; 600 - &#8377; 1000 (Depending on the project.)</option>
  <option>1 week - Get a project for a week at &#8377; 1000 - &#8377; 2000 (Depending on the project.) </option>
  <option>1 month - Get a project for a month (Security money and deductions later on.)</option>
</select> 

  <label >Delivery date <span style="font-size: 12px; color: green; ">(Closest date  <?php echo date('d-m-Y', strtotime("+3 day")); ?>) :</span> </label>
              &nbsp  &nbsp<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+3 day")); ?>' >
              

<label for="job">Pickup Location </label>
<select id="job" name="pickl" >
  <option >Choose Pickup Location</option>
  <option >South Delhi </option>
  <option >West Delhi</option>
</select> 

<label for="job">Other details</label>
<textarea name="otherd" cols="30" rows="4"  placeholder="If you needed a customized product, not present in our list. Please mention the details."></textarea>



</fieldset>
<input type="submit" value="Apply" name="sc" />
</form>
</div>






































          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>























































</span>
 </div>
</div>
</div>



</div>



</div>


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>


</div>

<br>

<br>


<!-- Main product panel end -->


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>


<div class="col-lg-12 col-xs-12 hidden-lg " >

<div class="col-xs-12" > 
  
  <img src="admin_area/product_img/<?php  echo $pro_image;  ?> " width='300' height='200' ">


</div>

<div class="col-xs-12  " style="padding: 20px 0px 20px 0px; " >
<div class="panel-group" id="accordion">
    <div class="panel panel-default" >
      <div class="panel-heading" style="background-color:#05ad40; border-style: solid; border-color: #05ad40; " >
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: white; " >Do it Yourself</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">

       

<div  style="border-style: solid; border-color: #05ad40;   padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 14px; " style="text-align: center; " >

If you are an enthusiast.

</span>
<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">What is DIY?</button>
   
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do it yourself</h4>
        </div>
        <div class="modal-body">
         
         
          <h3 class="cbp-nttrigger"><strong style="color: #05ad40; ">Do it yourself.</strong></h3>
          
              <p style="color: black; font-weight: 900; text-align: justify;  ">Interested in electronics. Want to make something to craft your imagination ? </p>
              <p style="color: black; font-weight: 900; text-align: justify; ">Do it yourself kits are basically a set of components packed together for a dedicated project. Over that, our kits will also have a flash drive containing all the softwares and explanatory videos. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #05ad40; " >Why you should buy it ?</strong></h4>
                  <div class="cbp-ntcontent">
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Connect. Run. Execute.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Buying a DIY kit saves your time exponentially and help you concentrate only on the project  rather than travelling all across the city just to get components that are not easy to find. The prices at which we sell DIY will eventually cost you the same if you add your travelling dues and components cost but still saves your time, which is priceless. If you're not impressed, we provide you cash on delivery.</p>
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_diy;  ?>

 <a href='index.php?diy_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>



 </div>
</div>






        </div>
      </div>
    </div>



    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #ff4646; border-style: solid; border-color:  #ff4646; " >
        <h4 class="panel-title">   
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: white; " >Readymade Kit</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          <div  style="border-style: solid; border-color: #ff4646; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  READYMADE PROJECT </span>



<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal779">ReadyMade Kit</button>
   
   <div class="modal fade" id="myModal779" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do it yourself</h4>
        </div>
        <div class="modal-body">
         
         
          
        <h3 class="cbp-nttrigger"><strong style="color: #ff4646; " >ReadyMade kit</strong></h3>
         
              <p style="color: black; font-weight: 900; text-align: justify;  "> Need to submit a project ?</p>
              <p style="color: black; font-weight: 900; text-align: justify; ">ReadyMade project kits just follow a plug and play mechanism. With your project, we provide you a set of softwares and videos in a flash drive that could easily help you understand the concepts. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #ff4646; " >Why you should buy it ?</strong></h4>
                
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Save time and efforts.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">You don't have to travel across the shops in the other corners of the city. Get evry information on the comfort of a click. If something still bothering you about our product, we provide cash on delivery and return on failure.</p>
                 
                </li>
                
              </ul>
            
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>







<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_price ; ?>

 <a href="index.php?rp_cart=<?php echo $pro_id; ?>" style="float:right";> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>

 </div>
</div>







        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0070FF; border-style: solid; border-color:  #0070FF; ">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: white; ">Synopsis/Rent</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">


        <div  style="border-style: solid; border-color: #0070FF; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >   <div  style="align-content: center; " >
                           <div ><a href="admin_area/doc/<?php  echo $pro_doc; ?>" >


 <button type="button" class="btn btn-primary " >Download</button>
                            </a></div>
                           </div>


                           <br>
                          

   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal55">Rent it out</button>  <br>                          
 </span>
<br>


 <div class="modal fade" id="myModal55" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rent - <?php echo $pro_title ;   ?></h4>
        </div>
        <div class="modal-body">
          
<div class="form-style-5">
<form method="post" action=" ">
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="name" placeholder="Your Name *">
<input type="email" name="email" placeholder="Your Email *">
<input type="number" name="phone" placeholder="Your mobile number *">

 <label><input type="radio" value="F" name="gender" checked="checked"><span></span>&nbsp Female</label>
                    <label><input type="radio" value="M" name="gender"><span></span>&nbsp  Male</label>


 <label for="sectional-text-2">Your location</label>
                    <select name="location" >
                      <option selected="selected" >Your Location</option>
                      <option >New Delhi</option>
                      <option >Noida</option>
                      <option >Gurgaon</option>
                                            <option value="us">Ghaziabad</option>
                                            <option value="us">Outside NCR</option>
                    </select>

<textarea name="address" cols="30" rows="4" placeholder="Your Address"></textarea>

     
</fieldset>
<fieldset>
<legend><span class="number">2</span> Product Details</legend>
<label for="job">Category *</label>
<select name="cat"  >
                      <option   >Choose a category</option>
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



<label for="job">Your plan *</label>
<select id="job" name="plan">
  <option >Choose your plan</option>
  <option >1 day - Get a project for a day at &#8377; 600 - &#8377; 1000 (Depending on the project.)</option>
  <option>1 week - Get a project for a week at &#8377; 1000 - &#8377; 2000 (Depending on the project.) </option>
  <option>1 month - Get a project for a month (Security money and deductions later on.)</option>
</select> 

  <label >Delivery date <span style="font-size: 12px; color: green; ">(Closest date  <?php echo date('d-m-Y', strtotime("+3 day")); ?>) :</span> </label>
              &nbsp  &nbsp<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+3 day")); ?>' >
              

<label for="job">Pickup Location </label>
<select id="job" name="pickl" >
  <option >Choose Pickup Location</option>
  <option >South Delhi </option>
  <option >West Delhi</option>
</select> 

<label for="job">Other details</label>
<textarea name="otherd" cols="30" rows="4"  placeholder="If you needed a customized product, not present in our list. Please mention the details."></textarea>



</fieldset>
<input type="submit" value="Apply" name="sc" />
</form>
</div>






































          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



































<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >



</span>
 </div>
</div>




        </div>
      </div>
    </div>
  </div>
</div>

</div>

<br>
<br>


<div class="col-lg-12 col-xs-12"  >
  
<div class="col-lg-8 col-xs-12 hidden-xs" style="padding-top: 20px; font-size: 14px; ">
  
  <hr>
<strong style="font-size: 25px; font-family: 'Muli', sans-serif; ">Description</strong>
<hr>

<?php echo $pro_desc; ?>

</div>

<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
  
<hr>
<strong style="font-size: 25px; font-family: 'Muli', sans-serif; ">Description</strong>

  <hr>  

<?php echo $pro_desc; ?>

</div>

<div class="col-lg-4 col-xs-12  hidden-xs " style="padding-top:18px;">
<br>
<br>

<strong style="font-size: 25px; font-family: 'Muli', sans-serif; ">Easy Highlights</strong>
  <hr>


<?php  echo  $pro_high; ?>

</div>

<div class="col-lg-4 col-xs-12  hidden-lg " style="padding-top: 30px;"  >
<br>
<br>

<strong style="font-size: 25px; font-family: 'Muli', sans-serif;">Easy Highlights</strong>
  <hr>


<?php  echo  $pro_high; ?>

</div>





  

</div>

<div class="col-lg-12 col-xs-12"  >
  
<div class="col-lg-8 col-xs-12 hidden-xs ">
<hr>
<strong style="font-size: 25px;font-family: 'Muli', sans-serif; ">Block Diagram</strong>
<hr>
<br>
<br>
  
<img src="admin_area/block_diagram/<?php echo $pro_block; ?>" width='700' height='400'" >


</div>
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
<hr>
<strong style="font-size: 25px; font-family: 'Muli', sans-serif;">Block Diagram</strong>
<hr>
<br>
  
<img src="admin_area/block_diagram/<?php echo $pro_block; ?>" width='350' height='200'" >


</div>

<div class="col-lg-4 col-xs-12 hidden-xs" >
  <br>
  <br>
<strong style="font-size: 25px; font-family: 'Muli', sans-serif;">Hardware and software</strong>
<hr>
<?php echo $pro_hs; ?>
</div>

<div class="col-lg-4 col-xs-12 hidden-lg" style="padding-top: 20px; ">
<br>
<br>

  <strong style="font-size: 25px; font-family: 'Muli', sans-serif; ">Hardware and software</strong>
  <hr>
<?php echo $pro_hs; ?>
</div>



  
</div>
  

</div>





</div>
</div>

<div class="container">

<div class="col-lg-12 hidden-xs" style="padding:20px 0px 0px 30px;">
  <hr>
<strong style="font-size: 25px; font-family: 'Muli', sans-serif;">Ask Questions</strong>
<hr>


</div>

<div class="col-lg-12 hidden-lg" style="padding:20px 0px 0px 30px;">
  
<strong style="font-size: 25px; font-family: 'Muli', sans-serif; ">Ask Questions</strong>

<hr>

</div>

<div>
   <div style="padding:20px 0px 0px 30px;"  > 
           
                <form id="submit_form">  
                     <label>Email</label>  
                     <input type="text" name="email" id="name" class="form-control" />  
                     <br /> 
                     <label>Name</label>  
                     <input type="text" name="na" id="na" class="form-control" />  
                     <br />
                     <label>What are the difficulties you are facing while making your Electronic project ?</label>  
                     <textarea rows="4" cols="50" name="message" id="message" class="form-control"></textarea>
                     <br /> 
                     <label>Please provide your contact. </label>
                     <input type="number" name="pass" id="pass" class="form-control" /> 
                      
                      <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form>  
           </div>  

</div>

<div>
  


</div>

</div>


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>








<br>

<br>


</div>


 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->
 <div style="float:left;  top: 100px;  background-color: #0070FF;  width:40;height:60; padding:6px; position: fixed; border-radius:8px;">

 <a href="contactus.php">
   <b style="color:white;">

   <br>
C<br>
O<br>
  N<br>
  T<br>
  A<br>
  C<br>
  T<br>


  

  </b>
  </a>  

</div>






<?php

}}

?>



</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();
           var na = $('#na').val();  
           var message = $('#message').val();
           var pass = $('#pass').val();
           
           if(name == ''|| message == ''|| na == '' )  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"join-us/insert.php ",  
                     method:"POST",  
                     data:{name:name, message:message, na:na, pass:pass},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 8000);  
                     }  
                });  
           }  
      });  
 });  
 </script>














<?php

if (isset($_POST['sc']))

 {
  
$name = $_POST['name'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$cat = $_POST['cat'];

$plan = $_POST['plan'];
$devd= $_POST['ddate'];
$pickl = $_POST['pickl'];
$otherd = $_POST['otherd'];




$yourdetails = "$pro_title $name $location $email $phone $gender $address";
$projdetails = "$cat $devd $pickl $otherd $plan";

$send = "$yourdetails $projdetails";
$from = "From: Rent@elecbits.in";



$run_rent ="INSERT into rent (yourdetails, projdetails) values ('$yourdetails', '$projdetails')  ";

$run_query_rent = mysql_query( $run_rent, $con);

if (  ($run_query_rent)  && (mail("saurav.rav67@gmail.com", "Rent", $send, $from)) && (mail($email, "Successfully Registered ", "Your rent application has been successfully registered at Elecbits, Have a great shopping experience.  Meanwhile visit us at http://elecbits.in " , $from)) && (mail("elecbits16@gmail.com", "New Addition", $send, $from) ) ) {



  
 echo "<script>alert('Response has been added')</script>";
    echo "<script>window.open('details1.php?pro_id=$pro_id','_self')</script>";
} 








 }


?>