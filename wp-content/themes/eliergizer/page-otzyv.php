<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: otzyvy
 *
 * @package storefront
 */

get_header(); ?>
<div id="primary" class="content-area otzyv">
		<main id="main" class="site-main" role="main">

		<?php wp_reset_postdata();
		query_posts( array( 'cat' => 20, 'posts_per_page' => 6, 'order' => 'ASC', 'paged' => get_query_var('paged') ) );
		?>

			<ul class="loop-news loop-otzyv">
         	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( in_category('20') ) { ?>
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
	            		<p class="datePublic"><?php the_date(); ?></p>
	            		<span class="fio">Георгий Коновалов. Руководитель бани в Санкт-Петербурге, профессиональный банщик.</span>
	            		<p><a class="otzyv-content-href"><?php echo the_content(); ?></a></p>
	            	</div>
            	</li>
             <?php } ?>
           <?php endwhile; endif; wp_reset_postdata(); ?>
           <p><?php wp_pagenavi(); ?></p>
            </ul>

            <div class="scienceWrapper">
				<div class="scienceFact">
				<div class="factCaption">
					<h2>Научно обоснованные технологии</h2>
				</div>
					<ul>
						<li>
							<div class="publicElement">
								<div class="view effect">
									<img src="<?php echo get_template_directory_uri(); ?>/images/factImg.jpg" alt="" />
									<a href="<?php echo get_template_directory_uri(); ?>/images/squareImg.jpg" class="fancyImg"></a>
								</div>
							</div>
						</li>
						<li>
							<div class="publicElement">
								<div class="view effect">
									<img src="<?php echo get_template_directory_uri(); ?>/images/factImg2.jpg" alt="" />
									<a href="<?php echo get_template_directory_uri(); ?>/images/squareImg.jpg" class="fancyImg"></a>
								</div>
							</div>
						</li>
						<li>
							<div class="publicElement">
								<div class="view effect">
									<img src="<?php echo get_template_directory_uri(); ?>/images/factImg3.jpg" alt="" />
									<a href="<?php echo get_template_directory_uri(); ?>/images/squareImg.jpg" class="fancyImg"></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
		</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>