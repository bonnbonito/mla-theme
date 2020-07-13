<?php
/**
 * Template Name: Services Page Template
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

			if ( get_field( 'section_1' ) ) :
				?>
		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered">
						<div class="column is-6">
							<div class="content">
								<h2 class="big-size line-title"><span><?php echo get_field( 'section_1' )['title']; ?></span></h2>
								<?php echo get_field( 'section_1' )['left_content']; ?>
							</div>
						</div>
						<div class="column is-5 is-offset-1">
							<div class="content">
								<?php echo get_field( 'section_1' )['right_content']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				<?php
			endif;
		?>
		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-centered">
						<div class="column is-8">
							<div class="content has-text-centered">
								<h2 class="big-size has-theme-primary-color"><?php the_field( 'section_2_title' ); ?></h2>
								<?php the_field( 'section_2_content' ); ?>
								<hr class="line" style="width: 60%;margin-left: auto; margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<?php
					if ( have_rows( 'strategies' ) ) :
					?>
					<div class="grid grid_3">
						<?php
						while ( have_rows( 'strategies' ) ) :
							the_row();
							?>
						<div class="grid-item">
							<div class="strategy">
								<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
								<h3><?php the_sub_field( 'title' ); ?></h3>
								<?php the_sub_field( 'content' ); ?>
							</div>
						</div>
						<?php endwhile; ?>
						<div class="grid-item">
							<div class="strategy-last">
								<h3>Get Started Today</h3>
								<a href="/contact" class="btn">Get Started Today</a>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-centered">
						<div class="column is-8">
							<div class="content has-text-centered">
								<h2 class="big-size has-theme-primary-color"><?php the_field( 'section_4_title' ); ?></h2>
								<?php the_field( 'section_4_content' ); ?>
								<hr class="line" style="width: 60%;margin-left: auto; margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column is-4">
							<div class="content">
								<h2 class="big-size line-title"><span class="has-theme-primary-color"><?php the_field( 'section_5_title' ); ?></span></h2>
								<div class="p-content">
									<?php the_field( 'section_5_content' ); ?>
								</div>
							</div>
						</div>
						<div class="column is-6 is-offset-2">
							<div class="video-wrap">
								<div class="video-frame">
									<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/vid-frame.png' ) ); ?>" alt="">
								</div>
								<div class="video-details">
									<div class="vid-left">
										<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/vid.png' ) ); ?>" alt=""><span>About MLA Web Designs</span>
									</div>
									<div class="vid-right">
										<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/avatar.png' ) ); ?>" alt="">
										<div>
											<p><span>Mark Mazure</span><br>CEO</p>
										</div>
									</div>
								</div>
							</div>
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
