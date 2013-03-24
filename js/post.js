$(function() {

  $('#sharrre-top, #sharrre-bottom').sharrre({
    share: {
      twitter: true,
      facebook: true,
      googlePlus: true,
//      digg: true,
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
      // $(api.element).on('click', '.digg', function() {
      //   api.openPopup('digg');
      // });
      $(api.element).on('click', '.linkedin', function() {
        api.openPopup('linkedin');
      });
    }
  });

  $('a[href$="#add-comment"]').click(function(e) {
    e.preventDefault();

    $('body').append(global.modelStructure);
          $("#modal").reveal({
            animation: 'fade',
            open: function (e) {
              console.log();

              $commentForm = $('#comment_form');

              $commentForm.parent().fadeOut('fast', function() {
                $(e.target).append( $commentForm.show() );
             });
            },
            closed: function (e) {
              $('#add-comment').append( $('#comment_form') ).fadeIn('fast');
              $(e.target).remove();
            }
          });

  });

  $("input").foundationCustomForms();

  $('#comment_form').validate();

  // Ajax Submit
  $('#comment_form').ajaxForm({
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



      console.log($(responseText).find('.alert'));
      // $form.before( '<div class="nine column" id="form-response"><div class="alert-box success" style="display:none"> <a href="" class="close">&times;</a></div><h2 style="display:none">Thanks for sending us a message.</h2><h3 style="display:none">We\'ll be in touch soon!</h3></div>' );

      // var $alert = $('#form-response').children('.alert-box'),
      //  $message = $('#form-response').children('h2, h3');

      // $form.fadeOut('fast', function() {
      //  $alert.slideDown('fast');
      //  $message.fadeIn('fast');
      // });
    }
  });

});