<?php
require_once( plugin_dir_path( __FILE__ ) . "citation-cp_Main.php" );

class citation_cp_Admin {
    
    public function __construct()
    {
        
    }
    
    public function init()
    {
        $labels = array(
            'name'               => _x( 'Citation Tables', 'post type general name', 'citation-cp' ),
            'singular_name'      => _x( 'Citation Table', 'post type singular name', 'citation-cp' ),
            'menu_name'          => _x( 'Citation Tables', 'admin menu', 'citation-cp' ),
            'name_admin_bar'     => _x( 'Citation Table', 'add new on admin bar', 'citation-cp' ),
            'add_new'            => _x( 'Add New', 'book', 'citation-cp' ),
            'add_new_item'       => __( 'Add New Citation Table', 'citation-cp' ),
            'new_item'           => __( 'New Citation Table', 'citation-cp' ),
            'edit_item'          => __( 'Edit Citation Table', 'citation-cp' ),
            'view_item'          => __( 'View Citation Table', 'citation-cp' ),
            'all_items'          => __( 'All Citation Tables', 'citation-cp' ),
            'search_items'       => __( 'Search Citation Tables', 'citation-cp' ),
            'parent_item_colon'  => __( 'Parent Citation Tables:', 'citation-cp' ),
            'not_found'          => __( 'No citation tables found.', 'citation-cp' ),
            'not_found_in_trash' => __( 'No citation tables found in Trash.', 'citation-cp' )
        );

        $args = array(
            'labels'             => $labels,
                    'description'        => __( 'Description.', 'citation-cp' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'citation-table' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'citation_table', $args );
        //add_menu_page( __( "Citation Tables Main", "citation-cp" ), __( "Citation Tables Main", "citation-cp" ), "activate_plugins", "citation-cp-main", array( "FOT_Main::main") );
    }
}

$cit_admin = new citation_cp_Admin();
$cit_admin->init();