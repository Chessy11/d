<?php
if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'solustrid_opt';

$theme      = wp_get_theme(); // For use with some settings. Not necessary.
$opt_prefix = 'solustrid';

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'                  => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'              => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version'           => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type'                 => 'menu',
	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'            => true,
	// Show the sections below the admin menu item or not
	'menu_title'                => esc_html__( 'Solustrid Options', 'solustrid' ),
	'page_title'                => esc_html__( 'Solustrids Options', 'solustrid' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'            => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly'      => false,
	// Must be defined to add google fonts to the typography module
	'disable_google_fonts_link' => true,
	'async_typography'          => false,
	// Use a asynchronous font on the front end or font string
	'admin_bar'                 => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'            => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'        => 50,
	// Choose an priority for the admin bar menu
	'global_variable'           => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'                  => false,
	// Show the time the page took to load, etc
	'update_notice'             => true,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'                => true,
	// OPTIONAL -> Give you extra features
	'page_priority'             => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'               => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'          => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'                 => '',
	// Specify a custom URL to an icon
	'last_tab'                  => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'                 => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'                 => '',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults'             => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'              => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'              => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'        => true,
	// Shows the Import/Export panel when not used as a field.
	// CAREFUL -> These options are for advanced use only
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'                    => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'                => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'                  => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'use_cdn'                   => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	// HINTS
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);


Redux::setArgs( $opt_name, $args );
Redux::setSection(
	$opt_name,
	array(
		'title'  => esc_html__( 'Theme Color Settings', 'solustrid' ),
		'id'     => 'color_m_settings',
		'desc'   => esc_html__( 'Theme Color settings', 'solustrid' ),
		'icon'   => 'el el-website',
		'fields' => array(
			array(
				'id'       => 'color_one_settings',
				'type'     => 'color_rgba',
				'title'    => __( 'Color Main', 'solustrid' ),
				'subtitle' => __( 'Gives color.', 'solustrid' ),
				'default'  => array(
					'alpha' => 1,
					'rgba'  => '#df6512',
				),
			),
			array(
				'id'       => 'color_two_settings',
				'type'     => 'color_rgba',
				'title'    => __( 'Color Secondery', 'solustrid' ),
				'subtitle' => __( 'Gives color.', 'solustrid' ),
				'default'  => array(
					'alpha' => 1,
					'rgba'  => '#001e57',
				),
			),
			array(
				'id'       => 'color_header_top_settings',
				'type'     => 'color_rgba',
				'title'    => __( 'Header top bar bg', 'solustrid' ),
				'subtitle' => __( 'Gives color.', 'solustrid' ),
				'default'  => array(
					'alpha' => 1,
					'rgba'  => '',
				),
			),
			array(
				'id'       => 'color_foter_bg_settings',
				'type'     => 'color_rgba',
				'title'    => __( 'Footer bg', 'solustrid' ),
				'subtitle' => __( 'Gives color.', 'solustrid' ),
				'default'  => array(
					'alpha' => 1,
					'rgba'  => '',
				),
			),
		),
	)
);
Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Settings', 'solustrid' ),
		'id'               => 'header_settings',
		'desc'             => esc_html__( 'All header settings', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-preloader',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Preloader', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Preloader', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-sticky-header',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Header Sticky', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Header Sticky', 'solustrid' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-sticky-logo',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'subtitle' => esc_html__( 'Add/Upload logo using the WordPress native uploader', 'solustrid' ),
				'title'    => esc_html__( 'Sticky Logo', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-header-type',
				'type'    => 'select',
				'title'   => esc_html__( 'Select Header', 'solustrid' ),
				'options' => array(
					'1' => esc_html__( 'Header 1', 'solustrid' ),
					'2' => esc_html__( 'Header 2', 'solustrid' ),
					'3' => esc_html__( 'Header 3', 'solustrid' ),
					'4' => esc_html__( 'Header 4', 'solustrid' ),
					'5' => esc_html__( 'Header 5', 'solustrid' ),
					'6' => esc_html__( 'Header 6', 'solustrid' ),
					'7' => esc_html__( 'Header 7', 'solustrid' ),
				),
				'default' => '1',
			),
			array(
				'id'       => 'Header',
				'type'     => 'section',
				'title'    => esc_html__( 'Header Content', 'solustrid' ),
				'subtitle' => esc_html__( 'With the "section" field you can create indented option sections.', 'solustrid' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => $opt_prefix . '-header-top',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Header Top', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or disable header content', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-topinfo-text',
				'type'    => 'text',
				'title'   => esc_html__( 'Header Info', 'solustrid' ),
				'default' => esc_html__( 'We offer revolution of industrial engineering', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-language-sidebar',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Language Menu', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Language Menu', 'solustrid' ),
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-header-facebook',
				'type'    => 'text',
				'title'   => esc_html__( 'Facebook URL', 'solustrid' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header-google-plus',
				'type'    => 'text',
				'title'   => esc_html__( 'Google Plus URL', 'solustrid' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header-twitter',
				'type'    => 'text',
				'title'   => esc_html__( 'Twitter URL', 'solustrid' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header-instagram',
				'type'    => 'text',
				'title'   => esc_html__( 'Instagram URL', 'solustrid' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header-youtube',
				'type'    => 'text',
				'title'   => esc_html__( 'Youtube URL', 'solustrid' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'    => $opt_prefix . '-header-linkedin',
				'type'  => 'text',
				'title' => esc_html__( 'Linkedin URL', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-header-mobile-phone',
				'type'    => 'text',
				'title'   => esc_html__( 'Page Header Phone', 'solustrid' ),
				'default' => esc_html__( '(934) 256 7850', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-header-mobile-hour',
				'type'    => 'text',
				'title'   => esc_html__( 'Page Header Hour', 'solustrid' ),
				'default' => esc_html__( 'Mon - fri: 9:00 to 18:00', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-header-mobile-email',
				'type'    => 'text',
				'title'   => esc_html__( 'Page Header Email', 'solustrid' ),
				'default' => esc_url( 'info@example.com' ),
			),
			array(
				'id'      => $opt_prefix . '-header-mobile-location',
				'type'    => 'text',
				'title'   => esc_html__( 'Page Header location', 'solustrid' ),
				'default' => esc_html__( '3261 Anmoore Road Brooklyn, NY 11230', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-quote-button',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Quotetion Button', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Button', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'      => $opt_prefix . '-get-a-quote',
				'type'    => 'text',
				'title'   => esc_html__( 'Get an Estimate', 'solustrid' ),
				'default' => esc_html__( 'Get an Estimate', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-quote-url',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Quote - URL Validated', 'solustrid' ),
				'subtitle' => esc_html__( 'This must be a URL.', 'solustrid' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'solustrid' ),
				'validate' => 'url',
				'default'  => esc_url( 'http://smart.commonsupport.com/solustrid/' ),
			),
			array(
				'id'   => 'section-info',
				'type' => 'info',
				'desc' => esc_html__( 'And now you can add more fields below and outside of the indent.', 'solustrid' ),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Blog Settings', 'solustrid' ),
		'id'               => 'blog_header_settings',
		'desc'             => esc_html__( 'All Blog settings', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-show-breadcrumb',
				'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb in Blog Page', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Breadcrumb in Blog Page', 'solustrid' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-show-post-title',
				'type'     => 'switch',
				'title'    => esc_html__( 'Title in Blog Single Page', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or Disable Title in Blog Single Page', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '_header_image',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'solustrid' ),
				'subtitle' => esc_html__( 'Add/Upload Header Image using the WordPress native uploader', 'solustrid' ),
				'title'    => esc_html__( 'Header Image', 'solustrid' ),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Google Maps', 'solustrid' ),
		'id'               => 'gmaps_settings',
		'desc'             => esc_html__( 'Google Maps Settings', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'      => $opt_prefix . '-maps-key',
				'type'    => 'text',
				'title'   => esc_html__( 'Key', 'solustrid' ),
				'default' => '',
			),
		),
	)
);


Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Typography', 'solustrid' ),
		'id'               => 'fonts_settings',
		'desc'             => esc_html__( 'Typography', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-font',
		'fields'           => array(
			array(
				'id'         => $opt_prefix . '-body_typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'Body Typography', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select body font family, size, line height, color and weight.', 'solustrid' ),
				'text-align' => false,
				'subsets'    => false,
				'default'    => array(
					'font-family' => 'Open Sans',
					'google'      => true,
					'font-size'   => '16px',
					'line-height' => '28px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-1-2-lg-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H1, H2 lg Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '50px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '60px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-2-1-sm-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H2, H1 sm Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '36px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '40px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-3-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H3 Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '24px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '1.2em',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-4-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H4 Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '22px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '28px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-5-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H5 Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '20px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '28px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-6-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H6 Font', 'solustrid' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'solustrid' ),
				'google'     => true,
				'text-align' => false,
				'default'    => array(
					'font-size'   => '16px',
					'font-family' => 'Open Sans',
					'font-weight' => '600',
					'line-height' => '28px',
				),
			),
			array(
				'id'          => $opt_prefix . '-widget_title_typography',
				'type'        => 'typography',
				'title'       => esc_html__( 'Widget Title', 'solustrid' ),
				'subtitle'    => esc_html__( 'Widget title typography settings', 'solustrid' ),
				'text-align'  => false,
				'line-height' => false,
				'subsets'     => false,
				'default'     => array(
					'color'       => '#000',
					'font-weight' => '400',
					'font-family' => 'Open Sans',
					'google'      => true,
					'font-size'   => '24px',
				),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer Settings', 'solustrid' ),
		'id'               => 'footer_settings',
		'desc'             => esc_html__( 'These are really basic fields!', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-share',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-footer-type',
				'type'     => 'switch',
				'title'    => esc_html__( 'Footer Type One or Two', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or disable', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-show-footer-logo',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Footer Logo', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or disable Footer Logo', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-footer-logo',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'solustrid' ),
				'subtitle' => esc_html__( 'Add/Upload logo using the WordPress native uploader', 'solustrid' ),
				'title'    => esc_html__( 'Footer Logo', 'solustrid' ),
				'default'  => array(
					'url' => esc_url( SOLUSTRID_IMG_URL . 'footer-logo.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-footer-copyright',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Copyright', 'solustrid' ),
				'subtitle' => esc_html__( 'Copyright Text', 'solustrid' ),
				'default'  => esc_html__( '&copy; 2019 Solustrid Industry Theme. All rights reserved.', 'solustrid' ),
			),
			array(
				'id'       => $opt_prefix . '-footer-social-icon',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Social Icon', 'solustrid' ),
				'subtitle' => esc_html__( 'Enable or disable Social Icon', 'solustrid' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'solustrid' ),
				'off'      => esc_html__( 'Disable', 'solustrid' ),
			),
		),
	)
);


Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Extra Settings', 'solustrid' ),
		'id'               => 'extra_settings',
		'desc'             => esc_html__( 'These are really basic fields!', 'solustrid' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-share',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-slug_postype_solustrid_services',
				'type'     => 'text',
				'title'    => esc_html__( 'Custom Post Type Services Slug', 'solustrid' ),
				'subtitle' => esc_html__( 'Solustrid Service Slug Name', 'solustrid' ),
				'desc'     => 'You might have to flush your permalinks after you performed this action Settings=> Permalink Settings',
			),
			array(
				'id'       => $opt_prefix . '-slug_postype_solustrid_project',
				'type'     => 'text',
				'title'    => esc_html__( 'Custom Post Type Project Slug', 'solustrid' ),
				'subtitle' => esc_html__( 'Solustrid Project Slug Name', 'solustrid' ),
				'desc'     => 'You might have to flush your permalinks after you performed this action Settings=> Permalink Settings',
			),
			array(
				'id'       => 'extra_css',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'Extra CSS', 'solustrid' ),
				'subtitle' => esc_html__( 'Extra CSS just after theme styles', 'solustrid' ),
				'mode'     => 'css',
			),
		),
	)
);
