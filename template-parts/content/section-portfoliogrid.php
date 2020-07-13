<?php
/**
 * Template part for displaying a portfolio grid
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

$portfolios = new WP_Query(
	array(
		'post_type'      => 'mla_portfolio',
		'posts_per_page' => -1,
		'post_status '   => 'publish',
	)
);

if ( $portfolios->have_posts() ) :
	?>
<section class="hero portfolio-grid-wrap">
	<div class="hero-body">
		<div class="container">
			<?php
			$portfolio_categories = get_terms(
				array(
					'taxonomy'   => 'portfolio_cat',
					'hide_empty' => true,
				)
			);
			if ( $portfolio_categories ) :
				?>
			<div class="navtabs portfolio-tabs">
				<a href="#" data-category="all" class="active">All</a>
				<?php foreach ( $portfolio_categories as $portfolio_category ) { ?>
					<a data-category="<?php echo esc_attr( $portfolio_category->slug ); ?>"><?php echo esc_attr( $portfolio_category->name ); ?></a>
				<?php } ?>
			</div>
			<?php endif; ?>

			<div class="grid grid_3 grid-swiper">
				<?php
				while ( $portfolios->have_posts() ) :
					$portfolios->the_post();

					$terms = get_the_terms( get_the_ID(), 'portfolio_cat' );

					$terms_string = join( ' ', wp_list_pluck( $terms, 'slug' ) );
					?>
				<div class="grid-category <?php echo esc_attr( $terms_string ); ?>">
					<div class="portfolio-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'wp-rig-portfolio_thumb' ); ?>
						</a>
					</div>
					<p class="portfolio-name"><?php the_title(); ?></p>
				</div>
					<?php
					endwhile;
				?>
			</div>
		</div>
	</div>

	<script>
		// const gridSwiper = new Swiper('.grid-swiper',{
		// 	slidesPerView: 2,
		// 	slidesPerColumn: 2,
		// 	spaceBetween: 30,
		// 	slidesPerColumnFill: 'row',
		// 	pagination: {
		// 		el: '.grid-pagination',
		// 		clickable: true,
		// 	},
		// 	breakpoints: {
		// 		769: {
		// 			slidesPerView: 3,
		// 			slidesPerColumn: 3,
		// 		}
		// 	}
		// });

		const portfolioTabs = document.querySelectorAll('.portfolio-tabs a');
		portfolioTabs.forEach((tab) => {
			tab.addEventListener('click', (e) => {
				e.preventDefault();
				document.querySelector('.portfolio-tabs a.active').classList.remove('active');
				e.currentTarget.classList.add('active');
				let category = e.currentTarget.dataset.category;

				document.querySelectorAll('.grid-swiper .grid-category').forEach((grid) => {
					grid.classList.add('none');
					if ( 'all' === category ) {
						grid.classList.remove('none');
					} else {
						if ( grid.classList.contains( category ) ) {
							grid.classList.remove('none');
						}
					}
				});
			});
		});
	</script>
</section>
	<?php
	wp_reset_postdata();
endif;
