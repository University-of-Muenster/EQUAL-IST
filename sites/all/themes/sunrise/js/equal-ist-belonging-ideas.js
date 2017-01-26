(function($) { 

	Drupal.behaviors.equalistbelongingideas = {
		attach: function(context, settings){
			

			$("#show-additional-ideas").click(function() {
				$(".view-ideas-belonging-to-challenge").slideToggle("fast");	
			});
			$("#show-additional-ideas-not-active").click(function() {
				$(".view-ideas-belonging-to-challenge-not-active").slideToggle("fast");
			});
		}
	};	

})(jQuery);