<?php get_header(); ?>

<header>
	<div class="container">
		<div class="error-404 text-center">
			<h1>Ops!</h1>
			<h2>Content not available.</h2>
			<p><?php _e( 'Sorry, This content is not available here.' ); ?></p>
			<a class="theme-btn" href="<?php echo home_url(); ?>"><i class="fa fa-arrow-left"></i>go back</a>
		</div>
	</div>
</header>

<?php get_footer(); ?>