<?php

/**
 * 
 * Trigger this file on plugin uninstallation
 * 
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die();
}

// Second method to delete the data on plugin unistallation

global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT ID from wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT ID from wp_posts)");


// First method to delete the data on plugin unistallation

/*

// This code will delete the data of posts related to post type book.

$books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

foreach ($books as $book) {
    wp_delete_post($book->ID, true);
}

*/
