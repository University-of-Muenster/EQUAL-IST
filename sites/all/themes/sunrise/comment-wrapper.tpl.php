<section id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
	<?php if (isset($_GET['intern']) && $_GET['intern']=='1'){ $string='only visible for your university';}else{ $string='visible for everyone';} ?>
    <h2 class="title"><?php print t('Comments <span style="font-size:14px;">' .$string.'</span>'); ?></h2>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

  <?php if ($content['comment_form']): ?>
    <h2 class="title comment-form"><?php print t('Add new comment'); ?></h2>
    <?php print render($content['comment_form']); ?>
  <?php endif; ?>
</section>