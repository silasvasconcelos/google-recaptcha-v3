<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/silasvasconcelos
 * @since             1.0.0
 * @package           Google_Recaptcha_V3
 *
 * @wordpress-plugin
 * Plugin Name:       Google reCaptcha V3
 * Plugin URI:        https://github.com/silasvasconcelos/google-recaptcha-v3
 * Description:       Plugin para user o Google reCaptcha V3 no seu site. 
 * Version:           1.0.0
 * Author:            Silas Vasconcelos
 * Author URI:        https://github.com/silasvasconcelos
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       google-recaptcha-v3
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

function dd(...$data)
{
	echo '<pre>';
	foreach ($data as $debug) {
		var_dump( $debug );
	}
	echo '<pre>';
	die;
}


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-google-recaptcha-v3-activator.php
 */
function activate_google_recaptcha_v3() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-google-recaptcha-v3-activator.php';
	Google_Recaptcha_V3_Activator::activate();
}

/**
 * The code that runs during plugin init.
 * This action is documented in includes/class-google-recaptcha-v3-shortcode.php
 */
function shortcode_google_recaptcha_v3() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-google-recaptcha-v3-shortcode.php';
	$plugin = new Google_Recaptcha_V3_Shortcode();
	$plugin->run();
}
shortcode_google_recaptcha_v3();

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-google-recaptcha-v3-deactivator.php
 */
function deactivate_google_recaptcha_v3() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-google-recaptcha-v3-deactivator.php';
	Google_Recaptcha_V3_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_google_recaptcha_v3' );
register_deactivation_hook( __FILE__, 'deactivate_google_recaptcha_v3' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-google-recaptcha-v3.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_google_recaptcha_v3() {

	$plugin = new Google_Recaptcha_V3();
	$plugin->run();

}
run_google_recaptcha_v3();
