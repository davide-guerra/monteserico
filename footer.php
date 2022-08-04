<?php
// Define the menus name based on WPML selected language
$footer_1_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Footer 1';
$footer_2_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Footer menu' :*/ 'Footer 2';
$footer_3_menu_name = /*(ICL_LANGUAGE_CODE == 'it') ? 'Top menu' :*/ 'Footer 3';
?>
<!-- Modulo contatti -->
<!-- Hide if is template -->
<?php if (is_front_page()) { ?>
    <section class="max-w-7xl mx-auto px-4 py-4">
        <h2 class="text-center text-maincolor mb-8 mt-8 lg:mt-12 text-4xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('titolo_sezione_contatti', 8) : get_field('titolo_sezione_contatti', 21) ); ?></h2>
        <div class="w-full lg:flex lg:flex-row bg-white lg::gap-8">
            <div class="lg:basis-1/2 p-4 flex flex-col mx-0">
        
                <p class="text-left lg:text-lg lg:leading-8"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('testo_sezione_contatti', 8) : get_field('testo_sezione_contatti', 21) ); ?></p>
                <div class="mt-8 flex flex-col gap-2">
                    <div class="flex flex-column items-start gap-2">
                        <svg class="w-6 h-6 text-maincolor" style="margin-top: .15em;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="lg:text-lg"><a href="<?php echo( get_field('link_indirizzo', 8) ); ?>" target="_blank" class="cursor-pointer hover:opacity-90"><?php echo( get_field('indirizzo', 8) ); ?></a></span>
                    </div>
                    <div class="flex flex-column items-center gap-2">
                        <svg class="w-6 h-6 text-maincolor" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="lg:text-lg"><a href="tel:<?php echo( str_replace(' ', '', get_field('telefono', 8)) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('telefono', 8) ); ?></a></span>
                    </div>
                    <div class="flex flex-column items-center gap-2">
                        <svg class="w-6 h-6 text-maincolor" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span class="lg:text-lg"><a href="mailto:<?php echo( get_field('email', 8) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('email', 8) ); ?></a></span>
                    </div>
                </div>
            </div>
            <div class="lg:basis-1/2 p-4 flex flex-col mx-0">
                <?php $id_form = (ICL_LANGUAGE_CODE == 'it') ? '5' : '157'; ?>    
                <?php echo(do_shortcode( '[contact-form-7 id="' . $id_form . '" title="Contact footer IT" html_class="grid grid-cols-2 gap-4"]' )); ?>
            </div>
        </div>
    </section>
<?php } ?>


</div>
<footer class="bg-verde mt-8">
    <div class="block lg:flex max-w-7xl mx-auto px-4 pt-8 pb-4 gap-16 items-center">
        <div id="footer-informations" class="flex-1 flex flex-col gap-4 items-center lg:items-start">
        
        
        <svg class="w-24 lg:w-32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 745.623 258.935">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path d="M0 595.276h841.89V0H0Z"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 -185.892 528.875)">
                                <path d="M218.364 351.274c-21.231-7.293-36.496-27.421-36.496-51.127 0-18.584 9.38-34.973 23.66-44.703a314.106 314.106 0 0 1 4.45 6.93c4.855 7.847 13.64 24.332 16.047 33.24.95 3.514.911 11.184-.46 14.557-1.983 4.88-11.002 15.014-9.74 18.682 1.26 3.668 20.101 3.668 20.101 3.668s18.843 0 20.104-3.668c1.26-3.668-7.759-13.802-9.743-18.682-1.37-3.373-1.408-11.043-.458-14.557 2.408-8.908 11.192-25.393 16.047-33.24 1.252-2.024 2.788-4.4 4.45-6.93 14.28 9.73 23.66 26.12 23.66 44.703 0 23.706-15.265 43.834-36.496 51.127.012-.268.02-.537.02-.809 0-9.71-7.873-17.584-17.584-17.584-9.71 0-17.582 7.873-17.582 17.584 0 .272.008.54.02.809z" fill="none" stroke="#fff" stroke-width="7.67025" stroke-miterlimit="10"/>
                                <path d="M235.927 207.474c-51.182 0-92.673 41.491-92.673 92.673s41.491 92.674 92.673 92.674 92.673-41.492 92.673-92.674c0-51.182-41.491-92.673-92.673-92.673Z" fill="none" stroke="#fff" stroke-width="7.67" stroke-miterlimit="10"/>
                                <path d="M235.927 332.882c-9.711 0-17.583 7.872-17.583 17.583 0 9.711 7.872 17.584 17.583 17.584 9.711 0 17.583-7.873 17.583-17.584 0-9.711-7.872-17.583-17.583-17.583ZM209.978 262.374c-5.98-9.666-17.504-26.237-26.248-38.801 14.867-10.154 32.835-16.099 52.197-16.099 19.361 0 37.33 5.945 52.196 16.099-8.743 12.564-20.267 29.135-26.247 38.801-4.855 7.847-13.639 24.332-16.047 33.24-.95 3.514-.913 11.183.458 14.556 1.984 4.88 11.004 15.015 9.743 18.683-1.261 3.668-20.103 3.668-20.103 3.668s-18.842 0-20.103-3.668c-1.261-3.668 7.759-13.803 9.742-18.683 1.371-3.373 1.409-11.042.459-14.556-2.408-8.908-11.192-25.393-16.047-33.24Z" fill="none" stroke="#fff" stroke-width="7.67" stroke-miterlimit="10"/>
                                <path d="M359.12 373.353h-9.715v3.151h22.684v-3.151h-9.542v-56.406h-3.427ZM392.553 347.455h-13.629v-27.359h15.242l-.549-3.149h-18.12v59.557h17.857v-3.151h-14.43v-22.749h13.629ZM398.502 316.947v59.557h4.417c4.063-13.702 13.551-46.786 14.873-53.397h.177c-.272 8.707-.446 17.088-.446 26.72v26.677h3.411v-59.557h-4.322c-4.489 15.331-13.644 48.225-15.315 55.257h-.089c.358-7.134.706-18.125.706-28.911v-26.346ZM432.329 376.504v-47.298c0-5.502 2.037-9.743 7.435-9.743 5.486 0 7.431 3.549 7.431 9.655v47.386h3.514v-47.12c0-9.013-4.018-13.154-11.036-13.154-7.009 0-10.771 4.124-10.771 12.892v47.382ZM463.076 373.353h-9.715v3.151h22.684v-3.151h-9.542v-56.406h-3.427ZM490.651 342.247c-2.82 16.181-4.506 26.856-4.957 31.363h-.182c-.179-4.293-2.661-18.351-4.692-31.363Zm-10.38-3.149-3.622-22.151h-3.43l9.978 59.557h4.991l10.421-59.557H495l-3.802 22.151ZM364.55 209.304h7.557c14.964 0 19.342 7.593 19.342 24.423v46.702c0 14.788-2.673 23.607-19.034 23.607h-7.865Zm-6.092 100.309h15.689c23.282 0 23.555-16.69 23.555-30.607v-43.059c0-16.324-2.231-32.217-24.952-32.217h-14.292ZM412.743 285.157v-56.669c0-15.079 5.496-20.44 13.843-20.44 8.666 0 13.689 5.356 13.689 21.22v55.737c0 14.138-5.173 20.287-13.845 20.287-9.432 0-13.687-5.984-13.687-20.135m33.786.586V228.38c0-16.877-6.7-25.925-20.269-25.925-15.571 0-19.771 11.069-19.771 25.919v57.217c0 15.636 6.114 25.296 20.258 25.296 15.235 0 19.782-12.141 19.782-25.144M458.311 203.73v105.883h7.854c7.224-24.36 24.09-83.179 26.441-94.931h.314c-.481 15.48-.793 30.379-.793 47.504v47.427h6.065V203.73h-7.683c-7.98 27.257-24.259 85.737-27.228 98.238h-.158c.636-12.683 1.255-32.222 1.255-51.399V203.73ZM581.08 252.811c0 20.859.47 40.263.787 50.762h-.159c-2.844-17.146-13.205-67.543-19.973-99.843h-6.537c-5.191 26.959-16.019 81.437-18.708 99.846h-.317c.317-12.209.948-36.298.948-54.371V203.73h-6.059v105.883h8.902c7.533-35.784 17.239-83.424 18.666-95.531h.158c1.588 11.335 12.103 61.951 19.482 95.531h9.039V203.73h-6.229ZM607.212 203.73h-6.092v105.883h6.092zM671.109 252.811c0 20.859.47 40.263.787 50.762h-.159c-2.844-17.146-13.205-67.543-19.973-99.843h-6.537c-5.191 26.959-16.019 81.437-18.708 99.846h-.317c.317-12.209.948-36.298.948-54.371V203.73h-6.059v105.883h8.902c7.533-35.784 17.239-83.424 18.666-95.531h.158c1.588 11.335 12.103 61.951 19.482 95.531h9.039V203.73h-6.229ZM697.239 203.73h-6.092v105.883h6.092zm-14.287 128.888 15.684-15.546h-6.547l-17.807 15.546z" fill="#fff"/>
                            </g>
                        </svg>    
        
        
            <p class="text-white text-sm"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('footer_testo', 8) : get_field('footer_testo', 21) ); ?></p>
            <div class="flex flex-col gap-2">
                <div class="text-white flex flex-col lg:flex-row items-center lg:items-start gap-2">
                    <svg class="w-4 h-4" style="margin-top:.15em" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <a href="<?php echo( get_field('link_indirizzo', 8) ); ?>" target="_blank" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('indirizzo', 8) ); ?></a>
                </div>
                <div class="text-white flex flex-col lg:flex-row items-center lg:items-start gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <a href="tel:<?php echo( str_replace(' ', '', get_field('telefono', 8)) ); ?>" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('telefono', 8) ); ?></a>
                </div>
                <div class="text-white flex flex-col lg:flex-row items-center lg:items-start gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <a href="mailto:<?php echo( get_field('email', 8) ); ?>" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('email', 8) ); ?></a>
                </div>
            </div>
        </div>
        <div id="footer-menu" class="block lg:flex flex-row gap-16">
            <div class="text-center lg:text-left">
                <h2 class="mt-8 lg:mt-0 text-lg text-white mb-4"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('footer_titolo_colonna_1', 8) : get_field('footer_titolo_colonna_1', 469) ); ?></h2>
                <ul class="flex flex-col gap-2">
                    <?php $menu_array = wp_get_menu_array($footer_1_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                    <?php foreach ($menu_array as $item){ ?>
                    <li class="text-white text-sm">
                        <a href="<?php echo($item['url']); ?>" class="hover:opacity-90"><?php echo($item['title']); ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="text-center lg:text-left">
                <h2 class="mt-8 lg:mt-0 text-lg text-white mb-4"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('footer_titolo_colonna_2', 8) : get_field('footer_titolo_colonna_2', 469) ); ?></h2>
                <ul class="flex flex-col gap-2">
                    <?php $menu_array = wp_get_menu_array($footer_2_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                    <?php foreach ($menu_array as $item){ ?>
                    <li class="text-white text-sm">
                        <a href="<?php echo($item['url']); ?>" class="hover:opacity-90"><?php echo($item['title']); ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="text-center lg:text-left">
                <h2 class="mt-8 lg:mt-0 text-lg text-white mb-4"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('footer_titolo_colonna_3', 8) : get_field('footer_titolo_colonna_3', 469) ); ?></h2>
                <ul class="flex flex-col gap-2">
                    <?php $menu_array = wp_get_menu_array($footer_3_menu_name); // The wp_get_menu_array() function is defined in /inc/get_menu_as_array.php ?>
                    <?php foreach ($menu_array as $item){ ?>
                    <li class="text-white text-sm">
                        <a href="<?php echo($item['url']); ?>" class="hover:opacity-90"><?php echo($item['title']); ?></a>
                    </li>
                    <?php } ?>
                    <li class="text-white text-sm">
                        <a href="javascript:void(0);" aria-label="View cookie settings" data-cc="c-settings" aria-haspopup="dialog"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'IMPOSTAZIONI PRIVACY E COOKIE' : 'PRIVACY & COOKIES SETTINGS' ); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="block text-center lg:flex lg:justify-between max-w-7xl mx-auto px-4 py-4 border-t border-white text-white text-xs">
        <div class="flex flex-col lg:flex-row"><span>&copy; <?php echo(date('Y')); ?> Tenuta Don Mimì.</span><span class="hidden lg:inline">&nbsp;</span><span><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Tutti i diritti riservati.' : 'All rights reserved.' ); ?></span></div>
        <div><a href="https://www.duerighe.it" target="_blank" class="hover:opacity-90 text-[10px] lg:text-xs"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Crediti' : 'Credits' ); ?></a></div>
    </div>
</footer>
<?php if (is_front_page()) { ?>
    <!-- Import Slide JS cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js" integrity="sha256-esNVkEwsSpRc+USDUy7gWsyTZprX+CtOFMUgVq9JYnE=" crossorigin="anonymous"></script>
    <script>
        var mainSlider = new Splide( '#mainslider', {
	        type   : 'loop',
            perPage: 1,
            pagination: true,
            autoplay: true,
            interval: 5000,
            pauseOnHover: false,
            width : '100vw',
            height: '75vh',
            breakpoints: {
		        1023: {
			        height: '100vh',
		        },
            },
            arrowPath: 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
        });
        mainSlider.mount();
    </script>
<?php } ?>

<!-- Import LightGallery JS from cdn -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js" integrity="sha256-0Zhc9IDI5elFpwJZlvdAM4u/6qlxi4qIOUlHDVl5wjU=" crossorigin="anonymous"></script>
<script>
    lightGallery(document.getElementById('home-gallery'), {
        download: false,
    });
</script>
<!-- Import jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // Switch language selector
	let actualUrl = window.location.href;
	if (actualUrl.match(/\/en\//gm)) {
		// È inglese
		jQuery('.wpml-ls-item-en').css('display', 'none');
	} else {
		// È italiano
		jQuery('.wpml-ls-item-it').css('display', 'none')
	}

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/plain" data-cookiecategory="analytics" async src="https://www.googletagmanager.com/gtag/js?id=G-955MKVN48J"></script>
<script type="text/plain" data-cookiecategory="analytics">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-955MKVN48J');
</script>
<?php
$current_language = ICL_LANGUAGE_CODE;
$language_for_cookie = ($current_language == 'it')? 'it' : 'en'; 
($language_for_cookie == 'it') ? $cookie_settings_btn = 'Impostazioni cookie' : $cookie_settings_btn = 'Cookie settings';
?>
<!-- Add style for Cookie consent banner -->
<style>
    div#cc_div thead {
        font-weight: bold;
    }
    div#cm #c-inr #c-bns button#c-p-bn {
        background: #0075b7;
    }
    div#cs #c-s-in #s-inr #s-bns #s-all-bn {
        background: #0075b7;
    }
    #cm.bar #c-inr {
        max-width: 60em !important;
        margin: 0 auto;
    }
    div#c-bns {
        max-width: 60em !important;
        margin: 0 auto !important;
    }
    div#c-txt {
        padding-bottom: 1.5em;
    }
    div#c-txt a:hover {
        color: #0075b7;
    }
    a.privacy-link {
        color: #fff;
    }
    #c-txt a {
        font-size: unset;
    }
    #s-inr .cc_div .c-bn {
        background: #e5ebef !important;
    }
    button#s-c-bn {
        background: #d8e0e6 !important;
    }
    button.b-tl.exp {
        color: #2d4156;
    }
</style>
<!-- Cookie consent JS -->
<script defer="" src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.7.1/dist/cookieconsent.js"></script>
<script>
    window.addEventListener('load', function(){
        const cc = initCookieConsent();
    
        // basic configuration
        cc.run({
            current_lang : '<?php echo $language_for_cookie; ?>',
            theme_css : 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.x/dist/cookieconsent.css',
            page_scripts: true,
            cookie_expiration : 365,
            gui_options: {
                consent_modal : {
                    layout : 'bar',               // box/cloud/bar
                    position : 'bottom center',     // bottom/top + left/right/center
                    transition: 'slide'             // zoom/slide
                },
                settings_modal : {
                    layout : 'box',                 // box/bar
                    // position : 'left',           // left/right
                    transition: 'slide'             // zoom/slide
                }
            },
            onAccept : function(){
                //console.log('Accettato');
            },
    
            onChange: function(){
                //console.log('Non ha accettato');
            },
    
            languages : {
                it : {
                    consent_modal : {
                        title :  "Impostazioni privacy e cookie",
                        description :  'Utilizziamo tecnologie, quali i cookie, per garantire le funzionalità tecniche e per misurare le prestazioni del sito al fine di fornirti una migliore esperienza di navigazione. Se clicchi su “Accetta”, acconsentirai all\'installazione dei cookie per le finalità indicate. Vuoi evitare l\'installazione di cookie non necessari? Clicca su “Rifiuta”. Se vuoi decidere quali cookie accettare e quali rifiutare, <a href="javascript:void(0);" aria-label="View cookie settings" data-cc="c-settings"><b>personalizza le tue scelte</b></a>; potrai modificare le tue preferenze in qualsiasi momento ritornando su questo sito. Per maggiori informazioni sui cookie e sulla tua privacy, ti consigliamo di consultare la nostra <a href="/privacy-policy/" target="_blank"><b>Privacy e cookie policy</b></a>.',
                        primary_btn: {
                            text: 'Accetta',
                            role: 'accept_all'  //'accept_selected' or 'accept_all'
                        },
                        secondary_btn: {
                            text : 'Rifiuta',
                            role : 'accept_necessary'   //'settings' or 'accept_necessary'
                        }
                    },
                    settings_modal : {
                        title : 'Impostazioni Cookie',
                        save_settings_btn : "Salva le impostazioni",
                        accept_all_btn : "Accetta tutto",
                        reject_all_btn : "Rifiuta tutto",
                        close_btn_label: "Chiudi",
                        cookie_table_headers : [
                            {col1: "Nome" }, 
                            {col2: "Descrizione" }, 
                            {col3: "Scadenza" }
                        ],   
                        blocks : [
                            {
                                title : "",
                                description: 'Questo sito potrebbe archiviare o recuperare informazioni dal browser sotto forma di cookie. I cookie sono necessari per il corretto funzionamento del sito e per migliorare l’esperienza di navigazione degli utenti poiché memorizzano alcune informazioni (es. preferenze, dispositivo di accesso a internet, etc) utili per i successivi accessi al sito.'
                            },{
                                title : "Cookie tecnici",
                                description: 'I cookie tecnici sono assolutamente necessari per il corretto funzionamento del sito web. Questi cookie garantiscono le funzionalità di base e le caratteristiche di sicurezza del sito web, in modo anonimo.',
                                toggle : {
                                    value : 'necessary',
                                    enabled : true,
                                    readonly: true
                                },
                                cookie_table: [
                                {
                                    col1: '_icl_current_language',
                                    col2: 'Memorizza e gestisce le preferenze dell\'utente riguardo il linguaggio da utilizzare per i contenuti del sito.',
                                    col3: 'Sessione',
                                },
                                {
                                    col1: 'cc_cookie',
                                    col2: 'Memorizza e gestisce le preferenze dell\'utente riguardo i cookies.',
                                    col3: '1 anno',
                                },
                                {
                                    col1: 'PHPSESSID',
                                    col2: 'Gestisce la sessione attualmente in uso da parte dell\'utente.',
                                    col3: 'Sessione',
                                },	
                                ]
                            },{
                                title : "Cookie analitici",
                                description: 'I cookie analitici vengono utilizzati per capire come i visitatori interagiscono con il sito web. Questi cookie aiutano a fornire informazioni sulle metriche del numero di visitatori, frequenza di rimbalzo, fonte di traffico, ecc.',
                                toggle : {
                                    value : 'analytics',
                                    enabled : false,
                                    readonly: false
                                },
                                cookie_table: [
                                {
                                    col1: '_ga',
                                    col2: 'Cookie installato dal servizio Google Analytics allo scopo di conteggiare e memorizzare le pagine visualizzate dall\'utente. Non raccoglie alcun dato personale.',
                                    col3: '2 anni',
                                },
                                {
                                    col1: '_ga_*',
                                    col2: 'Cookie installato dal servizio Google Analytics allo scopo di identificare in maniera univoca il visitatore del sito. Non raccoglie alcun dato personale.',
                                    col3: '1 minuto',
                                },
                                ]
                            },
                        ]
                    }
                },
                en : {
                    consent_modal : {
                        title :  "Privacy and cookies settings",
                        description :  'We use technologies, such as cookies, to ensure technical functionality and to measure site performance in order to provide you with a better browsing experience. If you click on "Accept", you will consent to the installation of cookies for the purposes indicated. Do you want to avoid the installation of unnecessary cookies? Click on "Reject". If you want to decide which cookies to accept and which to refuse, <a href="javascript:void(0);" aria-label="View cookie settings" data-cc="c-settings"><b>customize your choices</b></a>; you can change your preferences at any time by returning to this site. For more information on cookies and your privacy, we recommend that you consult our <a href="/en/privacy-policy" target="_blank"><b>Privacy and cookie policy</b></a>.',
                        primary_btn: {
                            text: 'Accept',
                            role: 'accept_all'  //'accept_selected' or 'accept_all'
                        },
                        secondary_btn: {
                            text : 'Reject',
                            role : 'accept_necessary'   //'settings' or 'accept_necessary'
                        }
                    },
                    settings_modal : {
                        title : 'Cookie Settings',
                        save_settings_btn : "Save settings",
                        accept_all_btn : "Accept all",
                        reject_all_btn : "Reject all",
                        close_btn_label: "Close",
                        cookie_table_headers : [
                            {col1: "Name" }, 
                            {col2: "Description" }, 
                            {col3: "Epiration" }
                        ],   
                        blocks : [
                            {
                                title : "",
                                description: 'This site may store or retrieve information from the browser in the form of cookies. Cookies are necessary for the proper functioning of the site and to improve the browsing experience of users as they store some information (eg preferences, internet access device, etc.) useful for subsequent access to the site.'
                            },{
                                title : "Technical cookies",
                                description: 'Technical cookies are absolutely necessary for the website to function properly. These cookies guarantee the basic functionality and security features of the website, anonymously.',
                                toggle : {
                                    value : 'necessary',
                                    enabled : true,
                                    readonly: true
                                },
                                cookie_table: [
                                {
                                    col1: '_icl_current_language',
                                    col2: 'This cookie store your preferences about the website language.',
                                    col3: 'Session',
                                },
                                {
                                    col1: 'cc_cookie',
                                    col2: 'Stores and manages user preferences about cookies.',
                                    col3: '1 year',
                                },
                                    {
                                    col1: 'PHPSESSID',
                                    col2: 'Manage the current user session on this website.',
                                    col3: 'Session',
                                }
                                ]
                            },{
                                title : "Analytical cookies",
                                description: 'Analytical cookies are used to understand how visitors interact with the website. These cookies help provide information on visitor numbers, bounce rate, traffic source, etc.',
                                toggle : {
                                    value : 'analytics',
                                    enabled : false,
                                    readonly: false
                                },
                                cookie_table: [
                                {
                                    col1: '_ga',
                                    col2: 'Cookie installed by Google Analytic for counting and storing the pages viewed by the current user. It does not collect your personal information.',
                                    col3: '2 years',
                                },
                                {
                                    col1: '_ga_*',
                                    col2: 'Cookie installed by Google Analytic for determining the current user. It does not collect your personal information.',
                                    col3: '1 minute',
                                },
                                ]
                            },
                        ]
                    }
                }
            }
        });
		jQuery('#c-bns').append('<button type="button" data-cc="c-settings" class="c-bn c_link" aria-haspopup="dialog"><?php echo $cookie_settings_btn; ?></button>');
    });
</script>
</body>
</html>