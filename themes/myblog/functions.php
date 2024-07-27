<?php
function init_func() {
    add_theme_support('title-tag');
    // テーマにWordPressの機能を追加するもの
    add_theme_support('post-thumbnails');//サムネイルが機能になかったため追加
    register_post_type('item',[//カスタム投稿機能の追加(postなどは使えない)
        'labels'=>[
            'name'=>'商品',
        ],
        'public'=>true,
        'has_archive'=>true,
        'hierarchical'=>false,
        'menu_position'=>5,

    ]);
    
    register_taxonomy('item_category','item',[
        'labels'=>[
            'name'=>'商品カテゴリー',
        ],
        'hierarchical'=>true,//階層化する
        // 'public' => true,
        ]);
}
add_action('init', 'init_func');
//add_action→アクションフック initはプラグイン初期化時点


