<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
.logo{
      width: 150px;
    margin: 14px 44px;
}
.sidebar-h1{
  font-family: 'Roboto',sans-serif;
    color: white;
    margin-top: -4px;
    text-align: center;
    font-size: 28px;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.sidebar-h3{
  color: white;
  margin: 16px;
  font-size: 16px;
}
.w3-button{
  color: white;
}
</style>
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" style="width:240px;background: linear-gradient(#185694, rgb(41, 132, 224));" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <img src="transymbol.png" class="logo">
  <h1 class="sidebar-h1">Elecduino</h1>
  <h3 class="sidebar-h3">Learning Panel</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-main" style="margin-left:240px">
<div class="w3-teal" style="background-color:#0071cc!important;">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Getting Started</h1>
  </div>
</div>

<div class="w3-container">
<div class="panel panel-default" style="margin-top:19px">
 <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dXmv1DfoXd8" frameborder="10" allowfullscreen></iframe>
</div>
</div>
<h3>Responsive Sidebar</h3>
<p>The sidebar in this example will always be displayed on screens wider than 992px, and hidden on tablets or mobile phones (screens less than 993px wide).</p>
<p>On tablets and mobile phones the sidebar is replaced with a menu icon to open the sidebar.</p>
<p>The sidebar will overlay of the page content.</p>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>

<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>
<p><b>Resize the browser window to see how it works.</b></p><br>




</div>
   
</div>


<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
