<?php
/**
 * Plugin Name:       Skylar Park Core
 * Description:       Site-specific functionality for skylar-park.com (Case Study post type, front-end performance tweaks). Lives in mu-plugins so it keeps working if the theme changes.
 * Version:           0.1.0
 * Requires at least: 6.9
 * Requires PHP:      8.1
 * Author:            Skylar Park
 * Author URI:        https://www.skylar-park.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       skylar-park
 *
 * @package SkylarPark
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register the Case Study post type.
 *
 * Each case study follows the same structure:
 * Problem -> Constraints -> Solution -> Result -> Trade-offs.
 * The block template below pre-fills those headings for new posts.
 *
 * Note: after the first deploy, visit Settings > Permalinks and click "Save"
 * once so WordPress picks up the /case-studies/ URLs.
 *
 * @return void
 */
function skylar_park_register_case_study() {
	$labels = array(
		'name'               => _x( 'Case Studies', 'post type general name', 'skylar-park' ),
		'singular_name'      => _x( 'Case Study', 'post type singular name', 'skylar-park' ),
		'menu_name'          => _x( 'Case Studies', 'admin menu', 'skylar-park' ),
		'add_new_item'       => __( 'Add New Case Study', 'skylar-park' ),
		'edit_item'          => __( 'Edit Case Study', 'skylar-park' ),
		'new_item'           => __( 'New Case Study', 'skylar-park' ),
		'view_item'          => __( 'View Case Study', 'skylar-park' ),
		'all_items'          => __( 'All Case Studies', 'skylar-park' ),
		'search_items'       => __( 'Search Case Studies', 'skylar-park' ),
		'not_found'          => __( 'No case studies found.', 'skylar-park' ),
		'not_found_in_trash' => __( 'No case studies found in Trash.', 'skylar-park' ),
	);

	register_post_type(
		'case_study',
		array(
			'labels'        => $labels,
			'public'        => true,
			'show_in_rest'  => true,
			'has_archive'   => 'case-studies',
			'rewrite'       => array(
				'slug'       => 'case-studies',
				'with_front' => false,
			),
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-portfolio',
			'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			'template'      => array(
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'One-sentence summary: what you fixed or built, and the measurable result.', 'skylar-park' ),
					),
				),
				array( 'core/heading', array( 'content' => __( 'Problem', 'skylar-park' ) ) ),
				array( 'core/paragraph', array( 'placeholder' => __( 'What was broken or missing, and who it affected?', 'skylar-park' ) ) ),
				array( 'core/heading', array( 'content' => __( 'Constraints', 'skylar-park' ) ) ),
				array( 'core/paragraph', array( 'placeholder' => __( 'Plugins, budget, deadlines, multilingual content, hosting limits…', 'skylar-park' ) ) ),
				array( 'core/heading', array( 'content' => __( 'Solution', 'skylar-park' ) ) ),
				array( 'core/paragraph', array( 'placeholder' => __( 'What you built and why you chose this approach.', 'skylar-park' ) ) ),
				array( 'core/heading', array( 'content' => __( 'Result', 'skylar-park' ) ) ),
				array( 'core/paragraph', array( 'placeholder' => __( 'Before → after numbers (e.g. TBT 327ms → 150ms).', 'skylar-park' ) ) ),
				array( 'core/heading', array( 'content' => __( 'Trade-offs', 'skylar-park' ) ) ),
				array( 'core/paragraph', array( 'placeholder' => __( 'What you would do differently, and what you chose not to do.', 'skylar-park' ) ) ),
			),
		)
	);
}
add_action( 'init', 'skylar_park_register_case_study' );

/**
 * Remove the emoji detection script and styles.
 *
 * Modern browsers render emoji natively; this saves an inline script and
 * a stylesheet on every page, which helps the PageSpeed score.
 *
 * @return void
 */
function skylar_park_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
	remove_action( 'admin_enqueue_scripts', 'wp_enqueue_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'skylar_park_disable_emojis' );
