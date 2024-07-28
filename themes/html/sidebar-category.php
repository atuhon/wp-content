<aside class="archive">
    <h2 class="archive_title">カテゴリ 一覧</h2>
    <ul class="archive_list">
        <?php 
        $args=array(
            "title_li"=> "",//見出しを削除
        );
        
        wp_list_categories($args)?>
        <!-- カテゴリーごとにリンクを作ってくれる
         引数を省略すると「カテゴリー」の文字が出るため、見出しを削除した引数を設定
          -->
      
    </ul>
</aside>
