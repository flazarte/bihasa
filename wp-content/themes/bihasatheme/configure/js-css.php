<?php
	function _add_javascripts()
	{
		
		//wp_enqueue_script('3.4.1-min-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), null, true );
		
	}
	add_action('wp_enqueue_scripts', '_add_javascripts', 100);

	function _add_stylesheets()
	{	
		//wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), null, 'all' );
		
	}
	add_action('wp_enqueue_scripts', '_add_stylesheets');
	