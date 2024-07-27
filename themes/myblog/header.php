<!DOCTYPE html>
<html lang="ja">
    <head>
    <?php wp_head()?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <?php
        $id=get_post_thumbnail_id();//アップされた画像のid
        $img=wp_get_attachment_image_src($id); //アップロードされた画像を１件取って来る
        ?>

        <link rel="icon" type="image/x-icon" href="<?php echo $img[0]; ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />

    </head>