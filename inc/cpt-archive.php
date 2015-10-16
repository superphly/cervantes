<?php

//************************************************************************
//
// These are for modifying the queries on the archive pages. These have
// to be done before the page template loads, hence why they are being
// called in from functions.php
//
// Resource: https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
//
//************************************************************************

function custom_query($query) {

	// Speaker Archive

	if ($query->is_main_query() && $query->is_post_type_archive('cpt') && !is_admin()) {
		$taxquery = array(
			array(
				'taxonomy' => 'group',
				'field' => 'slug',
				'terms' => 'featured'
			)
		);
		$query->set('tax_query', $taxquery );
		$query->set('orderby', 'menu_order');
		$query->set('posts_per_page', -1);
	}

}

add_action('pre_get_posts', 'custom_query');