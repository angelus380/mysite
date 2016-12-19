<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" >

  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  <meta property="og:image" content="http://i.imgur.com/QLjOT1l.png" />

	<title><?php bloginfo( 'name' ) ?></title>
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
<a href="#page-top" class="scrollUp-btn trans-03s"><i class="fa fa-chevron-up"></i></a>

<!-- mobile dropdown nav -->
  <div id="mobile-menu" class="mobile-menu scroll">
      <div class="close-mobile-menu">
        <span id="close-menu" class="pull-right glyphicon glyphicon-remove" aria-hidden="true"></span>
      </div>

      <?php
        $wrap =
          '<ul class="%2$s mobile-menu-list nav">'
          . '%3$s</ul>';

        $args = array(
          'container_class' => 'mobile-menu-container',
          'theme_location' => 'navbarMenu',
          'items_wrap' => $wrap
        );

        wp_nav_menu( $args );
      ?>
  </div>
    
<!-- main nav -->
  <nav id="mainNav" class="navbar navbar-custom navbar-default navbar-fixed-top scroll trans-03s">
    <div class="container">
      <div class="navbar-header">
        <button id="open-menu" type="button" class="navbar-toggle" data-toggle="collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
      </div>
      <!-- navbar menu -->
      <?php
      	$wrap =
            '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right">'
          . '%3$s</ul>';

	      $args = array(
	        'theme_location' => 'navbarMenu',
	        'container_class' => 'collapse navbar-collapse',
	        'container_id' => 'nav',
	        'items_wrap' => $wrap
	      );

	    	wp_nav_menu( $args );
	    ?>
    </div>
  </nav>