<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
                <?php bloginfo('name'); ?> |
                <?php
                if (is_home()) {
                        bloginfo( 'description' );
                } else {
                        the_title();
                }
                ?>
        </title>
        <?php wp_head(  ); ?>
</head>
<body>
<div class="container">
  <div class="row">
    <!--Header-->
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
   <?php wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 4, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav mr-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php
if (isset($_POST['emailaddress'])) {

    $to = get_theme_mod('contact_email_to_address');
    $subject = "Contact request.";
    $message = "$_POST['contact_textarea']";
    $headers = array(
      "From: $_POST['contactpersonname']";
       );

    // wp_mail( $to, $subject, $message );

    echo '<div class="alert alert-dismissible alert-success"><br>
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Great!</strong> Contact request sent.
</div>';
} else {
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh no!</strong> Something stupid happened!
</div>';
}
// $to = ‘steve.jobs@apple.com’;
// $subject = ‘Apple Computer’;
// $message = ‘Steve, I think this computer thing might really take off.’;

wp_mail( $to, $subject, $message );
?>