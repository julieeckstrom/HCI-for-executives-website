Date.prototype.getWeek = function() {
	      var onejan = new Date(this.getFullYear(),0,1);
	      var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
	      var dayOfYear = ((today - onejan +1)/86400000);
	      return Math.ceil(dayOfYear/7)
	    };

$(document).ready(function() {

	$('#homework-thumbs').click(function(){
		$('#homework-thumbs li').css('display', 'block');
	});

	$('#homework-thumbs li').click(function(){
		console.log("here");
		$('#homework-thumbs li').css('display', 'none');
	});

	$('#main_nav li a').each(function(){
		var path = window.location.pathname;
		var loc = path.substring(path.lastIndexOf('/')+1);
		var url = $(this).attr('href');

		if(loc == url){
			$(this).addClass('on');
		};
	});

	// handles the carousel thumbnails
	$('.carousel-thumb').click( function(){
	    var id_selector = $(this).attr("id");
	    var id = id_selector.substr(id_selector.length -1);
	    id = parseInt(id);
	    $('#homework-carousel').carousel(id);
	    $('[id^=carousel-selector-]').removeClass('selected');
	    $(this).addClass('selected');
	});

/*
	$(window).scroll(function() {
	var window_top = $(window).scrollTop();
	var width = window.innerWidth;

	var today = new Date();
	var currentWeek = today.getWeek();

	var currentWeekDiv = $('#' + currentWeek);
	var pageTopToDivBottom   = $('#' + currentWeek).offset().top + $('#' + currentWeek)[0].scrollHeight;
	var scrolledPlusViewable = $(window).scrollTop()+$(window).height();

	// First check if the element is outside the viewable area:
	if( $(window).scrollTop() > pageTopToDivBottom ) {
	    console.log( "Element hidden (above viewable area)" );
	    $('#arrow').removeClass('pointDown');
	    $('#arrow').removeClass('pointRight');
	    $('#arrow').addClass('pointUp');

	} else if( scrolledPlusViewable < currentWeekDiv.offset().top ) {
	    console.log( "Element hidden (below viewable area)" );
	    $('#arrow').removeClass('pointUp');
	    $('#arrow').removeClass('pointRight');
		$('#arrow').addClass('pointDown');

	} else {
	    console.log( "Element visible! (within viewable area)" );
	    $('#arrow').removeClass('pointUp');
	    $('#arrow').removeClass('pointDown');
		$('#arrow').addClass('pointRight');
	}

    if ($('#days').length) {
        var days_div_top = $('#days').height();
        if (window_top > days_div_top) {
            $('#days').addClass('stick-days');
            $('#days').addClass('days-moving');
            $('#days-placeholder').css({display: 'block'});
        } else {
            $('#days').removeClass('stick-days');
            $('#days').removeClass('days-moving');
            $('#days-placeholder').css({display: 'none'});
        	}
    	}
    });
*/
});