	<aside>
		<section id='dynamic-sidebar' role='navigation'>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			<?php endif; ?>
		</section>
	</aside>

	<?php $options = get_option('theme_options');
        $twitterId =  $options['twitter_id'];
        $facebookId =  $options['facebook_id'];
        $googleId =  $options['google_id'];

	    if (!empty($twitterId) || !empty($facebookId) || !empty($googleId)) { 
	?>
	    <aside>
            <section id='integration' role='list'>
    
                <h3>Other Sites</h3>
                <ul>
                <?	if (!is_null($twitterId) && !empty($twitterId)) { ?>
                    <li>
                        <img src="<?php bloginfo('template_url'); ?>/img/site-icons/twitter.png" />
                        <a href="http://twitter.com/<?php echo $twitterId; ?>" />Twitter</a>
                    </li>
                <?php } ?>
    
                <?	if (!is_null($facebookId) && !empty($facebookId)) { ?>
                    <li>
                        <img src="<?php bloginfo('template_url'); ?>/img/site-icons/facebook.png" />
                        <a href="http://facebook.com/<?php echo $facebookId; ?>" />Facebook</a>
                    </li>
                <?php } ?>
    
                <?	if (!is_null($googleId) && !empty($googleId)) { ?>
                    <li>
                        <img src="<?php bloginfo('template_url'); ?>/img/site-icons/google.png" />
                        <a href="http://profiles.google.com/<?php echo $googleId; ?>" />Google profile</a>
                    </li>
                <?php } ?>
    
                </ul>
            </section>
        </aside>
    <?php } ?>