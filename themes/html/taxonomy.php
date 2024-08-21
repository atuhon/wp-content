<?php get_header() ?>

	<h2 class="pageTitle">メニュー<span>MENU</span></h2>
	<?php get_template_part( "template-parts/breadcrumb")?>

	<main class="main">
		<?php 
		//開いているページの取得　
		$kind_slug=get_query_var("kind");//グローバル$wp_queryのクエリ変数を取得する。
		$kind=get_term_by( "slug",$kind_slug,"kind")//id 名前 slugを指定してカテゴリタグ情報を取得する。
		?>
		<section class="sec">
			<div class="container">
				<div class="sec_header">
					<h2 class="title title-jp"><?php echo $kind->name ?></h2>

					<span class="title title-en"><?php echo strtoupper($kind->slug)//strtoupper：小文字→大文字に変換する ?></span>
				</div>
				<div class="row justify-content-center">
				<?php if(have_posts()):?>
					<?php while(have_posts()):the_post() ?>

					

					<div class="col-md-3">
					<?php get_template_part('template-parts/loop', 'menu') ?>

				</div>
					<?php endwhile?>
					<?php endif?>

				</div>
			</div>
		</section>
	</main>
	<?php get_footer();?>

