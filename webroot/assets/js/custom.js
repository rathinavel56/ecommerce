$(document).on('ready', function () {
	if (typeof($('.carousel').attr('class')) !== undefined) {
		$('.carousel').carousel({
		  interval: 2000
		});
	}
	
	$(".js-header-nav").click(function(event) {
		$(".js-header-nav").removeClass('active');
		$(this).addClass('active');
	});	
	$("#contact-us").click(function(event) {
		var isFilled = true;
		
		$(".js-contact-us").each(function(){
			if ($(this).val().trim() === '') {
				isFilled = false;
				$(this).addClass('required-field');
			} else {
				if ($(this).attr('id') == 'email') {
					if (!emailcheck($("#email").val())) {
						isFilled = false;
						$(this).addClass('required-field');
					} else {
						$(this).removeClass('required-field');
					}
				} else {
					$(this).removeClass('required-field');
				}
			}
		});
		if (isFilled) {
			$.post(window.location.origin + "/enquiry", {
				name: $("#name").val().trim(),
				phone: $("#phone").val().trim(),
				address: $("#address").val().trim(),
				email: $("#email").val().trim(),
				subject: $("#subject").val().trim(),
				message: $("#message").val().trim()
			  },
			  function(data, status){
				$(".js-contact-us").val('');
				alert("Successfully submitted and we will contact you soon!!!");
			  });
			
		}
	});
});

$(window).on('load', function() {
	// initialization of HSScrollNav
	$.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
	  duration: 700
	});
});
function emailcheck(value) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
	return re.test(value);
}