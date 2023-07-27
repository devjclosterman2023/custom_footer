<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="footer-top">
		<div class='footer-info'>

			<div class="footer-testimonial">
				<div>
					<h2 class="footer-testimonial-header">Testimonials</h2>
				</div>
				<div>
					<?php echo do_shortcode('[grw id="204"]') ?>

				</div>
			</div>
			<div class="footer-partners">
				<img style="height:76px;width: 117px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-7@2x.png" alt="">
				<img style="height:96px;width: 96px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-6@2x.png" alt="">
				<img style="height:96px;width: 58px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-5@2x.png" alt="">
				<img style="height:85px;width: 72px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-4@2x.png" alt="">
				<img style="height:73px;width: 132px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-2@2x.png" alt="">
				<img style="height:95px;width: 95px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy-3@2x.png" alt="">
				<img style="height:60px;width: 164px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath-Copy@2x.png" alt="">
				<img style="height:58px;width: 168px" src="http://scbs.web-mo.com/wp-content/uploads/2023/06/NoPath@2x.png" alt="">
			</div>
		</div>

	</div>
	<div class="footer-bottom">
		<div class="footer-nav">
			<div>
				<a href="/"><img src="http://scbs.web-mo.com/wp-content/uploads/2023/06/Group-16-1.svg" alt=""></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);

			?>

		</div>
		<div class="footer_details">
			<div class="footer_details-address">
				<p><a href="tel:5202091930">520.209.1930</a></p>
				<p> 4440 N 36th St suite #120 | Phoenix, AZ 85018</p>
				</p>ROC#KB-1-304978</p>
			</div>
			<div class="footer_details-socials">
				<a href="https://www.facebook.com/SCBSLLC/"><i class="fab fa-facebook"></i></a>
				<a href="https://www.twitter.com/scbsllc/"><i class="fab fa-twitter"></i></a>
				<a href="https://www.linkedin.com/company/scbsllc/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
		<div class="footer_copyright">
			<p>Copyright © 2023 SCBS, LLC</p>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
