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
                    <div>indirizzo</div>
                    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 hover:opacity-90 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                    
                    <nav id="small-screen-menu" class="lg:hidden" :class="{ 'absolute top-0 left-0 bg-verde p-8 h-screen w-screen z-50': isOpen, 'hidden': !isOpen }">
                        <div id="close-btn" class="flex justify-end text-white cursor-pointer hover:opacity-90" @click="isOpen = !isOpen">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                        <ul class="pt-6 lg:pt-0 list-reset flex flex-col gap-4">
                            <?php $menu_array = wp_get_menu_array($mobile_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
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
                    <div>email</div>
                    <?php if( apply_filters( 'wpml_element_has_translations', NULL, $post->ID, 'page' ) ) { ?>
                        <div class="hidden lg:block">|</div>
                    <?php } ?>
                    <span class="hover:opacity-90 cursor-pointer">
                    <?php do_action('wpml_add_language_selector'); ?>
                    </span>
                </div>
            </div>
            <div>Qui va il menu</div>
        </div>
        <div x-show="isScrolled">
            <div class="flex items-center flex-wrap max-w-7xl mx-auto px-4">
                <!-- First item: logo -->
                <div class="text-white order-2 lg:order-1 flex-1 flex justify-center lg:justify-start">
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
                            <?php $menu_array = wp_get_menu_array($mobile_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
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
    <div id="entry-content">