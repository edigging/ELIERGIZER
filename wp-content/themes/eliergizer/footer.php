<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<div class="footer wrap">

				<div class="footer-menu"><?php do_action( 'storefront_secondary_navigation' ); ?>
					<div class="wrap-soc-but"><?php echo do_shortcode("[uptolike]"); ?></div>
				</div>

				<?php
					do_action( 'storefront_before_header' ); ?>

					<?php
					/**
					 * Functions hooked in to storefront_footer action
					 *
					 * @hooked storefront_secondary_navigation  - 30
					 * @hooked storefront_footer_widgets - 10
					 * @hooked storefront_credit         - 20
					 */
					do_action( 'storefront_footer' ); ?>

				<div class="clear"></div>
			</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


<?php wp_footer(); ?>




</body>
</html>
