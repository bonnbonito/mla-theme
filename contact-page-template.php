<?php
/**
 * Template Name: Contact Page Template
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
			<div class="spacer"></div>
			<div class="hero">
				<div class="hero-body">
					<div class="container">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry content' ); ?>>
							<?php
							the_title( '<h1 class="entry-title big-size">', '</h1>' );
							?>

							<div class="columns is-vcentered">
								<div class="column is-6">
									<div class="content">
										<div class="quotebox">
											<?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form 1"]' ); ?>
										</div>
									</div>
								</div>
							</div>

						</article>
					</div>
					<div class="full-right is-hidden-mobile">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/contact.png' ) ); ?>" alt="">
				</div>
				</div>
			</div>
			<div class="hero">
				<div class="hero-body">
					<div class="container">
						<div class="content has-text-centered">
							<h2 class="big-size">Our Contact Details</h2>
							<hr class="line">
							<div class="contact-d">
								<p>2B Redbourne Avenue, Finchley Central, London, N3 2BS</p>
								<p>0203 823 9033</p>
								<p>admin@mlawebdesigns.co.uk</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fullwidth-img">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/map.png' ) ); ?>" alt="">
			</div>
			<?php
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
