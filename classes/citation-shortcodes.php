<?php

class Citation_Shortcodes {

    function __construct()
    {
        
    }

    function _register()
    {
        add_shortcode( 'citation_table', array( 'Citation_Table', 'output' )  );
    }
    
}

$citation_shortcodes = new Citation_Shortcodes();
$citation_shortcodes->_register();