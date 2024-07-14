<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shebinkp.com
 * @since             1.0.0
 * @package           Ultimate_Find_And_Replace
 *
 * @wordpress-plugin
 * Plugin Name:       Ultimate Find And Replace
 * Plugin URI:        https://shebinkp.com/find-and-replace
 * Description:       This will parse entire DB using find and replace string from DB
 * Version:           1.0.0
 * Author:            Shebin KP
 * Author URI:        https://shebinkp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ultimate-find-and-replace
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ULTIMATE_FIND_AND_REPLACE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ultimate-find-and-replace-activator.php
 */
function activate_ultimate_find_and_replace() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ultimate-find-and-replace-activator.php';
	Ultimate_Find_And_Replace_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ultimate-find-and-replace-deactivator.php
 */
function deactivate_ultimate_find_and_replace() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ultimate-find-and-replace-deactivator.php';
	Ultimate_Find_And_Replace_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ultimate_find_and_replace' );
register_deactivation_hook( __FILE__, 'deactivate_ultimate_find_and_replace' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ultimate-find-and-replace.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ultimate_find_and_replace() {

	$plugin = new Ultimate_Find_And_Replace();
	$plugin->run();

}
run_ultimate_find_and_replace();
