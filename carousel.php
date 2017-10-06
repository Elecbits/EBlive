<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <style>
    	/*-------------------------------*/
/*      Code snippet by          */
/*      @maridlcrmn              */
/*-------------------------------*/


.section1 {
    padding-top: 100px;
    padding-bottom: 100px;
}

.quote {
    color: rgba(0,0,0,.1);
    text-align: center;
    margin-bottom: 30px;
}

/*-------------------------------*/
/*    Carousel Fade Transition   */
/*-------------------------------*/

#fade-quote-carousel.carousel {
  padding-bottom: 60px;
}
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-indicators {
  bottom: 10px;
}
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
    border: none;
}
#fade-quote-carousel .profile-circle {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 100px;
}
.profile-circle > img{
width:100%;
height:100%;
border-radius: 100px;
}
    </style>
</head>

<section1 id="carousel">    				
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" >
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				  <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                <!--      <li data-target="#fade-quote-carousel" data-slide-to="5"></li>-->
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
                        <!-- <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div> -->
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2;"> <img src="images/testimonials/1.jpg"></div>
				    	<blockquote>
				    		<p>"I ordered Self-Balancing project from Elecbits and i had a fantastic experience. They have got the best prices in the market and they also provide Cash on DELIVERY!!"<br><br> <div style="text-align:right;"><br>-Raju Kumar<br>GTBIT </div></p>
				    	</blockquote>	
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2;"> <img src="images/testimonials/2.jpg"></div>
				    	<blockquote>
				    		<p>"The existence of elecbits has helped me a lot with the purchase of hardware at a very convenient price. Your tech support is marvelous. One to one doubt session is a good thing about you. I'd love to refer elebits to friends and batchmates" <div style="text-align:right;"><br>-Prashant Kumar Singh<br>GTBIT </div></p>
				    	</blockquote>
				    </div>
				  <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"><img src="images/testimonials/3.jpg"></div>
				    	<blockquote>
				    		<p>"Experience and Service is amazing. the price of components are acceptable and Tech support is also good. Overall Satisfied with the Elecbits Service."<br><br>  <div style="text-align:right;"><br>-Saad<br>GTBIT </div></p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"><img src="images/testimonials/4.jpg"></div>
    			    	<blockquote>
				    		<p> "Thanks for giving batteries as a rent for making a quadcopter project. and also a elecbits service was amazing."<br><br>  <div style="text-align:right;"><br>-Nitish Roy<br>Freelancer </div></p>
				    	</blockquote>
				    </div>
                     <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"><img src="images/testimonials/5.jpg"></div>
    			    	<blockquote>
				    		<p>These guys just delivered within 2 days of ordering with reports and presentations. Even the price was amazing. It was a great experience. The whole team is so good .<br><br> <div style="text-align:right;"><br>-Kanika Malviya<br>Ansal University </div></p>
				    	</blockquote>
				<!--    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"><img src=""></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, <div style="text-align:right;"><br>-Saurav Kumar<br>GTBIT </div></p>
				    	</blockquote>-->
				    </div>
				  </div>
				</div>
			</div>							
		</div>
	</div>
</section1>
