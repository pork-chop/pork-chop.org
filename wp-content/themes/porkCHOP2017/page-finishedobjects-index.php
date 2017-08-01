<?php
/*
 Template Name: Finished Objects Index
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									<p class="byline vcard" style="display: none">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>


								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>

								<footer class="article-footer" style="display: none;">

				                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							<!-- <h2 class="h2 entry-title">Finished Object Archives</h2> -->

							<ul>
								<?php 
									$finishedObjsArgs = array (
										'cat'				=> 702,
										'posts_per_page'	=> 20
									);

									$finishedObjs_query = new WP_Query( $finishedObjsArgs ); 

									if ( $finishedObjs_query->have_posts() ) {
										// var_dump($finishedObjs_query);

									    while ( $finishedObjs_query->have_posts() ) {
									        $finishedObjs_query->the_post(); ?>

											<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
												<header class="article-header">
												    <?php if (has_post_thumbnail( $post->ID ) ):
												        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

												        ?>
													        <div class="featured-image"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo $image[0]; ?>"></a></div>
														<?php
													endif; ?>

													<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
												</header>

												<?php if (get_field('pattern_name')): ?>
													<section class="entry-content cf" itemprop="articleBody">
														<p>Pattern: <?php if (get_field('pattern_link')): ?><a href="<?php the_field('pattern_link'); ?>" target="_blank"><?php endif; ?><?php the_field('pattern_name'); ?><?php if (get_field('pattern_link')): ?></a><?php endif; ?></p>
														<?php if (get_field('pattern_designer')): ?><p>Designer: <?php the_field('pattern_designer'); ?></p><?php endif; ?>
														<?php if (get_field('yarn_used')): ?><p>Yarn used: <?php the_field('yarn_used'); ?></p><?php endif; ?>
													</section>
												<?php endif; ?>
										    </article>
									    
										<?php }

									} else {
										echo '<p>nada found</p>';
									}
									wp_reset_postdata();
								?>
							</ul>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
