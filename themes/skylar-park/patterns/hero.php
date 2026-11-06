<?php
/**
 * Title: Hero
 * Slug: skylar-park/hero
 * Categories: skylar-park, banner
 * Description: Headline, positioning statement, and call-to-action buttons.
 * Keywords: hero, intro, headline
 *
 * @package SkylarPark
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"880px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
	<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Skylar Park — WordPress Developer, Vancouver', 'skylar-park' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'Multilingual WooCommerce & Block Theme Developer', 'skylar-park' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large","textColor":"muted"} -->
	<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'I build fast, accessible WordPress sites with WPML, Gutenberg blocks, and AI-ready tooling — and I measure the results.', 'skylar-park' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/case-studies/"><?php esc_html_e( 'See case studies', 'skylar-park' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'skylar-park' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
