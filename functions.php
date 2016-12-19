<?php 

function get_style_css() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'get_style_css');

function get_js_files() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' );
		wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/js/contact.js' );
		wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/js/typed.js' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action('wp_enqueue_scripts', 'get_js_files');

function theme_support() {
	//all site menus
	  register_nav_menus(array(
	    'navbarMenu' => __( 'Navbar Menu' ),
	  ));
  //image support
  	add_theme_support( 'post-thumbnails' );
  //custom logo
  	add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'theme_support');

function cc_mime_types($mimes) {
	//svg support
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function add_googleanalytics(){ ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-89099248-1', 'auto');
	  ga('send', 'pageview');
  </script>
<?php }
add_action( 'wp_footer', 'add_googleanalytics');
?>