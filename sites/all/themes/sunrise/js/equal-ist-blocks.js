(function ($) {
  Drupal.behaviors.sunrise = {
  	attach: function(context, settings){
  		$("#related-idea-explanation-link").click(function(){
  			$("#related-idea-explanation").slideToggle("fast");
  		});
  	}
  }
}(jQuery));