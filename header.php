<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <?php //wp_title(); ?>      
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container">
  <div class="row">
    <!--Header-->
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
   <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'              => 4, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'bs-example-navbar-collapse-1',
  'menu_class'      => 'navbar-nav mr-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>
    <?php get_search_form(); ?>
  </div>
</nav>
