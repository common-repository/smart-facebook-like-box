<?php

function js_css_like_box(){
	wp_enqueue_script('main',plugins_url().'/smart-fb-liker/js/main.js');
}
add_action('wp_enqueue_scripts','js_css_like_box');