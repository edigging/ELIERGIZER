<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Page-contacts
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<div class="contactInfoWrapper">
			<?php if(qtranxf_getLanguage() == 'ru') { ?>
				<h2>ELIER kонтактная информация</h2>
			<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
				<h2>ELIER CONTACT INFORMATION</h2>
			<?php } ?>
			<ul>
				<li>
					<div class="contactBlock1">

						<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h3>Отдел информации:</h3>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h3>Department of information:</h3>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: <a href="mailto:<?php the_field('contact-email-department-of-information'); ?>"><?php the_field('contact-email-department-of-information'); ?></a></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>E-mail: <a href="mailto:<?php the_field('contact-email-department-of-information'); ?>"><?php the_field('contact-email-department-of-information'); ?></a></p>
					    <?php } ?>
						
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h4>Отдел маркетинга:</h4>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h4>Department of marketing:</h4>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Время работы: <?php the_field('contact-work-time'); ?></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>Work time: <?php the_field('contact-work-time'); ?></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Телефон: <a href="tel:+37126655802"><?php the_field('contact-phone'); ?></a></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>Phone: <a href="tel:+37126655802"><?php the_field('contact-phone'); ?></a></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: <a href="mailto:<?php the_field('contact-email-marketing-department'); ?>"><?php the_field('contact-email-marketing-department'); ?></a> </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>E-mail: <a href="mailto:<?php the_field('contact-email-marketing-department-en'); ?>"><?php the_field('contact-email-marketing-department'); ?></a> </p>
					    <?php } ?>

					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h4>Вопросы и предложения по бизнесу:</h4>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h4>Questions and suggestions for business:</h4>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: <a href="mailto:<?php the_field('contact-email-for-questions-business'); ?>"><?php the_field('contact-email-for-questions-business'); ?></a> </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>E-mail: <a href="mailto:<?php the_field('contact-email-for-questions-business'); ?>"><?php the_field('contact-email-for-questions-business'); ?></a> </p>
					    <?php } ?>

					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h4>Отдел ИТ:</h4>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h4>Department of IT:</h4>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p><?php the_field('contact-department-it-name'); ?></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p><?php the_field('contact-department-it-name-en'); ?></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Телефон: <a href="tel:+37126655801"><?php the_field('contact-department-it-phone'); ?></a></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>Phone: <a href="tel:+37126655801"><?php the_field('contact-department-it-phone'); ?></a></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: <a href="mailto:<?php the_field('contact-department-it-mail'); ?>"><?php the_field('contact-department-it-mail'); ?></a> </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>E-mail: <a href="mailto:<?php the_field('contact-department-it-mail-en'); ?>"><?php the_field('contact-department-it-mail'); ?></a> </p>
					    <?php } ?>

					</div>
				</li>
				<li>
					<div class="contactBlock2">
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h4>Общие вопросы: </h4>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h4>General questions: </h4>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<p>E-mail: </p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p><a href="mailto:<?php the_field('contact-email-department-of-information'); ?>"><?php the_field('contact-email-department-of-information'); ?></a></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p><a href="mailto:<?php the_field('contact-email-department-of-information'); ?>"><?php the_field('contact-email-department-of-information'); ?></a></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Телефон: </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<p>Phone: </p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p><a href="tel:+37126655801"><?php the_field('contact-department-it-phone'); ?></a></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p><a href="tel:+37126655801"><?php the_field('contact-department-it-phone'); ?></a></p>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Время работы: <?php the_field('contact-work-time'); ?></p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>Work time: <?php the_field('contact-work-time'); ?></p>
					    <?php } ?>

					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<h4 class="lastCap">Бухгалтерия: </h4>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<h4 class="lastCap">Accounting department: </h4>
					    <?php } ?>
					    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<p>Э-почта: <a href="mailto:<?php the_field('contact-department-accounting-mail'); ?>"><?php the_field('contact-department-accounting-mail'); ?></a> </p>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					    	<p>E-mail: <a href="mailto:<?php the_field('contact-department-accounting-mail'); ?>"><?php the_field('contact-department-accounting-mail'); ?></a> </p>
					    <?php } ?>
					</div>
				</li>
				<li>
					<div class="contactBlock3">
						<?php if(qtranxf_getLanguage() == 'ru') { ?>
					    	<?php the_field('contact-representative'); ?>
					    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					     	<?php the_field('contact-representative-en'); ?>
					    <?php } ?>
				</li>
			</ul>
		</div>
		<div class="contactFormWrapper">
			<div class="contactForm">

			    <?php if(qtranxf_getLanguage() == 'ru') { ?>
					<h2>Отослать нам сообщение:</h2>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					<h2>Send us a message:</h2>
				<?php } ?>

				<?php if(qtranxf_getLanguage() == 'ru') { ?>
					<?php echo do_shortcode( '[contact-form-7 id="77" title="Контактная форма"]' ); ?>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					 <?php echo do_shortcode( '[contact-form-7 id="351" title="Contacts form"]' ); ?>
				<?php } ?>

			</div>
		</div>
		<div class="shopWrapper">
			<div class="shopCaption">
				<?php if(qtranxf_getLanguage() == 'ru') { ?>
					<h2>Магазины</h2>
				<?php } elseif (qtranxf_getLanguage() == 'en') { ?>
					<h2>Our stores</h2>
				<?php } ?>
				
			</div>

<?php wp_reset_query(); ?>
		<?php if(qtranxf_getLanguage() == 'ru') { ?>
        	<?php if( have_rows('contacts-shops') ): ?>


		<ul>	

			<?php while( have_rows('contacts-shops') ): the_row(); 

				// vars
				$country = get_sub_field('contacts-shops-country');
				$map = get_sub_field('contacts-shops-map');
				$adress = get_sub_field('contacts-shops-adress');
				$worktime = get_sub_field('contacts-shops-work-time');
				$phone1 = get_sub_field('contacts-shops-phone-1');
				$phone2 = get_sub_field('contacts-shops-phone-2');
				$phone3 = get_sub_field('contacts-shops-phone-3');
				$email = get_sub_field('contacts-shops-email');
			?>
					<li>

					<div class="shopPlace">
							<h3 class="placeName"><?php echo $country; ?></h3>
						<div class="togglebox1">

							<h4><?php echo $adress; ?></h4>
							<div class="block">
								<div class="timeWork">
									<p class="levelingBot">Время работы магазина</p>
									<p><?php echo $worktime; ?></p>
									<p>Телефоны: </p>
									<p>
										<a href="tel:<?php echo $phone1; ?>"><?php echo $phone1; ?></a>
									</p>
									<p>
										<a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
									</p>
									<p  class="levelingBot">
										<a href="tel:<?php echo $phone3; ?>"><?php echo $phone3; ?></a>
									</p>
									<p>Э-почта: </p>
									<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
								</div>

									<img src="<?php echo $map; ?>" alt="" />
														
							</div>
							<h4><?php echo $adress; ?></h4>

						</div>
					</div>
					</li>

			<?php endwhile; ?>

		</ul>	

		<?php endif;  ?>
	    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
	     	<?php if( have_rows('contacts-shops') ): ?>


		<ul>	

			<?php while( have_rows('contacts-shops') ): the_row(); 

				// vars
				$country = get_sub_field('contacts-shops-country-en');
				$map = get_sub_field('contacts-shops-map');
				$adress = get_sub_field('contacts-shops-adress-en');
				$worktime = get_sub_field('contacts-shops-work-time-en');
				$phone1 = get_sub_field('contacts-shops-phone-1');
				$phone2 = get_sub_field('contacts-shops-phone-2');
				$phone3 = get_sub_field('contacts-shops-phone-3');
				$email = get_sub_field('contacts-shops-email');
			?>
					<li>

					<div class="shopPlace">
						<h3 class="placeName"><?php echo $country; ?></h3>
						<div class="togglebox1">

							<h4><?php echo $adress; ?></h4>
							<div class="block">
								<div class="timeWork">
									<p class="levelingBot">Time work store</p>
									<p><?php echo $worktime; ?></p>
									<p>Phones:</p>
									<p>
										<a href="tel:<?php echo $phone1; ?>"><?php echo $phone1; ?></a>
									</p>
									<p>
										<a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
									</p>
									<p  class="levelingBot">
										<a href="tel:<?php echo $phone3; ?>"><?php echo $phone3; ?></a>
									</p>
									<p>E-mail: </p>
									<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
								</div>

									<img src="<?php echo $map; ?>" alt="" />
														
							</div>
							<h4><?php echo $adress; ?></h4>

						</div>
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
get_footer();