<?php
/**
 * Plugin Name: Shisha Menu
 * Plugin URI: https://github.com/UGDesigns/shisha-menu
 * Description: Ein Elementor Widget für Shisha-Bar Menükarten mit Tabak-Sorten, Getränken und Snacks.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * Text Domain: shisha-menu
 * Domain Path: /languages
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Elementor tested up to: 3.30
 * Elementor Pro tested up to: 3.30
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 * GitHub Plugin URI: https://github.com/UGDesigns/shisha-menu
 * Primary Branch: main
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SHISHA_MENU_VERSION', '1.0.0' );
define( 'SHISHA_MENU_PATH', plugin_dir_path( __FILE__ ) );
define( 'SHISHA_MENU_URL', plugin_dir_url( __FILE__ ) );
define( 'SHISHA_MENU_BASENAME', plugin_basename( __FILE__ ) );
define( 'SHISHA_MENU_FILE', __FILE__ );
define( 'SHISHA_MENU_MINIMUM_ELEMENTOR_VERSION', '3.30' );
define( 'SHISHA_MENU_MINIMUM_PHP_VERSION', '7.4' );

class Shisha_Menu {

	private static $instance = null;

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function __construct() {
		add_action( 'plugins_loaded', [ $this, 'init' ] );
		
		// Auto-Update System aktivieren
		if ( is_admin() ) {
			$this->init_updater();
		}
	}
	
	private function init_updater() {
		require_once SHISHA_MENU_PATH . 'includes/class-auto-updater.php';
	}

	public function init() {
		$this->load_textdomain();
		
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_elementor' ] );
			return;
		}

		if ( ! $this->is_compatible() ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories' ] );
		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ], 10 );
		// Fallback for older versions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets_legacy' ], 10 );
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'enqueue_styles' ] );
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'register_scripts' ] );
		add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'editor_scripts' ] );
	}

	public function load_textdomain() {
		load_plugin_textdomain( 'shisha-menu', false, dirname( SHISHA_MENU_BASENAME ) . '/languages' );
	}

	public function is_compatible() {
		if ( ! defined( 'ELEMENTOR_VERSION' ) ) {
			return false;
		}

		return version_compare( ELEMENTOR_VERSION, '3.30', '>=' );
	}

	public function add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'shisha-menu',
			[
				'title' => esc_html__( 'Shisha Menu', 'shisha-menu' ),
				'icon' => 'fa fa-plug',
			]
		);
	}

	public function register_widgets( $widgets_manager ) {
		require_once SHISHA_MENU_PATH . 'includes/widgets/shisha-menu-widget.php';
		$widgets_manager->register( new \ShishaMenu\Widgets\Shisha_Menu_Widget() );
	}

	public function register_widgets_legacy( $widgets_manager ) {
		// Fallback for older Elementor versions
		if ( ! method_exists( $widgets_manager, 'register' ) ) {
			require_once SHISHA_MENU_PATH . 'includes/widgets/shisha-menu-widget.php';
			$widgets_manager->register_widget_type( new \ShishaMenu\Widgets\Shisha_Menu_Widget() );
		}
	}

	public function editor_scripts() {
		wp_enqueue_script(
			'shisha-menu-editor',
			SHISHA_MENU_URL . 'assets/js/editor.js',
			[ 'elementor-editor' ],
			SHISHA_MENU_VERSION,
			true
		);
	}

	public function enqueue_styles() {
		wp_enqueue_style(
			'shisha-menu-frontend',
			SHISHA_MENU_URL . 'assets/css/frontend.css',
			[],
			SHISHA_MENU_VERSION
		);
	}

	public function register_scripts() {
		wp_register_script(
			'shisha-menu-frontend',
			SHISHA_MENU_URL . 'assets/js/frontend.js',
			[ 'jquery' ],
			SHISHA_MENU_VERSION,
			true
		);
	}

	public function admin_notice_missing_elementor() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" benötigt "%2$s" um zu funktionieren.', 'shisha-menu' ),
			'<strong>' . esc_html__( 'Shisha Menu', 'shisha-menu' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'shisha-menu' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" benötigt "%2$s" Version %3$s oder höher.', 'shisha-menu' ),
			'<strong>' . esc_html__( 'Shisha Menu', 'shisha-menu' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'shisha-menu' ) . '</strong>',
			'3.30'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
}

Shisha_Menu::instance();