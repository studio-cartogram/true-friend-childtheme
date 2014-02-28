<?php

	/* ========================================================================================================================
	
	Cartogram Post Types and Taxonomies Functions v.1.0
	
	======================================================================================================================== */

	function create_post_types() {
		
		$supportersLabels = array(
			'name' => __( 'Supporters' ),
			'singular_name' => __( 'Supporter' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Supporter' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Supporter' ),
			'new_item' => __( 'New Supporter' ),
			'view' => __( 'View Supporter' ),
			'view_item' => __( 'View Supporter' ),
			'search_items' => __( 'Search Supporters' ),
			'not_found' => __( 'No Supporters found' ),
			'not_found_in_trash' => __( 'No Supporters found in Trash' ),
			'parent' => __( 'Parent Supporter' ),
		);
		
		$supportersArgs = array(
			'labels' => $supportersLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => false,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array('category'),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'supporters' , $supportersArgs );

		$teamLabels = array(
			'name' => __( 'Team' ),
			'singular_name' => __( 'Member' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Member' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Member' ),
			'new_item' => __( 'New Member' ),
			'view' => __( 'View Member' ),
			'view_item' => __( 'View Member' ),
			'search_items' => __( 'Search Team' ),
			'not_found' => __( 'No Team found' ),
			'not_found_in_trash' => __( 'No Team found in Trash' ),
			'parent' => __( 'Parent Member' ),
		);
		
		$teamArgs = array(
			'labels' => $teamLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array('category'),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'team' , $teamArgs );


		$artistsLabels = array(
			'name' => __( 'Artists' ),
			'singular_name' => __( 'Artist' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Artist' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Artist' ),
			'new_item' => __( 'New Artist' ),
			'view' => __( 'View Artist' ),
			'view_item' => __( 'View Artist' ),
			'search_items' => __( 'Search Artists' ),
			'not_found' => __( 'No Artists found' ),
			'not_found_in_trash' => __( 'No Artists found in Trash' ),
			'parent' => __( 'Parent Artist' ),
		);
		
		$artistsArgs = array(
			'labels' => $artistsLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array('category'),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'artists' , $artistsArgs );

		$testimonialLabels = array(
			'name' => __( 'Testimonials' ),
			'singular_name' => __( 'Testimonial' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Testimonial' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Testimonial' ),
			'new_item' => __( 'New Testimonial' ),
			'view' => __( 'View Testimonial' ),
			'view_item' => __( 'View Testimonial' ),
			'search_items' => __( 'Search Testimonials' ),
			'not_found' => __( 'No Testimonials found' ),
			'not_found_in_trash' => __( 'No Testimonials found in Trash' ),
			'parent' => __( 'Parent Testimonial' ),
		);
		
		$testimonialArgs = array(
			'labels' => $testimonialLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'testimonials' , $testimonialArgs );

		$slideLabels = array(
			'name' => __( 'Slides' ),
			'singular_name' => __( 'Slide' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Slide' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Slide' ),
			'new_item' => __( 'New Slide' ),
			'view' => __( 'View Slide' ),
			'view_item' => __( 'View Slide' ),
			'search_items' => __( 'Search Slides' ),
			'not_found' => __( 'No Slides found' ),
			'not_found_in_trash' => __( 'No Slides found in Trash' ),
			'parent' => __( 'Parent Slide' ),
		);
		
		$slideArgs = array(
			'labels' => $slideLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'slides' , $slideArgs );

		$videolabels = array(
			'name' => __( 'Videos' ),
			'singular_name' => __( 'Video' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Video' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Video' ),
			'new_item' => __( 'New Video' ),
			'view' => __( 'View Video' ),
			'view_item' => __( 'View Video' ),
			'search_items' => __( 'Search Videos' ),
			'not_found' => __( 'No Videos found' ),
			'not_found_in_trash' => __( 'No Videos found in Trash' ),
			'parent' => __( 'Parent Video' ),
		);
		
		$videoArgs = array(
			'labels' => $videolabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'videos' , $videoArgs );

		$instagramlabels = array(
			'name' => __( 'Instagrams' ),
			'singular_name' => __( 'Instagram' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Instagram' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Instagram' ),
			'new_item' => __( 'New Instagram' ),
			'view' => __( 'View Instagram' ),
			'view_item' => __( 'View Instagram' ),
			'search_items' => __( 'Search Instagrams' ),
			'not_found' => __( 'No Instagrams found' ),
			'not_found_in_trash' => __( 'No Instagrams found in Trash' ),
			'parent' => __( 'Parent Instagram' ),
		);
		
		$instagramArgs = array(
			'labels' => $instagramlabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'instagrams' , $instagramArgs );



		flush_rewrite_rules( false );
	}





	function create_taxonomies() {
		$labels = array(
	    	'name' => __( 'Supporter Type' ),
	    	'singular_name' => __( 'Supporter Type' ),
	    	'search_items' =>  __( 'Search Supporter Types' ),
	    	'all_items' => __( 'All Supporter Types' ),
	    	'parent_item' => __( 'Parent Supporter Type' ),
	    	'parent_item_colon' => __( 'Parent Supporter Type:' ),
	    	'edit_item' => __( 'Edit Supporter Type' ),
	    	'update_item' => __( 'Update Supporter Type' ),
	    	'add_new_item' => __( 'Add New Supporter Type' ),
	    	'new_item_name' => __( 'New Supporter Type Name' )
	  	); 	

	  	register_taxonomy('supporter_type','supporters',array(
	    	'hierarchical' => true,
	    	'labels' => $labels
	  	));

		$labels = array(
	    	'name' => __( 'Medium' ),
	    	'singular_name' => __( 'Medium' ),
	    	'search_items' =>  __( 'Search Mediums' ),
	    	'all_items' => __( 'All Mediums' ),
	    	'parent_item' => __( 'Parent Medium' ),
	    	'parent_item_colon' => __( 'Parent Medium:' ),
	    	'edit_item' => __( 'Edit Medium' ),
	    	'update_item' => __( 'Update Medium' ),
	    	'add_new_item' => __( 'Add New Medium' ),
	    	'new_item_name' => __( 'New Medium Name' )
	  	); 	

	  	register_taxonomy('medium','artists',array(
	    	'hierarchical' => true,
	    	'labels' => $labels
	  	));

			flush_rewrite_rules( false );
		}


?>