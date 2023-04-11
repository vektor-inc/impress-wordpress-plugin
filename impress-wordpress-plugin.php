<?php
/**
 * Plugin Name:     Impress WordPress Plugin
 * Plugin URI:      https://book.impress.co.jp/books/1122101130
 * Description:     いちばんやさしいWordPressの教本 第6版 素材同梱プラグイン
 * Author:          Vektor,Inc.
 * Author URI:
 * Text Domain:     impress-wordpress-plugin
 * Domain Path:     /languages
 * Version:         0.４.1
 *
 * @package         vektor-inc/impress-wordpress-plugin
 */

defined( 'ABSPATH' ) || exit;

/**
 * Composer Autoload
 */
$autoload_path = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
// vendor ディレクトリがない状態で誤配信された場合に Fatal Error にならないようにファイルの存在確認.
if ( file_exists( $autoload_path ) ) {
	// Composer のファイルを読み込み ( composer install --no-dev ).
	require_once $autoload_path;
}

// Update Checker.
if ( class_exists( 'YahnisElsts\PluginUpdateChecker\v5\PucFactory' ) ) {
	$my_update_checker = YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
		'https://github.com/vektor-inc/impress-wordpress-plugin',
		__FILE__,
		'impress-wordpress-plugin'
	);
	$my_update_checker->getVcsApi()->enableReleaseAssets();
}

require dirname( __FILE__ ) . '/patterns-data/class-register-patterns-from-json.php';
