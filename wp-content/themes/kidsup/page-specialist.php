<?php get_header('page'); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
</header><!-- end header-->
		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper" >
					<!-- start 01 specialist -->
					<section id="specialist-01" class="bcg-brown">
						<div class="coursepage-title-wrapper">
							<h3 class="coursepage-title-age">上級コース：対象年齢　小4以上</h3>
							<p class="coursepage-title-copy">未来のためのハイレベル英語</p>
						</div>
					</section><!-- end #specialist-01 -->
					<div class="img-kids-running-group-2 box wow animated swing" data-wow-delay="1s"><img class="alignnone size-full wp-image-159" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2023/03/img-back-kids-running-w.png" alt="KidsUPとは" width="149" height="115" /></div>
					<?php breadcrumb(); ?>
					<?php the_content(); ?>
				</section><!-- end .page-contentents-wrapper-->
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>