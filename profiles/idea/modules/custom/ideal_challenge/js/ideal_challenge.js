(function($) {
    Drupal.behaviors.ideaform = {
        attach: function(context) {
        	$('a.open-browse').click(function(e){
        		e.preventDefault();
        		$(this).parent().parent().find('input.form-control').trigger('click');
        	});
        	$('#challenge-node-form .image-widget-data input.form-control, #challenge-node-form .file-widget input.form-control').change(function(){
        		$(this).parent().find('button').show();
        	});
        }
    }
})(jQuery);