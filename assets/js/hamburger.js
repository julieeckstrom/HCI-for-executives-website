var main = function() {
   	$('#menu-icon').click(function(){
	   
    $('#mobile_nav').animate({left: '0px'}, 200); 
    $('body').animate({left: '290px'}, 200);
	$('body').addClass('overflow');
	$('#contentLayer').css('display', 'block');
	
  });
  
  $('#menu-icon').hover(function(){
		$('#menu-icon div').css('opacity', '.5');	
	}, 
	function(){
		$('#menu-icon div').css('opacity', '1');	
	}); 
    
    $('#icon-close').click(function(){
        $('#mobile_nav').animate({left: '-290px'}, 200);
        $('body').animate({left: '0px'}, 200);
		$('body').removeClass('overflow');
		$('#contentLayer').css('display', 'none');
        
        });
		
	$('#contentLayer').click(function(){
		$('#mobile_nav').animate({left: '-290px'}, 200);
        $('body').animate({left: '0px'}, 200);
		$('body').removeClass('overflow');
		$(this).css('display', 'none');
		
	});
	
	$('#contentLayer').hover(function(){
		$('#menu-icon div').css('opacity', '.5');	
	}, 
	function(){
		$('#menu-icon div').css('opacity', '1');	
	});
};

$(document).ready(main);