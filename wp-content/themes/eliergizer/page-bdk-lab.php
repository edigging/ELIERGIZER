<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: bdk-lab
 *
 * @package storefront
 */

get_header(); ?>
<div id="primary" class="content-area otzyv">
	<main id="main" class="site-main" role="main">

	<div class="mainBdkWrapper">
			<div class="content">
				<img class="topImg" src="<?php echo get_template_directory_uri(); ?>/images/contentImg.jpg" alt="" />
				<div class="contentInner">
					<?php if(qtranxf_getLanguage() == 'ru') { ?>
					   <?php the_field('bdk-main-text'); ?>
					<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					   <?php the_field('bdk-main-text-en'); ?>
					<?php } ?>
					
				</div>
			</div>
			<div class="sidebar">
				<img class="topImg" src="<?php echo get_template_directory_uri(); ?>/images/sidebarImg.jpg" alt="" />
				<div class="sideInner">
					<?php if(qtranxf_getLanguage() == 'ru') { ?>
					   <h2>Каталог <span> BDK Laboratory</span></h2>
					<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					   <h2>Catalog <span> BDK Laboratory</span></h2>
					<?php } ?>
					
					<a href="http://mywebsite.mcdir.ru/eliergizer/wp-content/uploads/2017/05/bdk-catalog.pdf" class="catDownload" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/dowloadIco.png" alt="" /></a>
					<img src="<?php echo get_template_directory_uri(); ?>/images/squareImg.jpg" alt="" />

				</div>

				<a href="<?php echo get_page_link( 91 ); ?>" class="boldButt"><?php echo __('[:en]BDK Laboratory Procedures[:ru]Процедуры BDK Laboratory'); ?></a>
				<a href="<?php echo get_page_link( 91 ); ?>" class="boldButt"><?php echo __('[:en]reviews[:ru]отзывы'); ?></a>
			</div>
			<div class="clear"></div>
		</div>
			
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>