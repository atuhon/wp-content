<!DOCTYPE html>
<html lang="ja">
<header class="header">
     <?php get_header(); ?>
    </header>

    <h2 class="pageTitle">サイト内検索<span>SEARCH</span></h2>

    <main class="main">
        <div class="container">
            <h2 class="main_title">「<?php the_search_query();?>」の検索結果</h2>
            <div class="row">

                <?php while(have_posts()):the_post(); ?>

                <div class="col-md-4">
                    <?php get_template_part($slug, $name) ?>
              
                </div>
                <?php endwhile; ?>

          
            </div>
        </div>

    </main>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

    <footer class="footer">
        <div class="container">
            <div class="footer_inner">
                <nav>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">わたしたちについて</a></li>
                        <li><a href="#">アクセス</a></li>
                        <li><a href="#">最新情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
                <div class="footer_copyright">
                    <small>&copy; BISTRO CALME All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
