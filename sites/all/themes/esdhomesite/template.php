<?php
	
	function esd_links($variables) {
		if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
			$pid = variable_get('menu_main_links_source', 'main-menu');
			$tree = menu_tree($pid);
			return drupal_render($tree);
		}
		return theme_links($variables);
	}

	function esdhomesite_preprocess_page(&$vars, $hook) {
		if (isset($vars['node']->type)) {
	    	// If the content type's machine name is "my_machine_name" the file
	    	// name will be "page--my-machine-name.tpl.php".
	    	$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
		}
	}