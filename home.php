<?php
/**
 *
 *
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
		<div class="hero">
			<div class="hero-body content">
				<div class="container">
					<h1 class="entry-title big-size">Blog</h1>
					<div class="spacer"></div>
					<div class="columns is-variable is-7 is-multiline">
					<?php
					while ( have_posts() ) {
						the_post();
						?>
						<div class="column is-6">
							<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'full' ); ?>
							</a>
							<?php endif; ?>
							<h3 class="mt-5"><?php the_title(); ?></h3>
							<div class="meta-date my-4"><?php echo get_the_date(); ?></div>
							<div class="blog-excerpt">
								<?php the_excerpt(); ?>
							</div>
							<div class="blog-bottom mt-6">
								<div class="level">
									<div class="level-left">
										<div class="level-item">
											<a href="<?php the_permalink(); ?>" class="rm">READ MORE</a>
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
			get_template_part( 'template-parts/content/section', 'testimonials' );
		?>
	</main><!-- #primary -->
<?php
get_footer();
