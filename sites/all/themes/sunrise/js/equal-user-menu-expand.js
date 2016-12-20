(function($) { 
	Drupal.behaviors.sunrise = {
		attach: function(context, settings){
			alert("Test0");
			$(".equal-search-icon").click(function() {
				if ($(".equal-search-block").is(":visible")){
					$(".equal-search-block").hide("fade");	
					alert("Test1");
				}else{
					$(".equal-user-menu-block").hide();
					$(".equal-search-block").show("fade");
					alert("Test2");
				}
			
			});
			$(".equal-user-menu-icon").click(function() {
				if ($(".equal-user-menu-block").is(":visible")){
					$(".equal-user-menu-block").hide("fade");			
					alert("Test3");
				}else{
					$(".equal-search-block").hide();
					$(".equal-user-menu-block").show("fade");
					alert("Test4");
				}
			});
		}
	};	
})(jQuery);