	
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
    <div class="w-full relative aspect-[16/9] md:aspect-[7/3] 2xl:aspect-[7/2]">
        <img src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" class="w-full h-full object-cover brightness-75">
        <div class="absolute bottom-0 left-1/2 -translate-x-2/4 z-[8] mb-8">
            <h2 class="font-serif text-center text-white text-4xl lg:text-6xl"><?php the_title(); ?></h2>
            <!-- Show bradcrumbs -->
            <nav class="text-center text-white mt-4">
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
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 pt-0 pb-12">
    <h2 class="text-center text-maincolor mb-8 mt-12 text-4xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? get_field('titolo_sezione_contatti', 8) : get_field('titolo_sezione_contatti', 21) ); ?></h2>
    <?php // Questo div nascosto serve perché Tailwind prenda le classi che sono state usate nell'editor di CF7. Non rimuoverlo. ?>
    <div class="hidden bg-oro text-white cursor-pointer mt-1 text-xs"></div>
    <?php $id_form = (ICL_LANGUAGE_CODE == 'it') ? '112' : '113'; ?>    
    <?php echo(do_shortcode( '[contact-form-7 id="' . $id_form . '" title="Contact footer IT" html_class="grid grid-cols-2 gap-4"]' )); ?>
</section>










<?php
  // Get the footer
  get_footer();