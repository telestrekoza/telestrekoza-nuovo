<?php get_template_part( 'header' ); ?>

<div id="content-container" class="yui3-g">
    <div id="main-column" class="yui3-u">
	     <?php get_template_part( 'loop', 'page' ); ?>
	     <?php edit_post_link(); ?>
	     <?php comments_template(); ?>
	</div>
	<div id="right-column" class="yui3-u">
		 <?php get_template_part( 'sidebar' ); ?>
	</div>
</div>

<?php get_template_part( 'bottom' ); ?>