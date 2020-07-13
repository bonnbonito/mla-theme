<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>

<header class="entry-header portfolio-header">
	<div class="ph-overlay"></div>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'full', array( 'class' => 'portfolio-featured-img' ) ); ?>
	<?php endif; ?>
	<div class="portfolio-header-body">
		<div class="container">
			<div class="columns">
				<div class="column is-6 minw650">
					<?php
						get_template_part( 'template-parts/content/entry_title', get_post_type() );
					?>
					<div class="quotebox">
						<?php the_field( 'portfolio_header_content' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->
