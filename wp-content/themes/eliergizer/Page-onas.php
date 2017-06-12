<?php
/**
 * The template for displaying the homepage.
 *
 * Template name: O-nas
 *
 * @package storefront
 */
 get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
<div class="aboutInfoWrapper">

<?php wp_reset_query(); ?>
		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('o-nas-text') ): ?>


			<ul class="o-nas-spisok">

			<?php while( have_rows('o-nas-text') ): the_row(); 

				// vars
				$foto = get_sub_field('o-nas-foto');
				$title = get_sub_field('o-nas-title');
				$content = get_sub_field('o-nas-text');

				?>

				<li>
					<div class="aboutElement">
						<img src="<?php echo $foto; ?>" alt="" />
						<h2><?php echo $title; ?></h2>
						<p><?php echo $content; ?></p>
					</div>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('o-nas-text-en') ): ?>


			<ul class="o-nas-spisok">

			<?php while( have_rows('o-nas-text-en') ): the_row(); 

				// vars
				$foto = get_sub_field('foto-o-nas-en');
				$title = get_sub_field('o-nas-title-en');
				$content = get_sub_field('text-o-nas-en');

				?>

				<li>
					<div class="aboutElement">
						<img src="<?php echo $foto; ?>" alt="" />
						<h2><?php echo $title; ?></h2>
						<p><?php echo $content; ?></p>
					</div>
				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>
	    <?php } ?>


	
<?php wp_reset_query(); ?>


				
			</div>

			<div class="scienceWrapper">
				<div class="scienceFact">
				<div class="factCaption">
					<h2>
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
					       <?php the_field('title-tehnology'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('title-tehnology-en'); ?>
					    <?php } ?>
						
						
					</h2>
				</div>

					<?php if( have_rows('o-nas-tehnology') ): ?>


				<ul class="o-nas-spisok">

				<?php while( have_rows('o-nas-tehnology') ): the_row(); 

					// vars
					$tehnology = get_sub_field('tehnology');
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
			<div class="achievementsWrapper">
				<div class="factCaption">
					<h2>
					<?php if(qtranxf_getLanguage() == 'ru') { ?>
				       <?php the_field('title-achievements'); ?>
				    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
				     	<?php the_field('title-achievements-en'); ?>
				    <?php } ?>
					</h2>
				</div>

	<?php wp_reset_query(); ?>

		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('achievements') ): ?>


			<ul>

			<?php while( have_rows('achievements') ): the_row(); 

				// vars
				$foto = get_sub_field('image-achievements');
				$content = get_sub_field('text-achievements');

				?>

				<li>
						<div class="achiElement">
							<img src="<?php echo $foto; ?>" alt="" />
							<p><?php echo $content; ?></p>
						</div>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif;  ?>

	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('achievements-en') ): ?>


			<ul>

			<?php while( have_rows('achievements-en') ): the_row(); 

				// vars
				$foto = get_sub_field('image-achievements-en');
				$content = get_sub_field('text-achievements');

				?>

				<li>
					<div class="achiElement">
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