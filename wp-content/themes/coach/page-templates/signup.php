<?php
/*
* Template Name: signup
*/

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' );
				endwhile;
			?>
			<form method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/register_signup.php">
				<label>Username</label><input type="text" name="username">
				<label>Email</label><input type="email" name="email">
				<label>Password</label><input type="password" name="password">
				<input type="submit" value="Submit">
			</form>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();

?>