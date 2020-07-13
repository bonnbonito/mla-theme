<?php
/**
 * Template Name: Portfolio Page Template
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

			get_template_part( 'template-parts/content/section', 'portfoliogrid' );

			get_template_part( 'template-parts/content/section', 'cta' );

			get_template_part( 'template-parts/content/section', 'testimonials' );
			get_template_part( 'template-parts/content/section', 'latestblog' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
