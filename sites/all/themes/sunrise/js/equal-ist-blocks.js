(function ($) {
  Drupal.behaviors.ideaexplanation = {
  	attach: function(context, settings){
  		$("#related-idea-explanation-link").click(function(){
  			$("#related-idea-explanation").slideToggle("fast");
  		});
  	}
  }
}(jQuery));