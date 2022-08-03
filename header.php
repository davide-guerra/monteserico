<?php
if(!is_user_logged_in()){
    header("Location: https://monteserico.it/coming-soon.html");
}
// Define the menus name based on WPML selected language
$top_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Top menu';
$mobile_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Footer menu' :*/ 'Mobile menu';
global $post;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,400;0,700;1,700&family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/component.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.5.0/dist/alpine.min.js" defer></script>
    <?php if (is_front_page()) { ?>
        <!-- Import Splide JS stylesheet from cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css" integrity="sha256-6YrKt7vMU9e4bwtlblASqhvvEt4/0JEQJ/zyWOFKnaM=" crossorigin="anonymous">     
        <!-- Import LightGallery JS stylesheet from cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/css/lightgallery.css" integrity="sha256-eGvehVg4KxUxLtb7sv7tgCsMYFNmEqJ4IB4NDh/FzvI=" crossorigin="anonymous">   
        <!-- Some custom style for Splid slider -->
        <style>
            button.splide__arrow {
                background: transparent;
                opacity: 1;
            }
            button.splide__arrow svg {
                fill: #fff;
            }
        </style>
    <?php } ?>
    <title><?php echo( get_bloginfo( 'name' ) ); ?></title>
</head>
<body class="absolute top-0">
    <div
        class="w-full z-10 top-0 fixed bg-white"
        x-data="{ isOpen: false, isScrolled: false, dropdownMenu: false }"
        x-init="isScrolled = (window.scrollY > 1) ? true : false"
        @scroll.window="isScrolled = (window.scrollY > 1) ? true : false"
        @keydown.escape="isOpen = false"
        :class="{
        'bg-white shadow-lg': isScrolled,
        'bg-transparent': !isScrolled
        }"
        >
        <template x-if="!isScrolled">
            header iniziale
        </template>
        <template x-if="isScrolled">
            header quando scrollato
        </template>
    </div>

    <!-- Content begins here -->
    <div id="entry-content">