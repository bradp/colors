<?php
/**
 * Plugin Name: Colors
 * Description: Disable admin color schemes.
 * Version:     1.0.1
 * Author:      Brad Parbs
 * Author URI:  https://bradparbs.com/
 * License:     GPLv2
 * Text Domain: draft
 * Domain Path: /lang/
 *
 * @package colors
 */

namespace Colors;

use WP_Query;

// Add new dashboard widget with list of draft posts.
add_action(
	'plugins_loaded',
	function () {
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
	}
);
