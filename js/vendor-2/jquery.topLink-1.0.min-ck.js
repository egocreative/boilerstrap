//plugin
jQuery.fn.topLink=function(e){e=jQuery.extend({min:1,fadeSpeed:200},e);return this.each(function(){var t=$(this);t.hide();$(window).scroll(function(){$(window).scrollTop()>=e.min?t.fadeIn(e.fadeSpeed):t.fadeOut(e.fadeSpeed)})})};