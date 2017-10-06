<!DOCTYPE html>
<?php
include("functions/functions.php");

?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  <?php
  include("public/link.php");
  ?>
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

    if ( isset($_GET['soft_id']) ) {
      
    $product_id= $_GET['soft_id'];

    $get_pro = "SELECT * FROM software WHERE soft_id ='$product_id'";

    $run_pro = mysqli_query( $con , $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $software_id=$row_pro['soft_id']; 
   $software_title= $row_pro['soft_title'];
  
   $link1 = $row_pro['pic1'];
   $link2 = $row_pro['output1'];
   $link3 = $row_pro['output2'];  
   $link4 = $row_pro['output3'];
   $soft_desc = $row_pro['soft_desc'];
   $soft_code= $row_pro['soft_coding'];
   $soft_person = $row_pro['soft_person_name'];
   $soft_profile = $row_pro['soft_profile'];



?>



<div class="col-lg-12 col-xs-12 "  style="padding-top: 20px; " >

<div class="col-lg-6 col-xs-12 " style=" padding: 0px 10px 0px 0px ; " >
  
<strong style="font-size:25px;"> <?php echo $software_title;  ?></strong>


</div>

<div class="col-lg-6 col-xs-12  " style=" padding: 10px 10px 0px 0px ; " >

<span style="padding-right: 0px;  font-size: 16px; ">This project is uploaded by <strong><?php echo "$soft_person" ; ?></strong> </span>
&nbsp
<a href="<?php echo $soft_profile; ?>"><i style="padding-right: 30px; "><img src="images/li.png"></i></a>



</div>



</div>



<div class="col-lg-12 col-xs-12  hidden-xs"  style="height:1px; background:#fff; border-bottom:1px  solid #000; padding-top: 10px;  "    ></div>



<div class="col-lg-12 col-xs-12" >

<div class="col-lg-12 col-xs-12 "  style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>



<div class="col-lg-12 col-xs-12 hidden-xs " >

<div class="col-lg-4  ">
<br>


<img src="admin_area/product_img/<?php  echo $link1;  ?>"  width='300' height='200' ">
  

</div>
<div class="col-lg-8 col-xs-12 " style="padding-top: 20px;">
  
 
<strong style="font-size: 25px; ">Description</strong>

<div style="font-weight: 600; ">
<?php echo $soft_desc; ?>
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

<div class="col-lg-12 col-xs-12 hidden-lg " >


  
  <img src="admin_area/product_img/<?php  echo $link1;  ?> " width='300' height='200' ">






</div>

<br>
<br>


<div class="col-lg-12 col-xs-12"  >
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
  
<hr>
<strong style="font-size: 25px; ">Description</strong>

  <hr> 
  <hr>
  <div style="font-weight: 600; ">

<?php echo $soft_desc; ?>

  <hr> 
</div>
</div>








  

</div>



<div class="col-lg-12 col-xs-12"  >



<div class="col-lg-12 col-xs-12 hidden-xs ">

<div class="hidden-xs">
<hr>
<strong style="font-size: 25px; ">Instruction</strong>
<hr>
<div class="col-lg-10" style="font-weight: 600; ">
  

<?php echo $soft_code; ?>

</div>

<div class="col-lg-2">
 
<!--<a href="<?php echo $link2; ?>">&nbsp &nbsp &nbsp &nbsp Download<br><img src="images/soft_down.png"> </a> -->



<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_d">Order Now</button>


</div>






  </div>

  


  



</div>
<!--
<div class="col-lg-4 col-xs-12 hidden-xs ">

  
<img src="admin_area/product_img/<?php echo $link3 ; ?>" width='350' height='200'" >


</div>
<div class="col-lg-4 col-xs-12 hidden-xs ">

  
<img src="admin_area/product_img/<?php echo $link4 ; ?>" width='350' height='200'" >


</div>
-->
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
<hr>
<strong style="font-size: 25px; ">Instructions</strong>
<hr>

 <div style="font-weight: 600; ">
<?php echo $soft_code; ?>
</div> 
<br>
<!--
<img src="admin_area/product_img/<?php echo $link3 ; ?>" width='350' height='200'" >
<br><br>
<img src="admin_area/product_img/<?php echo $link4 ; ?>" width='350' height='200'" >

-->
</div>

<div class="col-lg-6 col-xs-12 hidden-lg ">


<!--<a href="<?php echo $link2; ?>">&nbsp &nbsp &nbsp &nbsp Download<br><img src="images/soft_down.png"> </a> -->


 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_d">Order Now</button>



</div>




<div class="modal fade" id="myModal_d" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $software_title; ?></h4>
        </div>
       

      <div class="panel-body" style="background-color: white; color: black; font-family: 'Muli', sans-serif;">
        
   <form method="post"  action=" ">
 <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="name" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Phone No:</label>
    <input type="tel" class="form-control" name="phone" id="pwd" required>
  </div>
    <div class="form-group">
    <label for="pwd">Message</label>
    <textarea type="text" class="form-control" name="msg" required> </textarea>
  </div>
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>





   </form>

   <?php
   if (isset($_POST['submit']))

    {
       
      $software_name = $software_title;
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $msg = $_POST['msg'];
     
      $messgage = "$name,  $phone, $msg, $software_name";

       $from= "from: Software_Elecbits@elecbits.in";

       if( mail("saurav.rav67@gmail.com", "Project", $messgage, $from) && mail("elecbits16@gmail.com", "Project", $messgage, $from)  ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

   }


?>




      </div>








        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  
</div>
  

</div>





</div>
</div>

<div class="container">

<div class="col-lg-12 hidden-xs" style="padding:20px 0px 0px 30px;">
  <hr>
<strong style="font-size: 25px; ">Ask Questions</strong>
<hr>


</div>

<div class="col-lg-12 hidden-lg" style="padding:20px 0px 0px 30px;">
  
<strong style="font-size: 25px; ">Ask Questions</strong>

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