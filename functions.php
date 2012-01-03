<?php

// Widgetized sidebar:
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
	'before_widget' => '<aside><section id="%1$s" class="%2$s">',
	'after_widget' => '</section></aside>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
    ));

    register_sidebar(array(
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
    ));

    register_sidebar(array(
	'before_widget' => '<section id="%1$s" class="%2$s">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
    ));

    register_sidebar(array(
	'before_widget' => '<section id="%1$s" class="%2$s">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
    ));
}

?>