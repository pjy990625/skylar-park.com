<?php
/**
 * Title: Latest Case Studies
 * Slug: skylar-park/case-studies-latest
 * Categories: skylar-park, query
 * Description: Grid of the three most recent case studies.
 * Keywords: case study, portfolio, work
 *
 * @package SkylarPark
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Case Studies', 'skylar-park' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"case_study","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-excerpt /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Case studies are coming soon.', 'skylar-park' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:paragraph -->
	<p><a href="/case-studies/"><?php esc_html_e( 'View all case studies →', 'skylar-park' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
