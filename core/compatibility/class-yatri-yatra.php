<?php

if (!class_exists('Yatra')) {
	return;
}

/**
 * Yatri Yatra Compatibility
 */
if (!class_exists('Yatri_Yatra')) :

	/**
	 * Yatri Yatra Compatibility
	 *
	 * @since 1.0.0
	 */
	class Yatri_Yatra
	{

		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance()
		{
			if (!isset(self::$instance)) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct()
		{
			add_filter('yatra_page_wrapper_class', array($this, 'yatra_wrapper_class'));


		}

		public function yatra_wrapper_class($class)
		{
			$class = "yatra-page-wrapper yat-container ";

			return $class . 'yatri-theme';
		}

	}

endif;

if (apply_filters('yatri_enable_yatra_integration', true)) {
	Yatri_Yatra::get_instance();
}
