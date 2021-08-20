<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solustrid
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php
		if ( function_exists( 'has_site_icon' ) && has_site_icon() ) { // since 4.3.0
			wp_site_icon();
		}
		?>
		<!--Responsive -->
		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div class="page-wrapper">
			<!-- Preloader -->
			<?php
			do_action( 'solustrid_preloader' );
			?>
			<?php
			$solustrid_options = solustrid_options();
			$header_type       = get_query_var( 'header_type' );
			if ( ! $header_type ) {
				$header_type = $solustrid_options['solustrid-header-type'];
			}

			if ( ! $header_type ) {
				$header_type = 1;
			}
			get_template_part( 'template-parts/header', $header_type );
