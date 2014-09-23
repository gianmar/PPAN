<?php
    
    // Add RSS links to <head> section
    automatic_feed_links();
    
    // Load jQuery
    if( !is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"), false, '2.1.1', true);
    wp_enqueue_script('jquery');
} ?>