<!DOCTYPE html>
<?php



session_start();

include("functions/functions.php");



?>



<html>
    <head>
        <meta charset="utf-8">
        <meta id="viewport" name="viewport">
        <title>Elecbits | Rent</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
      
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles/rentc/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">


          

        <?php


        include("public/link.php");



        ?>

</head>
    <body>


<?php 



include("public/topbar.php");



?>



<!--Top bar end-->



  



<!--Logo bar start-->
<div >
<?php 



include("public/logobarrent.php");



?>
</div>
<!--Logo bar end-->



<!--Menu bar start-->
<div >
<?php 



include("public/menubar.php");



?>
</div>

   <!-- Menu bar end--> 






 <div class="tag126" class="col-lg-12 bg-primary">
      <div class="container" >  

     <br>
     <br>   
  <div  style="font-size: 36px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">R</span>ENT A PROJECT</div> 


  
 

 
        
        <form id="sectional" method="post" action=" ">
          
          <fieldset>
            <legend>Your Details</legend>
            <div class="form-section">
              <p class="form-help-text">This form has required fields. If you leave it blank, it will throw an error and not let you proceed to the next section.
              </p>
             
              <div class="field required-field">
                <label for="sectional-text-1">Name</label>
                <input name="name" id="sectional-text-1" type="text" required>
             
              </div>
             
              <div class="field ">
               <label for="sectional-text-2">Your location</label>
                    <select name="location" >
                      <option selected="selected" >Your Location</option>
                      <option value="New Delhi" >New Delhi</option>
                      <option value="Noida" >Noida</option>
                      <option value="Gurgaon">Gurgaon</option>
                                            <option value="Ghaziabad">Ghaziabad</option>
                                            <option value="NCR">Outside NCR</option>
                    </select>
                    <span></span>
                
              </div>
              
              <div class="field required-field">
                <label for="sectional-text-3">Email</label>
                <input name="email" id="sectional-text-3" type="email" required="required">
              </div>
                <div class="field required-field">
                <label for="sectional-text-3">Contact</label>
                <input name="phone" id="sectional-text-3"  type="tel" required="required" >
              </div>


               <div class="field ">
               
               <label><input type="radio" value="F" name="gender" checked="checked"><span></span>&nbsp Female</label>
                    <label><input type="radio" value="M" name="gender"><span></span>&nbsp  Male</label>
              </div>


              <div class="field  required-field">
               
              <label for="sectional-text-3" >Address</label>
              <textarea name="address" cols="30" rows="4" style="margin-left: 0px; margin-right: 0px; width: 310px;" ></textarea>
              </div>

             



              <nav class="form-section-nav">
                <span class="btn-std form-nav-next">Next</span>
              </nav>
            </div>
          </fieldset>
          <fieldset>
            <legend>Product Details</legend>
            <div class="form-section">
                  <div class="field required-field ">
               <label for="sectional-text-2">Category</label>
                 <select name="cat" data-required="true" >
                      <option  selected="selected" >Choose a category</option>
                       <?php 

        $get_cats = "select * from categories";
    $run_cats = mysqli_query($con , $get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       
                    </select>
                    <span></span>
                
              </div>
                 <div class="field required-field">
               <label for="sectional-text-2">Project</label>
                      <select name="pro" data-required="true">
                      <option  selected="selected" >Choose a project.</option>
                      
 <?php 

        $get_pro = "select * from products";
    $run_pro = mysqli_query($con , $get_pro);


    while ($row_pro = mysqli_fetch_array($run_pro) ) 
    {
      
      $pro_title = $row_pro['product_title'];

        
          
        echo "<option><strong>$pro_title<strong></option>";
        
        
     
        

    } ?>
       






                    </select>
                    <span></span>
                
              </div>
                 <div class="field required-field ">
               <label for="sectional-text-2">Your Plan</label>
                   <select name="plan" data-required="true">
                      <option  selected="selected" >Choose your plan.</option>
                      <option >1 day - Get a project for a day at ₹ 600 - ₹ 1000 (Depending on the project.)</option>
                      <option >1 week - Get a project for a week at ₹ 1000 - ₹ 2000 (Depending on the project.) </option>
                      <option >1 month - Get a project for a month (Security money and deductions later on.)</option>
                    </select>
                    <span></span>
                
              </div>

              <div class="field  required-field">
                <label >Delivery date <span style="font-size: 12px; color: green; ">(Closest date  <?php echo date('d-m-Y', strtotime("+2 day")); ?>) :</span> </label>
              &nbsp  &nbsp<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+2 day")); ?>' >
              </div>

               <div class="field required-field">
               <label for="sectional-text-2">Pick up location</label>
               <select name="pickl" data-required="true">
                      <option  selected="selected" >Choose a pick up location.</option>
                      <option >West Delhi</option>
                      <option >South Delhi</option>
                      
                    </select>
                    <span></span>
                
              </div>

               <div class="field ">
               
              <label for="sectional-text-3">Other Details</label>
              <textarea name="otherd" cols="30" rows="4" style="margin-left: 0px; margin-right: 0px; width: 310px;" placeholder="If you needed a customized product, not present in our list. Please mention the details." ></textarea>
              </div>
               <nav class="form-section-nav">
                <span class="btn-secondary form-nav-prev">Prev</span>
                <button type="submit" name="sc" class="btn-std"> <span>Submit</span> </button>
              </nav>
            </div>
          </fieldset>
   
          
        </form>
   
      
      </div> 

</div>



      <br>



    
      <script src="styles/rentc/js/formalize.js" type="text/javascript"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#sectional').formalize({
            timing: 300,
            nextCallBack: function(){
              if (validateEmpty($('#sectional .open'))){
                scrollToNewSection($('#sectional .open'));
                return true;
              };
              return false;
            },
            prevCallBack: function(){
              return scrollToNewSection($('#sectional .open').prev())
            }
          });
          $('#global').formalize({
            navType: 'global',
            prevNav: '#global-nav-prev',
            nextNav: '#global-nav-next',
            timing: 300,
            nextCallBack: function(){
              return validateEmpty($('#global .open'));
            }
          });

          $('#btn-global').on('click', function(){
            $('#btn-sectional').removeClass('disabled');
            $(this).addClass('disabled');
            $('#sectional').hide();
            $('#global').show();
          });

          $('#btn-sectional').on('click', function(){
            $('#btn-global').removeClass('disabled');
            $(this).addClass('disabled');
            $('#global').hide();
            $('#sectional').show();
          });

          $('input').on('keyup change', function(){
            $(this).closest($('.valid')).removeClass('valid');
          });

          function validateEmpty(section){
            var errors = 0;
            section.find($('.required-field')).each(function(){
              var $this = $(this),
                input = $this.find($('input'));
              if (input.val() === ""){
                errors++;
                $this.addClass('field-error');
                $this.append('\<div class="form-error-msg">This field is required!\</div>');
              }
            });
            if (errors > 0){
              section.removeClass('valid');
              return false;
            }
            section.find($('.field-error')).each(function(){
              $(this).removeClass('field-error');
            });
            section.find($('.form-error-msg')).each(function(){
              $(this).remove();
            });
            section.addClass('valid');
            return true;
          }

          function scrollToNewSection(section){
            var top = section.offset().top;
            $("html, body").animate({
              scrollTop: top
            }, '200');
            return true;
          }
        });
      </script>
      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>








<?php

      include("public/footer.php");







      ?> 












    </body>
</html>
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
$project = $_POST['pro'];
$plan = $_POST['plan'];
$devd= $_POST['ddate'];
$pickl = $_POST['pickl'];
$otherd = $_POST['otherd'];




$yourdetails = "$name $location $email $phone $gender $address";
$projdetails = "$cat $project $devd $pickl $otherd $plan";

$send = "$yourdetails $projdetails";
$from = "From: Rent@elecbits.in";



$run_rent ="INSERT into rent (yourdetails, projdetails) values ('$yourdetails', '$projdetails')  ";

$run_query_rent = mysqli_query( $con , $run_rent);

if (  ($run_query_rent)  && (mail("saurav.rav67@gmail.com", "Rent", $send, $from)) && (mail($email, "Successfully Registered ", "Your rent application has been successfully registered at Elecbits, Have a great shopping experience.  Meanwhile visit us at http://elecbits.in " , $from)) && (mail("elecbits16@gmail.com", "New Addition", $send, $from) ) ) {



  
 echo "<script>alert('Response has been added')</script>";
    echo "<script>window.open('rent.php','_self')</script>";
} 








 }


?>