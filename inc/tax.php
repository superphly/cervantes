<?php 

function example_taxonomy() {  
	register_taxonomy(  
		'',  	//The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
		'',	//post type slug
		array(
			'hierarchical'      => true,
			'label'             => '',  //Display name
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array(
				'slug'          => '',		// This controls the base slug that will display before each term
				'with_front'    => false 	// Don't display the category base before
			)
		)
	);
}

add_action( 'init', 'example_taxonomy');