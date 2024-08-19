<?php get_header()?>

	<h2 class="pageTitle">メニュー<span>MENU</span></h2>
	<?php get_template_part( "template-parts/breadcrumb")?>
	<?php if(have_posts()):?>
		<?php while(have_posts()):the_post() ?>

	<main class="main">
		<section class="sec">
			<div class="container">
				<div class="article article-menu">
					<div class="row">
						<div class="col-12 col-md-6">
							<class="article_title"><?php the_title()?></class=>
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>

						<dphplass="col-12 col-md-6">
							<div class="article_pic">
								<?php 
								$pic=get_field('pic');//AdvanceCustomFieldsプラグイン関数
								$pic_url=$pic['sizes']['large']//大サイズ
								?> 
								<img src="<?php echo $pic_url; ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="info">
				<div class="container">
					<ul class="info_list">
						<li>
							<b>価格</b>
							<span><?php the_field('price')?></span>
						</li>
						<li>
							<b>カロリー</b>
							<span><?php echo  number_format(get_field('calorie'))//number_format→3桁ごとに区切りを入れる ?>kcal</span>
						</li>
						<li>
							<b>アレルギー</b>
							<span><?php $allergeies=get_field('allergies');
							foreach($allergeies as $keys=>$allergy){
								echo $allergy;
								if($allergy===end($allergeies)){//end関数→最後に,を出す。
									echo ',';
								}
							}
							?></span>
						</li>
						<li>
							<b>予約</b>
							<?php if(get_field("reservation")):?>

							<span>必要あり</span>
							<?php else: ?>
								<span>必要なし</span>	
								<?php endif ?> 
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>
	<?php endwhile?>
	<?php endif?>
	<? get_footer()?>

	