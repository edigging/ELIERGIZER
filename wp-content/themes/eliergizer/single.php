<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop. ?>

	<div class="flexslider2">

		<?php wp_reset_query(); ?>

		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('charity-slider') ): ?>

			<ul class="slides">
			<?php while( have_rows('charity-slider') ): the_row(); 
				// vars
				$foto = get_sub_field('charity-slider-foto');
				$content = get_sub_field('charity-slider-text');
				?>
				<li>
					<div class="helpElement">
				     	<img src="<?php echo $foto; ?>" alt="" />
				     	<p><?php echo $content; ?></p>
				    </div>
				</li>
			<?php endwhile; ?>
			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('charity-slider-en') ): ?>

			<ul class="slides">
			<?php while( have_rows('charity-slider-en') ): the_row(); 
				// vars
				$foto = get_sub_field('charity-slider-foto-en');
				$content = get_sub_field('charity-slider-text-en');
				?>
				<li>
					<div class="helpElement">
				     	<img src="<?php echo $foto; ?>" alt="" />
				     	<p><?php echo $content; ?></p>
				    </div>
				</li>
			<?php endwhile; ?>
			</ul>

		<?php endif;  ?>
	    <?php } ?>
	
	<?php wp_reset_query(); ?>
				  
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
