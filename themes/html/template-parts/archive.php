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
        <?php get_header(); ?>
    </header>

    <h2 class="pageTitle">最新情報<span>NEWS</span></h2>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- 個別ページでも投稿内容を取得する場合はwhile文が必要 -->



                            <article class="article">
                                <header class="article_header">
                                    <h2 class="article_title"><?php the_title(); ?></h2>
                                    <div class="article_meta">
                                        <ul class="post-categories">
                                            <?php the_category() ?>
                                        </ul>
                                        <?php the_time("Y/m/d") ?>
                                    </div>
                                </header>

                                <div class="article_body">
                                    <div class="content">
                                        <p><?php the_title() ?></p>
                                        <p>
                                            <?php the_content() ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="postLinks">
                                    <!-- 前ページリンク
                            %link→aタグになる
                            -->
                                    <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
                                    <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div class="col-12 col-md-3">
                    <aside class="archive">
                    <?php get_sidebar('category') ?>
                    </aside>
                    <aside class="archive">
                    <?php get_sidebar('archive') ?>
                    </aside>
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