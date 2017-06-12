<?php
/**
 *Template name: o-nas-history
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="historyWrapper">
			<div class="content">
				<h2><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('title-story'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('title-story-en'); ?>
					    <?php } ?></h2>
				<p><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('story'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('story-en'); ?>
					    <?php } ?></p>
				<h2><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('history-title-tehnology'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('history-title-tehnology-en'); ?>
					    <?php } ?></h2>
				<p><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('history-tehnology-text'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('history-tehnology-text-en'); ?>
					    <?php } ?></p>

			</div>
			<div class="sidebar">
				<img src="<?php echo get_template_directory_uri(); ?>/images/aboutInf-img3.jpg" alt="" />
				<h2><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('title-luxury_design'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('title-luxury_design-en'); ?>
					    <?php } ?></h2>
				<p><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('text-luxury_design'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('text-luxury_design-en'); ?>
					    <?php } ?></p>
				<h2><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('title-obosn-tehnology-sidebar'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('title-obosn-tehnology-sidebar-en'); ?>
					    <?php } ?></h2>
				<p><?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('text-obosn-tehnology-sidebar'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('text-obosn-tehnology-sidebar-en'); ?>
					    <?php } ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="scienceWrapper">
				<div class="scienceFact">
				<div class="factCaption">
					
					<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h2>Научно обоснованные технологии</h2>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<h2>Scientifically based technology</h2>
					<?php } ?>
					
				</div>

				<?php if( have_rows('image-obosn-tehnology') ): ?>


				<ul class="o-nas-spisok">

				<?php while( have_rows('image-obosn-tehnology') ): the_row(); 

					// vars
					$tehnology = get_sub_field('image-technology');
					?>

						<li>
							<div class="publicElement">
								<div class="view effect">
									<img src="<?php echo $tehnology; ?>" alt="" />
									<a href="<?php echo $tehnology; ?>" class="fancyImg"></a>
								</div>
							</div>
						</li>

				<?php endwhile; ?>

				</ul>

			<?php endif;  ?>
	<?php wp_reset_query(); ?>

					
				</div>
		</div>
		<div class="opininionsWrapper">
			<div class="factCaption">
					<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h2>мнения ученых</h2>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<h2>opinions of scientists</h2>
					<?php } ?>
					
				</div>
				<ul>
					<li><?php the_field('video1'); ?></li>
					<li><?php the_field('video2'); ?></li>
				</ul>
			
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
do_action( 'storefront_sidebar' );
get_footer();