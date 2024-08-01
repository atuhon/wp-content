<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

<footer class="footer">
<?php wp_footer() //→プラグインが使えなくなる可能性があるため入れておく?>
        <div class="container">
            <div class="footer_inner">
            <nav class="gnav">
<?php
$args=array(
    'menus'=>'head_navi',//管理画面で作成したメニュー名
    'menu_class'=>'',//メニュー構成のulタグ
    'container'=>false//divタグの削除
);
wp_nav_menu($args);
?>
			</nav>
                <div class="footer_copyright">
                    <small>&copy; BISTRO CALME All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>