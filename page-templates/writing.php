<?php
/**
 * Template Name: Writing
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

// if ( is_front_page() ) {
// 	get_template_part( 'global-templates/hero-home' );
// }
?>
<div class="wrapper wrapper-hero" id="writing-hero">
	<div class="hero-container">
			<div class="hero-body">
				<h1>Writing</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
	</div>
</div><!-- #wrapper-hero -->
<div class="wrapper wrapper-content" id="writing-content">
		<?php the_content(); ?>

</div><!-- #wrapper-content-home -->

<?php
get_footer();
