function ypCore_deletepost(l) {alert(l);
		$.confirm({
			'title'		: 'Delete Confirmation',
			'message'	: 'You are about to delete this post. <br />It cannot be restored at a later time! Continue?',
			'buttons'	: {
				'Yes'	: {
					'class'	: 'blue',
					'action': function(){
						windown.location = l;
						return true;
					}
				},
				'No'	: {
					'class'	: 'gray',
					'action': function(){
						return false;
					}
				}
			}
		});
		
	});
}

// Jquery with no conflict
jQuery(document).ready(function($) {

    // Poshytips Forms ------------------------------------------------------ //
    
    $('.form-poshytip').poshytip({
		className: 'tip-yellowsimple',
		showOn: 'focus',
		alignTo: 'target',
		alignX: 'right',
		alignY: 'center',
		offsetX: 5
	});
	
	// Superfish menu ------------------------------------------------------ //
	
	$("ul.sf-menu").superfish({ 
        animation: {height:'show'},   // slide-down effect without fade-in 
        delay:     800 ,              // 1.2 second delay on mouseout 
        autoArrows:  false
    });

	// Submenu rollover --------------------------------------------- //
	
	$("ul.sf-menu>li>ul li").hover(function() { 
		// on rollover	
		$(this).children('a').children('span').stop().animate({ 
			marginLeft: "3" 
		}, "fast");
	} , function() { 
		// on out
		$(this).children('a').children('span').stop().animate({
			marginLeft: "0" 
		}, "fast");
	});

	// tabs ------------------------------------------------------ //
	
	$("ul.tabs").tabs("div.panes > div", {effect: 'fade'});
	
	// Thumbs rollover --------------------------------------------- //
	
	$('.thumbs-rollover li a img').hover(function(){
		// on rollover
		$(this).stop().animate({ 
			opacity: "0.5" 
		}, "fast");
	} , function() { 
		// on out
		$(this).stop().animate({
			opacity: "1" 
		}, "fast");
	});
		
	
	// Blog posts rollover --------------------------------------------- //
	
	$('#posts .post').hover(function(){
		// on rollover
		$(this).children('.thumb-shadow').children('.post-thumbnail').children(".cover").stop().animate({ 
			left: "312"
		}, "fast");
	} , function() { 
		// on out
		$(this).children('.thumb-shadow').children('.post-thumbnail').children(".cover").stop().animate({
			left: "0" 
		}, "fast");
	});
	
	// Portfolio projects rollover --------------------------------------------- //
	
	$('#projects-list .project').hover(function(){
		// on rollover
		$(this).children('.project-shadow').children('.project-thumbnail').children(".cover").stop().animate({ 
			top: "133"
		}, "fast");
	} , function() { 
		// on out
		$(this).children('.project-shadow').children('.project-thumbnail').children(".cover").stop().animate({
			top: "0" 
		}, "fast");
	});
	
	// Sidebar rollover --------------------------------------------------- //

	$('#sidebar>li>ul>li').hover(function(){
		// over
		$(this).children('a').stop().animate({ marginLeft: "5"	}, "fast");
	} , function(){
		// out
		$(this).children('a').stop().animate({marginLeft: "0"}, "fast");
	});
	
	// Fancybox --------------------------------------------------- //
	
	$("a.fancybox").fancybox({ 
		'overlayColor':	'#000'
	});
	
	// pretty photo  ------------------------------------------------------ //
	
	$("a[rel^='prettyPhoto']").prettyPhoto();


	// Project gallery over --------------------------------------------- //
	
	$('.project-gallery li a img').hover(function(){
		// on rollover
		$(this).stop().animate({ 
			opacity: "0.5" 
		}, "fast");
	} , function() { 
		// on out
		$(this).stop().animate({
			opacity: "1" 
		}, "fast");
	});
	
	
	// Thumbs functions ------------------------------------------------------ //
	
	function thumbsFunctions(){
	
		// prettyphoto
		
		$("a[rel^='prettyPhoto']").prettyPhoto();
						
		// Fancy box
		$("a.fancybox").fancybox({ 
			'overlayColor'		:	'#000'
		});
		
		// Gallery over 
	
		$('.gallery li a img').hover(function(){
			// on rollover
			$(this).stop().animate({ 
				opacity: "0.5" 
			}, "fast");
		} , function() { 
			// on out
			$(this).stop().animate({
				opacity: "1" 
			}, "fast");
		});
		
		// tips
		
		$('.gallery a').poshytip({
	    	className: 'tip-twitter',
			showTimeout: 1,
			alignTo: 'target',
			alignX: 'center',
			offsetY: -15,
			allowTipHover: false
	    });
		
	}
	// init
	thumbsFunctions();
	
	// Filtering using isotope -----------------------------------------------------------//
	
	var $container = $('#portfolio-list');
	
	$container.imagesLoaded( function(){
		$container.isotope({
			itemSelector : 'li',
			filter: '*',
			animationEngine: 'jquery'
		});
	});
	
	// filter buttons
		
	$('#portfolio-filter a').click(function(){
	
		// select current
		var $optionSet = $(this).parents('#portfolio-filter');
	    $optionSet.find('.selected').removeClass('selected');
	    $(this).parent().addClass('selected');
    
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
		
	// UI Accordion ------------------------------------------------------ //
	
	$( ".accordion" ).accordion();
	
	// Toggle box ------------------------------------------------------ //
	
	$(".toggle-container").hide(); 
	$(".toggle-trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false;
	});
	
	// Footer menu rollover --------------------------------------------------- //

	$('#footer .col .page_item').hover(function(){
		// over
		$(this).children('a').stop().animate({ marginLeft: "5"	}, "fast");
	} , function(){
		// out
		$(this).children('a').stop().animate({marginLeft: "0"}, "fast");
	});
		
//close			
});
	
// search clearance	
function defaultInput(target){
	if((target).value == 'Search...'){(target).value=''}
}

function clearInput(target){
	if((target).value == ''){(target).value='Search...'}
}



