<?php
/*
 * Plugin Name:       Super Simple Image Lightbox
 * Description:       Display image in fullscreen when clicked
 * Version:           1.0
 * Author:            Reinforce II
*/


function mybox_activate() {
    // Nothing to do, great
}
register_activation_hook(
	__FILE__,
	'mybox_activate'
);

function mybox_enqueue_css() {
    wp_enqueue_style(
        'my-lightbox',
        plugins_url( '/css/my-lightbox.css', __FILE__ ),
        [],
        '1.0.0',
        'all'
    );
}

function mybox_enqueue_js() {
    
    wp_enqueue_script(
        'my-lightbox',
        plugins_url( '/js/my-lightbox.js', __FILE__ ),
        array( 'jquery' ),
        '1.0.0',
        true
    );
    
}

function mybox_enqueue_all() {
    if (is_single()){
        mybox_enqueue_js();
        mybox_enqueue_css();
    }
}
add_action('wp_enqueue_scripts', 'mybox_enqueue_all');