<section role='main'>
<?php while (have_posts()){ the_post(); ?>
    <article id='post-<?php the_ID(); ?>' role='article'>
		<div <?php post_class(); ?>>
		    <header class="post-header">
		    	<div class="date"><span class="day"><?php the_time('j ') ?></span><span class="month"><?php the_time('F Y') ?></span></div>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			</header>
	
		     <section>
				<div class='post-content'>
			      <?php the_content(); ?>
				</div>
		     </section>
	
		     <footer>
				<div class='post-footer yui3-g'>
					<div class="yui3-u">
						<span class="cats"><?php the_category(', ') ?></span>
						<span class="posted"><?php the_author_posts_link(); ?></span>
					</div>
					<div class="comments yui3-u right">
					<?php if ( is_home() ) {
						comments_popup_link('Нет комментариев', '1 Комментарий', '% Комментариев');
				     }
				?>
				</div>
		    </footer>
		</div>
    </article>
<?php } ?>
</section>