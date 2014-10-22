Date.prototype.getWeek = function() {
	      var onejan = new Date(this.getFullYear(),0,1);
	      var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
	      var dayOfYear = ((today - onejan +1)/86400000);
	      return Math.ceil(dayOfYear/7)
	    };

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
		if(currentWeek > 41 && currentWeek < 52) {
			$('#today').css("visibility", "visible");
			currentWeekDiv = $('#' + currentWeek);
			pageTopToDivBottom  = $('#' + currentWeek).offset().top + $('#' + currentWeek)[0].scrollHeight;
			scrolledPlusViewable = $(window).scrollTop()+$(window).height();

			// First check if the element is outside the viewable area:
			if( $(window).scrollTop() > pageTopToDivBottom ) {
			    $('#arrow').removeClass('pointDown');
			    $('#arrow').removeClass('pointRight');
			    $('#arrow').addClass('pointUp');

			} else if( scrolledPlusViewable < currentWeekDiv.offset().top ) {
			    $('#arrow').removeClass('pointUp');
			    $('#arrow').removeClass('pointRight');
				$('#arrow').addClass('pointDown');

			} else {
			    $('#arrow').removeClass('pointUp');
			    $('#arrow').removeClass('pointDown');
				$('#arrow').addClass('pointRight');
			}
		}

	    if($('#today').length) {
	        var days_div_top = $('#today').height();
	        if (window_top > days_div_top) {
	            $('#today').addClass('moving');
	        } else {
	            $('#today').removeClass('moving');
	    	}
	    }
	});

		// Index of the currently 'active' section
		var activeCache = null;

		// Actual rendered height of a header element
		var cloneHeight = function(){
		    var $clone = $('<div class="clone"></div>').appendTo('body'),
		        cloneHeight = $clone.outerHeight();
		    $clone.remove();
		    return cloneHeight;
		}();

		// Top offsets of each header
		var offsets = [];

		// Figure out which section is 'active'
		var activeHeaderIndex = function(){
		    var scrollTop = document.body.scrollTop;
		    for ( var i = 0; i < offsets.length; i++ )
		        if ( offsets[i] - cloneHeight > scrollTop )
		            return Math.max( i - 1, 0 );
		}

		// Build the 'offsets' array
		$('.date').each(function(i, obj){
		    offsets.push( $(this).offset().top );
		});

		// Listen to scroll events
		$(window).on('scroll', function(){
		    var active = activeHeaderIndex(), 
		        scroll = document.body.scrollTop,
		        clone = $('.clone').length,
		        $active = $('.date').eq(active),
		        prevTitle = $('.date').eq(active - 1).text(),
		        title = $active.text(),
		        $fixed = $('.fixed');
		    // Hide fixed header
		    if ( offsets[active] > scroll ){
		        if ( !clone ){
		            $('.date').eq(0).hide();
		            $('<li class="clone">' + prevTitle + '</li>').insertBefore($active);
		        }
		        $fixed.hide();
		    // Show fixed header
		    } else {
		        if ( clone ){
		            $('.date').eq(0).show();
		            $('.clone').remove();
		        }
		        $fixed.show();
		    }
		    // If we're not changing headers, exit
		    if ( active == activeCache ) return;
		    // Update active index
		    activeCache = active;
		    // Remove old fixed header (if any)
		    $('.fixed').remove();
		    // Add a new fixed header
		    $fixed = $('<div class="fixed">' + title + '</div>').appendTo('body');
		}).trigger('scroll');

});