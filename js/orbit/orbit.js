$(function() {

	$("#homepage-slider").slideDown('fast', function() {

	    $("#homepage-slider").orbit({
	      fluid: '16x4',
	      advanceSpeed: 2.62974e6,
	      timer: false,
	    });

	});

    $('#twitter-timeline').orbit({
      fluid: '4x3',
      advanceSpeed: '5000',
      directionalNav: false
    });

});