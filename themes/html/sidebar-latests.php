

<?php 
$args=array(
    "post_type"=> "post",//投稿記事のみを指定 「->」→プロパティやメソッドにアクセスするために使用
    "posts_per_page"=>5,
);
$the_query=new WP_Query($args);
if($the_query->have_posts()) : ?>
<aside class="archive">
    <h2 class="archive_title">最新記事</h2>
    <ul class="archive_list">
        <?php 

        while ($the_query->have_posts()) : $the_query->the_post();//the_queryの値を入れてる?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata();//WP_Queryを使用する場合は最後にメインループにデータを渡すため、この関数で投稿データをリセットする ?>
    </ul>
</aside>
<?php endif; ?>
