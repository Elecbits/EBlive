<!DOCTYPE html>
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: white;
}

.container {
  max-width: 500px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 50px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: rgb(69, 114, 191);
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

.dob{
      width: 100%;
    height: 35px;
    color: #aaa;
    padding-left: 10px;
}
</style>
</head>
<body>
<div class="container"> 

<div style="padding-top: 40px; text-align: center; ">
 <img src="images/eb_new.png" style=" width: auto; height: 40px; "  >
</div>  
  <form id="contact" action="" method="post">


    <h3>Elecbits Employment Form</h3>
  
    <fieldset>
      <input placeholder="Your name" type="text"   name="name1"  required   autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email"   required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Mobile Number " type="tel" name="mn"  required>
    </fieldset>
    <fieldset>
         <input placeholder="Your Web Site (optional)" type="url" name="webs"  >
    </fieldset>


 <fieldset>
      <input placeholder="Your Experience (Months) " type="tel"  name="expm"  required>
    </fieldset>















    <fieldset>
      <textarea placeholder="Describe about your projects...."  name="proj" required></textarea>
    </fieldset>
   



 <fieldset>
      <input placeholder="Flat/House No... " type="text"  name="house" required>
    </fieldset>


 <fieldset>
      <input placeholder="Street Name " type="text"  name="street" required>
    </fieldset>


 <fieldset>
      <input placeholder="Area" type="text"  name="area" required>
    </fieldset>



 <fieldset>
     <select name="district" required>
                      <option selected="selected" >Your Location</option>
                      <option value="delhi">New Delhi</option>
                      <option value="noida">Noida</option>
                      <option value="Gurgaon">Gurgaon</option>
                      <option value="Ghaziabad">Ghaziabad</option>
                      <option value="NCR">Outside NCR</option>
                    </select>


    </fieldset>


<fieldset>
      <input placeholder="PIN CODE" type="text" name="pin"  required>
    </fieldset>



<br>



 <fieldset>
      <button name="submite" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>


  </form>
</div>
</body>
</html>






<?php
if (isset($_POST['submite'])) {
  
$name1 = $_POST['name1'];
$email = $_POST['email'];
$mobile_number = $_POST['mn'];
$experience = $_POST['expm'];
$proj = $_POST['proj'];
$house = $_POST['house'];
$street = $_POST['street'];
$area = $_POST['area'];
$district = $_POST['district'];
$pin = $_POST['pin'];



$msg = " $name1, $email, $mobile_number, $experience, $proj, $house, $street, $area, $district, $pin";


   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: employ_Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Project", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}






}

?>











