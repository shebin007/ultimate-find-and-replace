<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://shebinkp.com
 * @since      1.0.0
 *
 * @package    Ultimate_Find_And_Replace
 * @subpackage Ultimate_Find_And_Replace/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ultimate_Find_And_Replace
 * @subpackage Ultimate_Find_And_Replace/includes
 * @author     Shebin KP <info@shebinkp.com>
 */
class Ultimate_Find_And_Replace_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ultimate-find-and-replace',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
