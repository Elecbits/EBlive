<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>



<style type="text/css">

  /* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>


  

<script type="text/javascript">
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>


</head>
<body  >

<!-- SideNav slide-out button -->
<div id="mySidenav" class="sidenav" style="color: white">
  
 <table class="table" >

   <tr>
    
     &nbsp  <a  style="font-size: 18px;" href="javascript:void(0)"  onclick="closeNav()">Choose your service (&times;)</a>
   
  </tr>
 
  <tr>
    <td> <a  style="font-size: 16px;" href="services.php?readymade"> Readymade Project </a> </td>
   
  </tr>
  <tr>
    <td> <a  style="font-size: 16px;" href="services.php?diy">DIY Projects </a> </td>
  
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?buy_components">Buy Components</a> </td>
   
  </tr>
  <tr>
    <td><a  style="font-size: 16px;"  href="services.php?rent_project">Rent Projects</a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?manufacture_project"> Manufacture Project </a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?sell_project">Sell a project</a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?circuit_designing"> Circuit Designing </a></td>
   
  </tr>

<tr>
    <td><a style="font-size: 16px;"  href="services.php?documentation_project"> Documentation of Projects </a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?need_starter_kit">Need a starter Kit</a></td>
   
  </tr>
  <tr>
    <td> <a style="font-size: 16px;"  href="services.php?software_project"> Software projects </a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?web_project">Web Projects</a></td>
   
  </tr>
  <tr>
    <td> <a style="font-size: 16px;"  href="services.php?industrial_projects"> Industrial Prototypes </a></td>
   
  </tr>
  <tr>
    <td><a style="font-size: 16px;"  href="services.php?android_projects"> Android Projects </a></td>
   
  </tr>

   <tr>
    <td><a  style="font-size: 16px;"  href="services.php?custom_order">Custom Orders </a></td>
   
  </tr>

</table>




 
</div>
<div style="padding: 0px 0px 0px 100px;">
<!-- Use any element to open the sidenav -->
<button onclick="openNav()" type="button" class="btn btn-success"> Choose Services</button>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

</body>
</html>