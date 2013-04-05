<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_enqueue_script("jquery"); ?>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<body>
  <div id="header">
    
  </div>
  <div class="menu-geral">
    <div class="centraliza">
      <?php wp_nav_menu( 
        array( 
          'theme_location' => 'top-menu',
          'menu_class'      => 'dropdown' )
        ); 
      ?>
    </div>
  </div>