<!DOCTYPE html>

<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{


?>














<html>
<title>Elecduino Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

  body {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    
}
</style>

 
  
 </head>

<body >

<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:70px">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-folder-o"></i></a> 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a> 


<div style="position: absolute; bottom: 5px;">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
  <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a> 
  </div>
</div>

<div style="margin-left:70px">

<div class="w3-container" >



    













<div style="padding: 10px 10px 10px 10px;">

<div class="panel panel-default">
      <div class="panel-heading">What is Arduino ?</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
Did you ever look at some gadget or machine and wondered how it really worked? Maybe it was a TV remote control, the automatic fare collection(AFC) gates at the metro stations, an ATM, or an electronic toy? Or did you want to create your own robot or a line follower car, or perhaps you’d like to control the lights and fan of your room with your phone? Where and how to start? Arduino to the rescue.. !!
 
 </div>

<div class="col-lg-2">
      <a href="index.php?lesson_id=UN05" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>


<div class="panel panel-default">
      <div class="panel-heading">Create a blinking LED Wave</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
Blinking LED
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>




<div class="panel panel-default">
      <div class="panel-heading">Repeating with functions and for loop</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
In this project, we will use FOUR LEDs and will switch them on/off one by one creating a kind of wavelike light pattern which will help us know how to interface LEDs with Arduino.
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>


<div class="panel panel-default">
      <div class="panel-heading">Demonstrating PWM</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
Digital vs. Analog
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>




<div class="panel panel-default">
      <div class="panel-heading">Digital Input with Switch</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
PWM can be used to create the illusion of an LED being on at different levels of brightness by turning the LED on and off quickly, at around 500 cycles per second. 
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>



<div class="panel panel-default">
      <div class="panel-heading">Digital switch with transistor</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
In previous projects, we used digital I/O pins as outputs to turn LEDs on and off. We can use these same pins to accept input from users—such as detecting whether a push button has been pressed by a user. 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>



<div class="panel panel-default">
      <div class="panel-heading">The working of potentiometer</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 

A potentiometer is a simple knob that provides a variable resistance, which we can read into the Arduino board as an analog value. In this project, that value controls the rate at which an LED blinks.
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>



<div class="panel panel-default">
      <div class="panel-heading">Make some noise with piezo</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
A Piezo is nothing but an electronic device that can both be used to play tones and to detect tones. In our project  we are plugging the Piezo on the pin number 9, that supports the functionality of writing a PWM signal to it, and not just a plain HIGH or LOW value. We are taking advantage of the processors capability to produde PWM signals in order to play music.
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>













    <div class="panel panel-default">
      <div class="panel-heading">Functions, loops and serial display</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
Functions
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>





    <div class="panel panel-default">
      <div class="panel-heading">Feeling hot/cold? Create a quick read thermometer</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
     In this project, we will make a simple temperature sensor using one LM35 Precision Temperature Sensor and Arduino. The circuit will send serial information about the temperature that you can see on your computer with the help of Serial monitor.


 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>






    <div class="panel panel-default">
      <div class="panel-heading">The amazing photoresistor</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
In this experiment we are going to use a element called photoresistor. This sensor allows us to interact with the external environment, through intensity of light. The photoresistor is based on light resistance, it will sense the light and will allow the microcontroller in this case Arduino to react and change the intensity of Led Diode.
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>





    <div class="panel panel-default">
      <div class="panel-heading">Hands on on seven segment display</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 
LEDs are fun, but there are limits to the kinds of data that can be displayed with individual lights. In this section we’ll begin working with numeric digits in the form of seven-segment LED displays.The severn-segment display has seven LEDs arranged in the shape of number eight. </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>




   


    <div class="panel panel-default">
      <div class="panel-heading">DC Motor Control</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 

In this lesson, you will learn how to control a small DC motor using an Arduino and a transistor.
We will use of the circuit and code, we make in project 6, the only difference is that we will use a DC Motor instead of led and will power it up using the 9V Battery

 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>




 <div class="panel panel-default">
      <div class="panel-heading">DC motor speed control with potentiometer</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 

A potentiometer is a simple knob that provides a variable resistance, which we can read into the Arduino board as an analog value. In this project, that value controls the rate at which an LED blinks.
 
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>





 <div class="panel panel-default">
      <div class="panel-heading">Create a digital thermometer</div>
      <div class="panel-body"> 
      <div class="col-lg-10"> 

Create yourself
 </div>

<div class="col-lg-2">
      <a href="#" class="btn btn-info" role="button">Let's Begin</a> 
</div>

      </div>
    </div>








<?php


}


?>





</div>

</div>
      
</body>
</html>
