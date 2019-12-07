$(document).on('ready', function () {
	if (typeof($('#promoSlider').attr('id')) !== undefined) {
		var promoSlider = new MasterSlider();
		promoSlider.setup('promoSlider', {
			width: 1400,
			height: 580,
			speed: 70,
			layout: 'fullwidth',
			loop: true,
			autoplay: true,
			overPause: true,
			dir: 'v'
		});
		promoSlider.control('arrows');
		promoSlider.control('lightbox');
		promoSlider.control('thumblist', {
			autohide: false,
			dir: 'v',
			align: 'left',
			width: 200,
			height: 120,
			margin: 0,
			space: 10,
			hideUnder: 500,
			inset: true
		});
	} 
	if (typeof($('.js-carousel').attr('class')) !== undefined) {
		// initialization of carousel
		$.HSCore.components.HSCarousel.init('.js-carousel');
	}
	if (typeof($('#js-header').attr('id')) !== undefined) {
		// initialization of header
		$.HSCore.components.HSHeader.init($('#js-header'));
	}
	if (typeof($('.hamburger').attr('class')) !== undefined) {
		$.HSCore.helpers.HSHamburgers.init('.hamburger');
	}
	if (typeof($('.js-go-to').attr('class')) !== undefined) {
		// initialization of go to section
		$.HSCore.components.HSGoTo.init('.js-go-to');
	}
	if (typeof($('.js-rating').attr('class')) !== undefined) {
		// initialization of rating
		$.HSCore.components.HSRating.init($('.js-rating'), {
		  spacing: 2
		});
	}
	$("#contact-us").submit(function(event) {
	  alert("Submitted");
	  $(".js-contact-us").val('');
	  event.stopPropagation();
	});
});

$(window).on('load', function() {
	// initialization of HSScrollNav
	$.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
	  duration: 700
	});
});