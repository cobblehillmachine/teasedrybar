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
	centerCircle();
	//fadeoutCircle();
	detectIphone();
	detectIpad();
	$('.styles-menu').fadeIn('slow');
	$('.bgimg').fadeIn('slow');
	$('#home-circle').delay(3000).fadeOut('slow');
	
	$('#mobile-tab').toggle(function(){
		$('.small-cont').slideToggle('slow');
		$('#mobile-tab').css({'background-position-y': -31 +'px'});
	},
	function(){
		$('.small-cont').slideToggle('slow');
		$('#mobile-tab').css({'background-position-y': 0 +'%'});
	});
	$('#call_for_credit p:first-child').html('DOLLAR AMOUNT');
	$('#gifts .woocommerce-message .button').html('view cart');
	$('.woocommerce-message .button').before('<div class="close" onclick="closeMessage();">X</div>');
	$('select option:first-child').each(function() {
		$(this).html('');
	});
	$('input[type="radio"]').each(function() {
		$(this).click(function() {
			headerHeight();
		});
	});
	homeTagline();
	bridalSlider();
});

$(window).resize(function() {
	fullScreen();
	headerHeight();
	centerItem();
	centerCircle();
	homeTagline();
	bridalSlider();
	
});

$(window).load(function() {
	headerHeight();
	bridalSlider();
	
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

function closeMessage() {
	$('.woocommerce-message').fadeOut('slow');
}

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
$('.home .cycloneslider-slide, .home .cycloneslider-slides, .single .cycloneslider-slide, .single .cycloneslider-slides').css({'height':windowHeight});
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
  var newW = (windowWidth/2) - 139;
  $('.big-circle').css({'left': (w/2) - 139 , 'top':(windowHeight/2) -139}); 
	$('#home-tagline').css({'left': newW}); 
	if(windowWidth < 770){
		$('.big-circle').css('left', 80);
	}
}

function fadeoutCircle() {
	$('.cycloneslider-prev').click(function(){$('.big-circle').fadeOut();});
	$('.cycloneslider-next').click(function(){$('.big-circle').fadeOut();});
}	

function homeTagline() {
	// var W = $('#home .vegas-background').width();
	// var realW = W -280;
	// $('#home-tagline').css({'width': realW});
}

function bridalSlider() {
	// $('#bridal .cycloneslider img').each(function() {
	// 	var imgH = $(this).height();
	// 	$('#bridal .cycloneslider-slide').css({'height': imgH});
	// 	$('#bridal .cycloneslider-slides').css({'height': imgH});
	// });
}