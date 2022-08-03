	
<?php /* Template Name: Contatti */ ?>
<?php
  // Get the header
  get_header();
?> 
<?php 
global $post;
$page_id = $post->ID;
?>
<section class="w-full">
    <div class="w-full relative aspect-[16/9] lg:aspect-[21/6]">
        <img src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" class="w-full h-full object-cover brightness-75">
        <?php /*
        <div class="absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-2/4 flex flex-col gap-4 z-10">
            <h2 class="text-center text-white text-2xl lg:text-4xl"><?php the_title(); ?></h2>
            <!-- Show bradcrumbs -->
            <nav class="text-center text-white">
                <a href="<?php echo( (ICL_LANGUAGE_CODE == 'it') ? '/' : '/en' ); ?>" class="hover:opacity-90">Home</a> >
                <?php
                    foreach (get_post_ancestors($page_id) as $ancestor) {
                    ?>
                    <a href="<?php echo(get_permalink($ancestor))?>" class="hover:opacity-90"><?php echo(get_the_title($ancestor))?></a> > 
                    <?php
                    }
                ?>
                <?php the_title(); ?>
            </nav>
        </div>
        */ ?>
    </div>
</section>
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-maincolor text-center mb4 mt-12 text-2xl lg:text-4xl lg:leading-[3rem]"><?php echo( get_field('titolo_banner_iniziale') ); ?></h2>
    <h2 class="text-center text-xl lg:text-3xl"><?php echo( get_field('sottotitolo_banner_iniziale') ); ?></h2>
</section>
<section class="w-full">
    <div class="lg:grid lg:grid-cols-8 lg:grid-rows-10">
        <div class="bg-maincolor p-8 text-white lg:col-start-6 lg:col-end-8 lg:row-start-1 lg:row-end-4 z-10 flex flex-col gap-4 justify-center">
            <div class="flex flex-row gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <div class="flex-1 break-words text-sm"><?php echo( get_field('indirizzo') ); ?></div>
            </div>
            <div class="flex flex-row gap-2 items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <div class="flex-1 break-words text-sm"><a href="tel:<?php echo( str_replace(' ', '', get_field('telefono')) ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('telefono') ); ?></a></div>
            </div>
            <div class="flex flex-row gap-2 items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <div class="flex-1 break-words text-sm"><a href="mailto:<?php echo( get_field('email') ); ?>" class="cursor-pointer hover:opacity-90"><?php echo( get_field('email') ); ?></a></div>
            </div>
        </div>
        <div class="w-full relative aspect-[21/9] lg:aspect-[21/8] lg:col-start-1 lg:col-end-9 lg:row-start-2 lg:row-end-11">
            <iframe src="<?php echo( get_field('google_maps') ); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
        </div>
    </div>
</section>
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-center text-maincolor mb-8 mt-12 text-4xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('mappa_titolo', 8) : get_field('mappa_titolo', 469) ); ?></h2>
    <?php
        $auto_group = (ICL_LANGUAGE_CODE == 'it') ? get_field('in_auto', 8) : get_field('in_auto', 469);
        $aereo_group = (ICL_LANGUAGE_CODE == 'it') ? get_field('in_aereo', 8) : get_field('in_aereo', 469);
        $treno_group = (ICL_LANGUAGE_CODE == 'it') ? get_field('in_treno', 8) : get_field('in_treno', 469);
    ?>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="flex flex-col items-center">
        <h2 class="font-bold text-lg text-center my-8"><?php echo($auto_group['titolo']); ?></h2>
        <p class="flex-1 text-center text-base"><?php echo($auto_group['testo']); ?></p>
      </div>
      <div class="flex flex-col items-center">
        <h2 class="font-bold text-lg text-center my-8"><?php echo($treno_group['titolo']); ?></h2>
        <p class="flex-1 text-center text-base"><?php echo($treno_group['testo']); ?></p>
      </div>
      <div class="flex flex-col items-center">
        <h2 class="font-bold text-lg text-center my-8"><?php echo($aereo_group['titolo']); ?></h2>
        <p class="flex-1 text-center text-base"><?php echo($aereo_group['testo']); ?></p>
      </div>
    </div>
    
</section>
<section class="max-w-7xl mx-auto px-4 pt-0 pb-12">
    <h2 class="text-center text-maincolor mb-8 mt-12 text-4xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('titolo_sezione_contatti', 8) : get_field('titolo_sezione_contatti', 21) ); ?></h2>
    <?php $id_form = (ICL_LANGUAGE_CODE == 'it') ? '5' : '157'; ?>    
    <?php echo(do_shortcode( '[contact-form-7 id="' . $id_form . '" title="Contact footer IT" html_class="grid grid-cols-2 gap-4"]' )); ?>
</section>










<?php
  // Get the footer
  get_footer();