(function ($) {
  Drupal.behaviors.sunrise = {
    attach: function(context, settings){
      $("#idea-node-form .related_nodes_challenge_title").click(function(){
          $("#idea-node-form .related_nodes_challenge").slideToggle("fast");
      });
      $("#idea-node-form .related_nodes_tag_title").click(function(){
          $("#idea-node-form .related_nodes_tag").slideToggle("fast");
      });
    }
  }
}(jQuery));