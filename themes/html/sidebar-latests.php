

<?php $the_query=new WP_Query($args);

if($the_query->have_posts()) : ?>
<aside class="archive">
    <h2 class="archive_title">最新記事</h2>
    <ul class="archive_list">
        <?php $args=array(
            "post_type"=> "post",//投稿記事のみを指定 「->」→プロパティやメソッドにアクセスするために使用
            "posts_per_page"=>5,
        );

        while ($the_query->have_posts()) : $the_query->the_post();?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</aside>
<?php endif; ?>