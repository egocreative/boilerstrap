$(function() {
	
	$("#accordion").tabs(
		"#accordion .pane",
    {
			tabs: '.heading',
			current: 'active',
			effect: 'slide',
		}
  );
	
	$(".tooltip-trigger").tooltip({
		effect: 'slide',
    // tweak the position
    offset: [-5, 0]
    
	}).dynamic({ bottom: { direction: 'down', bounce: true } });
	
		$("#tabbable").tabs(
			"#tabbable .tab-pane",
	    {
				tabs: '.nav li',
				current: 'active',
				effect: 'fade',
//				history: true - History doesn't work
			}
	  );
  
	$("a.overlay-ajax-trigger").overlay({

      mask: 'black',
			target: "#overlay",
      onBeforeLoad: function() {

          // grab wrapper element inside content
          var wrap = this.getOverlay().find(".inner");

          // load the page specified in the trigger
          wrap.load(this.getTrigger().attr("href"));
      }

  });

});