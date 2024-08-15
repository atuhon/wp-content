<section class="comments">
<?php
$comment_form_args=array(
    "title_reply"=>"コメント投稿フォーム"
);
comment_form($comment_form_args);//コメントフォームの表示
if ( have_comments() ) ://
?>
    <p><?php comments_number("コメントがありません","コメントが1件あります","コメントが%件あります"); //投稿されているコメント数とテキストの表示
   //引数3つ付けるとコメントを表示できる。 ?></p>
    <ol class="commentlist">
        <?php wp_list_comments(); //コメント一覧を表示する、liタグで出力されるためol or ulは記述しておく必要がある?>
    </ol>
<?php
$pagenatenate_comments_link_args=array(
    "prev_text"=>"←前のページ",
    "next_text"=> "次のコメント→"
);
paginate_comments_links();//分割されたページのリストを表示する

endif;
?>
</section>
