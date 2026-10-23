// JavaScript Document

$(document).ready(function() {
	
	//form
    $(".onlyNumber").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
		}
    });

	$('.btn-menu').click(function(){
		$(this).toggleClass('active');
		$('#openmenu').toggleClass('active');
	});
	
	$('header .menu a').click(function(){
		$('.btn-menu').removeClass('active');
		$('#openmenu').removeClass('active');
	});
	$('#openmenu a').click(function(){
		$('.btn-menu').toggleClass('active');
		$('#openmenu').toggleClass('active');
	});
	
	$(window).on('scroll', function() {
		var windowHeight = $(window).height();
		var scrollTop = $(window).scrollTop();
		
		$('.parallax').each(function() {
			var depth = $(this).data('depth') || 0.3;
			var blur = $(this).data('blur') || 0;
			var rotate = $(this).data('rotate') || 0;
			
			var rect = this.getBoundingClientRect();
			var progress = 1 - Math.abs(rect.top / windowHeight); 
			progress = Math.max(0, Math.min(1, progress));
			
			var moveY = rect.top * depth * -0.4;
			var rot = rotate * progress;
			var blurAmount = blur ? blur * (1 - progress) : 0;
			
			$(this).css({
				transform: `translateY(${moveY}px) rotate(${rot}deg)`,
				filter: blur ? `blur(${blurAmount}px)` : 'none'
			});
		});
	});
			
});