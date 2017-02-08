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
 <?php /*   <script>
        tinymce.init({selector:'textarea'});
    </script> */ ?>

<?php /* Migrated from page.tpl.php -> solved multiple body tags */ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<?php /* Prevent hybridauth facebook redirect bug */ ?>
     <script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        window.location.hash = '';
    }
</script>   

        <style>
body, html, .main {
    height: 100%;
}

section {
    min-height: 100%;
}
</style>
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