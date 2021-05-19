<?php // カスタム投稿タイプを追加
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
  register_post_type( 'blog', // カスタム投稿タイプのスラッグの指定
    array(
      'labels' => array(
        'name' => __( 'Blog' ),          // メニューに表示されるアサル（ASAL）
        'singular_name' => __( 'Blog' ), // カスタム投稿の識別名 
        'add_new' => _x('新規追加', 'blog'),        // 新規追加のラベル
        'add_new_item' => __('新規追加')            // 新規項目追加のラベル
      ),
      'public' => true,                 // 投稿タイプをパブリックにする
      'has_archive' => true,            // 記事一覧ページの作成（true)
      'hierarchical' => false,          // ページ階層の指定（記事に親子関係を持たせるかどうかを指定することができる）
      'menu_position' =>5,              // 管理画面上の配置指定（５：投稿の下　１０：メディアの下など）
      'menu_icon' => 'dashicons-edit',  // アイコン（WordPressの管理画面上に表示する際のアイコンを指定できる）
      'supports' => array('title','editor','thumbnail','revisions') // サポート指定（カスタム投稿タイプの編集画面で使用できるようにする機能を選ぶことができる）
      // 全てのサポートを使う場合は下記参照
      //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
    )
  );
}




function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	
	//全てのページにstyle.cssを読み込み(参考：https://www.at-freak.jp/column/wordpress_css/)
	wp_enqueue_style('sub-style',get_template_directory_uri().'/assets/css/common.css' );
	

//   if ( is_page() ) {
// 	wp_enqueue_style('home_css',get_template_directory_uri().'/assets/css/home_css.css' );
// }

	//固定ページスラッグcontact か 投稿ID46の記事 か カスタム投稿タイプadd_newsの記事 か カスタム投稿タイプadd_newsの一覧だった場合、css/store2.cssを読み込み
	// if (is_page('contact')||is_single(46) || is_singular('add_news') || is_post_type_archive('add_news')) {
	// 	wp_enqueue_style('store2', get_template_directory_uri().'/css/store2.css');
	// }


	//JavaScriptの読み込みはここから
	
	//全てのページにjs/pagetop.jsを読み込み
	// wp_enqueue_script('pagetop', get_template_directory_uri().'/js/pagetop.js');
	
	//トップページのみ
	// if (is_home()) {
	
	// //js/main.jsをfooter直下で読み込み	
	// 	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '', true);	
	// }
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts','add_css_js');



function set_fs_method($args) {
	return 'direct';
}
add_filter('filesystem_method','set_fs_method');




?>