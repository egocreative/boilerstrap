require(["jquery", "domReady!", "modernizr", "jquery.localScroll", "foundation", "foundation.orbit"], function($, dom) {

  var Site = {
    Standard: {
      Duration: 500,
      Easing: 'easeInOutQuad'
    },
    Heights: {}
  };

  Site.Heights.TopBar = $('.top-bar').outerHeight();

  $(window).bind('resize', function(event) {
    Site.Heights.TrueBody = $('body').height();
    Site.Heights.TrueWindow = $(window).height();
    Site.Heights.Body = Site.Heights.TrueBody - Site.Heights.TopBar;
    Site.Heights.Window = Site.Heights.TrueWindow - Site.Heights.TopBar;
  }).trigger('resize');

  // Local scroll
  $.localScroll(
    {
      filter: '[data-localscroll!="false"]',
      easing: Site.Standard.Easing,
      duration: Site.Standard.Duration,
      offset: {
        top: -10
      }
    }
  );

  $(document).foundation();

  // Back to top link
  // $('#top-link').topLink({
  //  min: 150,
  //  fadeSpeed: Site.Standard.Duration
  // });
  $('#top-link').click(function(e) {
    e.preventDefault();
    $.scrollTo( 0, Site.Standard.Duration );
  });

  // Prevent disabled linkes from being clicked
  $('a.disabled').click(function(e) {
    e.preventDefault()
  });

});