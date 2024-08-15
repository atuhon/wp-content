<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support( 'page-attributes' );
function custom_excerpt_length( $length ) {
    return 30;	//表示したい文字数
}	
 add_filter( 'comment_form_default_fields', 'my_comment_form_default_fields' );
 function my_comment_form_default_fields($args){
    $args["url"]="";//「サイト」の項目を削除する
    return $args;

 }
 add_action("pre_get_posts","my_pre");
 //pre_get_posts→全てのクエリ取得前に実行されるアクションフック
 function my_pre($query){
if(is_admin() || !$query->is_main_query()){//管理画面の場合はフックを起動しない
    //is_main_query→メインクエリかどうかを判断する。
    return;
}
if($query->is_home()) {

    $query->set("posts_per_page",3);
    return;
 }
 /**表示件数を3件に絞る　posts_per_page→表示する投稿数をリクエストするWP_Queryのパラメータ
    **/
}
//excerptの文字数を変更する。

//titleを出力する、ページによって表示されるタイトルが変更される