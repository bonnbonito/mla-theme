<?php
/**
 * Template part for displaying a faqs section.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="hero">
	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="is-5 is-offset-7 column">
					<div class="content">
						<h2 class="big-size line-title line-right has-theme-primary-color text-left"><span>Frequently Asked Question</span></h2>
					</div>
				</div>
			</div>
			<div class="columns is-vcentered">
				<div class="column is-6 is-hidden-mobile">
					<div class="faqs-questions">
						<ul>
							<li class="active" data-index="1">How long does a website build take? 1</li>
							<li data-index="2">How many design amendments can I make? 2</li>
							<li data-index="3">How long does a website build take? 3</li>
							<li data-index="4">How many design amendments can I make? 4</li>
						</ul>
					</div>
				</div>
				<div class="column is-5 is-offset-1">
					<div class="content">
						<div class="question">?</div>
						<div class="swipe-arrows is-hidden-tablet">
							<a id="faqs-next" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/l-arrow.png' ) ); ?>" alt=""></a>
							<a id="faqs-prev" class="nav-arrow"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/r-arrow.png' ) ); ?>" alt=""></a>
						</div>
						<div class="swiper-container faqs-answers">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="faq-answer">
										<h3 class="has-theme-primary-color">How long does a website build take? 1</h3>
										<p>Absolutely yes, at MLA we offer a complete and full service so that you do not need to go and
	source other things from else where. That said if you already have an existing logo we will be happy to incorporate that within any design and use that as our starting point to begin with. We can also create different graphics that you may need for your site design, like banners and other things.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="faq-answer">
										<h3 class="has-theme-primary-color">How long does a website build take? 1</h3>
										<p>Absolutely yes, at MLA we offer a complete and full service so that you do not need to go and
	source other things from else where. That said if you already have an existing logo we will be happy to incorporate that within any design and use that as our starting point to begin with. We can also create different graphics that you may need for your site design, like banners and other things.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="faq-answer">
										<h3 class="has-theme-primary-color">How long does a website build take? 1</h3>
										<p>Absolutely yes, at MLA we offer a complete and full service so that you do not need to go and
	source other things from else where. That said if you already have an existing logo we will be happy to incorporate that within any design and use that as our starting point to begin with. We can also create different graphics that you may need for your site design, like banners and other things.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="faq-answer">
										<h3 class="has-theme-primary-color">How long does a website build take? 1</h3>
										<p>Absolutely yes, at MLA we offer a complete and full service so that you do not need to go and
	source other things from else where. That said if you already have an existing logo we will be happy to incorporate that within any design and use that as our starting point to begin with. We can also create different graphics that you may need for your site design, like banners and other things.</p>
									</div>
								</div>
							</div>
							<div id="faqs-pagination" class="content-pagination is-hidden-tablet"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	const faqsAnswers = new Swiper('.faqs-answers', {
		loop: true,
		navigation: {
			nextEl: '#faqs-next',
			prevEl: '#faqs-prev',
		},
		pagination: {
			el: '#faqs-pagination',
			clickable: true,
		},
	});

	const questions = document.querySelectorAll('.faqs-questions li');
		questions.forEach( question => {
			question.addEventListener('click', (e) => {
				e.preventDefault();
				document.querySelector('.faqs-questions li.active').classList.remove('active');
				e.currentTarget.classList.add('active');
				let index = e.currentTarget.dataset.index;
				faqsAnswers.slideTo(index);
			});
		});
</script>
