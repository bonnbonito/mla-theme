<?php
/**
 * Template part for displaying a testimonials slider
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>


<section class="hero is-medium testimonials-section">
	<div class="hero-body">
		<div class="container">
			<div class="content">
				<h2 class="big-size line-title"><span style="color: #0d0d0d;">Testimonials</span></h2>
				<div class="level">
					<div class="level-left"></div>
					<div class="level-right">
						<div class="swipe-arrows">
							<a id="testinext" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/l-arrow.png' ) ); ?>" alt=""></a>
							<a id="testiprev" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/r-arrow.png' ) ); ?>" alt=""></a>
						</div>
					</div>
				</div>

				<div class="swiper-container testimonial-swiper">
					<div class="swiper-wrapper">
						<?php for ($i=0; $i < 5; $i++) { ?>
						<div class="swiper-slide">
							<div class="testimonial-swiper-box">
								<div class="firstletter"><span>K</span></div>
								<div class="testi-content">“MLA created me a stunning and greatly developed website. I have an interior design business and the look and feel of the website was so important to be right.”</div>
								<p class="testi-name">-Kathryn, Kathryn Mazure Hudson, UK</p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<script>
	const testimonials = new Swiper('.testimonial-swiper', {
		slidesPerView: 'auto',
		loop: true,
		navigation: {
			nextEl: '#testiprev',
			prevEl: '#testinext',
		},
		breakpoints: {
			769: {
				spaceBetween: 30,
			}
		}
	});
</script>
