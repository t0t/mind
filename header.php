<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
  <script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
  </script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
  <!-- End Cookie Consent plugin -->
</head>
<body>

  <header class="site-header" role="banner">
    <svg class="icon icon--toggle">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#toggle"></use>
    </svg>

    <div class="brand">
			<a class="brand__logo" href="<?php echo site_url();?>" rel="home">
        <svg class="icon icon--logo">
	        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo"></use>
  		  </svg>
			</a>
			<h1 class="brand__name"><?php //bloginfo('name');?></h1>
			<h2 class="brand__description"><?php //bloginfo('description');?></h2>
    </div>

    <form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
      <label class="sr-only"><?php //_e('Search for:', 'roots'); ?></label>
      <div class="input-group">
        <svg class="icon icon--lupa">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#lupa"></use>
        </svg>
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search in', 'roots'); ?> <?php bloginfo('name'); ?>">
        <span class="input-group-btn">
          <button type="submit" class="search-submit btn btn-default">
            <i class="icon-arrow-right"></i>
          </button>
        </span>
      </div>
    </form>


    <div class="site-offset">
      <nav class="site-offset__nav" role="navigation">

        <svg class="icon icon--close">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#close"></use>
        </svg>

        <input type="button" id="Id" value="Menu" class="hammenu">

        <?php
          wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'container'       => '',
            'menu_class'      => 'site-nav__main'
          ));
        ?>

        <footer class="site-offset__footer">
          <div>
            <svg class="icon icon--logo2">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo2"></use>
            </svg>
            <p class="icon-subtitle"> DESDE 2014 CIUDAD DE BUENOS AIRES REP. ARGENTINA </p>
          </div>

          <p class="icon-subtitle">Mind.ag</p>

          <div>
            <svg class="icon icon--logo3">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo3"></use>
            </svg>
            <p class="icon-subtitle">COMUNIDAD DE PRODUCCIÓN Y COMUNICACIÓN</p>
          </div>

        </footer>
      </nav>
    </div>

  </header>
