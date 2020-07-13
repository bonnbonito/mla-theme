<?php
/**
 * WP_Rig\WP_Rig\Bonn class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Bonn;

use WP_Rig\WP_Rig\Component_Interface;
use function wp_enqueue_style;
use function wp_enqueue_scripts;
use function get_custom_logo;

/**
 * Class for Bonn Styles
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'bonn';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', [ $this, 'action_enqueue_bonn' ] );
		add_filter( 'get_custom_logo', [ $this, 'bulma_logo_class' ] );
		add_filter( 'wpcf7_autop_or_not', '__return_false' );
		add_filter( 'use_block_editor_for_post_type', [ $this, 'prefix_disable_gutenberg' ], 10, 2 );
		add_filter( 'acf/settings/row_index_offset', '__return_zero' );
	}

	/**
	 * Enqueues scripts.
	 */
	public function action_enqueue_bonn() {
		wp_enqueue_style( 'wp-rig-fa5', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_enqueue_style( 'wp-rig-bulma', '//unpkg.com/bulma/css/bulma.min.css', [], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_register_style( 'wp-rig-swipercss', '//unpkg.com/swiper/swiper-bundle.min.css', [], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_register_script( 'wp-rig-swiper', '//unpkg.com/swiper/swiper-bundle.min.js', [], null, false ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_register_script( 'wp-rig-sharer', '//cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js', [], null, false ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion

		wp_enqueue_style( 'wp-rig-swipercss' );
		wp_enqueue_script( 'wp-rig-swiper' );
		wp_enqueue_script( 'wp-rig-sharer' );

	}

	/**
	 * Add bulma  class on logo.
	 *
	 * @param string $html logo html.
	 */
	public function bulma_logo_class( $html ) {
		$html = str_replace( 'custom-logo-link', 'navbar-item', $html );
		return $html;
	}

	/**
	 * Add bulma  class on logo.
	 *
	 * @param string $current_status status.
	 * @param string $post_type post type.
	 */
	public function prefix_disable_gutenberg( $current_status, $post_type ) {
		// Use your post type key instead of 'mla_portfolio'.
		if ( 'mla_portfolio' ===  $post_type || 'page' ===  $post_type ) return false;
		return $current_status;
	}
}
