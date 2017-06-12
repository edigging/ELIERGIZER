<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<div class="productWrapper">
		<div class="content">

			<?php woocommerce_content(); ?>

		</div>
		<div class="sidebar">
	
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
 
				<div id="true-side" class="sidebar">
			 
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
			 
				</div>
			 
			<?php endif; ?>



		</div>
		<div class="clear"></div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
