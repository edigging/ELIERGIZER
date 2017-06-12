<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: publications
 *
 * @package storefront
 */

get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="publicationsWrapper">
							
		<?php wp_reset_postdata();
		query_posts( array( 'cat' => 24, 'posts_per_page' => 6, 'order' => 'ASC', 'paged' => get_query_var('paged') ) );
		?>

			<ul>
         	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( in_category('24') ) { ?>
            	<li>
					<div class="publicElement">
						<div class="view effect">
							<?php if (has_post_thumbnail()) {
						    storefront_post_thumbnail( 'full' );
							}
							else {
							     echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg' . '" width="100%" height="auto" alt=" " />';
							}
							?>
							<a href="<?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); echo $thumbnail_attributes[0]; ?>" class="fancyImg"></a>
						</div>
						<a class="post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
            	</li>
             <?php } ?>
           <?php endwhile; endif; wp_reset_postdata(); ?>
           <p><?php wp_pagenavi(); ?></p>
            </ul>

		</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>