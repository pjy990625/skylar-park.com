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

/**
 * Print a fallback favicon until a Site Icon is set.
 *
 * The proper way to set a favicon in WordPress is Appearance > Editor >
 * Site Icon (or Settings > General > Site Icon): upload a 512x512 PNG and
 * WordPress generates every size, including the Apple touch icon. Once that
 * is set, this fallback stops printing automatically.
 *
 * @return void
 */
function skylar_park_fallback_favicon() {
	if ( has_site_icon() ) {
		return;
	}

	printf(
		'<link rel="icon" href="%s" type="image/svg+xml" />' . "\n",
		esc_url( get_theme_file_uri( 'assets/favicon.svg' ) )
	);
}
add_action( 'wp_head', 'skylar_park_fallback_favicon' );

/*
 * style.css is intentionally NOT enqueued: it only holds the theme header,
 * and skipping it saves one render-blocking request. If you add real CSS
 * rules to style.css later, enqueue it here with wp_enqueue_style() on the
 * 'wp_enqueue_scripts' hook.
 */
