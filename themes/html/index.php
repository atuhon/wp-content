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
    <?php get_header(); ?>

    <h2 class="pageTitle">最新情報<span>NEWS</span></h2>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="main_title"><?php wp_title(''); ?></h2>
                    <div class="row">

                        <?php while (have_posts()):the_post(); ?>
                        <?php get_template_part('template-parts/loop','news') ?>

                        <?php endwhile; ?>


                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <?php get_sidebar('category') ?>
                    <?php get_sidebar('archive') ?>
                </div>
            </div>
        </div>
    </main>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

    <footer class="footer">
        <?php get_footer(); ?>
    </footer>

</body>

</html>