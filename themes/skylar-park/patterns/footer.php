<?php
/**
 * Title: Footer
 * Slug: skylar-park/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 * Description: Site footer with copyright and build note.
 *
 * @package SkylarPark
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
		<p class="has-muted-color has-text-color has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Skylar Park</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Built with a custom WordPress block theme.', 'skylar-park' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
