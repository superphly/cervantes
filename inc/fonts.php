<?php 

function cerv_fonts() {
	wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato');
	wp_enqueue_style('opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,300');
}

add_action('wp_enqueue_scripts', 'cerv_fonts');