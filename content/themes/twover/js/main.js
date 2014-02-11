$.preloadImages = function()
{
   for(var i = 0; i<arguments.length; i++)
   {
        $("<img />").attr("src", arguments[i]);
   }
}

// To top
function ypCore_gotop() {
	var i = Math.random();  i = Math.round(i * 10 / 2);
	if (i < 2)  $('body').animatescroll({easing:'easeInBounce', scrollSpeed:2000, padding:0});
	else if (i < 4) $('body').animatescroll({easing:'easeOutBounce', scrollSpeed:2000, padding:0});
	else $('body').animatescroll({easing:'easeInOutBounce', scrollSpeed:2000, padding:0});
}

function ypCore_goto(e) {
	$(e).animatescroll({easing:'easeInElastic', scrollSpeed:2000, padding:0});
}

function ypCore_helpPanel() {
	 $('#help-popup').popover({
		title: 'Help',
		animation: true,
		placement: 'left',
		trigger: 'hover',
		html: true,
	 });
}
// document ready function
$(document).ready(function() {
	//******************** Tools tip ******************//
	$('.yp-tooltip').tooltip();

	//******************** Help ******************//
	ypCore_helpPanel();

	//******************** Dropdown ******************//
	$('.nav .dropdown-toggle').dropdown()
	
	
	//******************** Back to top ******************//
	// hide #back-top
	$("#back-top").hide();
	
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			ypCore_gotop();
		});
		
	});
		// Shortcut 
		//    16: Shift
		//    17: Ctrl
		//    18: Alt
		document.addEventListener("keydown", function(e){
			if (e.keyCode == 18) { // 18: Alt --------- 
				document.addEventListener("keydown", function(sub_e){
					if (sub_e.keyCode == 84) {
						ypCore_gotop(); // Alt + 't'
						return ;
					}
					
				});
			}
		}, false);

	//******************** Misc ******************//

	//css animation for links
	$('.links').addClass('animated fadeInDown');

	//css animation for box icons
	$('.box').hover(function(){
		$(this).find('.center.i').addClass('animated swing');
	},function(){
		$(this).find('.center.i').removeClass('animated swing');
	});

	//css animation for service icons
	$('#services .span3').hover(function(){
		$(this).find('i').addClass('animated swing');
	},function(){
		$(this).find('i').removeClass('animated swing');
	});

	//error page animation
	$('.close').click(function(){
		$(this).parent().fadeOut();
	});

});