<?php
/**
 * Trigger this file on plugin uninstallation
 * 
 * @package ProductPlugin
 */

//Security Check
if(! defined ('WP_UNINSTALL_PLUGIN')){
    die;
}

//delete from db
//method 1
// $products = get_posts(array('post_type' => 'product', 'numberposts' => -1));
// //loop
// foreach($products as $product){
//     wp_delete_posts($book->ID, true);
// }

//method 2
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type='product'");
$wpdb->query("DELETE FROM wp_posts_meta WHERE post_id NOT IN (SELECT ID FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT ID FROM wp_posts)");