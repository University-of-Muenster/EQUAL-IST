<div class="node-add-wrapper clear-block">
  <div class="node-column-sidebar">
    <?php if($sidebar): ?>
      <?php print render($sidebar); ?>
    <?php endif; ?>
  </div>
  <div class="node-column-main">
    Please check the existing ideas before creating your own idea in order to avoid duplicates. <a href="#related_nodes">You can also relate your new idea to existing ideas.</a>
    <?php if($form): ?>
      <?php print drupal_render_children($form); ?>
    <?php endif; ?>
    <?php if($field_tags_for_related_challenge): ?>
      <?php print render($field_tags_for_related_challenge); ?>
    <?php endif; ?>

    
    <?php if($related_nodes): ?>
    <a id="related_nodes" style="display: block; position: relative; top: -140px; visibility: hidden;"></a>
    <div class="related_nodes">
      <div class="related_nodes_title" >Relate your idea to an existing idea</div>
      Select related ideas from existing ideas 
      

      <div class="btn-success related_nodes_challenge_title">by challenge</div>
      
      or
      
      <div class="btn-success related_nodes_tag_title">by tags</div>
      <?php if(isset($_GET['sort'])): ?>
        <div class="related_nodes_challenge" style="display: inline;">  
      <?php else: ?>
        <div class="related_nodes_challenge"> 
      <?php endif; ?> 
        <?php print render($related_nodes['challenge_nodes']); ?>
      </div>
      <div class="related_nodes_tag">
        <?php print render($related_nodes['tag_nodes']); ?>
      </div>
      <div id="field_ideas_similar">
          <?php print render($field_ideas_similar); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if($field_external_links): ?>
      <?php print render($field_external_links); ?>
    <?php endif; ?>
    <?php if($additional_settings): ?>
      <?php print render($additional_settings); ?>
    <?php endif; ?>
    <?php if($anonymous_publishing): ?>
      <?php print render($anonymous_publishing); ?>
    <?php endif; ?>
    <?php if($buttons): ?>
      <div class="node-buttons">
        <?php print render($buttons); ?>
    </div>
  <?php endif; ?>
  </div>
  <div class="clear"></div>
</div>