<?php

/**
 * Registers custom post types for the university.
 *
 * This function registers the 'event', 'program', 'professor', 'campus', and 'note' post types.
 * Each post type has its own set of labels, capabilities, and supports.
 *
 * @return void
 */
function university_post_types(){
    register_post_type('event', array(
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite'=> array('slug'=>'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_itmes' => 'All Events',
            'singular_name' => 'Event',
            'view_items' => 'View Events',
            'add_new' => 'Add New Event',
            'search_items' => 'Search Events'
        ),
        'menu_icon' => 'dashicons-calendar',
    ));
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'rewrite'=> array('slug'=>'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_itmes' => 'All Programs',
            'singular_name' => 'Program',
            'view_items' => 'View Programs',
            'add_new' => 'Add New Program',
            'search_items' => 'Search Programs'
        ),
        'menu_icon' => 'dashicons-awards',
    ));
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_itmes' => 'All Professors',
            'singular_name' => 'Professor',
            'view_items' => 'View Professor',
            'add_new' => 'Add New Professor',
            'search_items' => 'Search Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
    ));
    register_post_type('campus', array(
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite'=> array('slug'=>'campuses'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_itmes' => 'All Campuses',
            'singular_name' => 'Campus',
            'view_items' => 'View Campuses',
            'add_new' => 'Add New Campus',
            'search_items' => 'Search Campuses'
        ),
        'menu_icon' => 'dashicons-location-alt',
    ));

    register_post_type('note', array(
        'show_in_rest' => true,
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite'=> array('slug'=>'note'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Notes',
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'all_itmes' => 'All Notes',
            'singular_name' => 'Note',
            'view_items' => 'View Notes',
            'add_new' => 'Add New Note',
            'search_items' => 'Search Notes'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'capability_type' => 'note',
    ));

    register_post_type('like', array(
        'supports' => array('title'),
        'rewrite'=> array('slug'=>'note'),
        'public' => false,
        'labels' => array(
            'name' => 'Likes',
            'add_new_item' => 'Add New Like',
            'edit_item' => 'Edit Like',
            'all_itmes' => 'All Likes',
            'singular_name' => 'Like',
            'view_items' => 'View Likes',
            'add_new' => 'Add New Like',
            'search_items' => 'Search Likes'
        ),
        'menu_icon' => 'dashicons-heart',
    ));
    
}

add_action( 'init', 'university_post_types'); 