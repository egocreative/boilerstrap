$(function() {

	// Contact Map
	var geocoder, map;

	function codeAddress(address, zoom) {
		geocoder = new google.maps.Geocoder();
		geocoder.geocode( { 'address': address }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var myOptions = {
					zoom: zoom,
					center: results[0].geometry.location,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				map = new google.maps.Map(document.getElementById("contact-map"), myOptions);

				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			}
		});
	}

	codeAddress( $('#address').text() , 9);

	// Validate
	$.validator.addMethod('phone-uk', function(phone_number, element) {
		return this.optional(element) || phone_number.match(/^\(?(?:(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?\(?(?:0\)?[\s-]?\(?)?|0)(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}|\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4}|\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3})|\d{5}\)?[\s-]?\d{4,5}|8(?:00[\s-]?11[\s-]?11|45[\s-]?46[\s-]?4\d))(?:(?:[\s-]?(?:x|ext\.?\s?|\#)\d+)?)$/);
	}, 'Please specify a valid phone number');

	$('#contact-form').validate();

	// Ajax Submit
	$('#contact-form').ajaxForm({
		beforeSubmit: function (formData, $form, options) {
			console.log(formData, $form, options);
			$form.animate({
				opacity: 0.25},
				'slow', function() {
				$form.spin();
				$form.find('button[type=submit]').attr('disabled', 'disabled').text('Sending ...');
			});
		},
		success: function (responseText, statusText, xhr, $form) {
			$form.before( '<div class="nine column" id="form-response"><div class="alert-box success" style="display:none">We\'ve just recieved your message, thanks! <a href="" class="close">&times;</a></div><h2 style="display:none">Thanks for sending us a message.</h2><h3 style="display:none">We\'ll be in touch soon!</h3></div>' );

			var $alert = $('#form-response').children('.alert-box'),
				$message = $('#form-response').children('h2, h3');

			$form.fadeOut('fast', function() {
				$alert.slideDown('fast');
				$message.fadeIn('fast');
			});
		}
	});

});