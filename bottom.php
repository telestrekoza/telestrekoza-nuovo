			</div>
			<footer><?php get_template_part( 'footer' ); ?></footer>
		</div>
	</div> <!--! end of #container -->

    <!-- JavaScript at the bottom for fast page loading -->
	
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.1.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via ant build script-->
	<!-- //TODO: remove this
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	-->
	<!-- end scripts-->
	
	<!-- Configure Google Analytics in the Theme Settings in the WP administration interface. -->
	<!-- php
		$opt = get_option('theme_options');
		$ga_tracker = $opt['ga_tracker']; 
		if (!is_null($ga_tracker) && !empty($ga_tracker)) { ?>
		<script>
		    var _gaq=[["_setAccount","<?php echo $opt['ga_tracker']; ?>"],["_trackPageview"],["_trackPageLoadTime"]];
		    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		    s.parentNode.insertBefore(g,s)}(document,"script"));
		</script>
	< ?php } -->
    
    <!-- http://codex.wordpress.org/Function_Reference/wp_footer
    	Put this template tag immediately before </body> tag in a theme template -->
    <?php wp_footer(); ?>
    
</body>
</html>