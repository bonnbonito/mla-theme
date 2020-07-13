<?php
/**
 * Template part for displaying the header navigation menu bulma style
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use BulmaWalker;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

?>

<div id="primaryMenu" class="navbar-menu">
	<div class="navbar-start">
		<?php
		wp_rig()->display_primary_nav_menu(
			[
				'menu_id'         => 'primary-menu',
				'items_wrap'      => '%3$s',
				'walker'          => new BulmaWalker(),
			]
		);
		?>
	</div>
</div>
