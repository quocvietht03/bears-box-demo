(function($) {
	"use strict";
	function bears_box_demo(){
		$('.panel-selector-btn').on('click', function(e){
			e.preventDefault();
			$('body').removeClass('wide boxed').addClass( $(this).data('value') );
			$(this).addClass('active').siblings('.active').removeClass('active');
			
			if($('body').hasClass('boxed')){
				$('.panel-boxed-message').fadeOut(500);
			}else{
				$('.panel-boxed-message').fadeIn(500);
			}
			
			setTimeout( function() {
				$( window ).trigger( 'resize' );
			}, 100 );
		});

		$('.panel-primary-background').on('click','li', function(){
			var link_bg = $( this ).data( 'link' );
			if($('body').hasClass('boxed')){
				$('.panel-boxed-message').fadeOut(500);
			}else{
				$('.panel-boxed-message').fadeIn(500);
			}
			
			$('body').addClass('bg-pattern-body').css('background-image', 'url('+ link_bg +')' );
			$(this).addClass('active').siblings('.active').removeClass('active');
		});

		$('.panel-selector-open').on('click', function(){
			$(this).parent().toggleClass('in');
		})
		
	}
	$(document).ready( function(){
		bears_box_demo();
	})
	
})(window.jQuery)