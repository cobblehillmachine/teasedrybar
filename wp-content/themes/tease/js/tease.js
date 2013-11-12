var currentUrl = window.location.pathname;

$(document).ready(function() {
	$('.emma-form-label-required').remove();
	headerHeight();
	fullScreen();
	$('.emma-form-label').addClass('input-label');
	$('.emma-form-label').html('EMAIL');
	$('img[title]').each(function() { $(this).removeAttr('title'); });
	//$('').each(function() { $(this).str.replace('p' , 'div'); });
	$('.single-text p').replaceWith(function(){
	    return $("<div />").append($(this).contents());
	});
	centerItem();
	currentHeaderLinks();
	centerCircle();
	//fadeoutCircle();
	detectIphone();
	detectIpad();
	$('.styles-menu').fadeIn('slow');
	$('.bgimg').fadeIn('slow');
	$('#home-circle').delay(3000).fadeOut('slow');
	
	$('#mobile-tab').toggle(function(){
		$('.small-cont').slideToggle('slow');
		$('#mobile-tab').css({'background-position-y': 100 +'%'});
		$('#about-link').css('margin-top' , 50);
	},
	function(){
		$('.small-cont').slideToggle('slow');
		$('#mobile-tab').css({'background-position-y': 0 +'%'});
		$('#about-link').css('margin-top' , 50);
	});
});

$(window).resize(function() {
	fullScreen();
	headerHeight();
	centerItem();
	centerCircle();
	
});

$(window).load(function() {
	headerHeight();
	
});

$(document).keydown(function(e){
	if (e.keyCode == 39) { 
	       $('div.cycloneslider-next').trigger('click');
		   // $('.big-circle').fadeOut();	
	    }

	    else if (e.keyCode == 37) {
	         $('div.cycloneslider-prev').trigger('click');
	         // $('.big-circle').fadeOut();
	    }
});



function fullScreen(){
	var FullscreenrOptions = { width: 1280, height: 1024, bgID: '.bgimg' };
	jQuery.fn.fullscreenr(FullscreenrOptions);
}

function headerHeight(){
	var header = $('#header'),
	headerHeight = $('#header').height();
	windowHeight = $(document).height();
	winH = $(window).height();
header.css({'height':windowHeight});
$('.wrapper').css({'height':windowHeight});
$('.cycloneslider-slide, .cycloneslider-slides').css({'height':windowHeight});
	// if(winH >= 850){
	// 	$('body').css('overflow', 'hidden');
	// } else if 	(winH < 850){
	// 		$('body').css('overflow-y', 'auto');
	// 	}
}

function detectIphone() {
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
		
		$('#styles-circle').css('display', 'block');	
	}
	else {
		$('#styles-circle').fadeIn('slow');
		$('#styles-circle').delay(3000).fadeOut('slow');
	}
		
}

function detectIpad() {
	if((navigator.userAgent.match(/iPad/i))) {		
		$('.styles-menu').remove();
		$('#home-circle').css('display' , 'none');
	}
		
}

function centerItem(){  
  // contWidth = $('.styles-page').width();
  winW = $(window).width();
  contW = winW - 280;
  // var w = contWidth - 175;
  $('.styles-menu').css({'margin-left': (contW/2) - 139});   
	if(winW < 770){
		$('.styles-menu').css('margin-left', 80);
	}
}

function currentHeaderLinks() {
	if(currentUrl == '/about/'){$("#about-link").css('color', '#191919');}
	else if(currentUrl == '/menu/'){$("#menu-link").css('color', '#191919');}
	else if(currentUrl == '/gift-certificates/'){$("#gifts-link").css('color', '#191919');}
	else if(currentUrl == '/groups-and-events/'){$("#groups-link").css('color', '#191919');}
	else if(currentUrl == '/news/'){$("#news-link").css('color', '#191919');}
	else if(currentUrl == '/contact/'){$("#contact-link").css('color', '#191919');}
	// else if(currentUrl == '/main-styles/tease/'){$("#menu-link").css('color', '#191919');}
}

$('#select-style').live({
	mouseenter: function(){$('.styles-menu-link').css('display', 'block')}
	// mouseleave: function(){$('.styles-menu-link').css('display', 'none')}
});

$('.styles-menu').live({
	mouseleave: function(){$('.styles-menu-link').css('display', 'none')}
});

function centerCircle(){  
  windowWidth = $(window).width();
  windowHeight = $(window).height();
  var w = windowWidth - 280;
  $('.big-circle').css({'left': (w/2) - 139 , 'top':(windowHeight/2) -139});   
	if(windowWidth < 770){
		$('.big-circle').css('left', 80);
	}
}

function fadeoutCircle() {
	$('.cycloneslider-prev').click(function(){$('.big-circle').fadeOut();});
	$('.cycloneslider-next').click(function(){$('.big-circle').fadeOut();});
}	

