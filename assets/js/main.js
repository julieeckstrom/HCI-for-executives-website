Date.prototype.getWeek = function() {
	      var onejan = new Date(this.getFullYear(),0,1);
	      var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
	      var dayOfYear = ((today - onejan +1)/86400000);
	      return Math.ceil(dayOfYear/7)
	    };

function getURL() {
	var path = window.location.pathname;
	var loc = path.substring(path.lastIndexOf('/')+1);
	var url = $(this).attr('href');

	return url;
}

$(document).ready(function() {

	$('#homework-thumbs').click(function(){
		if($('#homework-thumbs-title').is(":visible")) {
			if($('#homework-thumbs li').is(":hidden")) {
				$('#homework-thumbs li').css('display', 'block');
			} else {
				$('#homework-thumbs li').css('display', 'none');
			}
		}
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


	$(window).scroll(function() {
		var window_top = $(window).scrollTop();
		var width = window.innerWidth;

		var today = new Date();
		var currentWeek = today.getWeek();
		console.log(currentWeek);

		$('#today-button a').attr('href', '#' + currentWeek);

		var currentWeekDiv;
		var pageTopToDivBottom;
		var scrolledPlusViewable;
		if(getURL() = "schedule.html")
			if(currentWeek > 41 && currentWeek < 52) {
				$('#today').css("visibility", "visible");
				currentWeekDiv = $('#' + currentWeek);
				pageTopToDivBottom  = $('#' + currentWeek).offset().top + $('#' + currentWeek)[0].scrollHeight;
				scrolledPlusViewable = $(window).scrollTop()+$(window).height();

				// First check if the element is outside the viewable area:
				if( $(window).scrollTop() > pageTopToDivBottom ) {
				    // Above 
				    $('#today-button').removeClass('onWeek');
				    $('#today-button').removeClass('left');
				    $('#today-button').removeClass('down');
					$('#today-button').addClass('offWeek');
					$('#today-button').addClass('up');

				} else if( scrolledPlusViewable < currentWeekDiv.offset().top ) {
				    // Below
				    $('#today-button').removeClass('onWeek');
				    $('#today-button').removeClass('up');
				    $('#today-button').removeClass('left');
					$('#today-button').addClass('offWeek');
					$('#today-button').addClass('down');

				} else {
					// Next to
				    $('#today-button').removeClass('offWeek');
				    $('#today-button').removeClass('up');
				    $('#today-button').removeClass('down');
					$('#today-button').addClass('onWeek');
					$('#today-button').addClass('left');
				}
			}
		}
	});

});