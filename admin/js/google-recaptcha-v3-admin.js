(function( $ ) {
	'use strict';

	var google_recaptcha_v3_integrate_generator = $('button#google-recaptcha-v3-integrate-generator');
	if (google_recaptcha_v3_integrate_generator.length > 0) {
	
		var google_recaptacha_v3_replaces = { '[': '&#91;', ']': '&#93;', '"':'\\"'};
		var google_recaptcha_v3_generato_shortcode = $('textarea#google-recaptcha-v3-generato-shortcode');
		google_recaptcha_v3_integrate_generator.on('click', function () {
				var str = google_recaptcha_v3_generato_shortcode.val();
				if ((str || '').length > 0) {
					var res = str.replace(/\[|\]|\"/gi, function (x) {
					  return x = google_recaptacha_v3_replaces[x];
					});
					google_recaptcha_v3_generato_shortcode.val(res);
					alert('Copie e cole o código na pagina de integração.');
				} else {
					alert('Insira seu seletor jQuery na caixa de texto.');
					google_recaptcha_v3_generato_shortcode.focus();
				}
		});
	}

})( jQuery );
