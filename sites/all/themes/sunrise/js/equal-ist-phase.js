(function ($) {
  Drupal.behaviors.sunrise = {
    attach: function(context, settings){
    	
    		$(".phase-link").click(function(){
    			var id = $(this).attr("id");
    			var taxarray = id.split("-");
    			var taxname = taxarray[taxarray.length-1];
    			var taxid = taxarray[taxarray.length-2];
    			
    			$("#switch-phase-dialog").show();
    			$("#gray-background").show("fade");
    			$("#switch-phase-dialog-new-phase").text(taxname);
    			
    		});
    		$("#switch-phase-dialog-abort").click(function(){
    			$("#switch-phase-dialog").hide("fade");
    			$("#gray-background").hide("fade");
    		});
       }
  }
}(jQuery));