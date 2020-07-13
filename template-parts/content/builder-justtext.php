<?php
/**
 * Template part for displaying a builder content.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="hero just-text">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-8">
					<div class="has-text-centered content">
						<?php the_sub_field( 'content' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
