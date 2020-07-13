<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<header class="entry-header hero">
	<div class="dark-blue is-hidden-mobile"></div>
	<div class="hero-body">
		<div class="container">
			<div class="columns is-vcentered">
				<div class="column is-6 has-text-centered page-title-wrapper">
					<?php
					get_template_part( 'template-parts/content/entry_title', get_post_type() );
					?>
				</div>
				<div class="column is-5 is-offset-1">
					<div class="content">
						<?php the_field( 'page_header_content' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->
