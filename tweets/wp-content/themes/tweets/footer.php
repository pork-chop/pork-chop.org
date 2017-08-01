</div>
<!-- END #content -->

<?php get_sidebar(); ?>


<span class="reset">&nbsp;</span>

<div id="footer">
  <p><?php if (!is_page('About')) { ?><a href="<?php $page = get_page_by_title('About'); echo get_page_link($page->ID); ?>">About</a>. <?php } ?>Powered by <a href="http://wordpress.org/">WordPress</a>.</p>
</div>
<?php wp_footer(); ?>

</div>
<!-- END #container -->

</body>
</html>
