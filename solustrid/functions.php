<?php
/**
 * solustrid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package solustrid
 */
defined( 'SOLUSTRID_THEME_URI' ) or define( 'SOLUSTRID_THEME_URI', get_template_directory_uri() );
define( 'SOLUSTRID_CSS_URL', SOLUSTRID_THEME_URI . '/assets/css' );
define( 'SOLUSTRID_JS_URL', SOLUSTRID_THEME_URI . '/assets/js' );
define( 'SOLUSTRID_FONTS_URL', SOLUSTRID_THEME_URI . '/assets/fonts' );
define( 'SOLUSTRID_IMG_URL', SOLUSTRID_THEME_URI . '/assets/images/' );
define( 'SOLUSTRID_THEME_DIR', get_template_directory() );
define( 'SOLUSTRID_FREAMWORK_DIRECTORY', SOLUSTRID_THEME_DIR . '/framework/' );

require_once SOLUSTRID_FREAMWORK_DIRECTORY . 'plugin-list.php';

/*
 * Redux framework configuration
 */
require_once SOLUSTRID_FREAMWORK_DIRECTORY . 'redux.config.php';
require_once SOLUSTRID_FREAMWORK_DIRECTORY . 'class-wp-solustrid-navwalker.php';
/** Enable support TGM features. */
require_once SOLUSTRID_FREAMWORK_DIRECTORY . 'class-tgm-plugin-activation.php';
require_once SOLUSTRID_FREAMWORK_DIRECTORY . 'config-tgm.php';

require_once SOLUSTRID_FREAMWORK_DIRECTORY . '/dashboard/class-solustrid-dashboard.php';

if ( ! function_exists( 'solustrid_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function solustrid_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on solustrid, use a find and replace
		 * to change 'solustrid' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'solustrid', get_template_directory() . '/languages' );
		add_editor_style( SOLUSTRID_CSS_URL . '/editor-style.css' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_image_size( 'solustrid_blog_latest_news ', 370, 350, true ); // 220 pixels wide by 180 pixels tall, hard
		add_image_size( 'solustrid_blog_car_news ', 370, 257, true ); // 220 pixels wide by 180 pixels tall, hard
		add_image_size( 'power_blog_car_news ', 370, 300, true ); // 220 pixels wide by 180 pixels tall, hard

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.~
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'solustrid' ),
			)
		);

		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'gallery',
				'audio',
				'video',
			)
		);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'solustrid_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Small', 'solustrid' ),
					'shortName' => esc_html__( 'S', 'solustrid' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'solustrid' ),
					'shortName' => esc_html__( 'M', 'solustrid' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'solustrid' ),
					'shortName' => esc_html__( 'L', 'solustrid' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'solustrid' ),
					'shortName' => esc_html__( 'XL', 'solustrid' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'strong yellow', 'solustrid' ),
					'slug'  => 'strong-yellow',
					'color' => '#f7bd00',
				),
				array(
					'name'  => esc_html__( 'strong white', 'solustrid' ),
					'slug'  => 'strong-white',
					'color' => '#fff',
				),
				array(
					'name'  => esc_html__( 'light black', 'solustrid' ),
					'slug'  => 'light-black',
					'color' => '#242424',
				),
				array(
					'name'  => esc_html__( 'very light gray', 'solustrid' ),
					'slug'  => 'very-light-gray',
					'color' => '#797979',
				),
				array(
					'name'  => esc_html__( 'very dark black', 'solustrid' ),
					'slug'  => 'very-dark-black',
					'color' => '#000000',
				),
			)
		);
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		// Add custom thumb size
		set_post_thumbnail_size( 870, 483, false );
		add_image_size( 'solustrid_blog_post_featured_image', 770, 462, true );
		add_image_size( 'solustrid_sidebar_post_image', 75, 70, true );
		add_image_size( 'solustrid-serives-single', 770, 441, true );
		add_image_size( 'solustrid-blog-carousel', 370, 411, true );
		add_image_size( 'solustrid-blog-sidebar', 75, 70, true );
	}

endif;
add_action( 'after_setup_theme', 'solustrid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solustrid_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'solustrid_content_width', 640 );
}

add_action( 'after_setup_theme', 'solustrid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solustrid_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'solustrid' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="sidebar-title"><h5>',
			'after_title'   => '</h5></div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Services Sidebar', 'solustrid' ),
			'id'            => 'servicesidebar',
			'description'   => esc_html__( 'Service sidebar area', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Project Sidebar', 'solustrid' ),
			'id'            => 'projectsidebar',
			'description'   => esc_html__( 'Project sidebar area', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="">',
			'after_title'   => '</h5>',
		)
	);

	$solustrid_options = solustrid_options();
	$language_sidebar  = isset( $solustrid_options['solustrid-language-sidebar'] ) ? $solustrid_options['solustrid-language-sidebar'] : 0;
	if ( $language_sidebar ) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Header Language Menu', 'solustrid' ),
				'id'            => 'language_sidebar',
				'description'   => esc_html__( 'Language sidebar area', 'solustrid' ),
				'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="">',
				'after_title'   => '</h5>',
			)
		);
	}

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'solustrid' ),
			'id'            => 'footer_column_1',
			'description'   => esc_html__( 'Widgets in this area will be shown on footer widget.', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'solustrid' ),
			'id'            => 'footer_column_2',
			'description'   => esc_html__( 'Widgets in this area will be shown on footer widget.', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'solustrid' ),
			'id'            => 'footer_column_3',
			'description'   => esc_html__( 'Widgets in this area will be shown on footer widget.', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'solustrid' ),
			'id'            => 'footer_column_4',
			'description'   => esc_html__( 'Widgets in this area will be shown on footer widget.', 'solustrid' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'solustrid_widgets_init' );

function solustrid_scripts() {
	wp_enqueue_style( 'bootstrap', SOLUSTRID_CSS_URL . '/bootstrap.css', '', null );
	wp_enqueue_style( 'pe-icon-7-stroke', SOLUSTRID_CSS_URL . '/pe-icon-7-stroke.css', '', null );
	wp_enqueue_style( 'imple-line-icons', SOLUSTRID_CSS_URL . '/simple-line-icons.css', '', null );
	wp_enqueue_style( 'fontawesome-all', SOLUSTRID_CSS_URL . '/fontawesome-all.css', '', null );
	wp_enqueue_style( 'animate', SOLUSTRID_CSS_URL . '/animate.css', array( 'elementor-animations' ), null );
	wp_enqueue_style( 'flaticon', SOLUSTRID_CSS_URL . '/flaticon.css', '', null );
	wp_enqueue_style( 'owl-carousel', SOLUSTRID_CSS_URL . '/owl-carousel.css', '', null );
	wp_enqueue_style( 'jquery-ui', SOLUSTRID_CSS_URL . '/jquery-ui.css', '', null );
	wp_enqueue_style( 'jquery-fancybox', SOLUSTRID_CSS_URL . '/jquery.fancybox.min.css', '', null );
	wp_enqueue_style( 'solustrid-style', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive', SOLUSTRID_CSS_URL . '/responsive.css', '', null );
	wp_enqueue_style( 'solustrid-theme', SOLUSTRID_CSS_URL . '/theme.css', '', null );
	wp_enqueue_script( 'popper', SOLUSTRID_JS_URL . '/popper.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap', SOLUSTRID_JS_URL . '/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'owl-carousel', SOLUSTRID_JS_URL . '/owl.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'wow', SOLUSTRID_JS_URL . '/wow.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'appear', SOLUSTRID_JS_URL . '/appear.js', array( 'jquery' ), '', true );
	wp_register_script( 'lazyload', SOLUSTRID_JS_URL . '/lazyload.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lazyload' );
	wp_enqueue_script( 'solustrid-script', SOLUSTRID_JS_URL . '/script.js', array( 'jquery' ), '', true );

	if ( ! is_admin() ) {
		$solustrid_options = solustrid_options();
		if ( isset( $solustrid_options['solustrid-maps-key'] ) && ! empty( $solustrid_options['solustrid-maps-key'] ) ) {
			wp_enqueue_script( 'solustrid-google-map', '//maps.googleapis.com/maps/api/js?key=' . $solustrid_options['solustrid-maps-key'], array(), '', true );
			wp_enqueue_script( 'solustrid-map-script', SOLUSTRID_JS_URL . '/map-script.js', array( 'jquery' ), '', true );
		}
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$header_image_id      = get_post_meta( get_the_ID(), 'framework_header_image', true );
	$background_image_url = wp_get_attachment_image_src( $header_image_id, 'full' );
	$background_url       = isset( $background_image_url[0] ) ? $background_image_url[0] : '';
	$custom_css           = '';
	if ( is_array( $background_image_url ) ) {
		$custom_css = '
                .page-banner.style-two{
                        background-image:url(' . esc_url( $background_url ) . ');
                }
               ';
	}
	$custom_css = '';
	if ( is_array( $background_image_url ) ) {
		$custom_css = '
        .page-banner{
                background-image:url(' . esc_url( $background_url ) . ') !important;
        }
        ';
	}
	wp_add_inline_style( 'solustrid-style', $custom_css );

	$header_image = isset( $solustrid_options['solustrid_header_image'] ) ? $solustrid_options['solustrid_header_image'] : 0;
	$url          = '';
	if ( $header_image ) {
		$url = $header_image['url'];
	}

	require_once SOLUSTRID_THEME_DIR . '/stylecss.php';
	if ( function_exists( 'solustrid_main_color' ) ) {
		$solustrid_main_color = solustrid_main_color();
	}
	$custom_css1 = '.page-banner.blog-banner{
                        background-image:url(' . esc_url( $url ) . ") !important;
                }
                $solustrid_main_color";
	wp_add_inline_style( 'solustrid-style', $custom_css1 );
}

add_action( 'wp_enqueue_scripts', 'solustrid_scripts' );

function solustrid_add_google_font() {
	$fonts = solustrid_google_font();
	foreach ( $fonts as $key => $font ) {
		wp_enqueue_style( 'solustrid-google-fonts' . $key, $font, array(), null );
	}
}

function solustrid_google_font() {
	$protocol     = is_ssl() ? 'https' : 'http';
	$query_args[] = array(
		'family' => urlencode( 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i' ),
	);
	foreach ( $query_args as $query_arg ) {
		$font_url[] = add_query_arg( $query_arg, $protocol . '://fonts.googleapis.com/css' );
	}
	return $font_url;
}

add_action( 'wp_enqueue_scripts', 'solustrid_add_google_font' );

function solustrid_theme_slug_scripts_styles() {
	$fonts = solustrid_theme_slug_scripts_google_font();
	foreach ( $fonts as $key => $font ) {
		wp_enqueue_style( 'solustrid-theme-slug-fonts' . $key, $font, array(), null );
	}
}

function solustrid_theme_slug_scripts_google_font() {
	$protocol     = is_ssl() ? 'https' : 'http';
	$query_args[] = array(
		'family' => urlencode( 'Lato:300,400,700,900' ),
	);

	foreach ( $query_args as $query_arg ) {
		$font_url[] = add_query_arg( $query_arg, $protocol . '://fonts.googleapis.com/css' );
	}
	return $font_url;
}

add_action( 'admin_enqueue_scripts', 'solustrid_theme_slug_scripts_styles' );

function solustrid_add_editor_styles() {
	add_editor_style( 'editor-style.css' );
}

add_action( 'admin_init', 'solustrid_add_editor_styles' );

function solustrid_block_editor_styles() {
	wp_enqueue_style( 'solustrid-block-styles', get_theme_file_uri( 'assets/css/all-block.css' ), false, '1.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'solustrid_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( ! function_exists( 'solustrid_options' ) ) {

	function solustrid_options() {
		global $solustrid_opt;
		return $solustrid_opt;
	}
}

function solustrid_breadcrumb_func() {
	$solustrid_show_breadcrumb = get_post_meta( get_the_ID(), 'framework_show_breadcrumb', true );
	$solustrid_show_title      = get_post_meta( get_the_ID(), 'framework_show_page_title', true );
	if ( $solustrid_show_breadcrumb != 'off' ) {
		?>
<section class="page-banner">
  <div class="auto-container">
	<div class="inner-container clearfix">
		<?php
		if ( $solustrid_show_title != 'off' ) {
			the_title( '<h1>', '</h1>' );
		}
		if ( function_exists( 'bcn_display' ) ) {
			bcn_display();
		}
		?>
	</div>
  </div>
</section>
		<?php
	}
}

add_action( 'solustrid_breadcrumb', 'solustrid_breadcrumb_func' );

// solustrid_comments
function solustrid_comments( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
<<?php echo esc_html( $tag ); ?>
	<?php comment_class( empty( $args['has_children'] ) ? 'comment-box' : 'parent comment-box' ); ?>
  id="comment-<?php comment_ID(); ?>"><?php if ( 'div' != $args['style'] ) { ?>
  <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
										   <?php
			  }
				?>
	<div class="comment">
	  <div class="author-thumb">
		<?php print get_avatar( $comment, 70, null, null, array( 'class' => array() ) ); ?>
	  </div>
	  <div class="comment-info clearfix"><strong> <?php echo get_comment_author_link(); ?> </strong>
		<div class="comment-time"><?php comment_time( get_option( 'date_format' ) ); ?></div>
	  </div>
	  <div class="text">
		<?php comment_text(); ?>
	  </div>
	  <div class="reply-outer">
		<?php
		comment_reply_link(
			array_merge(
				$args,
				array(
					'reply_text' => esc_html__( 'Reply ', 'solustrid' ) . '<span class="fas fa-angle-right"></span>',
					'depth'      => $depth,
					'max_depth'  => $args['max_depth'],
				)
			)
		);
		?>
	  </div>
	</div>
	<?php
}

function solustrid_add_query_vars_filter( $vars ) {
	$vars[] = 'header_type';
	return $vars;
}

add_filter( 'query_vars', 'solustrid_add_query_vars_filter' );

function solustrid_show_preloader() {
	$solustrid_options   = solustrid_options();
	$solustrid_preloader = isset( $solustrid_options['solustrid-preloader'] ) ? $solustrid_options['solustrid-preloader'] : 0;
	if ( $solustrid_preloader ) {
		?>
	<div class="preloader"></div>
		<?php
	}
}

add_action( 'solustrid_preloader', 'solustrid_show_preloader' );
