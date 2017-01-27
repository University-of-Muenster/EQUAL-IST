(function($) { 

	Drupal.behaviors.equalisttop3 = {
		attach: function(context, settings){
			/*
			$(".view-top-3-ideas-of-challenge .views-row-1").prepend('<div class="top3-idea-badget"><img src="/sites/all/themes/sunrise/images/goals/FirstPlace.png"></div> ');
			$(".view-top-3-ideas-of-challenge .views-row-2").prepend('<div class="top3-idea-badget"><img src="/sites/all/themes/sunrise/images/goals/SecondPlace.png"></div> ');
			$(".view-top-3-ideas-of-challenge .views-row-3").prepend('<div class="top3-idea-badget"><img src="/sites/all/themes/sunrise/images/goals/ThirdPlace.png"></div> ');
			*/
			$(".view-top-3-ideas-of-challenge .views-row-1").prepend("TEST1");
			$(".view-top-3-ideas-of-challenge .views-row-2").prepend("TEST2");
			$(".view-top-3-ideas-of-challenge .views-row-3").prepend("TEST3");
			
		}
	};	

})(jQuery);