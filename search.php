<?php get_template_part( 'header' ); ?>

<div id="content-container">
	<div id="left-column">
		<section>
			<div id="search-results">
				<h1><?php printf( __( 'Search Results for: %s' ), '<mark>' . get_search_query() . '</mark>'); ?></h2>
			</div>
		</section>

	     <?php get_template_part( 'loop', 'index' ); ?>
	</div>
	<div id="right-column">
	     <?php get_sidebar( $name ); ?> 
	</div>
</div>

<?php get_template_part( 'bottom' ); ?>





