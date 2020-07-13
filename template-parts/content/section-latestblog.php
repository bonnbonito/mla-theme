<?php
/**
 * Template part for displaying a latest blog slider
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

$latest = new WP_Query(
	array(
		'posts_per_page' => 4,
		'post_status '   => 'publish',
	)
);

if ( $latest->have_posts() ) :
	?>
<section class="hero is-medium latest-blog">
	<div class="hero-body">
		<div class="container content">
			<h2 class="big-size line-title line-right"><span>Blog</span></h2>
			<div class="columns is-multiline">
				<div class="column is-12">
					<div class="swiper-container latest-blog-swiper">
						<div class="swiper-wrapper">
							<?php
							while ( $latest->have_posts() ) :
								$latest->the_post();
								?>
							<div class="swiper-slide">
								<div class="columns is-vcentered is-centered">
									<?php if ( has_post_thumbnail() ) : ?>
									<div class="column is-5">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'full' ); ?>
										</a>
									</div>
									<?php endif; ?>
									<div class="column is-5 is-offset-1">
										<h3><?php the_title(); ?></h3>
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
									</div>
								</div>
							</div>
							<?php endwhile; ?>
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
	<?php
	wp_reset_postdata();
endif;
