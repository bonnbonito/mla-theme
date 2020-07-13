<?php
/**
 * Template part for displaying a builder content.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="hero image-content">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-7">
					<div class="has-text-centered content">
						<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="" style="margin: auto;">
						<h2 class="has-theme-primary-color big-size"><?php the_sub_field( 'title' ); ?></h2>
						<hr class="line">
						<div class="w80p">
							<?php the_sub_field( 'content' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
