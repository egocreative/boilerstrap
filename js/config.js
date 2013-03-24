require.config({
  baseUrl: "/vendor",
  paths: {
    "domReady": "requirejs-domready/domReady",
    "modernizr": "modernizr/modernizr",
    "selectivizr": "selectivizr/selectivizr",

    "jquery": "jquery/jquery",

    "jquery.form": "jquery-form/jquery.form",
    "jquery.validate": "jquery.validation/jquery.validate",
    "jquery.localScroll": "jquery.localScroll/jquery.localScroll",
    "jquery.scrollTo": "jquery.scrollTo/jquery.scrollTo",
    "jquery.sharrre": "Sharrre/jquery.sharrre",

    "foundation": "foundation/js/foundation/foundation",
    "foundation.orbit": "foundation/js/foundation/foundation.orbit",

    "ego.component.sitedefault": "ego.component.sitedefault/sitedefault",
    "ego.component.comments": "ego.component.comments/comments",
    "ego.component.socialbookmarks": "ego.component.socialbookmarks/socialbookmarks"
  },
  shim: {
    'jquery.localScroll': {
      deps: ['jquery', 'jquery.scrollTo']
    },
    'foundation': {
      deps: ['jquery']
    },
    'foundation.orbit': {
      deps: ['foundation'],
      exports: 'jQuery.fn.orbit'
    }
  }
});