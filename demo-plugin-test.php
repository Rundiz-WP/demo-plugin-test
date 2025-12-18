<?php
/**
 * Plugin Name:       Demo plugin test
 * Plugin URI:        https://github.com/Rundiz-WP
 * Description:       Demonstration how WP plugin unit test work.
 * Version:           1.0.0
 * Requires at least: 5.3
 * Requires PHP:      5.6
 * Author:            Vee W
 * Author URI:        https://rundiz.com
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       demo-plugin-test
 * Domain Path:       /languages
 *
 * Demo plugin for unit testing, code sniffer.
 *
 * @package demo-plugin-test
 */

/**
 * Demo function that will trigger some errors in PHP code sniffer.
 */
function demo_plugin_test_testphpcs() {
	// deprecated PHP function since 5.3.
	ereg( '/[a-z]/', 'Abcd' );
	// deprecated wp function since 4.5.0.
	add_utility_page( 'page title', 'menu title', 'compatibility', 'menu slug' );
	// space inside ( ... ) is required for WordPress code style.
	wp_strip_all_tags('<div>html</div>' );
}//end demo_plugin_test_testphpcs()
