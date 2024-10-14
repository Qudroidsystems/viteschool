(function($) {
	
	"use strict";
    
    //Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(500).fadeOut(500);
		}
	}
    
    //Update Header Style + Scroll Top
	function headerStyle() {
		if($('#header').length){
			var windowpos = $(window).scrollTop();
			if (windowpos >= 1) {
				//$('#header').addClass('fixed-top-header');
				$('.scroll-to-top').fadeIn(300);
			} else {
				//$('#header').removeClass('fixed-top-header');
				$('.scroll-to-top').fadeOut(300);
			}
		}
	}
    
    
    /* ---------------------------------------------------- */
    /*	Main Navigation										*/
    /* ---------------------------------------------------- */
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp(500);
    });
    
    
    
    // Scroll to top
	if($('.scroll-to-top').length){
		$(".scroll-to-top").on('click', function() {
		   // animate
		   $('html, body').animate({
			   scrollTop: $('html, body').offset().top
			 }, 1000);
	
		});
	}
    
    // ------- Testimonial Slider ------- //
    if($('#testiminial-slider').length){
    $('#testiminial-slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true
    });
    }
    
    // ------- Team Slider ------- //
    if($('#team-slider').length){
    $('#team-slider').owlCarousel({
        items: 1,
        //center:true,
        loop: true,
        nav:true,
	    dots: false,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        navText:['',''],
        responsive:{
	        0:{ items:1},
	        320:{ items:1},
	        480:{ items:1},
	        640:{ items:2},
	        768:{ items:3},
	        800:{ items:3},
	        960:{ items:3},
	        991:{ items:3},
	        1024:{ items:4},
	        1199:{ items:4}
	    }
    });
    }
    
    // ------- Blog Slider ------- //
    if($('#blog-slider').length){
    $('#blog-slider').owlCarousel({
        items: 1,
        //center:true,
        loop: true,
        nav:true,
	    dots: false,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        navText:['',''],
        responsive:{
	        0:{ items:1},
	        320:{ items:1},
	        480:{ items:1},
	        640:{ items:1},
	        768:{ items:1},
	        800:{ items:1},
	        960:{ items:1},
	        991:{ items:1},
	        1024:{ items:1},
	        1199:{ items:1}
	    }
    });
    }
    
    // ------- Partner Slider ------- //
    if($('#partner-slider').length){
    $('#partner-slider').owlCarousel({
        items: 1,
        loop: true,
        //nav:false,
	    dots: false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        navText:['',''],
        responsive:{
	        0:{ items:1},
	        320:{ items:1},
	        480:{ items:1},
	        640:{ items:2},
	        768:{ items:3},
	        800:{ items:4},
	        960:{ items:5},
	        991:{ items:5},
	        1024:{ items:6},
	        1199:{ items:6}
	    }
    });
    }
              
    
	/* ---------------------------------------------------- */
    /*	 HoverItem (Image item, courses item etc)			*/
    /* ---------------------------------------------------- */
    if ($('#gallery-items').length) {
        $('#gallery-items').mixitup();
    }
    
    /* ---------------------------------------------------- */
    /*	Fancybox											*/
    /* ---------------------------------------------------- */
    (function () {
        if ($('.single-image').length) {
            var $images = $('.single-image');
            $images.each(function () {
                $(this).append('<span class="curtain"></span>');
            });
            // Single Image
            $images.filter('.plus-icon').fancybox({
                'titleShow': true
                , 'padding': '10'
                , 'transitionIn': 'fade'
                , 'transitionOut': 'fade'
                , 'easingIn': 'easeOutBack'
                , 'easingOut': 'easeInBack'
                , helpers: {
                    title: {
                        type: 'over'
                    }
                }
            });
        }
    }());
    
    
    
    
    /* ---------------------------------------------------- */
    /*	Tooltip Init										*/
    /* ---------------------------------------------------- */

	$('[data-toggle="tooltip"]').tooltip(); 
    
    /* ---------------------------------------------------- */
    /*	CountTo												*/
    /* ---------------------------------------------------- */
    if ($('.counter').length) {
            var counter = $('.counter');
		if (!Modernizr.touch) {	
                    counter.waypoint(function (direction) {
						if (direction == 'down') {
							counter.countTo();
						}
					}, { offset: '64%'});		
        } 
        else { counter.countTo();	}
    }
    
    
    
    
    /* ---------------------------------------------------- */
    /*	Layer Slider										*/
    /* ---------------------------------------------------- */
    if ($('#layerslider').length) {
    var touch = Modernizr.touch,
        windowHeight = !touch ? $(window).height() : '650px' || '600px';
    
    $("#layerslider").layerSlider({
                width : '100%',	
                height: windowHeight,
			    responsive: false,
			    responsiveUnder : 1130,
                sublayerContainer : 1130,
				autoStart : true,					// Boolean:  If true, slideshow will automatically start after loading the page. (true/false)
				pauseOnHover : true,				// Boolean: If ture, SlideShow will pause when you move the mouse pointer over the LayerSlider container. (true/false)
				firstLayer : 1,						// Integer:  LayerSlider will begin with this layer. (Positive Integer)
				animateFirstLayer : true,			// Boolean:  (true/false)
				randomSlideshow : false,			// Boolean:  (true/false)
				twoWaySlideshow : true,				// Boolean: If true, slideshow will go backwards if you click the prev button. (true/false)
				loops : 0,
				forceLoopNum : true,				// Boolean:  (true/false)
				autoPlayVideos : false,				// Boolean:  (true/false)
				autoPauseSlideshow : 'auto',
				keybNav : true,						 // Boolean: Keyboard navigation. You can navigate with the left and right arrow keys. (true/false)
				touchNav : true,					 // Boolean:  (true/false)
				skin : 'v5',						 // String: You can change the skin of the Slider. (name_of_the_skin) 
				skinsPath : 'js/layerslider/skins/', // String: You can change the default path of the skins folder. Note, that you must use the slash at the end of the path. (path_of_the_skins_folder/)
				showBarTimer : false,				 // Boolean:  (true/false)
				showCircleTimer : false,			 // Boolean:  (true/false)
				globalBGColor : 'transparent',			 // CSS Color Methods. Background color of LayerSlider. You can use all CSS methods, like hexa colors, rgb(r,g,b) method, color names, etc. Note, that background sublayers are covering the background. 
				navPrevNext : true,					 // Boolean: If false, Prev and Next buttons will be invisible. (true/false)
				navStartStop : false,				 // Boolean: If false, Start and Stop buttons will be invisible. (true/false)
				navButtons : true,					 // Boolean: If false, slide buttons will be invisible. (true/false)
				hoverPrevNext : true,				 // Boolean:  (true/false)
				hoverBottomNav : false,				 // Boolean:  (true/false)
				thumbnailNavigation : 'disabled',
				tnWidth : 100,
				tnHeight : 60,
				tnContainerWidth : '60%',
				tnActiveOpacity : 35,
				tnInactiveOpacity : 100		
                
    });
    }
    
    
    /* ---------------------------------------------------- */
    /*	Google Maps											*/
    /* ---------------------------------------------------- */
    if ($('.google_map').length) {
        $(".google_map").gMap({
            address: 'Bogra, Bangladesh',	
            markers: [
					{'address' : 'Bogra, Bangladesh'}		   // Street
				],
            zoom: 14,									   // 0 - 21	
            scrollwheel: false,							   // Boolean: true / false
            maptype : 'roadmap'	
	    });
    }
   
    /* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).on('ready', function() {
		headerStyle();
	});
    
    /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});
    
    /* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});
	


})(window.jQuery);