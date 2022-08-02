<?php

// Add menu areas

function register_my_menus() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'mobile-menu' => __( 'Mobile Menu' ),
        )
    );
}
  add_action( 'init', 'register_my_menus' );