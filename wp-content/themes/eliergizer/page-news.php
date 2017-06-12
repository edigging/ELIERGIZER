<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: News
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-main-width" role="main">
		
		<?php wp_reset_postdata();
		query_posts( array( 'cat' => 19, 'posts_per_page' => 6, 'order' => 'ASC', 'paged' => get_query_var('paged') ) );
		?>

			<ul class="loop-news">
         	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( in_category('19') ) { ?>
            	<li>
            		<div class="loop-post-img">
            			<?php if (has_post_thumbnail()) {
						    storefront_post_thumbnail( 'full' );
						}
						else {
						     echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg' . '" width="100%" height="auto" alt=" " />';
						}
						?>
					</div>
					<div class="loop-post-content">
	            		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
	            		<p class="datePub"><?php the_date(); ?></p>
	            		<p><?php echo content(40); ?></p>
	            		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p class="href-full-post"><?php echo __('[:en]Learn More[:ru]Подробнее'); ?></p></a>
	            	</div>
            	</li>
             <?php } ?>
           <?php endwhile; endif; wp_reset_postdata(); ?>
           <p><?php wp_pagenavi(); ?></p>
            </ul>

			
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>