<?php get_header(); ?>

<header>
	<div class="container">
		<div class="no-content text-center">
			<h1>Ops!</h1>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<a class="theme-btn" href="<?php echo home_url(); ?>"><i class="fa fa-arrow-left"></i>go back</a>
		</div>
	</div>
</header>

<?php get_footer(); ?>