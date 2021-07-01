<?php 
	add_action('wp_enqueue_scripts', 'style_theme');
	add_action('wp_footer', 'scripts_theme');
	add_action('after_setup_theme', 'theme_register_nav_menu');

	add_action('wp_ajax_send_user', 'send_user');
	add_action('wp_ajax_nopriv_send_user', 'send_user');


	function substr_team_post($output) {
		if(in_category( 'team' )) {
			$output = substr($output, 0, 500);
			$output.= '...';
		} else {
			$output = substr($output, 0, 130);
			$output.= '...';
		}
		return $output;
	}

	add_filter( 'get_the_excerpt', 'substr_team_post' );


	function send_user() {
		require_once('php/check.php');
	}

	add_action('wp_ajax_send_email', 'send_email');
	add_action('wp_ajax_nopriv_send_email', 'send_email');

	function send_email() {
		require_once('php/subscribe.php');
	}

	add_action('wp_ajax_send_image', 'send_image');
	add_action('wp_ajax_nopriv_send_image', 'send_image');

	function send_image() {
		require_once('php/checkfiles.php');
	}

	function style_theme() {
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');
	}

	function scripts_theme() {
		wp_deregister_script('isotope');
		wp_register_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
		wp_enqueue_script('isotope');

		wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/script/ajax.js');
		wp_enqueue_script('visualScript', get_template_directory_uri() . '/assets/script/visualScript.js');
		wp_enqueue_script('secretCode', get_template_directory_uri() . '/assets/script/codeFromWindow.js');
		wp_enqueue_script('init', get_template_directory_uri() . '/assets/script/initFunction.js');

		// wp_deregister_script('jquery');
		// wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
		// wp_enqueue_script('jquery');
	}

	function theme_register_nav_menu() {
		add_theme_support('post-thumbnails', array('post'));
		add_image_size('news-image', 307, 207, true);
		register_nav_menu('top_menu', 'Menu in header');
		register_nav_menu('bottom_menu_res', 'Menu in footer Resources');
		register_nav_menu('bottom_menu_links', 'Menu in footer Links');
	}
?>