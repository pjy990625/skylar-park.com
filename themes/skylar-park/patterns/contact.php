<?php
/**
 * Title: Contact
 * Slug: skylar-park/contact
 * Categories: skylar-park, call-to-action
 * Description: Contact section with links to GitHub, LinkedIn, and WordPress.org.
 * Keywords: contact, links, social
 *
 * @package SkylarPark
 */

/*
 * TODO: add your WordPress.org profile link once it is set up,
 * e.g. https://profiles.wordpress.org/your-username/
 */
?>
<!-- wp:group {"anchor":"contact","align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Get in touch', 'skylar-park' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'I am open to WordPress Developer roles. The fastest way to reach me is LinkedIn.', 'skylar-park' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:list {"className":"is-style-default"} -->
	<ul class="wp-block-list is-style-default">
		<!-- wp:list-item -->
		<li><a href="https://www.linkedin.com/in/skylar-park-6168a5231/" rel="me">LinkedIn</a></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><a href="https://github.com/pjy990625" rel="me">GitHub</a></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->
