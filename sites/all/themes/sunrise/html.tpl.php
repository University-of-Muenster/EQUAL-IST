<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>

  <?php if (theme_get_setting('responsive_respond','sunrise')): global $base_path; global $base_root; ?>
  <!-- Media Queries support for IE6-8 -->  
  <!--[if lt IE 9]>
    <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php endif; ?>
  
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  <!-- next 5 lines are for the integration of tinymce>
 <script src="/sites/all/libraries/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<! Just be careful that you give correct path to your tinymce.min.js file, above is the default example -->
 <!-- Just be careful that you give correct path to your tinymce.min.js file, above is the default example -->
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>