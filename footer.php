<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Raillex
 */

?>
	<div class="site-footer-newsletter wrapper">
		<div class="wrapp">
			<div class="news-left-container">
				<h3>Newsletter</h3>
				<p>Novinky zo sveta Raillex Slovakia priamo do mailu.</p>
			</div>
			<div class="news-lefright-container">
				<a href="https://raillex.sk/newsletter/" title="Newsletter"><button class="newsletter-button">Chcem odoberať</button></a>
			</div>
		</div>
	</div>
	<div class="wrapp bread"><?php ah_breadcrumb(); ?></div>
	<footer id="colophon" class="site-footer">
		<div class="site-footer-partner wrapp">
			<div class="heading-center">
				Partneri
			</div>
			sem ide partner
		</div>
		<div class="site-footer-menus wrapp clearfix">
			<?php dynamic_sidebar( 'footer-menu-1' ) ?>
			<?php dynamic_sidebar( 'footer-menu-2' ) ?>
			<?php dynamic_sidebar( 'footer-menu-3' ) ?>
			<?php dynamic_sidebar( 'footer-menu-4' ) ?>
		</div>
		<div class="site-info wrapp">
			<div class="copy">Všetky práva vyhradené | Mapa stránky | Vytvorilo <a href="https://drossel.sk" target="_blank" title="Digital Agency">Drossel Studio<sup>®</sup></a></div>
			<div class="copy">&copy 2023 - <?php echo(date('Y')) ?> Raillex Slovakia o.z.</div>
		</div><!-- .site-info -->
		<div class="footer-logo wrapp">
			<img src="https://raillex.sk/wp-content/uploads/2023/10/sublogo.png" alt="">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>



