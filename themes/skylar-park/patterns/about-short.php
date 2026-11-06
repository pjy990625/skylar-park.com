<?php
/**
 * Title: About (Short)
 * Slug: skylar-park/about-short
 * Categories: skylar-park, about
 * Description: Two-sentence introduction for the home page, linking to the full About page.
 * Keywords: about, intro, bio
 *
 * @package SkylarPark
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'About', 'skylar-park' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'I am a WordPress developer in Vancouver building multilingual WooCommerce stores for B2B clients. I focus on block themes, WPML, performance, and accessibility.', 'skylar-park' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><a href="/about/"><?php esc_html_e( 'More about me →', 'skylar-park' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
