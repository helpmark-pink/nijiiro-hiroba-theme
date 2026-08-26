<?php
/**
 * にじいろひろば テーマの基本設定
 *
 * @package nijiiro-hiroba
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * テーマがサポートする機能を有効にする
 */
function nijiiro_setup() {
	// <title> タグをWordPressに出力させる
	add_theme_support( 'title-tag' );

	// アイキャッチ画像を使えるようにする
	add_theme_support( 'post-thumbnails' );

	// HTML5形式で出力する
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// 管理画面から編集できるメニューの場所を登録
	register_nav_menus(
		array(
			'primary' => 'メインナビゲーション',
			'footer'  => 'フッターメニュー',
		)
	);
}
add_action( 'after_setup_theme', 'nijiiro_setup' );

/**
 * CSS と JavaScript を読み込む
 */
function nijiiro_enqueue_assets() {
	// Google Fonts（Zen Maru Gothic / Zen Kaku Gothic New / Quicksand）
	wp_enqueue_style(
		'nijiiro-fonts',
		'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700;900&family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Quicksand:wght@500;600;700&display=swap',
		array(),
		null
	);

	// テーマ本体の style.css
	wp_enqueue_style(
		'nijiiro-style',
		get_stylesheet_uri(),
		array( 'nijiiro-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	// トップページの動き（ヘッダー影・ハンバーガーメニューなど）
	wp_enqueue_script(
		'nijiiro-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nijiiro_enqueue_assets' );

/**
 * カスタム投稿タイプ「お知らせ」を登録する
 *
 * 管理画面から記事を追加すると、トップページと一覧ページに自動で並びます。
 */
function nijiiro_register_news() {
	register_post_type(
		'news',
		array(
			'labels'        => array(
				'name'          => 'お知らせ',
				'singular_name' => 'お知らせ',
				'add_new'       => '新規追加',
				'add_new_item'  => 'お知らせを新規追加',
				'edit_item'     => 'お知らせを編集',
				'all_items'     => 'お知らせ一覧',
				'search_items'  => 'お知らせを検索',
			),
			'public'        => true,
			'has_archive'   => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-megaphone',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'rewrite'       => array( 'slug' => 'news', 'with_front' => false ),
			'show_in_rest'  => true,
		)
	);

	register_taxonomy(
		'news_cat',
		'news',
		array(
			'labels'       => array(
				'name'          => 'お知らせカテゴリー',
				'singular_name' => 'お知らせカテゴリー',
			),
			'public'       => true,
			'hierarchical' => true,
			'rewrite'      => array( 'slug' => 'news-cat' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'nijiiro_register_news' );

/**
 * お知らせ一覧の表示件数を10件にする
 */
function nijiiro_news_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && $query->is_post_type_archive( 'news' ) ) {
		$query->set( 'posts_per_page', 10 );
	}
}
add_action( 'pre_get_posts', 'nijiiro_news_per_page' );

/**
 * 抜粋の末尾を「…」にする
 */
function nijiiro_excerpt_more() {
	return '…';
}
add_filter( 'excerpt_more', 'nijiiro_excerpt_more' );
