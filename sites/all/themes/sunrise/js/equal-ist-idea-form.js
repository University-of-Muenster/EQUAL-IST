(function ($) {
  Drupal.behaviors.sunrise = {
    attach: function(context, settings){
      function callbackFn(){
        var $link = $("#lnkMoreOpt");
        $(this).is(":visible") ? $link.text("Less Options «") : $link.text("More Options »");
      }
      $("#idea-node-form .related_nodes_challenge_title").click(function(){
          $("#idea-node-form .related_nodes_challenge").slideToggle("fast", callbackFn);
            $("#field_ideas_similar").show("fade");
            //TinyMCE Width bug
            $("#edit-field-ideas-similar-und-0-value_tbl").removeAttr("style");
            $("#edit-field-ideas-similar-und-0-value_tbl").css("width", "100%");
          if (!$("#idea-node-form .related_nodes_challenge").is(":visible") && !$("#idea-node-form .related_nodes_tag").is(":visible")){
             $("#field_ideas_similar").hide("fade");
          }
          
      });
      $("#idea-node-form .related_nodes_tag_title").click(function(){
          $("#idea-node-form .related_nodes_tag").slideToggle("fast", callbackFn);

          
            $("#field_ideas_similar").show("fade");
            //TinyMCE Width bug
            $("#edit-field-ideas-similar-und-0-value_tbl").removeAttr("style");
            $("#edit-field-ideas-similar-und-0-value_tbl").css("width", "100%");
          if (!$("#idea-node-form .related_nodes_challenge").is(":visible") && !$("#idea-node-form .related_nodes_tag").is(":visible")){
             $("#field_ideas_similar").hide("fade");
          }
          
      });
      $("#challenge-node-form .related_nodes_challenge_title").click(function(){
          $("#challenge-node-form .related_nodes_challenge").slideToggle("fast");
          //TinyMCE Width bug
          $("#edit-field-challenges-similar-und-0-value_tbl").removeAttr("style");
          $("#edit-field-challenges-similar-und-0-value_tbl").css("width", "100%");
      });
      $(".related_nodes_tag .form-checkbox").change(function(){
        var originvalue = $(this).attr('value');
        var tvalue = originvalue.split("-");
        var value = tvalue[tvalue.length-1];
          if ($(this).is(':checked')) {

            $('.related_nodes_challenge :input').filter(function(){return this.value==value}).prop( "checked", true );
            $('.related_nodes_tag :input').filter(function(){
              var neworigin=this.value;
              var tempvalue=neworigin.split("-");
              var tmpvalue=tempvalue[tempvalue.length-1];
              return (tmpvalue==value) && (originvalue!=neworigin);
            }).prop( "checked", true );
          } else {
            $('.related_nodes_challenge :input').filter(function(){return this.value==value}).prop( "checked", false );
            $('.related_nodes_tag :input').filter(function(){
              var neworigin=this.value;
              var tempvalue=neworigin.split("-");
              var tmpvalue=tempvalue[tempvalue.length-1];
              return (tmpvalue==value) && (originvalue!=neworigin);
            }).prop( "checked", false );
          }
      });
      $(".related_nodes_challenge .form-checkbox").change(function(){
        var value = $(this).attr('value');
          if($(this).is(':checked')){
            $('.related_nodes_tag :input').filter(function(){
              var neworigin=this.value;
              var tempvalue=neworigin.split("-");
              var tmpvalue=tempvalue[tempvalue.length-1];
              return (tmpvalue==value);
            }).prop( "checked", true );
          } else {
            $('.related_nodes_tag :input').filter(function(){
              var neworigin=this.value;
              var tempvalue=neworigin.split("-");
              var tmpvalue=tempvalue[tempvalue.length-1];
              return (tmpvalue==value);
            }).prop( "checked", false );
          }
      });
    }
  }
}(jQuery));