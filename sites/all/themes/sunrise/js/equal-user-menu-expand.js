(function($) { 

	Drupal.behaviors.equalusermenu = {
		attach: function(context, settings){

			$(".equal-search-icon").click(function() {
				if ($(".equal-search-block").is(":visible")){
					$(".equal-search-block").hide("fade");	
				}else{
					$(".equal-user-menu-block").hide();
					$(".equal-search-block").show("fade");
				}
			
			});
			$(".equal-user-menu-icon").click(function() {

				if ($(".equal-user-menu-block").is(":visible")){
					$(".equal-user-menu-block").hide("fade");			
				}else{
					$(".equal-search-block").hide();
					$(".equal-user-menu-block").show("fade");
				}
			});
		}
	};	

})(jQuery);