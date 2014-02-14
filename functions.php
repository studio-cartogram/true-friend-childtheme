<?php

	/* ========================================================================================================================
	
	Images

	- Set thumbnail sizes and add any additional featured images.
	
	======================================================================================================================== */
	

	add_theme_support('post-thumbnails');
	
	add_image_size('cartogram_small',400, 400, true);
	add_image_size('cartogram_rectangle',600, 400, false);
	add_image_size('cartogram_medium',750, 750, true);
	add_image_size('cartogram_large',1500, 1500, true);

	add_image_size('img-small',300, 200, true);
	add_image_size('img-logo',250, 250, false);
	add_image_size('img-featured',1500, 500, true);

	/* ========================================================================================================================
	
	Navigation Menus
	
	======================================================================================================================== */

	register_nav_menus( array(
		'nav_primary'	=>  'Primary Nav',
		'nav_artists' 	=>  'Artists Sub Nav',
		'nav_programs' 	=>  'Programs Sub Nav',
		'nav_about' 	=>  'About Sub Nav',
		'nav_get_involved' 	=>  'Get Involved Sub Nav',
		'nav_secondary' =>  'Secondary Sub Nav below the main links in the side panel'
	) );

	/* ========================================================================================================================
	
	Define Widgetized Areas
	
	======================================================================================================================== */

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => __('This is the default widget area for the sidebar. This will be displayed if the other sidebars have not been populated with widgets.', 'cartogram'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	?>