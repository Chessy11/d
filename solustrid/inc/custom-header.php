<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package solustrid
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses solustrid_header_style()
 */
function solustrid_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'solustrid_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'solustrid_header_style',
			)
		)
	);
}

add_action( 'after_setup_theme', 'solustrid_custom_header_setup' );

if ( ! function_exists( 'solustrid_header_style' ) ) {

	function solustrid_header_style() {
		$header_text_color = get_header_textcolor();
		/*
		* If no custom options for text are set, let's bail.
		* get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		*/
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}
		if ( ! display_header_text() ) {
			$solustrid_cus_css = '.site-title,
			.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
			}';
			wp_add_inline_style( 'solustrid-style', $solustrid_cus_css );
		} else {
			$solustrid_cus_css = '.site-title a,
				.site-description {
				color: #' . esc_attr( $header_text_color ) . '
				}
				';
			wp_add_inline_style( 'solustrid-style', $solustrid_cus_css );
		}
	}
}

function solustrid_get_header_logo() {

	if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) {
		$output = get_custom_logo();
		if ( empty( $output ) ) {
			?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( SOLUSTRID_IMG_URL . 'logo.svg' ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
			<?php
		} else {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			$header_type    = get_query_var( 'header_type' );
			if ( $header_type != '3' ) {
				?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
				<?php
			} else {
				?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( SOLUSTRID_IMG_URL . 'logo-white.svg' ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
				<?php
			}
			?>
			<?php
		}
	} else {
		?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( SOLUSTRID_IMG_URL . 'logo.svg' ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
		<?php
	}
}

function solustrid_get_header_logo_small() {
	if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) {
		$output = get_custom_logo();
		if ( empty( $output ) ) {
			?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( SOLUSTRID_IMG_URL . 'logo.svg' ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
			<?php
		} else {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
			<?php
		}
	} else {
		?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo esc_url( SOLUSTRID_IMG_URL . 'logo.svg' ); ?>" alt="<?php esc_attr_e( 'Logo', 'solustrid' ); ?>">
</a>
		<?php
	}
}

function solustrid_social_links() {
	$solustrid_options  = solustrid_options();
	$header_facebook    = $solustrid_options['solustrid-header-facebook'];
	$header_google_plus = $solustrid_options['solustrid-header-google-plus'];
	$header_twitter     = $solustrid_options['solustrid-header-twitter'];
	$header_youtube     = $solustrid_options['solustrid-header-youtube'];
	$header_instagram   = $solustrid_options['solustrid-header-instagram'];
	$header_linkedin    = $solustrid_options['solustrid-header-linkedin'];
	?>
<ul class="social-links clearfix">
	<?php if ( isset( $header_facebook ) && $header_facebook != '' ) { ?>
  <li><a href="<?php echo esc_url( $header_facebook ); ?>"><span class="fab fa-facebook-f"></span></a></li>
		<?php
	}
	if ( isset( $header_google_plus ) && $header_google_plus != '' ) {
		?>
  <li><a href="<?php echo esc_url( $header_google_plus ); ?>"><span class="fab fa-google-plus-g"></span></a></li>
		<?php
	}
	if ( isset( $header_twitter ) && $header_twitter != '' ) {
		?>
  <li><a href="<?php echo esc_url( $header_twitter ); ?>"><span class="fab fa-twitter"></span></a></li>
		<?php
	}
	if ( isset( $header_instagram ) && $header_instagram != '' ) {
		?>
  <li><a href="<?php echo esc_url( $header_instagram ); ?>"><span class="fab fa-linkedin-in"></span></a></li>
		<?php
	}
	if ( isset( $header_youtube ) && $header_youtube != '' ) {
		?>
  <li><a href="<?php echo esc_url( $header_youtube ); ?>"><span class="fab fa-youtube"></span></a></li>
		<?php
	}
	if ( isset( $header_linkedin ) && $header_linkedin != '' ) {
		?>
  <li><a href="<?php echo esc_url( $header_linkedin ); ?>"><span class="fab fa-linkedin"></span></a></li>
		<?php
	}
	?>
</ul>
	<?php
}

function solustrid_nav_menu( $container_id = 'navbarSupportedContent', $show = '' ) {
	$solustrid_menu_id = '';
	if ( has_nav_menu( 'primary' ) ) {
		$solustrid_menu_id = 'primary';
	}
	if ( ! empty( $solustrid_menu_id ) ) {
		wp_nav_menu(
			array(
				'theme_location'  => $solustrid_menu_id,
				'depth'           => 4, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse ' . $show,
				'container_id'    => $container_id,
				'menu_class'      => 'navigation clearfix',
				'fallback_cb'     => 'WP_Solustrid_Navwalker::fallback',
				'walker'          => new WP_Solustrid_Navwalker(),
			)
		);
	} else {
		wp_nav_menu(
			array(
				'depth'           => 4, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse ' . $show,
				'container_id'    => $container_id,
				'menu_class'      => 'navigation clearfix',
				'fallback_cb'     => 'WP_Solustrid_Navwalker::fallback',
				'walker'          => new WP_Solustrid_Navwalker(),
			)
		);
	}
}

function sticky_header() {
	$solustrid_options  = solustrid_options();
	$header_sticky_logo = isset( $solustrid_options['solustrid-sticky-logo']['url'] ) ? $solustrid_options['solustrid-sticky-logo']['url'] : '';
	$sticky_header      = isset( $solustrid_options['solustrid-sticky-header'] ) ? $solustrid_options['solustrid-sticky-header'] : 0;
	if ( $sticky_header ) {
		?>
<div class="sticky-header">
  <div class="auto-container clearfix">
	<!--Logo-->
	<div class="logo pull-left sticky-logo">
		<?php if ( $header_sticky_logo != '' ) { ?>
	  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_sticky_logo ); ?>"
		  alt="image" /></a>
			<?php
		} else {
			solustrid_get_header_logo_small();
		}
		?>
	</div>
	<!--Right Col-->
	<div class="pull-right">
	  <!-- Main Menu -->
	  <nav class="main-menu">
		<?php
		solustrid_nav_menu( '', 'show' );
		?>
	  </nav><!-- Main Menu End-->
	</div>
  </div>
</div><!-- End Sticky Menu -->
		<?php
	}
}
