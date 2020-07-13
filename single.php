<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-centered">
						<div class="column is-9">
							<?php
							while ( have_posts() ) {
								the_post();

								get_template_part( 'template-parts/content/entry', get_post_type() );
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="hero is-medium latest-blog">
			<div class="hero-body">
				<div class="container content">
					<h2 class="big-size line-title line-right"><span>Related Blog</span></h2>
					<div class="columns is-multiline">
						<div class="column is-12">
							<div class="swiper-container latest-blog-swiper">
								<div class="swiper-wrapper">
									<?php for  ($i=0; $i < 4; $i++ ) { ?>
									<div class="swiper-slide">
										<div class="columns is-vcentered">
											<div class="column is-5">
												<a href="#">
													<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/blog.png' ) ); ?>" alt="">
												</a>
											</div>
											<div class="column is-5 is-offset-1">
												<h3>Top Web Design Trend Prediction for 2019</h3>
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
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="column is-6">
							<div class="arrow-page-swiper">
								<a id="blognext" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/l-arrow.png' ) ); ?>" alt=""></a>
								<div class="swiper-page" id="blog-pages">
									<span class="active">1</span>
									<span class="nextIndex">2</span>
								</div>
								<a id="blogprev" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/r-arrow.png' ) ); ?>" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			const latestBlog = new Swiper('.latest-blog-swiper', {
				spaceBetween: 30,
				navigation: {
					nextEl: '#blogprev',
					prevEl: '#blognext',
				},
				pagination: {
					el: '#blog-pages',
					type: 'custom',
					clickable: true,
					renderCustom: function (swiper, current, total) {
						return `<span class="realindex">${current}</span> of <span>${total}</span>`;
					}
				},
			});
		</script>
	</main><!-- #primary -->
<?php
get_footer();
