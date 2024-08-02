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
    <header class="header">
        <?php the_header(); ?>

    </header>
    <?php if(have_posts()):the_post(); ?>
    <?php while (have_posts()) : the_post(); ?>

    <h2 class="pageTitle"><?php the_title();?><span><?php echo strtoupper($post->post_name);?></span></h2>

    <main class="main">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>

            </div>
        </div>
    </main>
    <?php endwhile; ?>
    <?php endif ?>


    <footer class="footer">
        <?php the_footer();?>

    </footer>

</body>
</html>
