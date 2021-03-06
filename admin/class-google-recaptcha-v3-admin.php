<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/silasvasconcelos
 * @since      1.0.0
 *
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/admin
 * @author     Silas Vasconcelos <silasvasconcelos@hotmail.com.br>
 */
class Google_Recaptcha_V3_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->add_menu();
		$this->enqueue_scripts();

	}

	function add_menu()
	{
		add_action('admin_menu', [$this, 'create_menu']);
	}

	function create_menu() {
		//create new top-level menu
		add_menu_page('Google reCaptcha V3', 'G reCaptcha', 'administrator', __FILE__, [$this, 'plugin_settings_page'] , plugins_url('/images/icon.png', __FILE__) );

		//call register settings function
		add_action( 'admin_init', [$this, 'register_plugin_settings'] );
	}

	function register_plugin_settings() {
		//register our settings
		register_setting( 'google-recaptcha-v3-plugin-settings-group', 'site_key' );
		register_setting( 'google-recaptcha-v3-plugin-settings-group', 'secret_key' );
		register_setting( 'google-recaptcha-v3-plugin-settings-group', 'option_etc' );
	}

	function plugin_settings_page() {
		include implode(DIRECTORY_SEPARATOR, [dirname(__FILE__), 'partials', 'google-recaptcha-v3-admin-display.php']);
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Google_Recaptcha_V3_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Google_Recaptcha_V3_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/google-recaptcha-v3-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Google_Recaptcha_V3_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Google_Recaptcha_V3_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/google-recaptcha-v3-admin.js', array( 'jquery' ), $this->version, true );

	}

}
