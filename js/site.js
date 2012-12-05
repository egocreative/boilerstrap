$(function() {

	// Local scroll
	$.localScroll(
		{
			filter: '[data-localscroll!="false"]',
			easing: 'easeInOutQuad',
			duration: 1000,
			offset: {
				top: -10
			}
		}
	);
	
	// Back to top link
  $('#top-link').topLink({
    min: 150,
    fadeSpeed: 500
  });
  $('#top-link').click(function(e) {
    e.preventDefault();
    $.scrollTo(0,300);
  });

	// Prevent disabled linkes from being clicked
	$('a.disabled').click(function(e) {
		e.preventDefault()
	});

	// Responsive navbar collapse
	$('[data-toggle="collapse"]').click(function(e) {
		e.preventDefault()
		
		var	$this = $(this),
				$target = $($this.data('target'));
		
		if ($this.hasClass('collapsed')) {
			$this.removeClass('collapsed');
			$target.slideUp('fast');
		} else {
			$this.addClass('collapsed');
			$target.slideDown('fast');
		}
		
	});

	
});