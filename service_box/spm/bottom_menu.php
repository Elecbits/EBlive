<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="public/js/modernizr.custom.js"></script>
	</head>
	<body class="cbp-spmenu-push">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow: scroll; background-color: white;">
			<h3  style=" background-color: white;color: black; "><strong>Categories</strong> <button id="showLeftPush1t">Close</button></h3>

<a href="services.php?readymade"  style=" background-color: white;color: black; "> Readymade Project </a> 
     <a href="services.php?diy"  style=" background-color: white;color: black; ">DIY Projects </a> 
    <a href="services.php?buy_components"  style=" background-color: white;color: black; ">Buy Components</a> 
    <a href="services.php?rent_project"  style=" background-color: white;color: black; ">Rent Projects</a>
    <a href="services.php?manufacture_project"  style=" background-color: white;color: black; "> Manufacture Project </a>
    <a href="services.php?sell_project"  style=" background-color: white;color: black; ">Sell a project</a>
    <a href="services.php?circuit_designing"  style=" background-color: white;color: black; "> Circuit Designing </a>
    <a href="services.php?documentation_project"  style=" background-color: white;color: black; "> Documentation of Projects </a>
    <a href="services.php?need_starter_kit"  style=" background-color: white;color: black; ">Need a starter Kit</a>
     <a href="services.php?software_project"  style=" background-color: white;color: black; "> Software projects </a>
    <a href="services.php?web_project"  style=" background-color: white;color: black; ">Web Projects</a>
     <a href="services.php?industrial_projects"  style=" background-color: white;color: black; "> Industrial Prototypes </a>
    <a href="services.php?android_projects"  style=" background-color: white;color: black; "> Android Projects </a>
    <a href="services.php?custom_order"  style=" background-color: white;color: black; ">Custom Orders </a>





			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
			<h3>Menu</h3>
			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-bottom" id="cbp-spmenu-s4">
			<h3>Menu</h3>
			
		</nav>
		<div class="col-lg-3">
			
			<div class="main">

			<section class="buttonset">
					
					<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
					
					<button id="showLeftPush">Categories</button>
					
				</section>
				<section>
					
					<!-- Class "cbp-spmenu-open" gets applied to menu -->
					
				</section>
				
			</div>
		</div>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="public/js/classie.js"></script>
		<script>

			var  
               showLeftPush1t = document.getElementById( 'showLeftPush1t' ),
			   showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
			      menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				
				body = document.body;

				showLeftPush1t.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush1t' );
			};

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};	

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
	</body>
</html>
