<?php
/**
 * Plugin Name: Colors
 * Description: Disable admin color schemes.
 * Version:     1.1.1
 * Author:      Brad Parbs
 * Author URI:  https://bradparbs.com/
 * License:     GPLv2
 * Text Domain: colors
 * Domain Path: /lang/
 *
 * @package colors
 */

namespace Colors;

add_action( 'plugins_loaded', __NAMESPACE__ . '\\disable_colors' );

/**
 * Disable admin color schemes.
 */
function disable_colors() {

	if ( apply_filters( 'colors_should_disable_admin_colors', true ) ) {
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
	}
}
