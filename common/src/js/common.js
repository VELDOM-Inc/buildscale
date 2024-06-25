import 'lazysizes';
const $ = require("jquery"),
SmoothScroll = require("smooth-scroll"),
isSP = function () {
	return $(".u-sm-max:visible").length != 0;
};

// Smoothscroll
$(function(){
    var headerHeight = 80;
    var speed = 800;
    var urlHash = location.hash;
    if(urlHash) {
        $('html,body').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop:position}, speed, 'swing');
        }, 500);
    }
    $('a[href*="#"]' + 'a:not(.non-scroll)').click(function() {
        var href= $(this).attr("href");
        var split = href.split('#');
        var target = $(split[1] == '' ? 'html' : "#" + split[1]);
        var position = target.offset().top - headerHeight;
        $('html,body').stop().animate({scrollTop:position}, speed, 'swing');   
    });
});

// PC・SP用 振り分け
const mediaQueryList = window.matchMedia("(max-width:768px)");
const listener = (event) => {
	if (event.matches) {
		// PC用（769px以上）を記載
	} else {
		// SP用（768px以下）を記載
	}
};
mediaQueryList.addEventListener("change", listener);
listener(mediaQueryList);

// SP header menu
$(function() {
	$('.l-header-menu').click(function() {
		$(this).toggleClass('_active_');
		$('body').toggleClass('_gnav-show_');
	});
	
	$('.l-gnav__item a[href*="#"],.l-gnav-btn a[href*="#"]').on('click', function(){
		$(".l-header-menu").removeClass('_active_');
		$("body").removeClass('_gnav-show_');
	});
});

// accordion
$(function() {
	$('.hoge').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('_active_');
	});
});

// gnavi PC
$(function() {
	var $win = $(window),
			$header = $('header'),
			animationClass = 'is-animation';

	$win.on('load scroll', function() {
		var value = $(this).scrollTop();
		if ( value > 100 ) {
			$header.addClass(animationClass);
		} else {
			$header.removeClass(animationClass);
		}
	});
});