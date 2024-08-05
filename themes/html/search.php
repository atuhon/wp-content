<!DOCTYPE html>
<html lang="ja">
<body>
<header class="header">
     <?php get_header(); ?>
    </header>

    <h2 class="pageTitle">サイト内検索<span>SEARCH</span></h2>

    <main class="main">
        <div class="container">
            <h2 class="main_title">「<?php the_search_query();?>」の検索結果</h2>
            <div class="row">
                <?php if(have_posts()):?>

                <?php while(have_posts()):the_post(); ?>
                <div class="col-md-4">
                    <?php get_template_part("temlate-parts/loop-news.php") ?>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-md-4">
                  <p>検索結果がありませんでした</p>
                  </div>
                  <?php endif?>

            </div>
            <?php if(function_exists("wp_pagenavi")){wp_pagenavi();}//ページネーションの設定 ?>
       
        </div>

    </main>

    <?php get_footer();?>
</body>
</html>
