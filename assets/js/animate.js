// JavaScript Document

$(document).ready(function(){
	
	<!--Smooth Scrolling code from "http://www.paulund.co.uk/smooth-scroll-to-internal-links-with-jquery"-->
	
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	

});