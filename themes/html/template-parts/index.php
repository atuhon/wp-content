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
                    <h2 class="main_title"><?php the_title(); ?></h2>
                    <div class="row">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post();?>
                        <div class="col-md-4">
                            <?php get_template_part()//ヘッダー、フッター、サイドバー以外のテンプレートパーツを組み込む?>
                            
                            <article class="news">
                                <div class="news_pic">
                                    <a href="#">
                                        <img src="./assets/img/home/news_img-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="news_meta">
                                    <ul class="post-categories">
                                        <li><a href="#">お知らせ</a></li>
                                    </ul>
                                    <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
                                </div>

                                <h2 class="news_title"><a href="#">タイトルタイトルタイトル</a></h2>
                                <div class="news_desc">
                                    <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                                    <p><a href="#">[続きを読む]</a></p>
                                </div>
                            </article>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                        <?php get_sidebar('archive') ?>
                        <?php get_sidebar('category') ?>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer();?>   
    </body>

    </html>
