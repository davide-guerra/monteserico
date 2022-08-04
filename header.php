<?php
if(!is_user_logged_in()){
    header("Location: https://monteserico.it/coming-soon.html");
}
// Define the menus name based on WPML selected language
$top_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Top menu';
//$mobile_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Footer menu' :*/ 'Mobile menu';
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
<body class="absolute top-0 w-full min-h-screen flex flex-col">
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
        <div x-show="!isScrolled">
            <div class="flex items-center justify-between flex-wrap max-w-7xl mx-auto px-4">
                <!-- First item: logo -->
                <div class="text-white order-2 flex justify-center lg:justify-start">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="<?php echo( (ICL_LANGUAGE_CODE == 'it') ? '/' : '/en'); ?>">
                        <svg class="w-24 md:w-36 py-4" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 745.623 258.935">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path d="M0 595.276h841.89V0H0Z"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 -185.892 528.875)">
                                <path d="M218.364 351.274c-21.231-7.293-36.496-27.421-36.496-51.127 0-18.584 9.38-34.973 23.66-44.703a314.106 314.106 0 0 1 4.45 6.93c4.855 7.847 13.64 24.332 16.047 33.24.95 3.514.911 11.184-.46 14.557-1.983 4.88-11.002 15.014-9.74 18.682 1.26 3.668 20.101 3.668 20.101 3.668s18.843 0 20.104-3.668c1.26-3.668-7.759-13.802-9.743-18.682-1.37-3.373-1.408-11.043-.458-14.557 2.408-8.908 11.192-25.393 16.047-33.24 1.252-2.024 2.788-4.4 4.45-6.93 14.28 9.73 23.66 26.12 23.66 44.703 0 23.706-15.265 43.834-36.496 51.127.012-.268.02-.537.02-.809 0-9.71-7.873-17.584-17.584-17.584-9.71 0-17.582 7.873-17.582 17.584 0 .272.008.54.02.809z" fill="none" stroke="#0075b7" stroke-width="7.67025" stroke-miterlimit="10"/>
                                <path d="M235.927 207.474c-51.182 0-92.673 41.491-92.673 92.673s41.491 92.674 92.673 92.674 92.673-41.492 92.673-92.674c0-51.182-41.491-92.673-92.673-92.673Z" fill="none" stroke="#0075b7" stroke-width="7.67" stroke-miterlimit="10"/>
                                <path d="M235.927 332.882c-9.711 0-17.583 7.872-17.583 17.583 0 9.711 7.872 17.584 17.583 17.584 9.711 0 17.583-7.873 17.583-17.584 0-9.711-7.872-17.583-17.583-17.583ZM209.978 262.374c-5.98-9.666-17.504-26.237-26.248-38.801 14.867-10.154 32.835-16.099 52.197-16.099 19.361 0 37.33 5.945 52.196 16.099-8.743 12.564-20.267 29.135-26.247 38.801-4.855 7.847-13.639 24.332-16.047 33.24-.95 3.514-.913 11.183.458 14.556 1.984 4.88 11.004 15.015 9.743 18.683-1.261 3.668-20.103 3.668-20.103 3.668s-18.842 0-20.103-3.668c-1.261-3.668 7.759-13.803 9.742-18.683 1.371-3.373 1.409-11.042.459-14.556-2.408-8.908-11.192-25.393-16.047-33.24Z" fill="none" stroke="#0075b7" stroke-width="7.67" stroke-miterlimit="10"/>
                                <path d="M359.12 373.353h-9.715v3.151h22.684v-3.151h-9.542v-56.406h-3.427ZM392.553 347.455h-13.629v-27.359h15.242l-.549-3.149h-18.12v59.557h17.857v-3.151h-14.43v-22.749h13.629ZM398.502 316.947v59.557h4.417c4.063-13.702 13.551-46.786 14.873-53.397h.177c-.272 8.707-.446 17.088-.446 26.72v26.677h3.411v-59.557h-4.322c-4.489 15.331-13.644 48.225-15.315 55.257h-.089c.358-7.134.706-18.125.706-28.911v-26.346ZM432.329 376.504v-47.298c0-5.502 2.037-9.743 7.435-9.743 5.486 0 7.431 3.549 7.431 9.655v47.386h3.514v-47.12c0-9.013-4.018-13.154-11.036-13.154-7.009 0-10.771 4.124-10.771 12.892v47.382ZM463.076 373.353h-9.715v3.151h22.684v-3.151h-9.542v-56.406h-3.427ZM490.651 342.247c-2.82 16.181-4.506 26.856-4.957 31.363h-.182c-.179-4.293-2.661-18.351-4.692-31.363Zm-10.38-3.149-3.622-22.151h-3.43l9.978 59.557h4.991l10.421-59.557H495l-3.802 22.151ZM364.55 209.304h7.557c14.964 0 19.342 7.593 19.342 24.423v46.702c0 14.788-2.673 23.607-19.034 23.607h-7.865Zm-6.092 100.309h15.689c23.282 0 23.555-16.69 23.555-30.607v-43.059c0-16.324-2.231-32.217-24.952-32.217h-14.292ZM412.743 285.157v-56.669c0-15.079 5.496-20.44 13.843-20.44 8.666 0 13.689 5.356 13.689 21.22v55.737c0 14.138-5.173 20.287-13.845 20.287-9.432 0-13.687-5.984-13.687-20.135m33.786.586V228.38c0-16.877-6.7-25.925-20.269-25.925-15.571 0-19.771 11.069-19.771 25.919v57.217c0 15.636 6.114 25.296 20.258 25.296 15.235 0 19.782-12.141 19.782-25.144M458.311 203.73v105.883h7.854c7.224-24.36 24.09-83.179 26.441-94.931h.314c-.481 15.48-.793 30.379-.793 47.504v47.427h6.065V203.73h-7.683c-7.98 27.257-24.259 85.737-27.228 98.238h-.158c.636-12.683 1.255-32.222 1.255-51.399V203.73ZM581.08 252.811c0 20.859.47 40.263.787 50.762h-.159c-2.844-17.146-13.205-67.543-19.973-99.843h-6.537c-5.191 26.959-16.019 81.437-18.708 99.846h-.317c.317-12.209.948-36.298.948-54.371V203.73h-6.059v105.883h8.902c7.533-35.784 17.239-83.424 18.666-95.531h.158c1.588 11.335 12.103 61.951 19.482 95.531h9.039V203.73h-6.229ZM607.212 203.73h-6.092v105.883h6.092zM671.109 252.811c0 20.859.47 40.263.787 50.762h-.159c-2.844-17.146-13.205-67.543-19.973-99.843h-6.537c-5.191 26.959-16.019 81.437-18.708 99.846h-.317c.317-12.209.948-36.298.948-54.371V203.73h-6.059v105.883h8.902c7.533-35.784 17.239-83.424 18.666-95.531h.158c1.588 11.335 12.103 61.951 19.482 95.531h9.039V203.73h-6.229ZM697.239 203.73h-6.092v105.883h6.092zm-14.287 128.888 15.684-15.546h-6.547l-17.807 15.546z" fill="#0075b7"/>
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- Second item: toggle button (hidden on large screens) and menu -->
                <div id="hamburger-and-menu" class="order-1 h-full grow basis-0" @click.away="isOpen = false">
                    <div class="text-white hidden lg:flex flex-column items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <a href="<?php echo( get_field('link_indirizzo', 8) ); ?>" target="_blank" class="cursor-pointer hover:opacity-90"><?php echo( get_field('indirizzo_breve', 8) ); ?></a>
                    </div>
                    <button @click="isOpen = !isOpen" type="button" class="text-white block lg:hidden px-2 hover:opacity-90 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                    
                    <nav id="small-screen-menu" class="lg:hidden" :class="{ 'absolute top-0 left-0 bg-verde p-8 h-screen w-screen z-50': isOpen, 'hidden': !isOpen }">
                        <div id="close-btn" class="flex justify-end text-white cursor-pointer hover:opacity-90" @click="isOpen = !isOpen">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                        <ul class="pt-6 lg:pt-0 list-reset flex flex-col gap-4">
                            <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                            <?php foreach ($menu_array as $item){ ?>
                                <li class="mobile-menu-item relative" x-data="{showSub: false}">
                                    <a class="inline-block font-bold text-white no-underline relative flex flex-column items-center gap-2 hover:opacity-90" href="<?php echo $item['url']; ?>"
                                        <?php if ($item['children']) { ?>
                                            @click="event.preventDefault(); showSub = ! showSub"
                                        <?php } ?>
                                    >
                                        <?php echo $item['title']; ?>
                                        <?php if ($item['children']) { ?>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        <?php } ?>
                                    </a>
                                    <?php if ($item['children']) { ?>
                                        <div x-show="showSub" class="p-4 mt-2 text-white">
                                            <ul class="submenu flex flex-col gap-2">
                                                <?php foreach ($item['children'] as $subitem) { ?>
                                                    <li>
                                                        <a class="inline-block font-bold no-underline hover:opacity-90" href="<?php echo($subitem['url']); ?>">
                                                            <?php echo($subitem['title']); ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <!-- Third element: menu -->
                <div id="language-switcher-wrapper" class="block order-3 grow basis-0 no-underline flex flex-row gap-6 items-center justify-end">
                    <div class="text-white hidden lg:flex flex-column items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:<?php echo( get_field('email', 8) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('email', 8) ); ?></a>
                    </div>
                    <?php if( apply_filters( 'wpml_element_has_translations', NULL, $post->ID, 'page' ) ) { ?>
                        <div class="text-white hidden lg:block">|</div>
                    <?php } ?>
                    <span class="text-white hover:opacity-90 cursor-pointer">
                    <?php do_action('wpml_add_language_selector'); ?>
                    </span>
                </div>
            </div>
            <nav id="large-screen-menu" class="hidden lg:block mt-6">
                <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-center flex-1 items-center gap-6 text-white">
                    <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                    <?php foreach ($menu_array as $item){ ?>
                        <li class="large-menu-item relative" x-data="{showSub: false}">
                            <a class="inline-block no-underline relative flex flex-column items-center gap-2 hover:opacity-90" href="<?php echo $item['url']; ?>"
                                <?php if ($item['children']) { ?>
                                    @click="event.preventDefault(); showSub = ! showSub"
                                <?php } ?>
                            >
                                <?php echo $item['title']; ?>
                                <?php if ($item['children']) { ?>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                <?php } ?>
                            </a>
                            <?php if ($item['children']) { ?>
                                <div x-show="showSub" class="absolute right-0 left-0 p-4 mt-2 bg-white shadow-2xl w-fit z-50" @click.away="showSub = false">
                                    <ul class="submenu min-w-[12em] flex flex-col gap-4">
                                        <?php foreach ($item['children'] as $subitem) { ?>
                                            <li>
                                                <a class="inline-block no-underline hover:opacity-90" href="<?php echo($subitem['url']); ?>">
                                                    <?php echo($subitem['title']); ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>    
            </nav>
        </div>
        <div x-show="isScrolled">
            <div class="flex items-center flex-wrap max-w-7xl mx-auto px-4">
                <!-- First item: logo -->
                <div class="text-white order-2 lg:order-1 flex-1 flex justify-center lg:justify-start">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="<?php echo( (ICL_LANGUAGE_CODE == 'it') ? '/' : '/en'); ?>">
                        <svg class="w-24 md:w-36 py-4" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 554.115 68.45"><path fill="#3f5c48" d="M121.655 34.73V15.17h-.26l-9.44 15.74h-2.07l-9.44-15.74h-.26v19.56h-7.17V1.03h7.07l11.04 18.48h.1l11-18.48h6.86v33.7ZM161.015.05c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.33-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m63.12-28.43v33.7h-6.4l-17.14-20.85h-.05v20.85h-7.43V1.03h6.35l17.18 20.9h.06V1.03Zm11.81 0h31.79v6.4h-12.18v27.3h-7.38V7.43h-12.23zm63.42 19.3h-12.44v8.05h21.88v6.35h-29.26V1.03h28.07v6.4h-20.69v6.56h12.44zm45.87-10.63a20.45 20.45 0 0 0-11.82-3.65c-3.35 0-6.34 1.24-6.34 4.13 0 2.89 4.44 3.2 8.82 3.56 6.14.41 15.74 1.13 15.74 10.42 0 8.31-6.92 11.56-15.17 11.56a28.33 28.33 0 0 1-18.53-6.66l4.18-5.01c2.84 2.27 7.64 5.67 14.45 5.67 4.28 0 7.69-1.65 7.69-4.79s-3.46-4-8.51-4.39c-7.38-.47-16-1.29-16-9.86 0-8.15 7.58-10.68 13.93-10.68a29.81 29.81 0 0 1 15.84 4.54Zm38.8 10.63h-12.43v8.05h21.88v6.35h-29.26V1.03h28.07v6.4h-20.69v6.56h12.43zm22.04 14.4V1.05h18.68c4.8 0 7.94 1.4 10.11 3.67a10.07 10.07 0 0 1 2.79 7c0 4.34-2.69 7.69-6.81 9.5l7.89 13.57h-8.46l-6.81-12.38h-10v12.38zm7.38-27.45v8.82h12.07a4.5 4.5 0 0 0 4.7-4.44 4.13 4.13 0 0 0-1.19-2.94 5 5 0 0 0-4-1.44zm38.03-6.25h7.38v33.7h-7.38zm56.03 27.82a25.14 25.14 0 0 1-17.13 6.91c-11.19 0-18.57-8-18.57-17.9 0-9.7 7.43-17.86 18.31-17.86a25.86 25.86 0 0 1 16.31 5.88l-4.64 4.86a17.93 17.93 0 0 0-11-4.34c-6.81 0-11.19 5.21-11.19 11.51s4.49 11.5 11.45 11.5c4.59 0 8.88-2.42 11.82-5.36zm27.35-28.8c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.36-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m-429.1 36.59a7.8 7.8 0 0 1-5.54 2.34 6 6 0 1 1-.08-11.92 7.93 7.93 0 0 1 5.26 2l-1.31 1.29a6 6 0 0 0-3.92-1.55 4.24 4.24 0 0 0 .09 8.48 5.84 5.84 0 0 0 4.21-1.89zm26.48-9.56a6 6 0 1 1 0 11.92 6 6 0 1 1 0-11.92m0 10.2a4.24 4.24 0 1 0 0-8.48 4.24 4.24 0 1 0 0 8.48m29.86-9.85v9.51h6.9v1.72h-8.82V56.84zm25.14 0h10.75v1.72h-4.4v9.51h-1.93v-9.51h-4.42zm41.65 0v7.21c0 2.77-2.14 4.33-5 4.33s-5-1.56-5-4.33v-7.24h1.93v7.24c0 1.68 1.34 2.61 3 2.61s3.19-.9 3.19-2.61v-7.24zm22.37 11.21V56.84h6.19a4.17 4.17 0 0 1 3.25 1.19 3.28 3.28 0 0 1 .89 2.25 3.45 3.45 0 0 1-2.48 3.21l2.69 4.58h-2.22l-2.41-4.32h-4v4.3zm1.92-9.51v3.51h4.61a1.83 1.83 0 0 0 1.87-1.75 1.62 1.62 0 0 0-.46-1.12 2.2 2.2 0 0 0-1.75-.6zm36.49 4.52h-4.32v3.29h7.6v1.72h-9.52V56.84h9.11v1.72h-7.19v2.78h4.32zm47.32-6.22h1.93v11.23h-1.93zm23.09 0h10.74v1.72h-4.4v9.51h-1.92v-9.51h-4.42zm34.64 0h1.76l5.21 11.21h-2.12l-1.35-3h-5.35l-1.34 3h-2zm-1.16 6.65h4l-1.93-4.35h-.1zm31.12-6.65v9.51h6.89v1.72h-8.82V56.84zm27.9 0h1.93v11.23h-1.93zm28.2 0h1.76l5.21 11.21h-2.12l-1.36-3h-5.35l-1.34 3h-2zm-1.17 6.65h4l-1.93-4.35h-.1zm39.33-6.65v11.23h-1.71l-6.48-7.79h-.02v7.79h-1.92V56.84h1.7l6.48 7.79h.02v-7.79zm28.83 6.22h-4.32v3.29h7.6v1.72h-9.52V56.84h9.11v1.72h-7.19v2.78h4.32z"/><path fill="#ca9e67" d="M68.399 35.711v-2.956c0-.506-.055-.933-.095-1.39v-.12c0-.197 0-.403-.055-.6v-.316A34.255 34.255 0 0 0 .37 28.993L.23 30.218a32.212 32.212 0 0 0-.174 1.976v.047c0 .656-.055 1.312-.055 1.968v1.581c0 .237 0 .459.04.688.039.229.039.577.07.861.032.285.056.609.096.91l.07.576c.048.356.103.712.167 1.075 0 .095 0 .19.055.293a33.986 33.986 0 0 0 1.905 6.686l.063.158c.142.356.3.72.458 1.075l.19.411c.134.293.269.585.411.87l.348.68c.11.205.213.41.332.616q.308.553.64 1.114l.095.166a34.563 34.563 0 0 0 2.655 3.778l.49.6a34.231 34.231 0 0 0 60.148-18.43l.095-1.581c0-.214 0-.427.04-.64m-4.893 8.836c-6.821.316-10.939-1.747-12.946-3.21 4.686-2.007 9.429-3.43 14.495-3.508a31.014 31.014 0 0 1-1.58 6.718m-24.842 2.71c2.07 2.72 6.908 7.62 16.25 10.197a31.354 31.354 0 0 1-7.248 4.837C38.23 58.687 34.342 52.64 33.038 50a138.741 138.741 0 0 0 5.532-2.758m.727-3.952c-8.907 4.616-18.107 9.39-29.781 9.88-.387-.506-.79-1.02-1.13-1.581a.443.443 0 0 1-.04-.063 19.914 19.914 0 0 1-.703-1.1l-.135-.205c-.19-.316-.371-.64-.553-.964l-.19-.34c-.134-.245-.252-.498-.387-.75a38.204 38.204 0 0 1-.719-1.526v-.079c-.158-.364-.308-.72-.45-1.083l-.048-.126a27.014 27.014 0 0 1-.403-1.123v-.063a31.196 31.196 0 0 1-1.09-4.133 43.186 43.186 0 0 0 13.12 2.134c6.654 0 12.282-1.676 17.79-3.32 6.909-2.055 13.532-4.023 22.131-3.05-5.96 1.58-11.555 4.449-17.388 7.46m-3.636-23.474c6.885 0 12.75 3.47 18.97 7.114a84.973 84.973 0 0 0 10.575 5.58v1.825c-13.532-3.872-22.732-1.154-31.615 1.486-9.026 2.688-17.57 5.233-30.477.735v-.34c0-.19 0-.387-.04-.584v-2.806c0-.269 0-.538.056-.79v-.293c5.145-.949 10.108-3.486 14.922-5.944 6.022-3.074 11.721-5.983 17.586-5.983M34.176 3.14a31.14 31.14 0 0 1 30.627 25.766 96.71 96.71 0 0 1-8.544-4.663c-5.161-3.051-10.465-6.18-16.472-7.216l-.972-2.032v-2.45h-2.37v-1.841h-.12v-.482h-.79v.474H32.01v1.928l-2.26.04v2.331l-1.391 2.893a73.813 73.813 0 0 0-11.666 5.13c-4.276 2.19-8.694 4.426-13.034 5.438A31.14 31.14 0 0 1 34.176 3.14m-22.02 53.034a52.433 52.433 0 0 0 9.366-1.747 26.991 26.991 0 0 0 6.054 10.196 31.101 31.101 0 0 1-15.42-8.449m20.976 9.129a24.083 24.083 0 0 1-8.583-11.856 69.952 69.952 0 0 0 5.612-2.173c1.367 2.782 5.042 8.567 13.286 12.646a31.014 31.014 0 0 1-9.271 1.407h-1.044m24.32-10.473c-9.073-2.07-13.887-6.536-15.981-9.081 2.015-1.044 4.007-2.071 5.999-3.02 1.73 1.581 6.323 4.917 14.709 4.917h.015a31.552 31.552 0 0 1-4.742 7.184"/></svg>
                    </a>
                </div>

                <!-- Second item: toggle button (hidden on large screens) and menu -->
                <div id="hamburger-and-menu" class="order-1 lg:oder-2 h-full" @click.away="isOpen = false">
                    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 hover:opacity-90 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                    <nav id="large-screen-menu" class="hidden lg:block">
                        <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center gap-6">
                            <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                            <?php foreach ($menu_array as $item){ ?>
                                <li class="large-menu-item relative" x-data="{showSub: false}">
                                    <a class="inline-block no-underline relative flex flex-column items-center gap-2 hover:opacity-90" href="<?php echo $item['url']; ?>"
                                        <?php if ($item['children']) { ?>
                                            @click="event.preventDefault(); showSub = ! showSub"
                                        <?php } ?>
                                    >
                                        <?php echo $item['title']; ?>
                                        <?php if ($item['children']) { ?>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        <?php } ?>
                                    </a>
                                    <?php if ($item['children']) { ?>
                                        <div x-show="showSub" class="absolute right-0 left-0 p-4 mt-2 bg-white shadow-2xl w-fit z-50" @click.away="showSub = false">
                                            <ul class="submenu min-w-[12em] flex flex-col gap-4">
                                                <?php foreach ($item['children'] as $subitem) { ?>
                                                    <li>
                                                        <a class="inline-block no-underline hover:opacity-90" href="<?php echo($subitem['url']); ?>">
                                                            <?php echo($subitem['title']); ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>    
                    </nav>
                    <nav id="small-screen-menu" class="lg:hidden" :class="{ 'absolute top-0 left-0 bg-verde p-8 h-screen w-screen z-50': isOpen, 'hidden': !isOpen }">
                        <div id="close-btn" class="flex justify-end text-white cursor-pointer hover:opacity-90" @click="isOpen = !isOpen">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                        <ul class="pt-6 lg:pt-0 list-reset flex flex-col gap-4">
                            <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                            <?php foreach ($menu_array as $item){ ?>
                                <li class="mobile-menu-item relative" x-data="{showSub: false}">
                                    <a class="inline-block font-bold text-white no-underline relative flex flex-column items-center gap-2 hover:opacity-90" href="<?php echo $item['url']; ?>"
                                        <?php if ($item['children']) { ?>
                                            @click="event.preventDefault(); showSub = ! showSub"
                                        <?php } ?>
                                    >
                                        <?php echo $item['title']; ?>
                                        <?php if ($item['children']) { ?>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        <?php } ?>
                                    </a>
                                    <?php if ($item['children']) { ?>
                                        <div x-show="showSub" class="p-4 mt-2 text-white">
                                            <ul class="submenu flex flex-col gap-2">
                                                <?php foreach ($item['children'] as $subitem) { ?>
                                                    <li>
                                                        <a class="inline-block font-bold no-underline hover:opacity-90" href="<?php echo($subitem['url']); ?>">
                                                            <?php echo($subitem['title']); ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <!-- Third element: menu -->
                <div id="language-switcher-wrapper" class="block lg:hidden order-3 no-underline flex flex-row gap-6 items-center">
                    <?php if( apply_filters( 'wpml_element_has_translations', NULL, $post->ID, 'page' ) ) { ?>
                        <div class="hidden lg:block">|</div>
                    <?php } ?>
                    <span class="hover:opacity-90 cursor-pointer">
                    <?php do_action('wpml_add_language_selector'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Content begins here -->
    <div id="entry-content" class="flex-1">