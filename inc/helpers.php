<?php

//************************************************************************
//
// Helper functions for random calls here and there
//
//************************************************************************

// Quick shortcut to get the right module.

function get_module_by_slug($page_slug) {
	$module = get_page_by_path($page_slug, OBJECT, 'module');
	if ($module) {
		return $module;
	} else {
		return null;
	}
}