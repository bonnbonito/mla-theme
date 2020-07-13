<?php
/**
 * Template Name: Blog Page Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
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
			?>
			<div class="hero">
				<div class="hero-body content">
					<div class="container">
						<h1 class="entry-title big-size">Blog</h1>
						<div class="spacer"></div>
						<div class="columns is-variable is-7 is-multiline">
							<?php for ($i=0; $i < 6 ; $i++) { ?>
							<div class="column is-6">
								<a href="#">
									<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/blog.png' ) ); ?>" alt="">
								</a>
								<h3 class="mt-5">Top Web Design Trend Prediction for 2019</h3>
								<div class="meta-date my-4">03 Jan 2019</div>
								<div class="blog-excerpt">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae </p>
								</div>
								<div class="blog-bottom mt-6">
									<div class="level">
										<div class="level-left">
											<div class="level-item">
												<a href="#" class="rm">READ MORE</a>
											</div>
										</div>
										<div class="level-right">
											<div class="level-item">
												<div class="social-share">
													<a data-sharer="facebook" data-url="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a>
													<a data-sharer="twitter" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a>
													<a data-sharer="email" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" data-subject="Blog post from MLA - <?php the_title(); ?>" data-to=""><i class="fas fa-envelope"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="spacer" style="height: 40px;"></div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		get_template_part( 'template-parts/content/section', 'testimonials' );
		?>
	</main><!-- #primary -->
<?php
get_footer();
