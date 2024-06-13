<?php

/* メニューの作成
---------------------------------------------------------- */
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'main-menu1' => 'Main Menu1',
    'main-menu2' => 'Main Menu2',
    'footer-menu'  => 'Footer Menu2',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

/* ウィジットの作成
---------------------------------------------------------- */
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Language Sidebar',
    'id' => 'lang-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

/* pタグ非表示
---------------------------------------------------------- */
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
global $post;
$remove_filter = false;
$arr_types = array('page');
$post_type = get_post_type( $post->ID );
if (in_array($post_type, $arr_types)) $remove_filter = true;
if ( $remove_filter ) {
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
}
return $content;
}


/* アイキャッチ表示
---------------------------------------------------------- */
add_theme_support('post-thumbnails');


/* 抜粋文章の後ろを変更する
---------------------------------------------------------- */
function new_excerpt_more($more) {
	return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');



/* 投稿の順番を降順に
---------------------------------------------------------- */
function sort_postdata( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	$query->set( 'order', 'DESC' );
	$query->set( 'orderby', 'date' );
}

add_action( 'pre_get_posts', 'sort_postdata' );



/* カスタム投稿
---------------------------------------------------------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'school',
    array(
      'label' => 'スクール案内',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'custom-fields',		
      ),
    )
  );

  register_post_type(
    'column',
    array(
      'label' => 'コラム',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'custom-fields',		
      ),
    )
  );

  register_taxonomy(
    'tokyo-cat',
    'school',
    array(
      'label' => '東京都',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
	
  register_taxonomy(
    'kanagawa-cat',
    'school',
    array(
      'label' => '神奈川県',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'chiba-cat',
    'school',
    array(
      'label' => '千葉県',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );	
	
  register_taxonomy(
    'saitama-cat',
    'school',
    array(
      'label' => '埼玉県',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'column-cat',
    'column',
    array(
      'label' => 'コラムカテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

}

/* Custom CSS Widget
---------------------------------------------------------- */
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'column', 'normal', 'high');
}
function custom_css_input() {
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
		endwhile; endif;
		rewind_posts();
	}
}

/* 投稿のアーカイブページを作成する
---------------------------------------------------------- */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'alltopics';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* 親ページを持つ子ページの場合、親ページのスラッグを取得する→パンクズのために設置
---------------------------------------------------------- */
function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

/* 「投稿」→「お知らせ」の表記変更→パンクズのために設置
---------------------------------------------------------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


/* パンくずリスト
---------------------------------------------------------- */
function breadcrumb() {
    $home = '<li><a href="'.get_bloginfo('url').'" >英語・英会話スクール Kids UP トップ</a></li>';
	$school = '<li><a href="'.get_bloginfo('url').'/school/" >スクール案内</a></li>';
	$course = '<li><a href="'.get_bloginfo('url').'/course/" >COURSE一覧</a></li>';
	$column = '<li><a href="'.get_bloginfo('url').'/column/" >コラム一覧</a></li>';

	echo '<ul class="breadcrumb-list">';
    if ( is_front_page() ) {
        // トップページの場合
    }
    else if ( is_category() ) {
        // カテゴリページの場合
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li class="cat"><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach($cat_list as $value){
            echo $value;
        }
        the_archive_title('<li>', '</li>');
    }
    else if ( is_archive() ) {
    // 月別アーカイブ・タグページの場合
    echo $home;
    the_archive_title('<li class="ar">', '</li>');
    }
	
    else if ( is_single() && !is_singular('school') && !is_singular('column')) {
    // 投稿ページの場合
	echo $home;
    $cat = get_the_category();
        if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li class="single"><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        foreach($cat_list as $value){
            echo $value;
        }
        the_title('<li class="single-title">', '</li>');
    }
	
	else if ( is_singular('school') ) {
    // スクール詳細ページの場合
	echo $home;
    echo $school;
    the_title('<li class="school-single">', '</li>');
    }
	
	else if ( is_singular('column') ) {
    // コラム詳細ページの場合
	echo $home;
    echo $column;
    the_title('<li class="column-single">', '</li>');
    }
	
    else if( is_page() ) {
    // 固定ページの場合
    echo $home;
		// COURSE 子ページの場合
		if( is_parent_slug() === 'course'){
			echo $course;
		}
    the_title('<li class="page">', '</li>');
    }
    else if( is_search() ) {
    // 検索ページの場合
    echo $home;
    echo '<li>「'.get_search_query().'」の検索結果</li>';
    }
    else if( is_404() ) {
    // 404ページの場合
    echo $home;
    echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}
 
// アーカイブの余計なタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});
?>