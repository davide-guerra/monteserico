<?php
//if(!is_user_logged_in()){
//    header("Location: https://monteserico.it/coming-soon.html");
//}
// Define the menus name based on WPML selected language
$top_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Top menu';
//$mobile_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Footer menu' :*/ 'Mobile menu';
global $post;
// Get the front page ID: it will contain data about address, email, phone, etc.
$home_id = get_option('page_on_front');
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
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,400;0,700;1,700&family=Montserrat:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/component.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.5.0/dist/alpine.min.js" defer></script>
    <?php //if (is_front_page()) { ?>
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
			.lg-backdrop.in {
				opacity: .85;
			}
            @supports (-webkit-touch-callout: none) {
                section#banner-section {
                    background-attachment: scroll;
                }
            }
            @media screen and (max-width: 900px) {
                div#inital-header {
                    display: none !important;
                }
                div#scrolled-header {
                    display: block !important;
                    background: #fff !important;
                }
                body#home div#scrolled-header {
                    background: transparent !important;
                }
                body#hove .white-icon {
                    fill: #fff !important;
                }
            }
        </style>
    <?php //} ?>
    <style>
        [x-cloak] { display: none !important; }
        .wpml-ls-legacy-list-horizontal {
            padding: 0;
        }
    </style>
    <?php if (is_front_page()) { ?>
        <title><?php echo( get_bloginfo( 'name' ) . ' | ' . get_bloginfo('description') ); ?></title>
    <?php } else { ?>
        <title><?php echo(is_404() ? 'Not found' : the_title()); ?> | <?php echo( get_bloginfo( 'name' ) ); ?></title>
    <?php } ?>
</head>
<body <?php echo( (is_front_page()) ? 'id="home"' : "" ); ?>class="absolute top-0 w-full min-h-screen flex flex-col">
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
        <div x-show="!isScrolled" id="inital-header">
            <div class="flex items-start justify-between flex-wrap max-w-7xl mx-auto px-4 py-4 lg:pt-8">
                <!-- First item: logo -->
                <div class="text-white order-2 flex justify-center lg:justify-start">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="<?php echo( (ICL_LANGUAGE_CODE == 'it') ? '/' : '/en'); ?>">
                        <svg class="w-32 md:w-72" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 461.1 184.36"><g data-name="Livello 2"><g data-name="Livello 1"><path fill="#ca9e67" d="M273.85 45.21v-3.74c0-.64-.07-1.18-.12-1.76v-.15c0-.25 0-.51-.07-.76v-.4a43.34 43.34 0 0 0-85.88-1.69l-.18 1.55c-.1.82-.17 1.66-.22 2.5v.06c0 .83-.07 1.66-.07 2.49v2c0 .3 0 .58.05.87s.05.73.09 1.09.07.77.12 1.15l.09.73c.06.45.13.9.21 1.36 0 .12 0 .24.07.37a43 43 0 0 0 2.41 8.46l.08.2c.18.45.38.91.58 1.36l.24.52c.17.37.34.74.52 1.1l.44.86c.14.26.27.52.42.78q.39.7.81 1.41l.12.21a43.73 43.73 0 0 0 3.36 4.78l.62.76A43.31 43.31 0 0 0 273.64 48l.12-2c0-.27 0-.54.05-.81m-6.19 11.18c-8.63.4-13.84-2.21-16.38-4.06 5.93-2.54 11.93-4.34 18.34-4.44a39.24 39.24 0 0 1-2 8.5m-31.43 3.43c2.62 3.44 8.74 9.64 20.56 12.9a39.67 39.67 0 0 1-9.17 6.12c-11.86-4.54-16.78-12.19-18.43-15.53 2.39-1.12 4.73-2.3 7-3.49m.92-5c-11.27 5.84-22.91 11.88-37.68 12.5-.49-.64-1-1.29-1.43-2a.56.56 0 0 1-.05-.08c-.31-.45-.61-.92-.89-1.39l-.17-.26c-.24-.4-.47-.81-.7-1.22l-.24-.43c-.17-.31-.32-.63-.49-.95-.32-.64-.62-1.28-.91-1.93v-.1c-.2-.46-.39-.91-.57-1.37l-.06-.16c-.18-.47-.35-.94-.51-1.42v-.08a39.47 39.47 0 0 1-1.38-5.23 54.64 54.64 0 0 0 16.6 2.7c8.42 0 15.54-2.12 22.51-4.2 8.74-2.6 17.12-5.09 28-3.86-7.54 2-14.62 5.63-22 9.44m-4.6-29.7c8.71 0 16.13 4.39 24 9a107.51 107.51 0 0 0 13.38 7.06v2.31c-17.12-4.9-28.76-1.46-40 1.88-11.42 3.4-22.23 6.62-38.56.93v-.43c0-.24 0-.49-.05-.74v-3.55c0-.34 0-.68.07-1v-.37c6.51-1.2 12.79-4.41 18.88-7.52 7.62-3.89 14.83-7.57 22.25-7.57M230.55 4a39.4 39.4 0 0 1 38.75 32.6 122.36 122.36 0 0 1-10.81-5.9c-6.53-3.86-13.24-7.82-20.84-9.13L236.42 19v-3.1h-3v-2.33h-.15v-.61h-1v.6h-4.46V16l-2.86.05V19l-1.76 3.66a93.39 93.39 0 0 0-14.76 6.49c-5.41 2.77-11 5.6-16.49 6.88A39.4 39.4 0 0 1 230.55 4m-27.86 67.1a66.34 66.34 0 0 0 11.85-2.21 34.15 34.15 0 0 0 7.66 12.9 39.35 39.35 0 0 1-19.51-10.69m26.54 11.55a30.47 30.47 0 0 1-10.86-15c2.44-.82 4.8-1.75 7.1-2.75 1.73 3.52 6.38 10.84 16.81 16a39.24 39.24 0 0 1-11.73 1.78h-1.32M260 69.43c-11.48-2.62-17.57-8.27-20.22-11.49 2.55-1.32 5.07-2.62 7.59-3.82 2.19 2 8 6.22 18.61 6.22h.02a39.92 39.92 0 0 1-6 9.09"/><path d="M28.64 150.68v-19.56h-.26l-9.44 15.74h-2.07l-9.44-15.74h-.26v19.56H0v-33.7h7.07l11.04 18.48h.1l11-18.48h6.86v33.7h-7.43zM68 116c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.33-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m63.12-28.43v33.7h-6.4l-17.14-20.85h-.05v20.85h-7.43v-33.7h6.35l17.18 20.9h.06v-20.9h7.43zm11.81 0h31.79v6.4h-12.18v27.3h-7.38v-27.3h-12.23v-6.4zm63.42 19.3h-12.44v8.05h21.88v6.35h-29.26v-33.7h28.07v6.4h-20.69v6.56h12.44v6.34zm45.87-10.63A20.45 20.45 0 0 0 240.4 122c-3.35 0-6.34 1.24-6.34 4.13s4.44 3.2 8.82 3.56c6.14.41 15.74 1.13 15.74 10.42 0 8.31-6.92 11.56-15.17 11.56a28.33 28.33 0 0 1-18.53-6.66l4.18-5.01c2.84 2.27 7.64 5.67 14.45 5.67 4.28 0 7.69-1.65 7.69-4.79s-3.46-4-8.51-4.39c-7.38-.47-16-1.29-16-9.86 0-8.15 7.58-10.68 13.93-10.68a29.81 29.81 0 0 1 15.84 4.54Zm38.8 10.63h-12.43v8.05h21.88v6.35h-29.26v-33.7h28.07v6.4h-20.69v6.56h12.43v6.34zm22.04 14.4V117h18.68c4.8 0 7.94 1.4 10.11 3.67a10.07 10.07 0 0 1 2.79 7c0 4.34-2.69 7.69-6.81 9.5l7.89 13.57h-8.46l-6.81-12.38h-10v12.38Zm7.38-27.45v8.82h12.07a4.5 4.5 0 0 0 4.7-4.44 4.13 4.13 0 0 0-1.19-2.94 5 5 0 0 0-4-1.44Zm38.03-6.25h7.38v33.7h-7.38zm56.03 27.82a25.14 25.14 0 0 1-17.13 6.91c-11.19 0-18.57-8-18.57-17.9 0-9.7 7.43-17.86 18.31-17.86a25.86 25.86 0 0 1 16.31 5.88l-4.64 4.86a17.93 17.93 0 0 0-11-4.34c-6.81 0-11.19 5.21-11.19 11.51s4.49 11.5 11.45 11.5c4.59 0 8.88-2.42 11.82-5.36Zm27.35-28.8c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.36-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23M12.75 182a7.8 7.8 0 0 1-5.54 2.34 6 6 0 1 1-.08-11.92 7.93 7.93 0 0 1 5.26 2l-1.31 1.29a6 6 0 0 0-3.92-1.55 4.24 4.24 0 0 0 .09 8.48 5.84 5.84 0 0 0 4.21-1.89Zm26.48-9.56a6 6 0 1 1 0 11.92 6 6 0 1 1 0-11.92m0 10.2a4.24 4.24 0 1 0 0-8.48 4.24 4.24 0 1 0 0 8.48m29.86-9.85v9.51h6.9v1.72h-8.82v-11.23h1.92zm25.14 0h10.75v1.72h-4.4v9.51h-1.93v-9.51h-4.42v-1.72zm41.65 0V180c0 2.77-2.14 4.33-5 4.33s-5-1.56-5-4.33v-7.24h1.93V180c0 1.68 1.34 2.61 3 2.61s3.19-.9 3.19-2.61v-7.24ZM158.25 184v-11.21h6.19a4.17 4.17 0 0 1 3.25 1.19 3.28 3.28 0 0 1 .89 2.25 3.45 3.45 0 0 1-2.48 3.21l2.69 4.58h-2.22l-2.41-4.32h-4v4.3Zm1.92-9.51V178h4.61a1.83 1.83 0 0 0 1.87-1.75 1.62 1.62 0 0 0-.46-1.12 2.2 2.2 0 0 0-1.75-.6Zm36.49 4.52h-4.32v3.29h7.6v1.72h-9.52v-11.23h9.11v1.72h-7.19v2.78h4.32v1.72zm47.32-6.22h1.93v11.23h-1.93zm23.09 0h10.74v1.72h-4.4v9.51h-1.92v-9.51h-4.42v-1.72zm34.64 0h1.76l5.21 11.21h-2.12l-1.35-3h-5.35l-1.34 3h-2Zm-1.16 6.65h4l-1.93-4.35h-.1Zm31.12-6.65v9.51h6.89v1.72h-8.82v-11.23h1.93zm27.9 0h1.93v11.23h-1.93zm28.2 0h1.76l5.21 11.21h-2.12l-1.36-3h-5.35l-1.34 3h-2Zm-1.17 6.65h4l-1.93-4.35h-.1Zm39.33-6.65v11.23h-1.71l-6.48-7.79h-.02v7.79h-1.92v-11.23h1.7l6.48 7.79h.02v-7.79h1.93zm28.83 6.22h-4.32v3.29h7.6v1.72h-9.52v-11.23h9.11v1.72h-7.19v2.78h4.32v1.72z"/></g></g></svg>
                    </a>
                </div>

                <!-- Second item: toggle button (hidden on large screens) and menu -->
                <div id="hamburger-and-menu" class="order-1 h-full grow basis-0" @click.away="isOpen = false">
                    <div class="text-white hidden lg:flex flex-column items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:<?php echo( get_field('email', $home_id) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('email', $home_id) ); ?></a>
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
                                    <a class="inline-block font-bold text-white no-underline relative flex flex-column items-center gap-2 hover:opacity-90 uppercase" href="<?php echo $item['url']; ?>"
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
                            <a class="inline-block no-underline relative flex flex-column items-center gap-2 hover:opacity-90 uppercase" href="<?php echo $item['url']; ?>"
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
                                <div x-cloak x-show="showSub" class="absolute right-0 left-0 p-4 mt-2 bg-white shadow-2xl w-fit z-50" @click.away="showSub = false">
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
        <div x-show="isScrolled" id="scrolled-header">
            <div class="flex items-center flex-wrap max-w-7xl mx-auto px-4">
                <!-- First item: logo -->
                <div class="text-white order-2 lg:order-1 flex-1 flex justify-center lg:justify-start">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="<?php echo( (ICL_LANGUAGE_CODE == 'it') ? '/' : '/en'); ?>">
                        <svg class="w-48 md:w-56 py-8" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 554.115 68.45"><path fill="#3f5c48" d="M121.655 34.73V15.17h-.26l-9.44 15.74h-2.07l-9.44-15.74h-.26v19.56h-7.17V1.03h7.07l11.04 18.48h.1l11-18.48h6.86v33.7ZM161.015.05c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.33-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m63.12-28.43v33.7h-6.4l-17.14-20.85h-.05v20.85h-7.43V1.03h6.35l17.18 20.9h.06V1.03Zm11.81 0h31.79v6.4h-12.18v27.3h-7.38V7.43h-12.23zm63.42 19.3h-12.44v8.05h21.88v6.35h-29.26V1.03h28.07v6.4h-20.69v6.56h12.44zm45.87-10.63a20.45 20.45 0 0 0-11.82-3.65c-3.35 0-6.34 1.24-6.34 4.13 0 2.89 4.44 3.2 8.82 3.56 6.14.41 15.74 1.13 15.74 10.42 0 8.31-6.92 11.56-15.17 11.56a28.33 28.33 0 0 1-18.53-6.66l4.18-5.01c2.84 2.27 7.64 5.67 14.45 5.67 4.28 0 7.69-1.65 7.69-4.79s-3.46-4-8.51-4.39c-7.38-.47-16-1.29-16-9.86 0-8.15 7.58-10.68 13.93-10.68a29.81 29.81 0 0 1 15.84 4.54Zm38.8 10.63h-12.43v8.05h21.88v6.35h-29.26V1.03h28.07v6.4h-20.69v6.56h12.43zm22.04 14.4V1.05h18.68c4.8 0 7.94 1.4 10.11 3.67a10.07 10.07 0 0 1 2.79 7c0 4.34-2.69 7.69-6.81 9.5l7.89 13.57h-8.46l-6.81-12.38h-10v12.38zm7.38-27.45v8.82h12.07a4.5 4.5 0 0 0 4.7-4.44 4.13 4.13 0 0 0-1.19-2.94 5 5 0 0 0-4-1.44zm38.03-6.25h7.38v33.7h-7.38zm56.03 27.82a25.14 25.14 0 0 1-17.13 6.91c-11.19 0-18.57-8-18.57-17.9 0-9.7 7.43-17.86 18.31-17.86a25.86 25.86 0 0 1 16.31 5.88l-4.64 4.86a17.93 17.93 0 0 0-11-4.34c-6.81 0-11.19 5.21-11.19 11.51s4.49 11.5 11.45 11.5c4.59 0 8.88-2.42 11.82-5.36zm27.35-28.8c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.36-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m-429.1 36.59a7.8 7.8 0 0 1-5.54 2.34 6 6 0 1 1-.08-11.92 7.93 7.93 0 0 1 5.26 2l-1.31 1.29a6 6 0 0 0-3.92-1.55 4.24 4.24 0 0 0 .09 8.48 5.84 5.84 0 0 0 4.21-1.89zm26.48-9.56a6 6 0 1 1 0 11.92 6 6 0 1 1 0-11.92m0 10.2a4.24 4.24 0 1 0 0-8.48 4.24 4.24 0 1 0 0 8.48m29.86-9.85v9.51h6.9v1.72h-8.82V56.84zm25.14 0h10.75v1.72h-4.4v9.51h-1.93v-9.51h-4.42zm41.65 0v7.21c0 2.77-2.14 4.33-5 4.33s-5-1.56-5-4.33v-7.24h1.93v7.24c0 1.68 1.34 2.61 3 2.61s3.19-.9 3.19-2.61v-7.24zm22.37 11.21V56.84h6.19a4.17 4.17 0 0 1 3.25 1.19 3.28 3.28 0 0 1 .89 2.25 3.45 3.45 0 0 1-2.48 3.21l2.69 4.58h-2.22l-2.41-4.32h-4v4.3zm1.92-9.51v3.51h4.61a1.83 1.83 0 0 0 1.87-1.75 1.62 1.62 0 0 0-.46-1.12 2.2 2.2 0 0 0-1.75-.6zm36.49 4.52h-4.32v3.29h7.6v1.72h-9.52V56.84h9.11v1.72h-7.19v2.78h4.32zm47.32-6.22h1.93v11.23h-1.93zm23.09 0h10.74v1.72h-4.4v9.51h-1.92v-9.51h-4.42zm34.64 0h1.76l5.21 11.21h-2.12l-1.35-3h-5.35l-1.34 3h-2zm-1.16 6.65h4l-1.93-4.35h-.1zm31.12-6.65v9.51h6.89v1.72h-8.82V56.84zm27.9 0h1.93v11.23h-1.93zm28.2 0h1.76l5.21 11.21h-2.12l-1.36-3h-5.35l-1.34 3h-2zm-1.17 6.65h4l-1.93-4.35h-.1zm39.33-6.65v11.23h-1.71l-6.48-7.79h-.02v7.79h-1.92V56.84h1.7l6.48 7.79h.02v-7.79zm28.83 6.22h-4.32v3.29h7.6v1.72h-9.52V56.84h9.11v1.72h-7.19v2.78h4.32z"/><path fill="#ca9e67" d="M68.399 35.711v-2.956c0-.506-.055-.933-.095-1.39v-.12c0-.197 0-.403-.055-.6v-.316A34.255 34.255 0 0 0 .37 28.993L.23 30.218a32.212 32.212 0 0 0-.174 1.976v.047c0 .656-.055 1.312-.055 1.968v1.581c0 .237 0 .459.04.688.039.229.039.577.07.861.032.285.056.609.096.91l.07.576c.048.356.103.712.167 1.075 0 .095 0 .19.055.293a33.986 33.986 0 0 0 1.905 6.686l.063.158c.142.356.3.72.458 1.075l.19.411c.134.293.269.585.411.87l.348.68c.11.205.213.41.332.616q.308.553.64 1.114l.095.166a34.563 34.563 0 0 0 2.655 3.778l.49.6a34.231 34.231 0 0 0 60.148-18.43l.095-1.581c0-.214 0-.427.04-.64m-4.893 8.836c-6.821.316-10.939-1.747-12.946-3.21 4.686-2.007 9.429-3.43 14.495-3.508a31.014 31.014 0 0 1-1.58 6.718m-24.842 2.71c2.07 2.72 6.908 7.62 16.25 10.197a31.354 31.354 0 0 1-7.248 4.837C38.23 58.687 34.342 52.64 33.038 50a138.741 138.741 0 0 0 5.532-2.758m.727-3.952c-8.907 4.616-18.107 9.39-29.781 9.88-.387-.506-.79-1.02-1.13-1.581a.443.443 0 0 1-.04-.063 19.914 19.914 0 0 1-.703-1.1l-.135-.205c-.19-.316-.371-.64-.553-.964l-.19-.34c-.134-.245-.252-.498-.387-.75a38.204 38.204 0 0 1-.719-1.526v-.079c-.158-.364-.308-.72-.45-1.083l-.048-.126a27.014 27.014 0 0 1-.403-1.123v-.063a31.196 31.196 0 0 1-1.09-4.133 43.186 43.186 0 0 0 13.12 2.134c6.654 0 12.282-1.676 17.79-3.32 6.909-2.055 13.532-4.023 22.131-3.05-5.96 1.58-11.555 4.449-17.388 7.46m-3.636-23.474c6.885 0 12.75 3.47 18.97 7.114a84.973 84.973 0 0 0 10.575 5.58v1.825c-13.532-3.872-22.732-1.154-31.615 1.486-9.026 2.688-17.57 5.233-30.477.735v-.34c0-.19 0-.387-.04-.584v-2.806c0-.269 0-.538.056-.79v-.293c5.145-.949 10.108-3.486 14.922-5.944 6.022-3.074 11.721-5.983 17.586-5.983M34.176 3.14a31.14 31.14 0 0 1 30.627 25.766 96.71 96.71 0 0 1-8.544-4.663c-5.161-3.051-10.465-6.18-16.472-7.216l-.972-2.032v-2.45h-2.37v-1.841h-.12v-.482h-.79v.474H32.01v1.928l-2.26.04v2.331l-1.391 2.893a73.813 73.813 0 0 0-11.666 5.13c-4.276 2.19-8.694 4.426-13.034 5.438A31.14 31.14 0 0 1 34.176 3.14m-22.02 53.034a52.433 52.433 0 0 0 9.366-1.747 26.991 26.991 0 0 0 6.054 10.196 31.101 31.101 0 0 1-15.42-8.449m20.976 9.129a24.083 24.083 0 0 1-8.583-11.856 69.952 69.952 0 0 0 5.612-2.173c1.367 2.782 5.042 8.567 13.286 12.646a31.014 31.014 0 0 1-9.271 1.407h-1.044m24.32-10.473c-9.073-2.07-13.887-6.536-15.981-9.081 2.015-1.044 4.007-2.071 5.999-3.02 1.73 1.581 6.323 4.917 14.709 4.917h.015a31.552 31.552 0 0 1-4.742 7.184"/></svg>
                    </a>
                </div>

                <!-- Second item: toggle button (hidden on large screens) and menu -->
                <div id="hamburger-and-menu" class="order-1 lg:oder-2 h-full" @click.away="isOpen = false">
                    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 hover:opacity-90 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" :class="!isScrolled ? 'white-icon' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                    <nav id="large-screen-menu" class="hidden lg:block">
                        <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center gap-6">
                            <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                            <?php foreach ($menu_array as $item){ ?>
                                <li class="large-menu-item relative" x-data="{showSub: false}">
                                    <a class="inline-block no-underline relative flex flex-column items-center gap-2 hover:opacity-90 uppercase" href="<?php echo $item['url']; ?>"
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
                                    <a class="inline-block font-bold text-white no-underline relative flex flex-column items-center gap-2 hover:opacity-90 uppercase" href="<?php echo $item['url']; ?>"
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
                <div id="language-switcher-wrapper" class="block lg:hidden order-3 no-underline flex flex-row gap-6 items-center" :class="!isScrolled ? 'white-icon' : ''">
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