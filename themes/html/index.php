<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header() ?>

  </head>
<body <?php body_class(); 
/*body要素に付与されたclassを出力する、
アクセスしているユーザによって表示が異なるため
logginなどのクラスを使ってログイン時の処理を書いたりできる*/
?> >
<?php  wp_body_open() 

//functions.phpでbody内に記述する際に使用する?>
 </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs><clipPath id="clip-path"><rect width="30" height="30" fill="none"/></clipPath></defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)"/>
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)"/>
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)"/>
            </g>
        </svg>
    </header>

<?php if ( is_home() )://トップ画面のみで表示させたい内容を表示 ?>
    <div class="jumbotron">
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
    </div>
    <?php endif; ?>

    <section class="sec">
        <div class="container">
        <div class="row">

                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part('template-parts/loop', 'news') ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif ?>
       


        </div>


                                    <?php
                                    $news=get_term_by("slug", "news", "category");
                                    $newslink=get_term_link( $news,"category" ); 
                                    ?>
            <p class="sec_btn">
                <a href="<?php echo $newslink; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
            </p>

        </div>
    </section>

    <section class="sec bg-gray">
        <div class="container">
            <header class="sec_header">
                <h2 class="title">店舗情報<span>INFORMATION</span></h2>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo get_permalink(2216)//idを入れるとそのURLが表示される ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_about@2x.jpg')">
                        <div class="bnr_inner">
                            わたしたちについて<span>ABOUT</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="<?php echo get_permalink(2223)//idを入れるとそのURLが表示される ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_access@2x.jpg')">
                        <div class="bnr_inner">
                            アクセス<span>ACCESS</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

   
      <?php get_footer()?>


</body>

</html>