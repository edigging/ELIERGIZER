<?php
/**
 *Template name: o-nas-charity
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="charityWrapper">

		<?php wp_reset_query(); ?>

		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('charity-tabs') ): ?>

			<ul>
			<?php while( have_rows('charity-tabs') ): the_row(); 
				// vars
				$foto = get_sub_field('charity-tab-image');
				$title = get_sub_field('charity-tab-title');
				$content = get_sub_field('charity-tab-text');
				?>
				<li>
					<img src="<?php echo $foto; ?>" alt="" />
					<h2><?php echo $title; ?></h2>
					<p><?php echo $content; ?></p>
				</li>
			<?php endwhile; ?>
			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('charity-tabs-en') ): ?>

			<ul>
			<?php while( have_rows('charity-tabs-en') ): the_row(); 
				// vars
				$foto = get_sub_field('charity-tab-image-en');
				$title = get_sub_field('charity-tab-title-en');
				$content = get_sub_field('charity-tab-text-en');
				?>
				<li>
					<img src="<?php echo $foto; ?>" alt="" />
					<h2><?php echo $title; ?></h2>
					<p><?php echo $content; ?></p>
				</li>
			<?php endwhile; ?>
			</ul>

		<?php endif;  ?>
	    <?php } ?>
	
<?php wp_reset_query(); ?>
			
		</div>
		<div class="weHelpWrapper">
			<div class="factCaption">
				<?php if(qtranxf_getLanguage() == 'ru') { ?>
				    <h2>Кому мы уже помогли</h2>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
				 	<h2>Who we have helped</h2>
				<?php } ?>
			</div>
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
		</div>
		<div class="gratitudeWrapper">
			<div class="factCaption">
				<?php if(qtranxf_getLanguage() == 'ru') { ?>
				    <h2>Благодарности</h2>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
				 	<h2>Commendations</h2>
				<?php } ?>
			</div>

		<?php wp_reset_query(); ?>

		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('charity-commendation') ): ?>

			<ul>
			<?php while( have_rows('charity-commendation') ): the_row(); 
				// vars
				$link = get_sub_field('charity-commendation-text');
				?>
				<li>
					<a href="#" class="boldButt"><?php echo $link; ?></a>
				</li>
			<?php endwhile; ?>
			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('charity-commendation-en') ): ?>

			<ul>
			<?php while( have_rows('charity-commendation-en') ): the_row(); 
				// vars
				$link = get_sub_field('charity-commendation-text-en');
				?>
				<li>
					<a href="#" class="boldButt"><?php echo $link; ?></a>
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