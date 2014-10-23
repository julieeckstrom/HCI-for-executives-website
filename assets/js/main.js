function getWeek (getdate) { 
    var a, b, c, d, e, f, g, n, s, w; 
     
    $y = getdate.getFullYear(); 
    $m = getdate.getMonth() + 1; 
    $d = getdate.getDate(); 

    if ($m <= 2) { 
        a = $y - 1; 
        b = (a / 4 | 0) - (a / 100 | 0) + (a / 400 | 0); 
        c = ((a - 1) / 4 | 0) - ((a - 1) / 100 | 0) + ((a - 1) / 400 | 0); 
        s = b - c; 
        e = 0; 
        f = $d - 1 + (31 * ($m - 1)); 
    } else { 
        a = $y; 
        b = (a / 4 | 0) - (a / 100 | 0) + (a / 400 | 0); 
        c = ((a - 1) / 4 | 0) - ((a - 1) / 100 | 0) + ((a - 1) / 400 | 0); 
        s = b - c; 
        e = s + 1; 
        f = $d + ((153 * ($m - 3) + 2) / 5) + 58 + s; 
    } 
     
    g = (a + b) % 7; 
    d = (f + g - e) % 7; 
    n = (f + 3 - d) | 0; 

    if (n < 0) { 
        w = 53 - ((g - s) / 5 | 0); 
    } else if (n > 364 + s) { 
        w = 1; 
    } else { 
        w = (n / 7 | 0) + 1; 
    } 
     
    $y = $m = $d = null; 
     
    return w; 
} 

$(document).ready(function() {

	$('#homework-thumbs').click(function(){
		if($('#homework-thumbs-title').is(":visible")) {
			if($('#homework-thumbs li').is(":hidden")) {
				$('#homework-thumbs ul').css('display', 'block');
				$('#homework-thumbs li').css('display', 'block');
			} else {
				$('#homework-thumbs li').css('display', 'none');
				$('#homework-thumbs ul').css('display', 'none');
			}
		}
	});

	$(window).resize(function(){
		if($(window).width() > 868) {
			$('#homework-thumbs ul').css('display', 'block');
			$('#homework-thumbs li').css('display', 'inline-block');
		}
	})

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

		var currentWeek = getWeek(new Date());

		$('#today-button a').attr('href', '#' + currentWeek);

		var currentWeekDiv;
		var pageTopToDivBottom;
		var scrolledPlusViewable;
		var path = window.location.pathname;
		var loc = path.substring(path.lastIndexOf('/')+1);
		if(loc == "schedule.html") {
			if(currentWeek > 43 && currentWeek < 52) {
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