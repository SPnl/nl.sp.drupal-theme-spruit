<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
  <div class="page-wrapper">
    <div class="page">
    <header class="site-header" id="site-header">
      <div class="site-branding">
      <?php if ($logo): ?>
        <div class="site-logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <h1 class="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span>
              <?php print $site_name; ?></span>
            </a>
          </h1>
      <?php endif; ?>
      </div>
      <?php if ($main_menu): ?>
        <nav class="site-navigation">
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('primary-menu')), 'heading' => '')); ?>
        </nav>
      <?php endif; ?>
      <div class="search-toggle">
        <?php if ($page['search']): ?>
          <a href="#search" class="button btn-search"><span class="text"><?php print t('Search'); ?></span></a>
        <?php endif; ?>
      </div>
    </header>

     <?php if ($page['search']): ?>
      <div class="site-search">
        <?php print render($page['search']); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['highlight']): ?>
      <div class="highlight-content"><?php print render($page['highlight']); ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <?php if ($breadcrumb): ?>
      <nav class="breadcrumb"><?php print $breadcrumb; ?></nav>
    <?php endif; ?>

      <div class="primary-content">
        <?php if ($title): ?>
        <header class="content-header">
          <?php print render($title_prefix); ?>
          <h1 class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        </header>
        <?php endif; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>

          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

        <a id="primary-content"></a>
        <div class="content"><?php print render($page['content']); ?></div>
      </div>

      <?php if ($page['secondary']): ?>
        <div class="secondary-content">
          <?php print render($page['secondary']); ?>
        </div>
      <?php endif; ?>
      <nav class="top-nav"><a href="#top"><span class="text">Top</span></a></nav>
    <footer class="site-footer" id="site-footer">
      <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>