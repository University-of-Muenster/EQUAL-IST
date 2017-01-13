(function ($) {
  Drupal.behaviors.sunrise = {
    attach: function(context, settings){
      $("#idea-node-form .related_nodes_challenge_title").click(function(){
          $("#idea-node-form .related_nodes_challenge").slideToggle("fast");
          $("field_ideas_similar").slideToggle("fast");
      });
      $("#idea-node-form .related_nodes_tag_title").click(function(){
          $("#idea-node-form .related_nodes_tag").slideToggle("fast");
          $("field_ideas_similar").slideToggle("fast");
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