<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
function custom_excerpt_length( $length ) {
    return 30;	//表示したい文字数
}	
 add_filter( 'comment_form_default_fields', 'my_comment_form_default_fields' );
 function my_comment_form_default_fields($args){
    $args["url"]="";//「サイト」の項目を削除する
    return $args;

 }
//excerptの文字数を変更する。

//titleを出力する、ページによって表示されるタイトルが変更される