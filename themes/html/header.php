<!DOCTYPE html>
<html lang="ja">
<head>
    <?php wp_enqueue_script('JQuery');
    /*読み込むJS設定ファイルの衝突を避けるために使用、
    「JQuery」指定でJQuery設定ファイルの読み込みを１度にする。
    第二引数にパスを追加する事で独自のJSファイルの使用も可能
    */
 ?>

 <?php wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css')?>
 <?php wp_enqueue_script('bistro',get_template_directory_uri() . '/assets/js/main.js')?>;
 <?php wp_head() //→プラグインが使えなくなる可能性がある?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css" rel="stylesheet">

</head>
<header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?php home_url()?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
            </div>

            <div class="header_desc"><p><?php bloginfo('description'); ?></p></div>
            <?php get_search_form() ?>

            <form action="<?php echo home_url("/") ?>" method="get" class="header_search" name="s">
                <input  name="s" value="<?php the_search_query()?>" type="text" placeholder="キーワードを入力">
                <i class="fas fa-search"></i>
            </form>
        </div>

        <div class="header_links">
        <nav class="gnav">
<?php
$args=array(
    'menus'=>'head_navi',//管理画面で作成したメニュー名
    'menu_class'=>'',//メニュー構成のulタグ
    'container'=>false//divタグの削除
);
wp_nav_menu($args);
?>
			</nav>



            <ul class="header_sns">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
       
            </html>

