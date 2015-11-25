<?php 

function cerv_fonts() {
	wp_enqueue_style('alegreya-sans', 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,700italic');
}

add_action('wp_enqueue_scripts', 'cerv_fonts');