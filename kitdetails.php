<!DOCTYPE html>
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="styles/kitdetails/css/default.css" />
		<link rel="stylesheet" type="text/css" href="styles/kitdetails/css/component.css" />
		<script src="styles/kitdetails/js/modernizr.custom.js"></script>



<style>
* {
  box-sizing: border-box;
}



h1 {
  text-align: center;
}



table {
  width: 80%;
}

td,
th {
  text-align: center;
  border: solid 1px #ccc;
  font-size: 22px;
  padding: 6px;
  word-wrap: break-word;

}






th:first-child,
td:first-child {
  font-weight: bold;
  color: black;
  padding: 30px;
  background: #f1f1f1;

}

@media screen and (max-width: 768px) {
 
  tr {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
    -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
            justify-content: space-around;
  }
  td,
  th {
    display: block;
    width: 33.333333333333%;
    font-size: 20px;
  }
  th:first-child,
  td:first-child {
    background: #3860d8;
    width: 100%;
    color: #ffffff;

  }
  th:first-child {
    display: none;
  }
}




</style>
</head>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");



?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits | Kit details</title>
  <?php
  session_start();
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

      
    <br><br>
      <div class="main" style="border-style: solid; border-radius: 12px; " >
        <ul id="cbp-ntaccordion" class="cbp-ntaccordion">
          <li >
            <h3 class="cbp-nttrigger"><strong style="color: #0070FF; " >Elecduino</strong></h3>
            <div class="cbp-ntcontent"  >
              <p style="color: black; font-weight: 900; text-align: justify;  ">Want to begin in core electronics? </p>
              <p style="color: black; font-weight: 900; text-align: justify; ">For a beginner, we provide an ultimate kit to enhance his/her understanding about applied electronics. The kit will contain a set of  component from which you can a make a sample project. This kit will be accompanied by a a booklet explaining all the "how's" and "do's". To simplify your experience, we provide a flashdrive also that will have all the softwares and video required for the given project. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #0070FF; " >Why you should buy it ?</strong></h4>
                  <div class="cbp-ntcontent">
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Learning. Practice. Practicality.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">It's easier to blame the situation of electronics engineer in the country. But what's difficult is to get out of the situation and change it. We ask you to do this only. 
                    Our prices are very much affordable, and best in the market. Reading it for the first time you won't believe it. But we ask you to do a well-planned market research over this. Even your  college professor will sell you this at more price.</p>
                  </div>
                </li>
                
              </ul>
            </div>
          </li>
          <li>
            <h3 class="cbp-nttrigger"><strong style="color: #05ad40; ">Do it yourself.</strong></h3>
            <div class="cbp-ntcontent" >
              <p style="color: black; font-weight: 900; text-align: justify;  ">Interested in electronics. Want to make something to craft your imagination ? </p>
              <p style="color: black; font-weight: 900; text-align: justify; ">Do it yourself kits are basically a set of components packed together for a dedicated project. Over that, our kits will also have a flash drive containing all the softwares and explanatory videos. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #05ad40; " >Why you should buy it ?</strong></h4>
                  <div class="cbp-ntcontent">
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Connect. Run. Execute.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Buying a DIY kit saves your time exponentially and help you concentrate only on the project  rather than travelling all across the city just to get components that are not easy to find. The prices at which we sell DIY will eventually cost you the same if you add your travelling dues and components cost but still saves your time, which is priceless. If you're not impressed, we provide you cash on delivery.</p>
                  </div>
                </li>
                
              </ul>
            </div>
          </li>
          <li>
            <h3 class="cbp-nttrigger"><strong style="color: #ff4646; " >ReadyMade kit</strong></h3>
            <div class="cbp-ntcontent" >
              <p style="color: black; font-weight: 900; text-align: justify;  "> Need to submit a project ?</p>
              <p style="color: black; font-weight: 900; text-align: justify; ">ReadyMade project kits just follow a plug and play mechanism. With your project, we provide you a set of softwares and videos in a flash drive that could easily help you understand the concepts. </p>
              <ul class="cbp-ntsubaccordion">
                <li>
                  <h4 class="cbp-nttrigger"><strong style="color: #ff4646; " >Why you should buy it ?</strong></h4>
                  <div class="cbp-ntcontent">
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">Save time and efforts.</p>
                    <p  style="color: black; font-weight: 900; text-align: justify;  ">You don't have to travel across the shops in the other corners of the city. Get evry information on the comfort of a click. If something still bothering you about our product, we provide cash on delivery and return on failure.</p>
                </div> 
                </li>
                
              </ul>
            </div>
          </li>
        
        
        </ul>
      </div>
    
   


    <br>

<div class="container" style="text-align: center; " >
  
  <h3><strong style="color: black; " >Get the comparison</strong></h3>


</div>




   <!-- Table starts-->
<table style="margin-top:56px;font-family: 'Muli', sans-serif;" align="center">

  <thead>

    <tr>
      <th style="color:#ffffff;font-size:33px;text-align:center;background-color: #535882"> HARDWARE CHECKLIST &#x2714;</th>
      <th style="text-align:center;background-color: #E8E7E7 ">Elecduino (Beginner)</th>
      <th style="text-align:center;background-color: #E8E7E7 ">Do it Yourself Kit</th>
      <th style="text-align:center;background-color: #E8E7E7 ">ReadyMade Kit</th>
    </tr>
  </thead>
  <tbody style="
">
    <tr style="
">
      <td>A fully assembled &amp; tested PCB<br>
      <span style="font-size:12px;">
      Supplied in the kit to be used as a stand by, if the project assembled on plain PCB fails to work. It is supplied in DIY kit only and not supplied in project kit.</span>
      </td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/nhi.png"></td>
    </tr>
    <tr>
      <td>Plain PCB<br>
      <span style="font-size:12px;">
      Project can be assembled on this PCB with much ease,using the solderable components supplied.
      </span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
    </tr>
    <tr>
      <td>Zero Board<br>
      <span style="font-size:12px;">
      It is an additional board supplied which can be used in place of the plain PCB where one has to solder the wire connections undeneath as per the circuit.
      </span>
      </td>
      <td style="
"><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/nhi.png"></td>
    </tr>
    <tr>
      <td>A set of solderable components<br>
      <span style="font-size:12px;">
      All the components that are required to be soldered on plain PCB, i.e another set of loose components is supplied other than the ones already soldered on the fully asssembled & tested PCB.
      </span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
    </tr>


     <tr>
      <td>Pre-Programmed microcontroller<br>
      <span style="font-size:12px;">
      All categories of projects are supplied with pre-programmed microcontroller. It can be simply inserted into the socket for functioning.
      </span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
    </tr>
     <tr>
      <td>A set of detachable components<br>
      <span style="font-size:12px;">
      All the components that are detachable from the project. These are supplied one set only. Use them either for the fully assembled PCB or for your own assembly done on plain PCB. (eg: Microcontroller, Loads, LCD, other ICs etc.)
      </span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
    </tr>
     <tr>
      <td>Tool Kit<br>
      <span style="font-size:12px;">
      Multimeter, Screwdriver, Cutter & Soldering Iron supplied to assemble the project.</span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/nhi.png"></td>
    </tr>

     <tr>
      <td>Consumables &amp; Mechanical Hardware<br>
      <span style="font-size:12px;">
      Such as solder lead for soldering, flexible wire, heatsink, nut bolt, small mechanical fixtures etc. are also supplied.</span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/ha1.png"></td>
      <td><img src="images/ha1.png"></td>
    </tr>

    <!-- <tr>
      <td>Readymade project<br>
      <span style="font-size:12px;">
      Ready to use fully working project duly tested. Just plug in and it works.</span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/nhi.png"></td>
    </tr>-->






  </tbody>
</table>



<br>
<br>

   <!-- Table end-->



<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->






</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="styles/kitdetails/js/jquery.cbpNTAccordion.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpNTAccordion( [options] );
				- destroy:
				$( selector ).cbpNTAccordion( 'destroy' );
				*/

				$( '#cbp-ntaccordion' ).cbpNTAccordion();

			} );
		</script>


</html>

