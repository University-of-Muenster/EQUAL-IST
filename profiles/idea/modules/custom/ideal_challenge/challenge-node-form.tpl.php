<div class="node-add-wrapper clear-block">
  <div class="node-column-sidebar">
    <?php if($sidebar): ?>
      <?php print render($sidebar); ?>
    <?php endif; ?>
  </div> 

  <div class="node-column-main">
  Please check the existing challenges before creating your own challenge in order to avoid duplicates. <a href="#related_nodes">You can also relate your new challenge to existing challenges.</a>
    <?php if($form): ?>
      <?php print drupal_render_children($form); ?>
    <?php endif; ?>
    <?php if($field_categories_subcategories): ?>
      <?php print render($field_categories_subcategories); ?>
    <?php endif; ?>
    <?php if($tableselect_challenge): ?>
    <a id="related_nodes" style="display: block; position: relative; top: -140px; visibility: hidden;"></a>
    <div class="related_nodes">
      <div class="related_nodes_title" >Relate your challenge to an existing challenge</div>
      Select related challenges from 
      

      <div class="btn-success related_nodes_challenge_title">existing challenges</div>
      
      <?php if(isset($_GET['sort'])): ?>
        <div class="related_nodes_challenge" style="display: inline;">  
      <?php else: ?>
        <div class="related_nodes_challenge"> 
      <?php endif; ?> 
        <div style="width:100%; display: block;">
          <?php print render($tableselect_challenge); ?>
        </div>
        <div style="width:100%; display: block;">
          <?php print render($field_challenges_similar); ?>
        </div>
      </div>
      
    </div>
    <?php endif; ?>
    <?php if($field_links_external): ?>
      <?php print render($field_links_external); ?>
    <?php endif; ?>
    <?php if($additional_settings): ?>
      <?php print render($additional_settings); ?>
    <?php endif; ?>
    <?php if($anonymous_publishing): ?>
      <?php print render($anonymous_publishing); ?>
    <?php endif; ?>
	<?php if($field_copyright_infringement): ?>
	  <?php print render($field_copyright_infringement); ?>
	  <?php endif; ?>
    <?php if($buttons): ?>
      <div class="node-buttons">
        <?php print render($buttons); ?>
    </div>
  <?php endif; ?>
  </div>
  <div class="clear"></div>
</div>