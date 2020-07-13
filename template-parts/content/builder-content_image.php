<?php
/**
 * Template part for displaying a builder content.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="hero content-image">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-vcentered is-variable is-7">
				<div class="column is-6">
					<div class="content">
						<h2 class="big-size line-title"><span class="has-theme-primary-color"><?php the_sub_field( 'title' ); ?></span></h2>
						<?php the_sub_field( 'content' ); ?>
					</div>
				</div>
				<div class="column is-6">
					<?php if ( ! get_sub_field( 'image_stick_to_edge' ) ) : ?>
					<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
					<?php else : ?>
					<div class="stick-right">
						<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="spacer" style="height: 50px;"></div>
