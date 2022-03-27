<?php
/**
 * Template Name: Home
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
<div class="wrapper" id="home-wrapper-hero">
	<div class="row">
		<div class="col-lg-6" >
			<div id="home-hero-right">
				<h2>INSERT TAG LINE OR QUOTE HERE</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

			</div>
		</div>
		<div class="col-lg-6" id="home-hero-left" >
			<img id="home-hero-image" src="<?php echo get_stylesheet_directory_uri();?>/img/home-hero-image.png"/>
		</div>
	</div>
	<a href="#" id="home-hero-button">BOOK A CONSULtation</a>
</div><!-- #wrapper-hero -->
<div class="wrapper" id="home-wrapper-content">
		<div class="row">
			<div class="col-md-12">
					<div class="session" id="home-session-1">
						<div class="block" >
							<div class="block-image">
								<!-- <img src="" -->
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/home-coaching.png"/>
							</div>
							<div class="block-text">
								<h3>Coaching</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
								</p>
								<a href="#" class="block-btn btn-pink">MORE INFO</a>
							</div>
						</div><!-- #block-coaching -->
						<div class="block">
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/home-workshops.png"/>
							</div>
							<div class="block-text">
								<h3>Workshops</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
								</p>
								<a href="#" class="block-btn btn-pink">MORE INFO</a>
							</div>
						</div><!-- #workshops -->
					</div>
					<div class="session" id="session-2">
						<div class="block" >
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/home-customized-support.png"/>
							</div>
							<div class="block-text">
								<h3>Customized Support</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
								</p>
								<a href="#" class="block-btn btn-pink">MORE INFO</a>
							</div>
						</div><!-- #block-customized-support -->
						<div class="block" id="block-writing">
							<div class="block-image">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/home-writing.png"/>
							</div>
							<div class="block-text">
								<h3>Writing</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
								</p>
								<a href="#" class="block-btn btn-pink">MORE INFO</a>
							</div>
						</div><!-- #writing -->
					</div>
			</div><!-- #primary -->

		</div><!-- .row end -->

</div><!-- #wrapper-content-home -->

<?php
get_footer();
