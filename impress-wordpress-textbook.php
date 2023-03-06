<?php
/**
 * Plugin Name:     Impress WordPress Textbook
 * Plugin URI:      https://book.impress.co.jp/books/この書籍のURL
 * Description:     いちばんやさしいWordPressの教本 第6版 素材同梱プラグイン
 * Author:          Vektor,Inc.
 * Author URI:
 * Text Domain:     impress-wordpress-textbook
 * Domain Path:     /languages
 * Version:         0.2.2
 *
 * @package         IMPRESS_WORDPRESS_TEXTBOOK
 */

defined( 'ABSPATH' ) || exit;

/**
 * Composer Autoload
 */
$autoload_path = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
// vendor ディレクトリがない状態で誤配信された場合に Fatal Error にならないようにファイルの存在確認.
if ( file_exists( $autoload_path ) ) {
	// Composer のファイルを読み込み ( composer install --no-dev )
	require_once $autoload_path;
}

// Update Checker
if ( class_exists( 'YahnisElsts\PluginUpdateChecker\v5\PucFactory' ) ){
	$my_update_checker = YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
		'https://vws.vektor-inc.co.jp/updates/?action=get_metadata&slug=vk-filter-search-pro',
		__FILE__,
		'vk-filter-search-pro'
	);
    $my_update_checker->getVcsApi()->enableReleaseAssets();
}

include( dirname( __FILE__ ) . '/patterns-data/class-register-patterns-from-json.php' );