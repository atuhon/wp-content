<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サンプルサイト</title>
    <link href="./assets/css/styles.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</head>
<body>
    <?php get_header() ?>


    <h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>

    <div class="main">
        <div class="container">
            <p>お探しのページが見つかりませんでした。</p>
            <p>申し訳ございませんが、<a href="<?php echo  home_url("/")?>">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
    </div>


<?php get_footer() ?>
  
</body>
</html>
