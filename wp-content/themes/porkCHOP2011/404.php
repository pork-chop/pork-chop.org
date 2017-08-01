<?php /**/ ?><?php get_header(); ?>

	<div id="content_box">
	
		<div id="content" class="page">
			<h1>Oops &mdash; you&rsquo;ve reached an imaginary page!</h1>
			<div class="entry">
				<p>Please choose from the following in order to get back on track:</p>
				<ul>
					<li>Try the ol&rsquo; back button on your browser.</li>
					<li>Head on back <a href="<?php bloginfo('url'); ?>">home</a>.</li>
					<li>Try the navigation menu at the top &uarr; of the page.</li>
					<li>Search or click on a link over in the sidebar.</li>
					<li><a href="<?php bloginfo('rss2_url'); ?>">Subscribe to this site&rsquo;s feed</a> so you don&rsquo;t have to come here for updates.</li>
				</ul>
			</div>
		</div>

		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>