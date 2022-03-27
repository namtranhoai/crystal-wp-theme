<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="wrapper-footer">
    <div class="row">
		<div class="col-md-6">
            <div id="footer-in-touch-left">
                <h3>Let's stay in touch</h3>
                <div id="footer-in-touch-form">
                    <input type="textbox" placeholder="Email Address" />
                    <a href="#" id="btn-get-updates">GET UPDATES</a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div id="footer-in-touch-right">
                    <p>
                        crystalcoache@gmail.com<br/>
                        (555) 555 5555<br/>
                        Baltimore, MaryLand
                    </p>
                    <div id="footer-links">
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Facebook.png"/></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Twitter.png"/></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Instagram.png"/></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Linkedin.png"/></a>
                    </div>
            </div>
        </div>
    </div>
</div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

