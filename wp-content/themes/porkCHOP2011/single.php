<?php /**/ ?><?php get_header(); ?>

	<div id="content_box">
		
		<div id="content" class="posts single">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
			<h1><?php the_title(); ?></h1>
			<p class="post_date"><?php the_time('F jS, Y') ?> | <?php the_category(', ') ?></p>
<div style="float:left;margin-top:-1.7182em;"><p><a rel="nofollow" href="<?php the_permalink(); ?>#disqus_thread" style="margin-bottom:1.5182em;">Add a Comment</a></p></div>
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
			
			<?php comments_template(); ?>
			<div class="linkwithin_div"></div>
		<?php endwhile; else: ?>
		
			<h1>Uh oh.</h1>
			<p class="post_date">You better <em>never</em> see this text.</p>
			<div class="entry">
				<p>Sorry, no posts matched your criteria. Wanna search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		
		</div>
		
		<?php get_sidebar(); ?>
			
	</div>

<?php get_footer(); ?>