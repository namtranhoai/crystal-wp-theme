<?php
/**
 * Hero setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (is_active_sidebar( 'herohome' ) ) :
	?>

	<div class="wrapper" id="wrapper-hero">

		<?php
		get_template_part( 'sidebar-templates/sidebar', 'herohome' );
		?>

	</div>

	<?php
endif;
