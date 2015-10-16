<?php 

if( function_exists('acf_add_options_sub_page') ) {

    acf_add_options_sub_page(array(
        'title' => 'CPT Options',
        'menu' => 'CPT Options',
        'parent' => 'edit.php?post_type=cpt',
        'slug' => 'cpt_options',
        'capability' => 'manage_options'
    ));

}