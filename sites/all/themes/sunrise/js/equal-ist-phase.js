(function ($) {

  Drupal.behaviors.equalistphasedialog = {
    attach: function(context, settings){

    		var taxarray;
    		var taxname;
    		var taxid;
    		var nid;
    		var oldtaxname;
            var selected= [];
            var done=0;
            
    		$(".phase-link").click(function(){
    			taxarray = $(this).attr("id").split("-");
    			oldtaxname = taxarray[taxarray.length-1];
    			taxname = taxarray[taxarray.length-2];
    			taxid = taxarray[taxarray.length-3];
    			nid = taxarray[taxarray.length-4];
                $(".switch-phase.dialog").show();
    			$(".gray-background").show("fade");
    			$(".switch-phase-new-phase").text(taxname);
    			$(".switch-phase-old-phase").text(oldtaxname);
    		});
            $(".select-ideas-link").click(function(){
                $(".gray-background").show("fade");
                $(".select-ideas").show();
                $(".select-ideas").animate({ scrollTop: 0 }, "slow");
            });
    		$(".dialog-abort").click(function(){
    			$(".dialog").hide("fade");
    			$(".gray-background").hide("fade");

    		});
    		$(".switch-phase .dialog-okay").click(function(){
    			$(".dialog").hide("fade");
    			$(".gray-background").hide("fade");
    			location.replace(location.pathname+"?task=switch-phase&tax="+taxid+"&nid="+nid);
    		});
            $(".select-ideas .dialog-okay").click(function(){
                if(!done){
                    var preselected = $(".select-ideas").attr("id").split("-");
                    preselected.splice(0,3);
                    selected=preselected;
                    var MINIDEAS = $(".select-ideas").attr("id").split("-");
                    MINIDEAS = MINIDEAS[1];
                    alert(MINIDEAS);
                    done=1;
                }
                if (selected.length >= MINIDEAS){
                    $(".dialog").hide("fade");
                    $(".gray-background").hide("fade");
                   var string="";
                    for (var i = selected.length - 1; i >= 0; i--) {
                        string = string + selected[i];
                        if (i > 0) {
                            string = string + "-";
                        }
                    }
                    location.replace(location.pathname+"?task=select-ideas&nid="+string); 
                }else {
                    $(".select-ideas").animate({ scrollTop: 0 }, "slow");
                    $(".select-ideas .messages.error").show("fade");

                }
                
            });
            $(".idea-row .idea-switch").click(function(){
                if(!done){
                    var preselected = $(".select-ideas").attr("id").split("-");
                    preselected.splice(0,1);
                    selected=preselected;
                    done=1;
                }
                var nidarray = $(this).attr("id").split("-");
                var nid = nidarray[nidarray.length-1];
                if ($("#idea-row-"+nid+" .idea-switch .btn-success").text()==">"){
                    $("#idea-row-"+nid).appendTo(".select-ideas-right");
                    $("#idea-row-"+nid+" .idea-switch .btn-success").text("<");
                    selected.push(nid);
                }else{
                    $("#idea-row-"+nid).appendTo(".select-ideas-left");
                    $("#idea-row-"+nid+" .idea-switch .btn-success").text(">");
                    var i = selected.indexOf(nid);
                    if (i > -1) {
                        selected.splice(i, 1);
                    }
                }
                
            });
            
       }
  };
}(jQuery));