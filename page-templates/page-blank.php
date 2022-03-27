<?php
/**
 * Template Name: Page Blank
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="wrapper wrapper-content" id="content">
	<?php the_content(); ?>
</div><!-- #wrapper-content -->

<?php
get_footer();
