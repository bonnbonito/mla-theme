<?php
/**
 * Template Name: About Page Template
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
			$section_1 = get_field( 'section_1' );
			$section_3 = get_field( 'content_+_image_section' );
			?>
			<section class="hero">
				<div class="hero-body">
					<div class="container">
						<div class="columns is-gapless">
							<div class="column is-7">
								<div class="flex-vertical">
									<div class="content">
										<div class="spacer" style="height:50px;"></div>
										<h2 class="big-size line-title"><span><?php echo $section_1['title']; ?></span></h2>
										<div class="mw500">
											<?php echo $section_1['content']; ?>
										</div>
									</div>
									<img src="<?php echo esc_url( $section_1['bottom_image']['url'] ); ?>" alt="">
								</div>
							</div>
							<div class="column is-5">
								<img src="<?php echo esc_url( $section_1['right_image']['url'] ); ?>" alt="" class="fw-fh">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="hero">
				<div class="hero-body">
					<div class="container">
						<div class="columns is-vcentered is-variable is-7">
							<div class="column is-6 infobox-wrap">
								<?php
								if ( have_rows( 'info_box' ) ) :
									while ( have_rows( 'info_box' ) ) :
										the_row();
									?>
								<div class="info-box">
									<span class="info-box-number"><?php the_sub_field( 'numbers' ); ?></span>
									<div class="info-box-img">
										<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
									</div>
									<span><?php the_sub_field( 'name' ); ?></span>
								</div>
								<hr class="line">
										<?php
								endwhile;
							endif;
								?>
							</div>
							<div class="column is-6">
								<div class="content">
									<h2 class="big-size line-title line-right text-left"><span><?php the_field( 'section_2_title' ); ?></span></h2>
									<?php the_field( 'section_2_content' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="hero">
				<div class="hero-body">
					<div class="container">
						<div class="columns is-vcentered is-variable is-7">
							<div class="column is-5">
								<div class="content">
									<h2 class="big-size line-title"><span><?php echo $section_3['title']; ?></span></h2>
									<?php echo $section_3['content']; ?>
								</div>
							</div>
							<div class="column is-6 is-offset-1">
								<?php if ( ! $section_3['image_stick_to_edge'] ) : ?>
							<img src="<?php echo esc_url( $section_3['image']['url'] ); ?>" alt="">
							<?php else : ?>
							<div class="stick-right">
								<img src="<?php echo esc_url( $section_3['image']['url'] ); ?>" alt="">
							</div>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
			get_template_part( 'template-parts/content/section', 'testimonials' );
			get_template_part( 'template-parts/content/section', 'latestblog' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
