<?php
/**
 * Template Name: Portfolio Post Template
 * Template Post Type: mla_portfolio
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-page-templates-for-specific-post-types
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

			get_template_part( 'template-parts/content/entry', get_post_type() );

			$section1 = get_field( 'section_1' );
			?>

			<section class="hero is-medium">
				<div class="hero-body">
					<div class="container">
						<div class="columns is-variable is-7 is-flex-mobile column-reverse">
							<div class="column is-6">
								<div class="img-center">
									<img src="<?php echo esc_url( $section1['image']['url'] ); ?>" alt="">
								</div>
							</div>
							<div class="column is-6">
								<div class="content">
									<h2 class="big-size line-title line-right text-left"><span><?php the_title(); ?></span></h2>
									<div class="text-right">
										<?php echo $section1['content']; ?>

										<?php if ( $section1['website_url'] ) : ?>
										<p class="web-url"><?php echo $section1['website_url']; ?></p>
										<?php endif; ?>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="hero portfolio-testimonial">
				<div class="hero-body">
					<div class="container content">
						<h2 class="big-size has-text-centered">Testimonials</h2>
						<hr class="line" style="max-width: 70%; margin-left: auto; margin-right: auto;">
						<div class="portfolio-testimonial-wrap">
							<div class="columns is-vcentered">
								<div class="column is-4 is-offset-2">
									<div class="big-letter"><?php echo get_field( 'testimonials' )['name'][0]; ?></div>
								</div>
								<div class="column is-4">
									<div class="testimonial-quote">
										<?php echo get_field( 'testimonials' )['content']; ?>
										<p class="p-quote">--- <?php echo get_field( 'testimonials' )['name']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="hero big-images" style="background-color: <?php echo esc_attr( get_field( 'image_background_color' ) ? get_field( 'image_background_color' ) : '#fff' ); ?>">
				<div class="hero-body">
					<div class="container">
						<?php
						if ( have_rows( 'website_images' ) ) :
							while ( have_rows( 'website_images' ) ) :
								the_row();
								?>
							<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
								<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</section>

			<?php
			get_template_part( 'template-parts/content/section', 'latestblog' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
