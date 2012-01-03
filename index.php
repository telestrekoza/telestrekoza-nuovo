<?php get_template_part( 'top' ); ?>

<div id="content-container" class="yui3-g">
    <div id="main-column" class="yui3-u">
	     <?php get_template_part( 'loop', 'index' ); ?>
	     <nav role="navigation">
			<div id="top-pagination">
			    <?php next_posts_link('&laquo; Предыдущая страница') ?>
			    <?php previous_posts_link('Следующая страница &raquo;') ?>
			</div>
	    </nav>
	</div>
	<div id="right-column" class="yui3-u">
		 <?php get_template_part( 'sidebar' ); ?>
	</div>
</div>

<?php get_template_part( 'bottom' ); ?>
