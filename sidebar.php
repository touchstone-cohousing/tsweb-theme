<aside id="sidebar" role="complementary">
  <nav id="menu" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

    <div class="menu-title">Members Only</div>
    <?php if (is_user_logged_in()) { ?>
      <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
    <?php } else { ?>
      <a href="/wp-login.php?redirect_to=%2F">Login</a>
    <?php } ?>
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