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
            <header class="sec_header">
                <h2 class="title">最新情報<span>NEWS</span></h2>
            </header>


            <div class="row">
            <?php while(have_posts()):the_post()?>
                <div class="col-md-4">
  
                    <article class="<?php the_ID() ?> <?php post_class() ?>">
                        <!-- articleにIDとpostのクラスを表示させる、CSSで作業する際に便利 -->

                        <div class="news_pic">
                            <a href="<?php the_permalink() ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("thumbnail"); ?>
                                <?php else: ?> 
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="news_meta">


                                <?php the_category()?>
                            </ul>
                           <?php the_time("Y/m/d") ?>
                        </div>
                        <h2 class="news_title"><a href="#"><?php the_title();?></a></h2>
                        <div class="news_desc">
                            <p><?php echo the_excerpt();?> </p>
                            <!-- 「続きを見る」までのスペースに記事の概要を乗せる -->
                            <p><a href="<?php the_permalink();?>">続きを見る</a></p>

                        </div>
                    </article>

                </div>
                <?php endwhile;?>

               


            <p class="sec_btn">
                <a href="" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
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
                    <a href="#" class="bnr" style="background-image: url('./assets/img/home/bnr_about@2x.jpg')">
                        <div class="bnr_inner">
                            わたしたちについて<span>ABOUT</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#" class="bnr" style="background-image: url('./assets/img/home/bnr_access@2x.jpg')">
                        <div class="bnr_inner">
                            アクセス<span>ACCESS</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec-bg">
        <div class="sec_inner">
            <header class="sec_header">
                <h2 class="title">お問い合わせ<span>CONTACT</span></h2>
            </header>

            <div class="sec_body contact">
                <div class="contact_icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact_body">
                    <p>
                        お気軽にお問い合わせください
                        <span>03-1234-5678</span>
                    </p>
                </div>
            </div>

            <div class="sec_btn">
                <a href="" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>

   
      <?php get_footer()?>


<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./assets/js/home.js"></script>

</body>
</html>
