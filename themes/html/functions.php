<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
function custom_excerpt_length( $length ) {
    return 30;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//excerptの文字数を変更する。

//titleを出力する、ページによって表示されるタイトルが変更される