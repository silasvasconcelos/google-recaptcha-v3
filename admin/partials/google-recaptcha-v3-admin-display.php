<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/silasvasconcelos
 * @since      1.0.0
 *
 * @package    Google_Recaptcha_V3
 * @subpackage Google_Recaptcha_V3/admin/partials
 */
?>

<div class="wrap">
<h1>Google reCaptcha V3</h1>

	<form method="post" action="options.php">
	    <?php settings_fields( 'google-recaptcha-v3-plugin-settings-group' ); ?>
	    <?php do_settings_sections( 'google-recaptcha-v3-plugin-settings-group' ); ?>
	
		<p>
			Você pode conseguir sua <strong>Site Key</strong> e <strong>Secret Key</strong> <a href="https://g.co/recaptcha/v3" target="_blank">aqui</a>.
		</p>

	    <table class="form-table">
	        <tr valign="top">
		        <th scope="row">Site Key</th>
		        <td>
		        	<input type="text" size="50" name="site_key" value="<?php echo esc_attr( get_option('site_key') ); ?>" />
		        </td>
	        </tr>
	         
	        <tr valign="top">
		        <th scope="row">Secret Key</th>
		        <td>
		        	<input type="text" size="50" name="secret_key" value="<?php echo esc_attr( get_option('secret_key') ); ?>" />
		        </td>
	        </tr> 
	    </table>
	    
	    <?php submit_button(); ?>
	</form>
	
	<h3>Use esse código de integração nas páginas quer deseja proteger contra robôs.</h3>

	<table class="form-table">
        <tr valign="top">
	        <th scope="row">Tag</th>
	        <td>
	        	
	        </td>
        </tr>
    </table>

</div>