require(["jquery", "domReady!", "jquery.sharrre"], function($, dom) {

  $('.social-sharing').sharrre({
    share: {
      twitter: true,
      facebook: true,
      googlePlus: true,
      delicious: true,
      stumbleupon: true,
      linkedin: true,
      pinterest: true
    },
    template: '<div class="box"><div class="left">Share</div><div class="middle"><a href="#" class="facebook icon-facebook"></a><a href="#" class="twitter icon-twitter"></a><a href="#" class="googleplus icon-gplus"></a><a href="#" class="delicious icon-delicious"></a><a href="#" class="stumbleupon icon-stumbleupon"></a><a href="#" class="pinterest icon-pinterest"></a><a href="#" class="digg icon-digg"></a><a href="#" class="linkedin icon-linkedin"></a></div><div class="right">{total}</div></div>',
    enableHover: false,
    buttonClassName: '',
    enableTracking: true,
    render: function(api, options){
      $(api.element).on('click', '.twitter', function() {
        api.openPopup('twitter');
      });
      $(api.element).on('click', '.facebook', function() {
        api.openPopup('facebook');
      });
      $(api.element).on('click', '.googleplus', function() {
        api.openPopup('googlePlus');
      });
      $(api.element).on('click', '.delicious', function() {
        api.openPopup('delicious');
      });
      $(api.element).on('click', '.stumbleupon', function() {
        api.openPopup('stumbleupon');
      });
      $(api.element).on('click', '.pinterest', function() {
        api.openPopup('pinterest');
      });
      $(api.element).on('click', '.linkedin', function() {
        api.openPopup('linkedin');
      });
    }
  });

});