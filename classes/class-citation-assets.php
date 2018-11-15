<?php

class Citation_Assets
{
    function __construct()
    {

    }
    
    function register_stylesheets()
    {
        wp_enqueue_style( 'citation-bootstrap', plugin_dir_url( __FILE__ )."../assets/css/bootstrap.css" );
        wp_enqueue_style( 'citation-style', plugin_dir_url( __FILE__ )."../assets/css/style.css" );
    }
}

