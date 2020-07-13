<?php
/**
 * Template Name: Single Service Page Template
 *
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );

			if ( have_rows( 'single_service_page_builder' ) ) :
				while ( have_rows( 'single_service_page_builder' ) ) :
					the_row();

					if ( get_row_layout() === 'content_image' ) :
						get_template_part( 'template-parts/content/builder', 'content_image' );
					elseif ( get_row_layout() === 'image_content' ) :
						get_template_part( 'template-parts/content/builder', 'image_content' );
					elseif ( get_row_layout() === 'pricing_table_content' ) :
						get_template_part( 'template-parts/content/builder', 'pricing_table' );
					elseif ( get_row_layout() === 'one_column' ) :
						get_template_part( 'template-parts/content/builder', 'one_column' );
					elseif ( get_row_layout() === 'just_text' ) :
						get_template_part( 'template-parts/content/builder', 'justtext' );
					endif;
				endwhile;
			endif;
			?>
			<?php
			get_template_part( 'template-parts/content/section', 'faqs' );
			get_template_part( 'template-parts/content/section', 'testimonials' );
			get_template_part( 'template-parts/content/section', 'latestblog' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
