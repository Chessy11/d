<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solustrid
 */
$solustrid_options     = solustrid_options();
$copyright             = $solustrid_options['solustrid-footer-copyright'];
$solustrid_footer_type = isset( $solustrid_options['solustrid-footer-type'] ) ? $solustrid_options['solustrid-footer-type'] : 1;
if ( isset( $solustrid_options['solustrid-show-footer-logo'] ) && $solustrid_options['solustrid-show-footer-logo'] ) {
	$footer_logo_url = $solustrid_options['solustrid-footer-logo']['url'];
} else {
	$footer_logo_url = false;
}
?>
<!--Main Footer-->
<footer class="main-footer">
	<div class="auto-container">
		<!--Widgets Section-->
		<?php
		if ( $footer_logo_url || is_active_sidebar( 'footer_column_1' ) || is_active_sidebar( 'footer_column_2' || is_active_sidebar( 'footer_column_3' ) || is_active_sidebar( 'footer_column_4' ) ) ) {
			if ( $solustrid_footer_type ) {
				get_template_part( 'template-parts/footer', '1' );
			} else {
				get_template_part( 'template-parts/footer', '2' );
			}
		}
		?>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="clearfix">
				<div class="pull-left">
					<div class="copyright">
						<?php
						if ( ! empty( $copyright ) ) {
							echo wp_kses_post( $copyright );
						} else {
							echo wp_kses_post( '&copy; 2019 Solustrid Industry Theme. All rights reserved.', 'solustrid' );
						}
						?>
					</div>
				</div>
				<div class="pull-right">
					<?php
					if ( isset( $solustrid_options['solustrid-footer-social-icon'] ) && $solustrid_options['solustrid-footer-social-icon'] ) {
						solustrid_social_links();
					}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>  
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->
<?php wp_footer(); ?>
</body>
</html>
