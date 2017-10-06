<!DOCTYPE html>
<?php



session_start();

include("functions/functions.php");



?>



<html>
    <head>
        <meta charset="utf-8">
        <meta id="viewport" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
      
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles/rentc/css/main1.css">
        <!--[if lte IE 9]>
          <script type="text/javascript" src="js/html5shiv.js"></script>
        <![endif]-->

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

<?php 



include("public/logobar.php");



?>

<!--Logo bar end-->



<!--Menu bar start-->

<?php



include("public/menubar.php");



?>

   <!-- Menu bar end--> 

<br>



<br>






























      <div class="container">    
        
        <form id="sectional" method="post" action=" ">
          
          <fieldset>
            <legend>Section One</legend>
            <div class="form-section">
              <p class="form-help-text">
                This section has a required field. If you leave it blank, it will throw an error and not let you proceed to the next section.
              </p>
             
              <div class="field required-field">
                <label for="sectional-text-1">Text 1</label>
                <input name="text1" id="sectional-text-1" type="text" required>
             
              </div>
             
              <div class="field">
               <label for="sectional-text-2">Text 3</label>
                    <select name="country" >
                      <option value="" selected="selected" >Your Location</option>
                      <option value="de">New Delhi</option>
                      <option value="en">Noida</option>
                      <option value="us">Gurgaon</option>
                                            <option value="us">Ghaziabad</option>
                                            <option value="us">Outside NCR</option>
                    </select>
                    <span></span>
                
              </div>
              
              <div class="field">
                <label for="sectional-text-3">Text 3</label>
                <input name="text3" id="sectional-text-3" type="text">
              </div>
              <nav class="form-section-nav">
                <span class="btn-std form-nav-next">Next</span>
              </nav>
            </div>
          </fieldset>
          <fieldset>
            <legend>Section Two</legend>
            <div class="form-section">
              <div class="field">
                <label for="sectional-text-4">Text 4</label>
                <input name="text4" id="sectional-text-4" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-5">Text 5</label>
                <input name="text5" id="sectional-text-5" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-6">Text 6</label>
                <input name="text6" id="sectional-text-6" type="text">
              </div>
              <nav class="form-section-nav">
                <span class="btn-secondary form-nav-prev">Prev</span>
                <span class="btn-std form-nav-next">Next</span>
              </nav>
            </div>
          </fieldset>
          <fieldset>
            <legend>Section Three</legend>
            <div class="form-section">
              <div class="field">
                <label for="sectional-text-7">Text 7</label>
                <input name="text7" id="sectional-text-7" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-8">Text 8</label>
                <input name="text8" id="sectional-text-8" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-9">Text 9</label>
                <input name="text9" id="sectional-text-9" type="text">
              </div>
              <nav class="form-section-nav">
                <span class="btn-secondary form-nav-prev">Prev</span>
                <span class="btn-std form-nav-next">Next</span>
              </nav>
            </div>
          </fieldset>
          <fieldset>
            <legend>Section Four</legend>
            <div class="form-section">
              <div class="field">
                <label for="sectional-text-10">Text 10</label>
                <input name="text10" id="sectional-text-10" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-11">Text 11</label>
                <input name="text11" id="sectional-text-11" type="text">
              </div>
              <div class="field">
                <label for="sectional-text-12">Text 12</label>
                <input name="text12" id="sectional-text-12" type="text">
              </div>
              <nav class="form-section-nav">
                <span class="btn-secondary form-nav-prev">Prev</span>
                <button type="submit" name="sc"> <span>Submit</span> </button>
              </nav>
            </div>
          </fieldset>
        </form>
   
      
      </div>  
    
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
    </body>
</html>
<?php

if (isset($_POST['sc']))

 {
  
$n = $_POST['text1'];


echo $n;


 }


?>