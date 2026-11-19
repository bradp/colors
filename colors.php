<?php
/**
 * Plugin Name:       Colors
 * Description:       Disable admin color schemes.
 * Version:           1.1.2
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Brad Parbs
 * Author URI:        https://bradparbs.com/
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       colors
 *
 * @package colors
 */

namespace Colors;

defined( 'ABSPATH' ) || exit;

// The color scheme picker is added in wp-admin/includes/admin-filters.php, which loads after plugins_loaded.
add_action( 'admin_init', __NAMESPACE__ . '\\disable_colors' );

/**
 * Disable admin color schemes.
 */
function disable_colors() {
	if ( apply_filters( 'colors_should_disable_admin_colors', true ) ) {
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
	}
}
