<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-cta">
			<p>Please feel free to get in touch and discuss any enquiries you have <a href="#">Contact Us</a></p>
		</div>
		<div class="hero">
			<div class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column is-4 content">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/footer-logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo">
							</a>
							<p>Based in North London, UK, we are one of London’s best
professional website design companies. Whether you need a basic website design or a custom e-commerce website, the chances are excellent that MLA Web Designs can help you increase your
company’s visibility and improve its graphic image.</p>
							<h3 class="title is-5 has-theme-white-color mt-1">Connect</h3>
							<div class="social-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="column is-3 is-offset-2">
							<h2>Quick Links</h2>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Areas</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Terms</a></li>
							</ul>
						</div>
						<div class="column is-3">
							<h2>Contact Us</h2>
							<p class="address">Address 1</p>
							<address>
								2B Redbourne Avenue,Finchley Central,<br>
								London, N3 2BS
								<a href="#">View Map</a>
							</address>
							<p class="address">Address 2</p>
							<address>
								4 Galley House, Moon Lane, Barnet,<br>
								London, EN5 5YL
								<a href="#">View Map</a>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
