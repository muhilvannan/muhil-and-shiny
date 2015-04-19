<?php
 
 // See config-init for setup
 
//Remove unwanted code from the head
add_theme_support( 'menus' );
remove_action( 'wp_head', 'feed_links_extra' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link');
remove_action( 'wp_head', 'parent_post_rel_link');
remove_action( 'wp_head', 'start_post_rel_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head', 'wp_generator');/**/

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'homepage-thumb', 1360, 560, true ); 

?>