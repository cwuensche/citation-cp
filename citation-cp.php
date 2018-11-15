<?php
/*
Plugin Name: Citation Custom Posts
Description: This is a plugin for Citations in custom posts
Author: Carl Wuensche
Version: 0.01a
Text Domain: citation-cp
*/

function citation_admin_init()
{
    require_once( plugin_dir_path( __FILE__ )."classes/admin/citation-cp_Admin.php" );
}

add_action( 'admin_init', 'citation_admin_init' );

function citation_init()
{
    require_once( plugin_dir_path( __FILE__ ) . "classes/citation-custom-posts.php" );
    require_once( plugin_dir_path( __FILE__ ) . "classes/citation-shortcodes.php" );
    require_once( plugin_dir_path( __FILE__ ) . "classes/class-citation-table.php" );
    require_once( plugin_dir_path( __FILE__ ). "classes/class-citation-assets.php" );
}
add_action( 'init', 'citation_init' );