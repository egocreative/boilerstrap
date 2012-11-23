$(function() {
	
	// Ego
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
	
	//set the link
  $('#top-link').topLink({
    min: 150,
    fadeSpeed: 500
  });
  //smoothscroll
  $('#top-link').click(function(e) {
    e.preventDefault();
    $.scrollTo(0,300);
  });

	$('a.disabled').click(function(e) {
		e.preventDefault()
	});


	$('[data-toggle="collapse"]').click(function(e) {
		e.preventDefault()
		
		var	$this = $(this),
				$target = $($this.data('target'));
		
		console.log($target);
		
		if ($this.hasClass('collapsed')) {
			$this.removeClass('collapsed');
			$target.slideUp('fast');
		} else {
			$this.addClass('collapsed');
			$target.slideDown('fast');
		}
		
		
	});

	
});