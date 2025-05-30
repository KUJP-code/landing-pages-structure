<!-- 東京のスクール一覧を表示する -->										
										<?php
										  $tax_name = 'tokyo-cat';
										  $posttype_name = 'school';
										  $terms = get_terms($tax_name);
										  foreach ( $terms as $term ):
											$args = array(
											  'post_type' => $posttype_name,
											  'tax_query' => array(
												array(
												  'taxonomy' => $tax_name,
												  'field'    => 'slug',
												  'terms'    => $term->slug,
												),
											  ),
											);
											$the_query = new WP_Query( $args );
										?>
										<!-- 地域名 start -->
										<h5 id="<?php echo $term->slug ?>" class="page-subtitle5"><?php echo $term->name ?></h5>
										<!-- 地域名 end -->
											<?php if ($the_query->have_posts()): ?>
												<ul>
												<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
													<!-- 記事表示 start -->
													<li class="school-list-wrapper">
														<div class="school-name">
															<a style="font-weight: bold;" href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
														</div>
														<div class="school-info">
															<p class="p_normal-otherpage"><?php echo get_post_meta($post->ID , 'address' ,true); ?></p>
															<p class="p_normal-otherpage"><?php echo get_post_meta($post->ID , 'station' ,true); ?></p>
															<p class="p_normal-otherpage" style="color: #EF8200; font-weight: bold;">送迎対象地域：<?php echo get_post_meta($post->ID , 'pickupbus' ,true); ?></p>
														</div>
														<div class="school-more">
															<a href="<?php echo get_permalink() ?>" class="btn_normal_narrow btn_orange">詳細を見る</a>
														</div>
													</li>
													<!-- 記事表示 end -->
												<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										<?php endforeach; wp_reset_postdata(); ?>