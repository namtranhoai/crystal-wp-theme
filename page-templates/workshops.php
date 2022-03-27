<?php
/**
 * Template Name: Workshops
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
<div class="wrapper wrapper-hero" id="workshop-hero">
	<div class="hero-container">
			<div class="hero-body">
				<h1>Workshops</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
	</div>
</div><!-- #wrapper-hero -->
<div class="wrapper wrapper-content" id="workshop-content">
		<div class="row">
			<div class="col-md-12">
					<div id="content">
						<h2>AVAILABLE WORKSHOP</h2>
						<div class="block workshop-block" >
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/watering_can.png"/>
							</div>
							<div class="block-text">
								<h3 class="block-heading">Homegoing Workshop</h3>
								<p>body copy -- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
								<a href="#" class="block-btn btn-pink">REGISER</a>
							</div>
						</div><!-- #block homegoing workshop -->
						<div class="block workshop-block">
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/shears.png"/>
							</div>
							<div class="block-text">
								<h3 class="block-heading">Colorism Workshop</h3>
								<p>body copy -- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
								<a href="#" class="block-btn btn-pink">REGISER</a>
							</div>
						</div><!-- #block colorism workshop -->
						<div class="block workshop-block">
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/trowel.png"/>
							</div>
							<div class="block-text">
								<h3 class="block-heading">Fat-Phobia Workshop</h3>
								<p>body copy -- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
								<a href="#" class="block-btn btn-pink">REGISER</a>
							</div>
						</div><!-- #block fat-phobia workshop -->
					</div>

			</div><!-- #primary -->

		</div><!-- .row end -->

</div><!-- #wrapper-content-home -->

<?php
get_footer();
