<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			$header_banner_content = get_field( 'header_banner_content' );
			$content_video_section = get_field( 'content_video_section' );
			$content_image_section = get_field( 'content_+_image_section' );

			if ( $header_banner_content ) :
			?>
		<section class="front-banner hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered">
						<div class="column is-full-touch is-5 ">
							<div class="content">
								<h1 class="big-size"><?php echo $header_banner_content['title']; ?></h1>
								<div class="quotebox">
									<?php echo $header_banner_content['content']; ?>
									<dv class="q-bottom">
										<a href="<?php echo $header_banner_content['link']; ?>"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/circle-arrow-bottom.png' ) ); ?>" alt=""><?php echo $header_banner_content['link_text']; ?></a>
									</dv>
								</div>
							</div>
						</div>
						<div class="column is-6 is-offset-1 is-hidden-touch">
							<div class="stick-right">
								<img src="<?php echo esc_url( $header_banner_content['right_side_image']['url'] ); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				<?php
		endif;
			if ( $content_video_section ) :
				?>
		<section class="hero is-medium">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered">
						<div class="column is-4">
							<div class="content">
								<h2 class="big-size line-title"><span><?php echo $content_video_section['title']; ?></span></h2>
								<div class="p-content">
									<?php echo $content_video_section['content']; ?>
									<div class="spacer"></div>
									<a href="<?php echo $content_video_section['link']; ?>" class="btn"><?php echo $content_video_section['link_text']; ?></a>
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
		endif;
			get_template_part( 'template-parts/content/section', 'portfoliogrid' );

			if ( have_rows( 'tab_slider' ) ) :
				?>
		<section class="hero two-columns-swiper">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered">
						<div class="column is-5">
							<div class="navtabs service-tabs">
								<?php
								while ( have_rows( 'tab_slider' ) ) :
									the_row();
									?>
								<a data-index="<?php echo esc_attr( get_row_index() ); ?>" class="<?php echo esc_attr( 0 == get_row_index() ? 'active' : '' ); ?>"><?php the_sub_field( 'title' ); ?></a>
								<?php endwhile; ?>
							</div>
							<div class="col1-swiper swiper-container">
								<div class="swiper-wrapper">
									<?php
									while ( have_rows( 'tab_slider' ) ) :
										the_row();
										?>
									<div class="swiper-slide">
										<?php the_sub_field( 'content' ); ?>
										<div class="spacer" style="height:20px"></div>
									</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<div class="column is-7 is-offset-1">
							<div class="col2-swiper swiper-container">
								<div class="swiper-wrapper">
									<?php
									while ( have_rows( 'tab_slider' ) ) :
										the_row();
										?>
									<div class="swiper-slide">
										<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
									</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			const col1swiper = new Swiper('.col1-swiper',{
				simulateTouch: false
			});
			const col2swiper = new Swiper('.col2-swiper', {
				simulateTouch: false
			});
			const tabs = document.querySelectorAll('.service-tabs a');
			tabs.forEach((tab) => {
				tab.addEventListener('click', (e) => {
					e.preventDefault();
					document.querySelector('.service-tabs a.active').classList.remove('active');
					e.currentTarget.classList.add('active');
					let index = e.currentTarget.dataset.index;
					col1swiper.slideTo(index);
					col2swiper.slideTo(index);
				});
			});
		</script>
				<?php
		endif;

			if ( have_rows( 'content_slider' ) ) :
				?>
		<div class="spacer"></div>

		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-centered">
						<div class="column is-6">
							<div class="swiper-container content-swiper">
								<div class="swiper-wrapper">
									<?php
									while ( have_rows( 'content_slider' ) ) :
										the_row();
										?>
									<div class="swiper-slide">
										<div class="content has-text-centered">
											<h3><?php the_sub_field( 'title' ); ?></h3>
											<div class="divider"></div>
											<?php the_sub_field( 'content' ); ?>
<div class="divider" style="margin-top: 40px;"></div>
										</div>
									</div>
									<?php endwhile; ?>
								</div>
								<div id="content-pagination" class="content-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			const swiperContent = new Swiper('.content-swiper', {
			pagination: {
				el: '#content-pagination',
				clickable: true,
			},
			});
		</script>
				<?php
			endif;

			if ( $content_image_section ) :
				?>
		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered is-variable is-7">
						<div class="column is-5">
							<div class="content">
								<h2 class="big-size line-title"><span><?php echo $content_image_section['title']; ?></span></h2>
								<?php echo $content_image_section['content']; ?>
							</div>
						</div>
						<div class="column is-6 is-offset-1">
							<?php if ( ! $content_image_section['image_stick_to_edge'] ) : ?>
							<img src="<?php echo esc_url( $content_image_section['image']['url'] ); ?>" alt="">
							<?php else : ?>
							<div class="stick-right">
								<img src="<?php echo esc_url( $content_image_section['image']['url'] ); ?>" alt="">
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
				<?php
			endif;
			get_template_part( 'template-parts/content/section', 'testimonials' );
			get_template_part( 'template-parts/content/section', 'latestblog' );
		}

		?>
	</main><!-- #primary -->
<?php
get_footer();
