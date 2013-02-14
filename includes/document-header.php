<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php print $title; ?> | Boilerstrap</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/stylesheets/app.css">

    <script src="/js/vendor/modernizr.custom-2.6.2.min.js"></script>

    <script>
      Modernizr.load([
        {
          load : 'iegt5!ielt9!/js/vendor/selectivizr-1.0.2.min.js'
        },
        {
          load: '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js',
          complete: function () {
            if ( !window.jQuery ) {
              Modernizr.load('/js/vendor/jquery-1.8.3.min.js');
            }
          }
        },
        {
          load: ['/js/site-ck.js'] // Split into seperate load functions, or see docs: http://yepnopejs.com/
        },
      ]);
    </script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->