<aside id="sidebar" role="complementary">
  <nav id="menu" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

    <div class="menu-title">Members Only</div>
    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
  </nav>

  <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
      <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
      </ul>
    </div>
  <?php endif; ?>

  <div id="search">
    <?php get_search_form(); ?>
  </div>
</aside>