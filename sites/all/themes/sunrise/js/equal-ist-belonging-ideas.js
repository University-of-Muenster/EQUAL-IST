(function($) { 

	Drupal.behaviors.equalistbelongingideas = {
		attach: function(context, settings){
			

			$("#show-additional-ideas").click(function() {
				if($(".view-ideas-belonging-to-challenge").is(":visible")){
					$(".view-ideas-belonging-to-challenge").hide("fade");
				}else{
					$(".view-ideas-belonging-to-challenge-not-active").hide();
					$(".view-ideas-belonging-to-challenge").show("fade");
				}	
			});
			$("#show-additional-ideas-not-active").click(function() {
				if($(".view-ideas-belonging-to-challenge-not-active").is(":visible")){
					$(".view-ideas-belonging-to-challenge-not-active").hide("fade");
				}else{
					$(".view-ideas-belonging-to-challenge").hide();	
					$(".view-ideas-belonging-to-challenge-not-active").show("fade");
				}
			});
		}
	};	

})(jQuery);