<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="navbar-brand">
	<?php the_custom_logo(); ?>
	<?php
	if ( is_front_page() ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-item">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/front-logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>
		<?php
	} else {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-item">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>
		<?php
	}
	?>
	<a role="button" class="navbar-burger" data-target="primaryMenu" aria-label="menu" aria-expanded="false">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
	</a>
</div>
