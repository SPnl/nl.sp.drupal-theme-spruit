<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single Drupal page.
 */
?><!doctype html>
<html class="no-js" lang="nl-NL">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <nav class="skip-link invisible">
      <a href="#primary-content"><?php print t('Skip to content'); ?></a>
    </nav>
    <!--[if lt IE 9]>
      <p class="browser-upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>