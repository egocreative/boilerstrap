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

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

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
        <?php

          if ( ! empty( $js ) ) {
            for ($i = 0; $i < count( $js ); $i++) {
              if ($i === 0) {
                print "{ load: [";
              }
              print "'/js/" . $js[$i] . ".js'";
              if ($i === count( $js ) - 1 ) {
                print "]}";
              } else {
                print ",";
              }
            }
          }
         ?>

      ]);
    </script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div id="skip-links">
      <a href="#content">Skip to main content</a>
      <!-- <a href="#search">Skip to search</a> -->
    </div>

    <div class="contain-to-grid">

      <header class="top-bar">

        <ul>
          <li class="name">
            <h1>
              <a href="#">Title
              </a>
            </h1>
          </li>
          <li class="toggle-topbar"><a href="#"></a></li>
        </ul>

        <nav>
          <ul class="right">
            <li class="divider show-for-medium-and-up"></li>
            <li><a href="/">Home</a></li>
            <li class="has-dropdown">
              <a href="#">News</a>
              <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">Item 2</a></h5></li>
                <li><label>Latest News</label></li>
                <li><a href="#">Level 1</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><label>Categories</label></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><a href="/news.php">See all →</a></li>
              </ul>
            </li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/contact.php">Contact</a></li>
          </ul>
        </nav>
      </header>

    </div>
