  <!--watermark bg -->
  <div id="watermark-bg"></div>

<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="nav-logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
              <h1 class="element-invisible"><?php print $linked_site_name; ?></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>

            <!--.top-bar-inset -->
            <?php if (!empty($page['topbar_inset'])): ?>
              <?php print render($page['topbar_inset']); ?>
            <?php endif; ?>
            <!--/.top-bar-inset -->

          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="<?php print $alt_header_classes; ?>">
      <div class="row">

        <div class="large-4 columns">
          <div class="text-center logo-container">
            <?php if ($logo): ?>
              <span>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img class="round" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              </span>
            <?php endif; ?>
            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div class="element-invisible" id="site-name">
                  <strong>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </strong>
                </div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 class="element-invisible" id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 class="element-invisible" title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </div>
        </div>

        <div class="large-8 columns">
          <?php if (!empty($page['header_inset'])): ?>
            <div class="header-inset">
              <?php print render($page['header_inset']); ?>
              <hr>
            </div>
          <?php endif; ?>
          <?php if ($alt_secondary_menu): ?>
            <nav id="secondary-menu" class="navigation right" role="navigation">
              <?php print $alt_secondary_menu; ?>
            </nav> <!-- /#secondary-menu -->
          <?php endif; ?>

          <?php if ($alt_main_menu): ?>
            <nav id="main-menu" class="navigation right" role="navigation">
              <?php print ($alt_main_menu); ?>
            </nav> <!-- /#main-menu -->
          <?php endif; ?>
        </div>

      </div>
    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region">
        <div class="row">
          <div class="large-12 columns">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages">
      <div class="row">
        <div class="large-12 columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help">
      <div class="row">
        <div class="large-12 columns">
          <?php print render($page['help']); ?>
        </div>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <?php if (!empty($page['top_featured']) || !empty($page['top_featured_inset'])): ?>
    <!--/.top-featured -->
    <section class="l-top-featured">
      <div class="row"> </div>
      <?php print render($page['top_featured']); ?>
      <div class="row">
        <?php if (!empty($page['top_featured_inset'])): ?>
          <div class="large-12 columns l-top-featured-inset">
            <?php print render($page['top_featured_inset']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <!--/.l-top-featured -->
  <?php endif; ?>

  <main role="main" class="l-main">
    <div class="row">
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if ($breadcrumb): print $breadcrumb; endif; ?>

        <?php if ($title && !$is_front): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.main region -->

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </main>
  <!--/.main-->

  <?php if (!empty($page['bottom_featured']) || !empty($page['bottom_featured_inset'])): ?>
    <!--/.bottom-featured -->
    <section class="l-bottom-featured">
      <div class="row">
        <?php if (!empty($page['bottom_featured_inset'])): ?>
          <div class="large-12 columns l-bottom-featured-inset">
            <?php print render($page['bottom_featured_inset']); ?>
          </div>
        <?php endif; ?>
      </div>
      <?php print render($page['bottom_featured']); ?>
      <div class="row"> </div>
    </section>
    <!--/.l-bottom-featured -->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer" role="contentinfo">
    <?php if (!empty($page['footer_top'])): ?>
      <!--.footer-top -->
      <section class="l-footer-top">
        <div class="row">
          <div class="large-12 columns">
            <?php print render($page['footer_top']); ?>
          </div>
        </div>
      </section>
      <!--/.footer-top-->
    <?php endif; ?>

    <?php if (!empty($page['footer_main'])): ?>
      <!--.footer-main -->
      <section class="l-footer-main">
        <div class="row">
          <div class="large-12 columns">
            <?php print render($page['footer_main']); ?>
          </div>
        </div>
      </section>
      <!--/.footer-main-->
    <?php endif; ?>

  <?php if (!empty($page['footer_bottom']) || !empty($page['footer_bottom_inset'])): ?>
    <!--.footer-bottom -->
    <section class="l-footer-bottom">
      <div class="row"> </div>
      <?php print render($page['footer_bottom']); ?>
      <div class="row">
        <?php if (!empty($page['footer_bottom_inset'])): ?>
          <div class="large-12 columns l-footer-bottom-inset">
            <?php print render($page['footer_bottom_inset']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <!--/.l-footer-bottom -->
  <?php endif; ?>

    <!--.footer-static -->
    <section class="l-footer-static">
      <div class="row">
        <div class="footer-links large-6 push-6 columns">
          <?php if (!empty($page['footer_links'])): ?>
            <?php print render($page['footer_links']); ?>
          <?php endif; ?>
        </div>
        <?php if ($site_name) :?>
          <div class="copyright large-6 pull-6 columns">
            <p class="hide-for-small non-mobile">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">&copy; <?php print date('Y') . ' ' . ($site_name) . t(' — All rights reserved.'); ?></a>
            </p>
            <p class="show-for-small text-center mobile">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">&copy; <?php print date('Y') . ' ' . ($site_name) . t(' — All rights reserved.'); ?></a>
            </p>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <!--/.footer-static-->
  </footer>
  <!--/.footer-->
</div>
<!--/.page -->

<?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
<?php if (!empty($page['modal_blocks'])): ?>
  <?php print render($page['modal_blocks']); ?>
<?php endif; ?>
