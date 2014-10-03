Date.prototype.getWeek = function() {
	      var onejan = new Date(this.getFullYear(),0,1);
	      var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
	      var dayOfYear = ((today - onejan +1)/86400000);
	      return Math.ceil(dayOfYear/7)
	    };

$(document).ready(function() {

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