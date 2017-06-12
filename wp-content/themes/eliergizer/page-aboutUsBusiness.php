<?php
/**
 *Template name: o-nas-bussines
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="businessWrapper">
			<h2>
				<?php if(qtranxf_getLanguage() == 'ru') { ?>
					  <?php the_field('bussines-main-title'); ?>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					 <?php the_field('bussines-main-title-en'); ?>
				<?php } ?>
			</h2>
			<h3>
				<?php if(qtranxf_getLanguage() == 'ru') { ?>
					  <?php the_field('bussines-title-franchise'); ?>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					 <?php the_field('bussines-title-franchise-en'); ?>
				<?php } ?>
			</h3>

	<?php wp_reset_query(); ?>
		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('bussines-list-items-franchise') ): ?>


			<ul class="franshiz">

			<?php while( have_rows('bussines-list-items-franchise') ): the_row(); 

				// vars
				$digit = get_sub_field('items-franchise-number');
				$text = get_sub_field('items-franchise-text');
				?>

				<li>
					<div class="bigDigit">
						<span><?php echo $digit; ?></span>
						<p><?php echo $text; ?></p>
						
					</div>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('bussines-list-items-franchise-en') ): ?>


			<ul class="franshiz">

			<?php while( have_rows('bussines-list-items-franchise-en') ): the_row(); 

				// vars
				$digit = get_sub_field('items-franchise-number-en');
				$text = get_sub_field('items-franchise-text-en');

				?>

				<li>
					<div class="bigDigit">
						<span><?php echo $digit; ?></span>
						<p><?php echo $text; ?></p>
					</div>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } ?>


	
<?php wp_reset_query(); ?>

			
			<div class="modelBlock">
					<div class="factCaption">
						<h2><?php if(qtranxf_getLanguage() == 'ru') { ?>
								  <?php the_field('bussines-title-model-selection'); ?>
							<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
								 <?php the_field('bussines-title-model-selection-en'); ?>
							<?php } ?></h2>
					</div>

						<?php wp_reset_query(); ?>
		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('bussines-list-franchising-model') ): ?>


			<ul>

			<?php while( have_rows('bussines-list-franchising-model') ): the_row(); 

				// vars
				$text = get_sub_field('text-franchising-model');
				?>

				<li>
					<a class="boldButt"><?php echo $text; ?></a>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('bussines-list-franchising-model-en') ): ?>


			<ul>

			<?php while( have_rows('bussines-list-franchising-model-en') ): the_row(); 

				// vars
				$text = get_sub_field('text-franchising-model-en');

				?>

				<li>
					<a class="boldButt"><?php echo $text; ?></a>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } ?>


	
<?php wp_reset_query(); ?>
					
			</div>
			<div class="cooperation">
				<div class="factCaption">
							<h2>Виды сотрудничества, которые мы предлагаем:</h2>
				</div>
				<ul class="coop">
					<li>
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
						<?php the_field('bussines-types-of-cooperation-1'); ?>
						<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
						<?php the_field('bussines-types-of-cooperation-1-en'); ?>
						<?php } ?>	
					</li>
					<li>
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
						<?php the_field('bussines-types-of-cooperation-2'); ?>
						<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
						<?php the_field('bussines-types-of-cooperation-2-en'); ?>
						<?php } ?>	
					</li>
				</ul>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
do_action( 'storefront_sidebar' );
get_footer();