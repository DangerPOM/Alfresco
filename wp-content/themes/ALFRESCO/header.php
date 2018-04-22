<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
  <!-- <link rel="icon" href="img/logo.ico"> -->
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
  <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>
  <header class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper container"><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="#" class="brand-logo"><?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); } ?></a>
    <?php wp_nav_menu( array('theme_location' => 'custom-menu','container_class' => 'right' ) ); ?>
    <ul id="nav-mobile" class="side-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'nav-menu' ) ); ?>;
    </ul>  
      </div>
    </nav>
  </header>