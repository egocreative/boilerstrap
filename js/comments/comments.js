require(["jquery", "domReady!", "jquery.validate", "jquery.form"], function($, dom) {

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

//  $("input").foundationCustomForms();

  $('#comment_form').validate();

  // Ajax Submit
  $('#comment_form').ajaxForm({
    beforeSubmit: function (formData, $form, options) {
      console.log(formData, $form, options);
      $form.animate({
        opacity: 0.25},
        'slow', function() {
//          $form.spin();
          $form.find('button[type=submit]').attr('disabled', 'disabled').text('Sending ...');
        });
    },
    success: function (responseText, statusText, xhr, $form) {
      console.log($(responseText).find('.alert'));
      $form.before( '<div class="nine column" id="form-response"><div class="alert-box success" style="display:none"> <a href="" class="close">&times;</a></div><h2 style="display:none">Thanks for sending us a message.</h2><h3 style="display:none">We\'ll be in touch soon!</h3></div>' );

      var $alert = $('#form-response').children('.alert-box'),
       $message = $('#form-response').children('h2, h3');

      $form.fadeOut('fast', function() {
       $alert.slideDown('fast');
       $message.fadeIn('fast');
      });
    }
  });

});