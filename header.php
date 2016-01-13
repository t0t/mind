<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
  <script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
  </script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
  <!-- End Cookie Consent plugin -->
</head>

<body <?php body_class(); ?>>

  <header class="site-header" role="banner">

    <input type="radio" id="Id" name="off" class="hammenu">
    <label for="Id" class="toggle">
      <svg class="icon icon--toggle"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#toggle"></svg>
      <svg class="icon icon--close"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#close"></svg>
    </label>

    <div class="brand">
			<a class="brand__logo" href="<?php echo site_url();?>" rel="home">
        <svg class="icon icon--logo">
          <?php if (is_page('contacto')): ?>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo5">
          <?php elseif (is_page('newsletter')): ?>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo6">
          <?php elseif (is_page('about')): ?>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo4">
          <?php endif; ?>
	        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo">
  		  </svg>
			</a>
			<!-- <h1 class="brand__name"><?php //bloginfo('name');?></h1> -->
			<!-- <h2 class="brand__description"><?php //bloginfo('description');?></h2> -->
    </div>

    <div class="search-form">
      <form method="get" action="<?php echo home_url('/'); ?>">
  			<div class="search-form__fieldset">
  				<input type="text" name="s" maxlength="30" autocomplete="off" value="">
  				<button type="submit" class="btn--search">
            <svg class="icon icon--lupa">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#lupa">
            </svg>
          </button>
  			</div>
  		</form>
    </div>

    <div class="site-offset">
      <nav class="site-offset__nav" role="navigation">

        <?php
          wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'container'       => '',
            'menu_class'      => 'site-nav__main'
          ));
        ?>

        <footer class="site-offset__footer">
          <svg class="icon icon--logo2">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo2">
          </svg>
          <svg class="icon icon--logo7">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo7">
          </svg>
          <svg class="icon icon--logo3">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo3">
          </svg>
        </footer>
      </nav>
    </div>

  </header>
