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
    <div class="brand">
			<a class="brand__logo" href="<?php echo site_url();?>" rel="home">
        <svg class="icon icon--logo">
	        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo"></use>
  		  </svg>
			</a>
			<h1 class="brand__name"><?php //bloginfo('name');?></h1>
			<h2 class="brand__description"><?php //bloginfo('description');?></h2>
    </div>
    <nav class="site-nav" role="navigation">
      <svg class="icon icon--toggle">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#toggle"></use>
      </svg>
      <input type="button" id="Id" value="Menu" class="hammenu">
			<?php
				wp_nav_menu( array(
          'theme_location'  => 'main-menu',
          'container'       => '',
          'menu_class'      => 'site-nav__main'
        ));
      ?>
      <svg class="icon icon--close">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#close"></use>
      </svg>
    </nav>


    <form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
      <label class="sr-only"><?php //_e('Search for:', 'roots'); ?></label>
      <div class="input-group">
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search in', 'roots'); ?> <?php bloginfo('name'); ?>">
        <span class="input-group-btn">
          <button type="submit" class="search-submit btn btn-default">
            <i class="icon-arrow-right"></i>
          </button>
        </span>
      </div>
    </form>
    <svg class="icon icon--lupa">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#lupa"></use>
    </svg>
    <svg class="icon icon--logo2">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo2"></use>
    </svg>
    <p class="icon-subtitle">
      DESDE 2014
      CIUDAD DE BUENOS AIRES
      REP. ARGENTINA
    </p>

    <svg class="icon icon--logo3">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo3"></use>
    </svg>
    <p class="icon-subtitle">COMUNIDAD DE PRODUCCIÓN Y COMUNICACIÓN</p>

    <svg class="icon icon--logo4">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo4"></use>
    </svg>

    <svg class="icon icon--logo5">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo5"></use>
    </svg>

    <svg class="icon icon--logo6">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo6"></use>
    </svg>

    <svg class="icon icon--email">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#email"></use>
    </svg>

    <svg class="icon icon--arrow-left">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-left"></use>
    </svg>

    <svg class="icon icon--arrow-right">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></use>
    </svg>

  </header>
