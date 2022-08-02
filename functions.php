<?php

add_filter('use_block_editor_for_post', '__return_false');

require get_theme_file_path('/inc/add_menus_areas.php');
require get_theme_file_path('/inc/get_menu_as_array.php');
require get_theme_file_path('/inc/add_slider_custom_post_type.php');
require get_theme_file_path('/inc/add_gallery_custom_post_type.php');
require get_theme_file_path('/inc/add_meta_boxes_to_home_page.php');