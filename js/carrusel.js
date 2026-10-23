$(document).ready(function() {
	
	$('#owl').owlCarousel({
		slideSpeed: 6000,
		paginationSpeed: 6000,
		autoplayTimeout: 6000,
		autoplay: true,
		smartSpeed: 3330,
		center: true,
		loop: true,
		nav: false,
		autoplayHoverPause: true,
		singleItem: true,
		items:1,
		navText:['',''],
	});
	$('.prev').click(function(){
		$('#owl').trigger('prev.owl.carousel');
	});
	$('.next').click(function(){
		$('#owl').trigger('next.owl.carousel');
	});
	
	$('#owl').on('changed.owl.carousel', function(event) {
	  var activeItem = $('.owl-item.active .imagen > img');
	  activeItem.css('opacity', 0);  
	});
	
	
	$('.galeria').owlCarousel({
		slideSpeed: 600,
		smartSpeed: 600,
		paginationSpeed: 600,
		autoplay: true,
		smartSpeed: 3330,
		center: false,
		loop: true,
		nav: true,
		autoplayHoverPause: false,
		singleItem: true,
		items:1,
		navText:['',''],
	});
	$('.btnNex1').click(function(){
		$('.galeria').trigger('next.owl.carousel');
	});
 
});