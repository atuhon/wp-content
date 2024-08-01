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
</html>
