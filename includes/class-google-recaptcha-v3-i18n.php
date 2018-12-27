<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/silasvasconcelos
 * @since      1.0.0
 *
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/includes
 * @author     Silas Vasconcelos <silasvasconcelos@hotmail.com.br>
 */
class Google_Recaptcha_V3_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'google-recaptcha-v3',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
