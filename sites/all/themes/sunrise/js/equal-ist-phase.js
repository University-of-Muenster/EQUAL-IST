(function ($) {

  Drupal.behaviors.hdiehdiehdiedg = {
    attach: function(context, settings){

    		var id;
    		var taxarray;
    		var taxname;
    		var taxid;
    		var nid;
    		var oldtaxname;

    		$(".phase-link").click(function(){
    			id = $(this).attr("id");
    			taxarray = id.split("-");
    			oldtaxname = taxarray[taxarray.length-1];
    			taxname = taxarray[taxarray.length-2];
    			taxid = taxarray[taxarray.length-3];
    			nid = taxarray[taxarray.length-4];
    			$(".switch-phase-dialog").show();
    			$(".gray-background").show("fade");
    			$(".switch-phase-dialog-new-phase").text(taxname);
    			$(".switch-phase-dialog-old-phase").text(oldtaxname);
    		});
    		$(".switch-phase-dialog-abort").click(function(){
    			$(".switch-phase-dialog").hide("fade");
    			$(".gray-background").hide("fade");
    		});
    		$(".switch-phase-dialog-okay").click(function(){
    			$(".switch-phase-dialog").hide("fade");
    			$(".gray-background").hide("fade");
    			location.replace(location.pathname+"?task=switch-phase&tax="+taxid+"&nid="+nid);
    		});
       }
  };
}(jQuery));