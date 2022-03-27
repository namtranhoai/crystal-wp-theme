<?php
/**
 * Template Name: Coaching
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
<div class="wrapper wrapper-hero" id="coaching-hero">
	<div class="hero-container">
			<div class="hero-body">
				<h1>COACHING</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
	</div>
</div><!-- #wrapper-hero -->
<div class="wrapper wrapper-content" id="coaching-content">
		<div class="row">
			<div class="col-md-12">
					<div id="content">
						<h2>COACHING SERVICES</h2>
						<div class="block coaching-block" >
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/foliage.png"/>
							</div>
							<div class="block-text">
								<h3 class="block-heading">Individual Coaching</h3>
								<p>body copy -- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
								<a href="#" class="block-btn btn-green">REGISER</a>
							</div>
						</div><!-- #block individual coaching -->
						<div class="block coaching-block">
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/sprig.png"/>
							</div>
							<div class="block-text">
								<h3 class="block-heading">Executive Coaching</h3>
								<p>body copy -- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
								<a href="#" class="block-btn btn-green">REGISER</a>
							</div>
						</div><!-- #block executive coaching -->
					</div>

			</div><!-- #primary -->

		</div><!-- .row end -->

</div><!-- #wrapper-content-home -->

<?php
get_footer();
