function timelineSimpleBackgroundFade ($previousEl, $nextEl)
{
	var timeline = new TimelineLite().append([
		TweenMax.fromTo($previousEl, 0.5,
			{ // from
				css: {
					backgroundColor:"#DDDDDD"
				}
			},
			{ // to
				css: {
					backgroundColor:"#FFFFFF"
				}
			}),
		 	TweenMax.fromTo($nextEl, 0.5,
			// from
			{
				css: {
					backgroundColor:"#FFFFFF"
				}
			},
			// to
			{
				css: {
					backgroundColor:"#DDDDDD"
				}
			}),
		]);

	return timeline;
};

$(function() {


	$(window).bind('resize', function(event) {
	 	$('.screen').height( Site.Heights.Window );
	}).trigger('resize');

	var controller = $.superscrollorama();
	controller.addTween('#s1',
	 	TweenMax.fromTo($('#s1'), 0.5,
		{ // from
			css: {
				backgroundColor:"#FFFFFF"
			}
		},
		{ // to
			css: {
				backgroundColor:"#DDDDDD"
			}
		}),
		1000 // Duration
	);
	controller.addTween('#s2',
		timelineSimpleBackgroundFade( $('#s1'), $('#s2') ),
		1000 // Duration
	);
	controller.addTween('#s3',
		timelineSimpleBackgroundFade( $('#s2'), $('#s3') ),
		1000 // Duration
	);
	controller.addTween('#s4',
		timelineSimpleBackgroundFade( $('#s3'), $('#s4') ),
		1000 // Duration
	);
	controller.addTween('#s5',
		timelineSimpleBackgroundFade( $('#s4'), $('#s5') ),
		1000 // Duration
	);
	// controller.addTween('#s6',
	// 	timelineSimpleBackgroundFade( $('#s5'), $('#s6') ),
	// 	1000 // Duration
	// );
});