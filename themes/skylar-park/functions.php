<?php
/**
 * Skylar Park theme functions.
 *
 * Block themes need very little PHP: styles live in theme.json,
 * markup lives in templates/, parts/ and patterns/.
 *
 * @package SkylarPark
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register a pattern category so this theme's patterns are grouped in the editor.
 *
 * @return void
 */
function skylar_park_register_pattern_category() {
	register_block_pattern_category(
		'skylar-park',
		array(
			'label'       => __( 'Skylar Park', 'skylar-park' ),
			'description' => __( 'Sections for the skylar-park.com site.', 'skylar-park' ),
		)
	);
}
add_action( 'init', 'skylar_park_register_pattern_category' );

/*
 * style.css is intentionally NOT enqueued: it only holds the theme header,
 * and skipping it saves one render-blocking request. If you add real CSS
 * rules to style.css later, enqueue it here with wp_enqueue_style() on the
 * 'wp_enqueue_scripts' hook.
 */
