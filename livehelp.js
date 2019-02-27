if (typeof( jQuery) != 'undefined') {
  if(typeof(jQuery.fn.popover) == 'undefined'){
    var head = document.getElementsByTagName("head")[0];
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src', livehelp_localize.livehelp_url + 'bootstrap.min.js');
    head.appendChild(script);
  }
  (function($){
    function verifyStyle(selector) {
        var rules;
        var haveRule = false;
        if (typeof document.styleSheets != "undefined") {   //is this supported
            var cssSheets = document.styleSheets;
            outerloop:
            for (var i = 0; i < cssSheets.length; i++) {
                 //using IE or FireFox/Standards Compliant
                try {
                  rules =  (typeof cssSheets[i].cssRules != "undefined") ? cssSheets[i].cssRules : cssSheets[i].rules;
                  for (var j = 0; j < rules.length; j++) {
                    if (rules[j].selectorText == selector) {
                      haveRule = true;
                      break outerloop;
                    }
                  }
                } catch($e) {}
            }
        }
        return haveRule;
    }
    $(document).ready(function() {
      if( !verifyStyle('glyphicon') ){
        var elementTitle = document.getElementsByTagName('title');
        $("<link rel='stylesheet' href='"+ livehelp_localize.livehelp_url + 'bootstrap.min.css' +"' type='text/css' media='screen'>")
          .insertAfter(elementTitle);
      }
    });
  })(jQuery);
} else {
  var head = document.getElementsByTagName("head")[0];
  var script = document.createElement('script');
  script.setAttribute('type', 'text/javascript');
  script.setAttribute('src', livehelp_localize.livehelp_url + 'jquery.min.js');
  head.appendChild(script);
}