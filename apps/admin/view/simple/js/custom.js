jQuery(document).ready(function($) {
	// Submenu rollover --------------------------------------------- //
	$("ul.sf-menu>li").hover(function() {
		$(this).children('a').stop().animate({marginTop:"20"}, 'fast');
	} , function() {
		$(this).children('a').stop().animate({marginTop:"0"}, 'fast');
	});

	$("ul.sf-menu>li>ul li, ul.nav-tabs").hover(function() { 
		// on rollover	
		$(this).children('a').children('span').stop().animate({ 
			marginLeft: "6" 
		}, "fast");
	} , function() { 
		// on out
		$(this).children('a').children('span').stop().animate({
			marginLeft: "0" 
		}, "fast");
	});
	
	// List post ---------------------------------------------------------- //
	$("#listpost tr.post-row").hover(function(){
		// highlight tags 
		$(this).addClass('list-post-highlight');
	}, function() {
		$(this).removeClass('list-post-highlight');
		
	});
	$("#listpost tr.post-row").click(function(){
		///////////////////////////////
	});

	// Sidebar rollover --------------------------------------------------- //

	$('#sidebar>li>ul>li').hover(function(){
		// over
		$(this).children('a').stop().animate({ marginLeft: "5"	}, "fast");
	} , function(){
		// out
		$(this).children('a').stop().animate({marginLeft: "0"}, "fast");
	});
	
	// tabs ------------------------------------------------------ //
	
	$("ul.tabs").tabs("div.panes > div", {effect: 'fade'});
});



