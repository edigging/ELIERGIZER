<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<div class="slider-in-main">
			<?php echo do_shortcode( '[metaslider id=45]' ); ?>
		</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
