<!DOCTYPE html>
<?php
// Define the menus name based on WPML selected language
$top_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Top menu';
$mobile_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Footer menu' :*/ 'Mobile menu';
global $post;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/component.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.5.0/dist/alpine.min.js" defer></script>
    <!-- Import Splide JS stylesheet from cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css" integrity="sha256-6YrKt7vMU9e4bwtlblASqhvvEt4/0JEQJ/zyWOFKnaM=" crossorigin="anonymous">
    <!-- Import LightGallery JS stylesheet from cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/css/lightgallery.css" integrity="sha256-eGvehVg4KxUxLtb7sv7tgCsMYFNmEqJ4IB4NDh/FzvI=" crossorigin="anonymous">   
    <title><?php echo(is_404() ? 'Not found' : the_title()); ?> | <?php echo( get_bloginfo( 'name' ) ); ?></title>
</head>
<body class="absolute top-0 w-full">
    <div
        class="w-full bg-white"
        x-data="{ isOpen: false, isFixed: false, dropdownMenu: false }"
        x-init="isFixed = (window.scrollY > 1) ? true : false"
        @scroll.window="isFixed = (window.scrollY > 1) ? true : false"
        @keydown.escape="isOpen = false"
        :class="{
        'bg-white fixed z-20 shadow-lg': isFixed,
        'transparent': !isFixed
        }"
        >
        <div class="w-full bg-maincolor py-2" :class="{ 'hidden': isFixed, 'hidden lg:block': !isFixed }">
            <div class="flex flex-wrap max-w-7xl mx-auto px-4 justify-between">
                <div class="text-white flex flex-column items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <a href="<?php echo( get_field('link_indirizzo', 8) ); ?>" target="_blank" class="cursor-pointer hover:opacity-90"><?php echo( get_field('indirizzo_breve', 8) ); ?></a>
                </div>
                <div class="flex flex-column items-center gap-6">
                    <div class="text-white flex flex-column items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:<?php echo( str_replace(' ', '', get_field('telefono', 8)) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('telefono', 8) ); ?></a>
                    </div>
                    <div class="text-white flex flex-column items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:<?php echo( get_field('email', 8) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('email', 8) ); ?></a>
                    </div>
                    <div id="language-switcher-wrapper" class="text-white no-underline flex flex-row gap-6 items-center ml-8">
                         <?php if( apply_filters( 'wpml_element_has_translations', NULL, $post->ID, 'page' ) ) { ?>
                            <!-- <div class="hidden lg:block">|</div> -->
                        <?php } ?>
                        <span class="hover:opacity-90 cursor-pointer">
                            <?php do_action('wpml_add_language_selector'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
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
                      <!--   <svg class="w-24 md:w-30 py-4" viewBox="0 0 135.658 68.092" xmlns="http://www.w3.org/2000/svg"><path d="M81.38 8.692c0-3.123.07-6.027.118-7.598h-.024c-.426 2.567-1.977 10.11-2.99 14.943h-.978c-.777-4.034-2.397-12.188-2.8-14.943h-.047c.047 1.827.142 5.432.142 8.137v6.806h-.907V.19h1.332c1.128 5.356 2.58 12.486 2.794 14.298h.024c.237-1.696 1.81-9.272 2.916-14.298h1.352v15.847h-.932Zm4.03-4.842v8.482c0 2.257.823 3.059 2.072 3.059 1.297 0 2.05-.802 2.05-3.176V3.873c0-2.116-.775-3.036-2.073-3.036-1.412 0-2.049.896-2.049 3.013m5.057-.087v8.585c0 2.526-1.002 3.88-3.034 3.88-2.33 0-2.959-1.657-2.959-3.88V3.786c0-2.34.916-3.786 3.032-3.786 2.28 0 2.961 1.817 2.961 3.763m2.238 12.274V.19h1.175c1.081 3.646 3.606 12.45 3.958 14.208h.046a222.517 222.517 0 0 1-.118-7.11V.19h.907v15.847h-1.15c-1.194-4.08-3.63-12.832-4.074-14.702h-.024c.095 1.898.188 4.822.188 7.692v7.01zm9.922-15.008h-2.585V.19h6.035v.839h-2.538v15.008h-.912zm9.251 6.891h-3.626v7.28h4.055l-.146.837h-4.821V.19h4.751v.839h-3.84v6.053h3.627zM81.866 35.792v.641c0 3.134-.599 5.766-3.943 5.766-3.594 0-4.039-2.905-4.039-6.057V24.665c0-3.71 1.508-5.364 4.04-5.364 3.3 0 3.841 2.549 3.841 5.302v.742h-1.352v-.686c0-2.062-.204-4.176-2.555-4.176-2.186 0-2.653 1.851-2.653 4.275v11.39c0 3.044.694 4.87 2.753 4.87 2.253 0 2.555-2.052 2.555-4.61v-.616zm8.302-3.361c-1.059-6.075-1.691-10.082-1.86-11.775h-.069c-.068 1.612-1 6.89-1.762 11.775zm-3.897 1.183-1.36 8.316h-1.287l3.746-22.36h1.874l3.912 22.36h-1.355l-1.428-8.316zm9.922 2.311v1.21c0 2.557.961 3.887 2.79 3.887 1.863 0 2.788-1.043 2.788-4.513 0-2.835-.633-4.129-2.945-5.905-2.377-1.843-3.519-2.884-3.519-6.165 0-2.716.806-5.171 3.775-5.139 2.513.033 3.64 1.505 3.64 4.767v.877h-1.286v-.842c0-2.162-.464-3.624-2.388-3.624-1.956 0-2.454 1.724-2.454 3.754 0 2.588.53 3.39 2.669 5.06 2.856 2.215 3.795 3.392 3.795 7.075 0 3.114-.68 5.832-4.044 5.832-3.07 0-4.107-2.088-4.107-5.033v-1.24zm11.404-15.172h-3.647V19.57h8.515v1.183h-3.582V41.93h-1.286zm13.052 9.723h-5.116v10.271h5.722l-.205 1.183h-6.804V19.57h6.704v1.183h-5.417v8.54h5.116zm2.736-10.906h1.286v21.18h5.624l-.236 1.18h-6.674zm-47.68 36.531h1.723c2.929 0 3.297-1.861 3.297-4.332v-1.3c0-2-.498-3.831-3.191-3.831h-1.829Zm-1.286-10.638h3.186c3.09 0 4.438 1.61 4.438 4.872v1.404c0 3.027-.683 5.536-4.574 5.536h-1.764v10.548h-1.286zm14.277 12.86c-1.06-6.074-1.692-10.082-1.861-11.774h-.068c-.068 1.612-1 6.89-1.762 11.775zm-3.897 1.183-1.36 8.316h-1.288l3.746-22.359h1.874l3.913 22.36h-1.356l-1.427-8.317zm17.052 8.317h-1.073a36.702 36.702 0 0 1-.103-2.198c-.504 1.833-1.744 2.467-3.217 2.467-2.887 0-3.86-2.18-3.86-5.538V50.669c0-3.681 1.537-5.475 4.241-5.475 3.082 0 4.01 2.04 4.01 5.334v.408h-1.286v-.347c0-1.957-.2-4.214-2.756-4.214-1.861 0-2.888 1.1-2.888 4.413v11.611c0 2.626.633 4.513 2.658 4.513 2.619 0 2.955-2.549 2.955-5.972v-3.869h-3.023v-1.177h4.342zm8.734-9.5c-1.059-6.074-1.692-10.082-1.86-11.774h-.069c-.068 1.612-1 6.89-1.762 11.775zm-3.897 1.183-1.36 8.316h-1.287l3.745-22.359h1.874l3.913 22.36h-1.355l-1.428-8.317zm9.033 8.317v-22.36h1.658c1.526 5.144 5.088 17.565 5.584 20.047h.067a312.224 312.224 0 0 1-.168-10.032V45.463h1.28v22.36h-1.622c-1.685-5.756-5.123-18.106-5.75-20.746h-.033c.135 2.679.265 6.805.265 10.855v9.89zm12.802-17.196v11.967c0 3.184 1.16 4.316 2.923 4.316 1.83 0 2.891-1.13 2.891-4.48V50.66c0-2.986-1.092-4.285-2.923-4.285-1.992 0-2.891 1.264-2.891 4.252m7.135-.123v12.113c0 3.564-1.415 5.475-4.28 5.475-3.289 0-4.175-2.338-4.175-5.474V50.536c0-3.302 1.29-5.342 4.277-5.342 3.218 0 4.178 2.564 4.178 5.31m-82.875 8.65c-1.985-2.854-4.297-6.191-6.18-9.017 4.784-3.742 7.868-9.561 7.868-16.091 0-8.637-5.391-16.033-12.983-19.014-.604-3.566-3.706-6.293-7.441-6.293s-6.838 2.727-7.442 6.293c-7.591 2.98-12.982 10.377-12.982 19.014 0 6.53 3.083 12.35 7.868 16.09-1.884 2.828-4.196 6.164-6.18 9.018-7.647-5.72-12.604-14.846-12.604-25.108 0-17.281 14.059-31.34 31.34-31.34 17.28 0 31.34 14.059 31.34 31.34 0 10.262-4.958 19.388-12.604 25.108m-26.74-11.071c1.826-2.95 4.937-8.832 5.817-12.085.402-1.488.396-4.495-.215-5.998-.312-.769-.95-1.715-1.624-2.718-.502-.747-1.366-2.031-1.658-2.744.97-.311 3.382-.56 5.684-.56 2.3 0 4.714.249 5.683.56-.291.713-1.155 1.997-1.658 2.744-.674 1.003-1.311 1.95-1.624 2.718-.61 1.502-.616 4.51-.214 5.998.879 3.25 3.99 9.133 5.816 12.085 1.962 3.171 5.584 8.406 8.497 12.596a31.16 31.16 0 0 1-11.396 4.29c-.174.027-.348.055-.523.08a32.169 32.169 0 0 1-1.077.14l-.279.032c-.31.031-.622.058-.934.08-.097.008-.194.013-.29.02a30.503 30.503 0 0 1-1.018.048c-.327.01-.655.017-.983.017a32.528 32.528 0 0 1-2-.066l-.291-.018c-.312-.023-.624-.05-.935-.081l-.277-.032a32.346 32.346 0 0 1-1.078-.139 32.724 32.724 0 0 1-1.742-.305c-.196-.04-.391-.084-.586-.128l-.273-.063a32.29 32.29 0 0 1-.64-.156l-.006-.001a31.173 31.173 0 0 1-8.673-3.718c2.912-4.187 6.532-9.42 8.496-12.596m8.005-26.938a4.855 4.855 0 0 1-4.85-4.85 4.855 4.855 0 0 1 4.85-4.85 4.855 4.855 0 0 1 4.85 4.85 4.855 4.855 0 0 1-4.85 4.85m7.37-3.204c6.099 2.803 10.347 8.964 10.347 16.105 0 5.585-2.6 10.569-6.651 13.819a85.037 85.037 0 0 1-.762-1.205c-1.811-2.928-4.732-8.507-5.506-11.368-.285-1.056-.224-3.453.11-4.272.207-.51.794-1.383 1.362-2.227 1.394-2.073 2.599-3.864 2.1-5.314-.142-.413-.446-1.295-3.067-1.81a7.548 7.548 0 0 0 2.066-3.728M16.328 34.046c0-7.14 4.25-13.302 10.35-16.105a7.547 7.547 0 0 0 2.065 3.728c-2.622.515-2.926 1.397-3.068 1.81-.498 1.45.706 3.24 2.1 5.314.569.844 1.156 1.717 1.363 2.227.334.82.395 3.216.109 4.272-.774 2.863-3.694 8.441-5.505 11.368-.23.372-.488.778-.762 1.204-4.05-3.25-6.652-8.233-6.652-13.818m51.764 0C68.092 15.273 52.82 0 34.047 0 15.274 0 0 15.273 0 34.046c0 11.18 5.418 21.118 13.765 27.329l-.023.032 1.127.77a33.87 33.87 0 0 0 9.74 4.583l.205.06c.231.064.463.127.696.188.107.028.214.053.321.08a34.366 34.366 0 0 0 3.022.608c.114.018.228.033.342.049a33.66 33.66 0 0 0 3.709.325c.38.013.76.022 1.143.022a32.84 32.84 0 0 0 1.445-.033c.336-.014.67-.032 1.004-.056l.148-.01a34.083 34.083 0 0 0 2.252-.249c.117-.016.235-.032.353-.05a35.453 35.453 0 0 0 1.975-.367c.352-.075.701-.157 1.05-.243.103-.026.205-.05.308-.077.234-.06.467-.124.7-.19l.197-.056a33.875 33.875 0 0 0 9.744-4.585l1.127-.77-.022-.032c8.347-6.21 13.764-16.149 13.764-27.329" style="fill:#0075b7;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:.352778"/></svg> -->
                  
                </a>
            </div>

            <!-- Second item: toggle button (hidden on large screens) and menu -->
            <div id="hamburger-and-menu" class="order-1 lg:oder-2 h-full" @click.away="isOpen = false">
                <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 hover:opacity-90 focus:outline-none text-maincolor">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
                <!-- <div class="w-full lg:flex lg:items-center lg:w-auto" @click.away="isOpen = false" x-show.transition="true"> -->
                    <nav id="large-screen-menu" class="hidden lg:block">
                        <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center gap-6">
                            <?php $menu_array = wp_get_menu_array($top_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                            <?php foreach ($menu_array as $item){ ?>
                                <li class="large-menu-item relative" x-data="{showSub: false}">
                                    <a class="inline-block text-maincolor no-underline relative flex flex-column items-center gap-2 hover:opacity-90" href="<?php echo $item['url']; ?>"
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
                                        <div x-show="showSub" class="absolute right-0 left-0 p-4 mt-2 bg-white shadow-2xl w-fit z-40" @click.away="showSub = false">
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
                    <nav id="small-screen-menu" class="lg:hidden" :class="{ 'absolute top-0 left-0 bg-maincolor p-8 h-screen w-screen z-50': isOpen, 'hidden': !isOpen }">
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
                <!-- </div> -->
            </div>

            <!-- Third element: menu -->
            <div id="language-switcher-wrapper" class="block lg:hidden order-3 no-underline text-maincolor flex flex-row gap-6 items-center">
            <?php if( apply_filters( 'wpml_element_has_translations', NULL, $post->ID, 'page' ) ) {
                ?>
                <div class="hidden lg:block">|</div>
                <?php
            }
            ?>
                <span class="hover:opacity-90 cursor-pointer">
                <?php do_action('wpml_add_language_selector'); ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Content begins here -->
    <div id="entry-content">