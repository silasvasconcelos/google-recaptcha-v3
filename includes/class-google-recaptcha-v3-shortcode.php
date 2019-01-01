<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/silasvasconcelos
 * @since      1.0.0
 *
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/includes
 * @author     Silas Vasconcelos <silasvasconcelos@hotmail.com.br>
 */
class Google_Recaptcha_V3_Shortcode {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function run() {

		add_shortcode('google_re_captcha_v3', [$this, 'google_re_captcha_v3_front']);

	}

	/**
	 * Register scripts to wordpress
	 *
	 * @return void
	 */
	function registerScripts()
	{
		$src = plugins_url('google-recaptcha-v3/public/js/google-recaptcha-v3-public.js');
		wp_enqueue_script('google-recaptcha-v3', $src, ['jqueyr'], 1.0, true);
	}

	/**
	 * summary
	 *
	 * @return void
	 * @author 
	 */
	public function prepareConf($conf=[])
	{
	    $default_conf = [
	    	'form_name' => null,
	    	'form_id' => null,
	    	'form_selector' => null,
	    	'accepted_score' => 0.5,
	    	'form_method' => 'post',
	    ];

	    return array_merge($default_conf, (array)$conf);
	}

	public function google_re_captcha_v3_front( $conf=[] )
	{
		$this->registerScripts();
		$conf = $this->prepareConf($conf);

		if ($conf['form_name'] or $conf['form_id'] or $conf['form_selector']) {
			
			if (!empty($conf['form_id'])) {
				$js_selector = sprintf('$(\'#%s\');', $conf['form_id']);
			}
			
			if (!$js_selector and !empty($conf['form_name'])) {
				$js_selector = sprintf('$(\'form[name="%s"]\');', $conf['form_name']);
			}

			if (!$js_selector and !empty($conf['form_selector'])) {
				$js_selector = $conf['form_selector'];
			}
			
		}
	}

}



