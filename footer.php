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
<?php
// Get the home ID. It will contains all infos abous email, address, phone, etc.
$home_id = get_option('page_on_front');
?>
<footer class="bg-verde mt-8">
    <div class="flex flex-col max-w-7xl mx-auto px-4 pt-8 pb-4 gap-8 items-center">
        <svg class="w-24 lg:w-32" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 461.1 184.36"><g data-name="Livello 2"><g data-name="Livello 1"><path fill="#ca9e67" d="M273.85 45.21v-3.74c0-.64-.07-1.18-.12-1.76v-.15c0-.25 0-.51-.07-.76v-.4a43.34 43.34 0 0 0-85.88-1.69l-.18 1.55c-.1.82-.17 1.66-.22 2.5v.06c0 .83-.07 1.66-.07 2.49v2c0 .3 0 .58.05.87s.05.73.09 1.09.07.77.12 1.15l.09.73c.06.45.13.9.21 1.36 0 .12 0 .24.07.37a43 43 0 0 0 2.41 8.46l.08.2c.18.45.38.91.58 1.36l.24.52c.17.37.34.74.52 1.1l.44.86c.14.26.27.52.42.78q.39.7.81 1.41l.12.21a43.73 43.73 0 0 0 3.36 4.78l.62.76A43.31 43.31 0 0 0 273.64 48l.12-2c0-.27 0-.54.05-.81m-6.19 11.18c-8.63.4-13.84-2.21-16.38-4.06 5.93-2.54 11.93-4.34 18.34-4.44a39.24 39.24 0 0 1-2 8.5m-31.43 3.43c2.62 3.44 8.74 9.64 20.56 12.9a39.67 39.67 0 0 1-9.17 6.12c-11.86-4.54-16.78-12.19-18.43-15.53 2.39-1.12 4.73-2.3 7-3.49m.92-5c-11.27 5.84-22.91 11.88-37.68 12.5-.49-.64-1-1.29-1.43-2a.56.56 0 0 1-.05-.08c-.31-.45-.61-.92-.89-1.39l-.17-.26c-.24-.4-.47-.81-.7-1.22l-.24-.43c-.17-.31-.32-.63-.49-.95-.32-.64-.62-1.28-.91-1.93v-.1c-.2-.46-.39-.91-.57-1.37l-.06-.16c-.18-.47-.35-.94-.51-1.42v-.08a39.47 39.47 0 0 1-1.38-5.23 54.64 54.64 0 0 0 16.6 2.7c8.42 0 15.54-2.12 22.51-4.2 8.74-2.6 17.12-5.09 28-3.86-7.54 2-14.62 5.63-22 9.44m-4.6-29.7c8.71 0 16.13 4.39 24 9a107.51 107.51 0 0 0 13.38 7.06v2.31c-17.12-4.9-28.76-1.46-40 1.88-11.42 3.4-22.23 6.62-38.56.93v-.43c0-.24 0-.49-.05-.74v-3.55c0-.34 0-.68.07-1v-.37c6.51-1.2 12.79-4.41 18.88-7.52 7.62-3.89 14.83-7.57 22.25-7.57M230.55 4a39.4 39.4 0 0 1 38.75 32.6 122.36 122.36 0 0 1-10.81-5.9c-6.53-3.86-13.24-7.82-20.84-9.13L236.42 19v-3.1h-3v-2.33h-.15v-.61h-1v.6h-4.46V16l-2.86.05V19l-1.76 3.66a93.39 93.39 0 0 0-14.76 6.49c-5.41 2.77-11 5.6-16.49 6.88A39.4 39.4 0 0 1 230.55 4m-27.86 67.1a66.34 66.34 0 0 0 11.85-2.21 34.15 34.15 0 0 0 7.66 12.9 39.35 39.35 0 0 1-19.51-10.69m26.54 11.55a30.47 30.47 0 0 1-10.86-15c2.44-.82 4.8-1.75 7.1-2.75 1.73 3.52 6.38 10.84 16.81 16a39.24 39.24 0 0 1-11.73 1.78h-1.32M260 69.43c-11.48-2.62-17.57-8.27-20.22-11.49 2.55-1.32 5.07-2.62 7.59-3.82 2.19 2 8 6.22 18.61 6.22h.02a39.92 39.92 0 0 1-6 9.09"/><path d="M28.64 150.68v-19.56h-.26l-9.44 15.74h-2.07l-9.44-15.74h-.26v19.56H0v-33.7h7.07l11.04 18.48h.1l11-18.48h6.86v33.7h-7.43zM68 116c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.33-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23m63.12-28.43v33.7h-6.4l-17.14-20.85h-.05v20.85h-7.43v-33.7h6.35l17.18 20.9h.06v-20.9h7.43zm11.81 0h31.79v6.4h-12.18v27.3h-7.38v-27.3h-12.23v-6.4zm63.42 19.3h-12.44v8.05h21.88v6.35h-29.26v-33.7h28.07v6.4h-20.69v6.56h12.44v6.34zm45.87-10.63A20.45 20.45 0 0 0 240.4 122c-3.35 0-6.34 1.24-6.34 4.13s4.44 3.2 8.82 3.56c6.14.41 15.74 1.13 15.74 10.42 0 8.31-6.92 11.56-15.17 11.56a28.33 28.33 0 0 1-18.53-6.66l4.18-5.01c2.84 2.27 7.64 5.67 14.45 5.67 4.28 0 7.69-1.65 7.69-4.79s-3.46-4-8.51-4.39c-7.38-.47-16-1.29-16-9.86 0-8.15 7.58-10.68 13.93-10.68a29.81 29.81 0 0 1 15.84 4.54Zm38.8 10.63h-12.43v8.05h21.88v6.35h-29.26v-33.7h28.07v6.4h-20.69v6.56h12.43v6.34zm22.04 14.4V117h18.68c4.8 0 7.94 1.4 10.11 3.67a10.07 10.07 0 0 1 2.79 7c0 4.34-2.69 7.69-6.81 9.5l7.89 13.57h-8.46l-6.81-12.38h-10v12.38Zm7.38-27.45v8.82h12.07a4.5 4.5 0 0 0 4.7-4.44 4.13 4.13 0 0 0-1.19-2.94 5 5 0 0 0-4-1.44Zm38.03-6.25h7.38v33.7h-7.38zm56.03 27.82a25.14 25.14 0 0 1-17.13 6.91c-11.19 0-18.57-8-18.57-17.9 0-9.7 7.43-17.86 18.31-17.86a25.86 25.86 0 0 1 16.31 5.88l-4.64 4.86a17.93 17.93 0 0 0-11-4.34c-6.81 0-11.19 5.21-11.19 11.51s4.49 11.5 11.45 11.5c4.59 0 8.88-2.42 11.82-5.36Zm27.35-28.8c10.68 0 19.25 8 19.25 17.8 0 10-8.57 18-19.25 18s-19-8-19-18c0-9.8 8.36-17.8 19-17.8m0 29.41a11.51 11.51 0 1 0 0-23 11.51 11.51 0 0 0 0 23M12.75 182a7.8 7.8 0 0 1-5.54 2.34 6 6 0 1 1-.08-11.92 7.93 7.93 0 0 1 5.26 2l-1.31 1.29a6 6 0 0 0-3.92-1.55 4.24 4.24 0 0 0 .09 8.48 5.84 5.84 0 0 0 4.21-1.89Zm26.48-9.56a6 6 0 1 1 0 11.92 6 6 0 1 1 0-11.92m0 10.2a4.24 4.24 0 1 0 0-8.48 4.24 4.24 0 1 0 0 8.48m29.86-9.85v9.51h6.9v1.72h-8.82v-11.23h1.92zm25.14 0h10.75v1.72h-4.4v9.51h-1.93v-9.51h-4.42v-1.72zm41.65 0V180c0 2.77-2.14 4.33-5 4.33s-5-1.56-5-4.33v-7.24h1.93V180c0 1.68 1.34 2.61 3 2.61s3.19-.9 3.19-2.61v-7.24ZM158.25 184v-11.21h6.19a4.17 4.17 0 0 1 3.25 1.19 3.28 3.28 0 0 1 .89 2.25 3.45 3.45 0 0 1-2.48 3.21l2.69 4.58h-2.22l-2.41-4.32h-4v4.3Zm1.92-9.51V178h4.61a1.83 1.83 0 0 0 1.87-1.75 1.62 1.62 0 0 0-.46-1.12 2.2 2.2 0 0 0-1.75-.6Zm36.49 4.52h-4.32v3.29h7.6v1.72h-9.52v-11.23h9.11v1.72h-7.19v2.78h4.32v1.72zm47.32-6.22h1.93v11.23h-1.93zm23.09 0h10.74v1.72h-4.4v9.51h-1.92v-9.51h-4.42v-1.72zm34.64 0h1.76l5.21 11.21h-2.12l-1.35-3h-5.35l-1.34 3h-2Zm-1.16 6.65h4l-1.93-4.35h-.1Zm31.12-6.65v9.51h6.89v1.72h-8.82v-11.23h1.93zm27.9 0h1.93v11.23h-1.93zm28.2 0h1.76l5.21 11.21h-2.12l-1.36-3h-5.35l-1.34 3h-2Zm-1.17 6.65h4l-1.93-4.35h-.1Zm39.33-6.65v11.23h-1.71l-6.48-7.79h-.02v7.79h-1.92v-11.23h1.7l6.48 7.79h.02v-7.79h1.93zm28.83 6.22h-4.32v3.29h7.6v1.72h-9.52v-11.23h9.11v1.72h-7.19v2.78h4.32v1.72z"/></g></g></svg>
        <div class="flex flex-col lg:grid lg:grid-cols-3 gap-4 lg:gap-6">
            <div class="text-white flex flex-col items-center gap-2">
                <svg class="w-4 h-4" style="margin-top:.15em" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <a href="<?php echo( get_field('link_google_maps', $home_id) ); ?>" target="_blank" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('indirizzo', $home_id) ); ?></a>
            </div>
            <div class="text-white flex flex-col items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <a href="tel:<?php echo( str_replace(' ', '', get_field('telefono', $home_id)) ); ?>" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('telefono', $home_id) ); ?></a>
            </div>
            <div class="text-white flex flex-col items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <a href="mailto:<?php echo( get_field('email', $home_id) ); ?>" class="cursor-pointer hover:opacity-90 text-sm text-center lg:text-left"><?php echo( get_field('email', $home_id) ); ?></a>
            </div>
        </div>
    </div>
    <div class="block text-center lg:flex lg:justify-between max-w-7xl mx-auto px-4 py-4 border-t border-white text-white text-xs mt-4">
        <div class="flex flex-col lg:flex-row"><span>&copy; <?php echo(date('Y')); ?> Monteserico.</span><span class="hidden lg:inline">&nbsp;</span><span><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Tutti i diritti riservati.' : 'All rights reserved.' ); ?></span></div>
        <div class="flex flex-col lg:flex-row">
            <a href="https://www.duerighe.it" target="_blank" class="hover:opacity-90 text-xs">PRIVACY POLICY</a>
            <span class="hidden lg:inline pl-2 pr-2"> | </span>
            <a href="javascript:void(0);" aria-label="View cookie settings" data-cc="c-settings" aria-haspopup="dialog" class="hover:opacity-90 text-xs"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'IMPOSTAZIONI COOKIE' : 'COOKIE SETTINGS' ); ?></a>
        </div>
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
        background: #3F5C48;
    }
    div#cs #c-s-in #s-inr #s-bns #s-all-bn {
        background: #3F5C48;
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
        color: #3F5C48;
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