<!DOCTYPE html>
<html lang="ja">
<!-- archive-{post_type}.phpの命名規則 -->
<?php get_header()?>

<body>


	<h2 class="pageTitle">メニュー<span>MENU</span></h2>
	<?php get_template_part( "template-parts/breadcrumb")
	?>
	<?php  
	$kinds=get_terms(array("taxonomy"=>"kind"));//条件を指定してタクソノミーを配列で取得する。
	if(!empty($kind)):
	?>
	<div class="pageNav">
	<ul>
		<?php foreach($kinds as $kind): ?>
			<li>
				<a href="<?php echo get_term_link($kind)//アーカイブページのURLを取得する?> <?php echo $kind->name ?>"></a>
			</li>
			<?php endforeach?>
	</ul>
	</div>
	<?php endif?>


	<main class="main">
		<section class="sec">
			<div class="container">
				<div class="sec_header">
					<h2 class="title title-jp">フード</h2>
					<span class="title title-en">FOOD</span>
				</div>
				<div class="row justify-content-center">
					<?php 
					//メニューの投稿タイプ
					$args=array(
						"post-type"=>"menu",
						"post-per-page"=>-1,
					);
					//料理の種類で絞りこむ
					$taxquerysp=array(
						"relation=>AND"
					);
					$taxquerysp[]=array(
						"taxonomy"=>"kind",
						"terms"=>$kind->slug,
						"field"=>"slug",
					);
					$args["tax_query"]=$taxquerysp;
					$the_query=new WP_Query($args);
					if($the_query->have_posts()):
					?>
					<?php while($the_query->have_posts()):$the_query->the_post(); ?>
					<div class="col-md-3">
					<?php get_template_part('template-parts/loop', 'menu') ?>

				</div>
				<?php endwhile?>
					<?php endif?>



				</div>
			</div>
		</section>
	</main>


<?php get_footer()?>

</body>

</html>