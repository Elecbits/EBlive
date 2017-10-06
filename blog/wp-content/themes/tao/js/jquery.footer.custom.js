/*-----------------------------------------------------------------------------------*/
/*	Custom Footer JS
/*-----------------------------------------------------------------------------------*/

(function($) {
	
	// Capture page elements
	var $contactContent = $('.contact-content'); 
	var $mainSearchForm = $('.main-search-form'); 
	var $menuExists = $('.menu-container').length;
	var $menuContainer = $('.menu-container');
	var $menuIndicator = $('.menu-indicator');
	var $pageContent = $('.contents');
	var $commentLinks = $('.comment-links');
	var isIE9 = $('html').hasClass('ie9');
	var isiOS = (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false);
	var mouseDetected = false;
	var hasTouch;
	
	
	/*-----------------------------------------------------------------------------------*/
	/*	Responsive Videos
	/*-----------------------------------------------------------------------------------*/
	
	$pageContent.fitVids(); 
 	
 	
 	/*-----------------------------------------------------------------------------------*/
	/*	Menu
	/*-----------------------------------------------------------------------------------*/
		
	if($menuExists) {
		
		// Setup the defaults for older browsers that do not support 3D transforms
		if(!Modernizr.csstransforms3d) {
			$menuContainer.css('left', '-260px');
			$pageContent.css({ 'position': 'relative', 'left': 0 });
		}
	
		function openMenu() {		
			if(!$('body').hasClass('meny-active')) {
				$menuContainer.css('opacity', 1);
				$('body').addClass('meny-active');
				
				if(Modernizr.csstransforms3d) {
					$('body').addClass('css3d');
					window.scrollTo(0, 0); // Reset the position of the global scroll
				}
				else {
					$menuContainer.animate({ left: 0 }, 500, 'easeOutQuart');
					$pageContent.animate({ left: '260px' }, 500, 'easeOutQuart');
				}	
			}
		}
		
		function closeMenu() {			
			if($('body').hasClass('meny-active')) {
				$('body').removeClass('meny-active');
				
				if(Modernizr.csstransforms3d) {
					$('body').removeClass('css3d');
				}
				else {
					$menuContainer.animate({ left: '-260px' }, 500, 'easeOutQuart');
					$pageContent.animate({ left: 0 }, 500, 'easeOutQuart');
				}	
			}
		} 
					
		function onMouseMove(e) {
			$(this).unbind('mousemove');
			mouseDetected = true;
			// initializeMouseBehavior();	
		}
		
		$(document).mousemove(onMouseMove);
		
		$menuIndicator.mouseover(function() {
			openMenu();	
		});
		
		$pageContent.mouseover(function() {
			closeMenu();	
		});
		
		// Disable mouseover in iOS
		if(isiOS) {
			$('.menu-indicator, .contents').off('mouseover');
		}
		
		// Disable mouseover/hover when touch is discovered, to prevent the menu from opening automatically on mobile devices
		window.addEventListener('touchstart', function () {
		    hasTouch = true;
		    $('.menu-indicator, .contents').off('mouseover');
		}, false);
		
		Hammer('.menu-indicator').on('tap click', function() {
			openMenu();
		});		
		
		Hammer('.alt-menu-trigger').on('click', function(e) {
			e.stopPropagation();
			
			if($('body').hasClass('meny-active')) {
				closeMenu();
			}
			else {
            	openMenu();			
			} 
		});
		
		Hammer('.contents').on('tap', function() {
			closeMenu();
		});
		
		Hammer('body, html, .contents').on('swipeleft', function() {
			closeMenu();
		});
		
		Hammer('.contents').on('swiperight', function() {
			openMenu();	
		});
		
	} // end if
	
	// iOS moves the position of the global scroll, whenever an input element is focused on, so move that to default on input blur
	$('input, textarea').on('blur', function() {
	    window.scrollTo(0, 0);
	});
		
	
	/*-----------------------------------------------------------------------------------*/
	/*	Init Click Handlers for Buttons in the Header
	/*-----------------------------------------------------------------------------------*/
	
	$('.search-icon').click(function() {	
		$mainSearchForm.toggleClass('search-active');
		
		if($mainSearchForm.hasClass('search-active')) {
			$mainSearchForm.find('input').trigger('focus');
		}
		else {
			$mainSearchForm.find('input').blur();
		}
	});
	
	$('.close-search').click(function() {
		$lightbox.transition({ opacity: 0, y: '0' }, 350, 'ease', function () { $(this).hide(); });
		$lightbox.find('input').transition({ opacity: 0, y: '-15px' }, 700, 'ease');
		$lightbox.find('.close-search').transition({ opacity: 0, y: '-15px', rotate: '0deg' }, 700, 'ease');
	});
	
	$('.contact-icon').click(function() {
		$contactContent.toggleClass('contact-active');
		
		if($contactContent.hasClass('contact-active')) {
			// Show
			$contactContent.show();
			$contactContent.transition({ opacity: 1, y: '15px' }, 400, 'ease');
		}
		else {
			// Hide
		    $contactContent.transition({ opacity: 0, y: '0' }, 350, 'ease', function () { $(this).hide(); });
		}
		
	});
	
	$('.close-contact').click(function() {
		$contactContent.removeClass('contact-active');
		$contactContent.transition({ opacity: 0, y: '0' }, 350, 'ease', function () { $(this).hide(); });
	});
	
	
	/*-----------------------------------------------------------------------------------*/
	/*	Comment Form Placeholders for IE8
	/*-----------------------------------------------------------------------------------*/
	
	if (isIE9) {
		
		var authorPlaceholder = $('#commentform #author').attr('placeholder');
		var emailPlaceholder = $('#commentform #email').attr('placeholder');
		var urlPlaceholder = $('#commentform #url').attr('placeholder');
		var commentPlaceholder = $('#commentform #comment').attr('placeholder');		
				
		$('#commentform #author').val(authorPlaceholder);
		$('#commentform #email').val(emailPlaceholder);
		$('#commentform #url').val(urlPlaceholder);
		$('#commentform #comment').val(commentPlaceholder);
		
		$('#commentform input, #commentform textarea').focus(function() {
			if($(this).attr('id') == 'author') {
				if ($(this).val() == authorPlaceholder) { $(this).val(''); }
			}
			else if($(this).attr('id') == 'email') {
				if ($(this).val() == emailPlaceholder) { $(this).val(''); }
			}
			else if($(this).attr('id') == 'url') {
				if ($(this).val() == urlPlaceholder) { $(this).val(''); }
			}
			else if($(this).attr('id') == 'comment') {
				if ($(this).val() == commentPlaceholder) { $(this).val(''); }
			}
		});
		
		$('#commentform input, #commentform textarea').blur(function() {
			if($(this).attr('id') == 'author') {
				if ($(this).val() == '') { $(this).val(authorPlaceholder); }
			}		
			else if($(this).attr('id') == 'email') {
				if ($(this).val() == '') { $(this).val(emailPlaceholder); }
			}
			else if($(this).attr('id') == 'url') {
				if ($(this).val() == '') { $(this).val(urlPlaceholder); }
			}
			else if($(this).attr('id') == 'comment') {
				if ($(this).val() == '') { $(this).val(commentPlaceholder); }
			}
		});
	
	}
	
	
	/*-----------------------------------------------------------------------------------*/
	/*	Responsive Tables
	/*-----------------------------------------------------------------------------------*/
	
	$('.the-content table').addClass('responsive');
	
	var switched = false;
  	var updateTables = function() {
	    if (($(window).width() < 767) && !switched ){
	    	switched = true;
	      	$("table.responsive").each(function(i, element) {
	        	splitTable($(element));
	      	});
	      	return true;
	    }
	    else if (switched && ($(window).width() > 767)) {
	      	switched = false;
	      	$("table.responsive").each(function(i, element) {
	        	unsplitTable($(element));
	      	});
	    }
  	};
   
  	$(window).load(updateTables);
  	$(window).bind("resize", updateTables);
   
	function splitTable(original) {
		original.wrap("<div class='table-wrap' />");
		
		var copy = original.clone();
		copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
		copy.removeClass("responsive");
		
		original.closest(".table-wrap").append(copy);
		copy.wrap("<div class='pinned' />");
		original.wrap("<div class='scrollable' />");
	}
	
	function unsplitTable(original) {
    	original.closest(".table-wrap").find(".pinned").remove();
    	original.unwrap();
   	 	original.unwrap();
	}
	
	
})( jQuery );


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );
