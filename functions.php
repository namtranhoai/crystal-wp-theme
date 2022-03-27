<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );


add_action( 'widgets_init', 'understrap_widgets_init' );

if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {

		// Hero Home
		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas Home', 'understrap' ),
				'id'            => 'herohome',
				'description'   => __( 'Hero crystal theme home - custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)			
		);

		// Hero Coaching
		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas Coaching', 'understrap' ),
				'id'            => 'herocoaching',
				'description'   => __( 'Hero crystal theme Coaching - custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)			
		);
		// Hero Writing
		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas Writing', 'understrap' ),
				'id'            => 'herowriting',
				'description'   => __( 'Hero crystal theme Writing - custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)			
		);
		// Hero Customized support
		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas Support', 'understrap' ),
				'id'            => 'herosupport',
				'description'   => __( 'Hero crystal theme Support - custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)			
		);
		// Hero Customized About
		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas About', 'understrap' ),
				'id'            => 'heroabout',
				'description'   => __( 'Hero crystal theme About - custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)			
		);
		

		// Footer
		register_sidebar(
			array(
				'name'          => __( 'Footer Full', 'understrap' ),
				'id'            => 'footerfull',
				'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .footer-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

	}
} // End of function_exists( 'understrap_widgets_init' ).
