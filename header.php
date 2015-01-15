<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
      <header id="header" role="banner">
        <section id="branding">
          <div id="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
              <img src="<?php bloginfo('template_directory'); ?>/images/logo-big.png" alt="Logo" width="513" height="88" />
            </a>
          </div>
          <div id="site-description"><?php bloginfo( 'description' ); ?></div>
        </section>
      </header>
      <div id="container">
