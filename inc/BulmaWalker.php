<?php
/**
 * Will add classes to create bulma menu in wordpress
 * http://bulma.io/documentation/components/nav/
 * Usage
 * wp_nav_menu(array(
 * 'theme_location'    => 'primary',
 * 'items_wrap' => '%3$s',
 * 'container_class'   => 'nav-right nav-menu',
 * 'walker'            => new bulma_walker_nav_menu
 * ));
 *
 */
class BulmaWalker extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "<div class='navbar-dropdown'>";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		if ( $classes[0] ) {
			$li_classes = 'navbar-item ' . $classes[0];
		} else {
			$li_classes = 'navbar-item';
		}

		$has_children = $args->walker->has_children;
		$li_classes  .= $has_children ? " has-dropdown is-hoverable" : "";

		if ( $has_children ){
			$output .= "<div class='".$li_classes."'>";
			$output .= "\n<a class='navbar-link' href='".$item->url."'>".$item->title."</a>";
		} else {
			$output .= "<a class='".$li_classes."' href='".$item->url."'>".$item->title;
		}

		// Adds has_children class to the item so end_el can determine if the current element has children.
		if ( $has_children ) {
			$item->classes[] = 'has_children';
		}
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {

		if ( in_array( "has_children", $item->classes, true ) ) {
			$output .= "</div>";
		}
		$output .= "</a>";
	}

	public function end_lvl ( &$output, $depth = 0, $args = array() ) {
		$output .= "</div>";
	}

}
