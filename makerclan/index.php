<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include("../functions/functions.php");


?>

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MakerClan - Where you meet your passion. </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
  

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Average+Sans" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/feature.css">
   <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Pangolin" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/steps1.css">
   <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">

@font-face {
  font-family: 'Harlow-Solid-Italic';
    src:  url('logofont/Harlow-Solid-Italic.ttf.woff') format('woff'),
    url('logofont/Harlow-Solid-Italic.ttf.svg#Harlow-Solid-Italic') format('svg'),
    url('logofont/Harlow-Solid-Italic.ttf.eot'),
    url('logofont/Harlow-Solid-Italic.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
    
.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}


.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}








</style>



</head>

<body style="margin-top: 00px; ">




    <!-- Navigation -->

   <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!--Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse 
        </div>
        <!-- /.container 
    </nav> -->

<?php 



include("topbarl.php");
?>









<nav class="navbar navbar-default  hidden-lg  navbar-fixed-top  " style="background-color: white; " >
  <div class="container-fluid">


  



    <!-- Brand and toggle get grouped for better mobile display -->
   
    <div class="navbar-header" style="padding: 10px 0px 0px 20px; ">

<div class="col-lg-2 col-xs-2 "  >
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  </div>  
<div class="col-lg-3  col-xs-6">
    <a href="index.php"><img src="../images/logo.png" width="200" ></a>
</div>
    
<!--<div class="col-lg-4 col-xs-5 " >
<form class="searchbox"  method="get" action="results.php"  enctype="multipart/form-data"  >
        <input type="text" placeholder="Search......" name="user_query" class="searchbox-input" style=" width: 600px; background: white; border-color: black; border-style: solid;    border-width: 3px; "  required>
       
        <span class="searchbox-icon"  >  <input type="submit" name="search" style="color: white; background-color: black; border-color: black;
        border-style: solid; " value="GO"> </span>
    </form>
</div>  -->



    <div  class=" col-lg-2" style="float: right; padding-right: 40px; "  >





 


</div>
     
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: white; padding: 10px 0px 0px 40px; ">
      <ul class="nav navbar-nav">
        
       

        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
       <li> <a href="login.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspSign In</a> </li>
      
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="w3-container hidden-xs hidden-sm hidden-md">
  <div class="w3-panel  col-lg-12">


<div class="col-lg-9" style="padding: 10px 0px 0px 40px;">
     <a href="index.php" style="text-align: left;">   <img src="../images/logo.png" width="200" ></a>
     </div>
     <div class="col-lg-3" >




<?php
if (isset($_SESSION['email'])) {
  
$path = "myaccount/index.php";
$bu_name = $_SESSION['email'];

}

else {
  
  $path = "login.php";
$bu_name = "Sign In";


  }

?>
 <a href= <?php echo $path; ?> <button class="button button4" style="font-family: 'Average Sans', sans-serif;">
<?php echo $bu_name; ?>
      </button></a>
</div>
  </div>

</div>

<div class="hidden-lg">
    <br>
<br>
<br>


</div>


<div class="hidden-lg hidden-md" > 


<div class="col-lg-6" style="padding: 10px 40px 0px 40px; background-image: url(learn1.jpg);  width: auto; color: white; text-align: center;">
<br>
<br>

<span style="font-size: 60px;  color: white; font-family: 'Baloo Tammudu', cursive;  ">MAKER-CLAN</span> 


<div style="padding:20px 10px 20px 10px; text-align: center; background-color : white; color: black; border-color: #0070FF; border-style: solid; border-radius: 20px; ">


<span style="font-weight: 700;">What is a MAKER-CLAN ?</span>

<br>
<br>

  
It is an online platform for freelancer to showcase their hidden potential in embedded electronics. Our platform allow you to earn by making simplistic electronics project just at the comfort of your home.
<br>
<br>

<a href="http://elecbits.in/maker_form"><button class="button1" style="vertical-align:middle;  font-size: 12px;"><span>JOIN THE CLAN</span></button></a>


</div>

<br>
<br>





</div>

<!--<div class="col-lg-6" style="padding-left: 10px; " >

<br>
     <span style="font-size: 55px; font-weight: 900;  font-family: 'Harlow-Solid-Italic'; ">E  </span><span style="font-size: 35px; font-weight: 300;  font-family: 'Average Sans', sans-serif; "> [ Practice ] </span>

     

     <span style="font-size: 20px;  font-family: 'Average Sans', sans-serif;">
     <br>
     Elecduino enables you to practice <br> whatever learnt on specially designed kits <br> to understand the
<span style="font-weight: 500; ">CONCEPTS</span> and <span style="font-weight: 500; ">IMPLEMENT</span> them.<br>

     </span>


<br>
<br>

<button class="button1" style="vertical-align:middle; background-color: #0070ff; font-size: 18px;"><span>BUY NOW</span></button>


</div> -->



     </div>






  


</div>






<div class="w3-container hidden-xs hidden-sm" style="background-image: url(learn1.jpg); height: 500px; width: 1700px; " >
  <div class="w3-panel  col-lg-12">


<div class="col-lg-6" style="padding: 10px 0px 0px 40px;">

  <div class="col-lg-10" style="text-align: center;">

<span style="font-size: 75px;  color: white; font-family: 'Baloo Tammudu', cursive;  ">MAKER-CLAN</span> 




<div style="padding:20px 10px 20px 0px; text-align: center; background-color : white; border-color: #0070FF; border-style: solid; border-radius: 20px;">

<span style="font-weight: 700;">What is a MAKER-CLAN ?</span>

<br>
<br>

  
It is an online platform for freelancer to showcase their hidden potential in embedded electronics. Our platform allow you to earn by making simplistic electronics project just at the comfort of your home.
<br>
<br>

<a href="http://elecbits.in/maker_form"><button class="button1" style="vertical-align:middle;  font-size: 12px;"><span>JOIN THE CLAN</span></button></a>


</div>



</div>




     </div>

     


     

     




                    
           
 














</div>
  </div>

  </div>
 

<div class="container-fluid" style="background-color: #e8f4ef; text-align: center;">

<br>
<span style="font-size: 40px;  color: #0070FF; font-family: 'Baloo Tammudu', cursive;  ">START WITH US IN 4 EASY STEPS</span> 
<br>
<div class="col-lg-12" style="background-color: #e8f4ef; text-align: center;"">
<div class="col-lg-3">

<div class="panel panel-default">
  <div class="panel-body">
    <span style="font-size: 20px;  color: red; font-family: 'Baloo Tammudu', cursive; ">SIGN UP</span>
    <br>
    <span style="text-align: left; align-content: left;">
      On board with us by just filling a basic  <span style="color: red; font-weight: 700 ">FORM</span> and required <span style="color: red; font-weight: 700 ">VERIFICATION</span>.
    </span>


  </div>
</div>
<br>

</div>


<div class="col-lg-3">
<div class="panel panel-default">
  <div class="panel-body">
    <span style="font-size: 20px;  color: #5362d1; font-family: 'Baloo Tammudu', cursive; ">PUT YOUR BIDS</span>
    <br>
    <span style="text-align: left; align-content: left;">
     <span style="color: #5362d1; font-weight: 700 ">SELECT</span> any exciting project that you want to pursue and put your  <span style="color: #5362d1; font-weight: 700 ">BID</span> over that.
    </span>


  </div>
</div>
<br>

  
</div>



<div class="col-lg-3">
  <div class="panel panel-default">
  <div class="panel-body">
    <span style="font-size: 20px;  color: #000000; font-family: 'Baloo Tammudu', cursive; ">GET THE MATERIALS</span>
    <br>
    <span style="text-align: left; align-content: left;">
      Finalize your bid. <span style="font-weight: 700 ">RECIEVE</span> the required components and start <span style="font-weight: 700 ">WORKING</span>.
    </span>


  </div>
</div>
<br>

  
</div>


<div class="col-lg-3">
<div class="panel panel-default">
  <div class="panel-body">
    <span style="font-size: 20px;  color: #3CB371; font-family: 'Baloo Tammudu', cursive; ">GET PAID INSTANTLY</span>
    <br>
    <span style="text-align: left; align-content: left;">
      <span style="color: #3CB371; font-weight: 700 ">CASH IN</span> your service after quality <span style="color: #3CB371; font-weight: 700 ">TEST</span> and application checklist  completion.
    </span>


  </div>
</div>
<br>

  
</div>
</div>

<br>
<br>

</div>


<br>
  

<br>
<br>









<div>
<div class="container" >

       

        <!-- First Featurette -->
        <div class="featurette" id="about" style="font-family: 'Muli', sans-serif;">
          <img class="featurette-image  img-responsive pull-right" src="image/signup.png">
            <h2 class="featurette-heading" style="font-size: 30px; font-weight: 600; color: red;" >SIGN UP.<br>
                <span class="text-muted" style="font-size: 25px; font-weight: 600;">Just fill a basic form, <br> Get everything here.</span>
            </h2>
            <p class="lead" style="text-align: justify; font-size: 18px; font-family: 'Average Sans', sans-serif; "><span style="font-weight: 600;">Are you confused on how to begin your career in embedded electronics ?</span> <br>
           Once you complete your sign up (maker) form we'll provide you all the access required for bidding as soon as the verification process gets completed. <br>
           Your account will let you place bids on the trending projects on the project of your choice.</p>
            <br>

         


        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="about" style="font-family: 'Muli', sans-serif;">
            <img class="featurette-image img-circle img-responsive pull-right" src="image/bid.png">
            <h2 class="featurette-heading" style="font-size: 30px; font-weight: 600; color: #3CB371;" >PUT YOUR BIDS.<br>
                <span class="text-muted" style="font-size: 25px; font-weight: 600;">See. Bid. Work</span>
            </h2>
            <p class="lead" style="text-align: justify; font-size: 18px; font-family: 'Average Sans', sans-serif; "><span style="font-weight: 600;">Want to earn some money with practical knowledge you have ?</span>
            <br>Just login to your account and start making bids according to your talent and skills. The bid will have a time duration and bidding finalization process. <br>
            After finalization, the bidding product development agreement will be assigned to you.</p>
            <br>

            

        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
       <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="image/raw_material.png" width="auto">
            <h2 class="featurette-heading" style="font-size: 30px; color: #0070ff; font-weight: 600;" >RECIEVE RAW MATERIAL.<br>
                <span class="text-muted" style="font-size: 25px; font-weight: 600;">From components to controllers, <br> Get everything here.</span>
            </h2>
            <p class="lead" style="text-align: justify; font-size: 18px; font-family: 'Average Sans', sans-serif; "><span style="font-weight: 600;">Don't want to bear the pain required for travelling all across the city just to get some electronics components ?</span> <br>
            We are nothing but a catalyst. We help you recognise your talent and make sure you don't have any difficulties in making your imagination come true.  <br>
            Complete your project in required time and a pick up will be done by one of our service management corrospondent.</p>
            <br>

          
        </div>

        <hr class="featurette-divider">


          <div class="featurette" id="about" style="font-family: 'Muli', sans-serif;">
            <img class="featurette-image img-circle img-responsive pull-right" src="image/bid.png">
            <h2 class="featurette-heading" style="font-size: 30px; font-weight: 600; color: #3CB371;" >CASH IN YOUR SERVICE<br>
                <span class="text-muted" style="font-size: 25px; font-weight: 600;">Get your bucks, as soon as the project is tested.</span>
            </h2>
            <p class="lead" style="text-align: justify; font-size: 18px; font-family: 'Average Sans', sans-serif; "><span style="font-weight: 600;">Earn upto 30,000 to 40,000 per month just by working from home.</span> <br>
            Our system is designed in such a way that as soon as your serviced project reaches us, we fund you directly for the bid you make.<br>
            These projects are basic and require simple knowledge of embedded electronics.</p>
            <br>

            

        </div>
<br>
<br>




<!--

<hr>
<strong>WHY CHOOSE US ?</strong><br>
<hr>



<div class="container">
  <div class="row" style="font-family: 'Average Sans', sans-serif;">


        <!-- Boxes de Acoes 
      <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-thumbs-o-up"></i></div>
          <div class="info">
            <h3 class="title">Get everything at one place</h3>
            <p>
              No need to visit a million places just to get few components. We know how it's like to try something for the first time. You must be confused, what to choose and what not to, we are just making the selection easier for you at a price which is the best in the segment.
            </p>
           
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-flag"></i></div>
          <div class="info">
            <h3 class="title">Save Time, Money and Resources.</h3>
              <p>
              Finding the right components for the right controller consumes a lot of time and effort, if you are new in electronics. We make sure that it won't happen to you, get the best resources including complete project Do it Yourself kit, all at the same place. 
            </p>
        
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-desktop"></i></div>
          <div class="info">
            <h3 class="title">Free courses.</h3>
              <p>
             You can get many courses and videos online to study controllers, but how to get the right components according to that. To learn electronics , you need to have theoritical knowledge, Coding skills and guts to play with hardware- We provide everything at one place.
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes 
  </div>
</div>


</div>

-->
</div>
</div>


<div class="container-fluid" style="background-color: #e8f4ef; text-align: center;">

<br>
<span style="font-size: 30px;  color: #0070FF; font-family: 'Baloo Tammudu', cursive;  ">DON'T WAIT TO INNOVATE
</span> 
<br>

<a href="http://elecbits.in/maker_form"><button class="button1" style="vertical-align:middle; background-color: red; font-size: 12px;"><span>START HERE</span></button></a>


<br>
<br>
</div>







 
     

        <!-- Footer -->
        <footer>

            <div class="container row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Elecbits 2016</p>
                </div>
            </div>
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
