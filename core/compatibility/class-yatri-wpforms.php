<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Yatri_WPForms' ) ) :

	class Yatri_WPForms {


		public function __construct() {

			add_action( 'activate_wpforms-lite/wpforms.php', array( $this, 'disable_redirect_on_activation' ), 20 );

			// If WPForms is not activated then return.
			if ( ! class_exists( 'WPForms' ) ) {
				return;
			}
		}


		public function disable_redirect_on_activation() {
			delete_transient( 'wpforms_activation_redirect' );
		}
	}
endif;
new Yatri_WPForms();
