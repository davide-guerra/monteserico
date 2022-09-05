<?php /* Template Name: Tre donne */ ?>
<?php
  // Get the header
  get_header();
?> 
<?php 
global $post;
$page_id = $post->ID;
?>

<!-- Title and breadcrumbs area -->
<section class="w-full">
    <div class="w-full relative aspect-[16/9] md:aspect-[7/3] 2xl:aspect-[7/2]">
        <img src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" class="w-full h-full object-cover brightness-75">
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
    </div>
</section>

<!-- Prima sezione -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_1') ); ?>">
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <p><?php echo( get_field('testo_fascia_1') ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Banner -->
<section style="background-image: url(<?php echo( get_field('immagine_banner_1') ); ?>);" class="w-full flex items-center justify-center bg-fixed bg-center bg-cover my-8">
  <div class="max-w-7xl mx-auto px-4 py-36 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center font-serif"><?php echo( get_field('testo_banner_1') ); ?></h2>
  </div>
</section>

<!-- Terza sezione -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <div class="flex flex-col gap-4">
        <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_3') ); ?>">
      </div>
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <p><?php echo( get_field('testo_fascia_3') ); ?></p>
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-end">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_3') ); ?>">
    </div>
  </div>
</section>

<!-- Quarta sezione -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
        <div class="mt-4 lg:mt-0 flex flex-col gap-4">
            <p><?php echo( get_field('testo_fascia_4') ); ?></p>
        </div>
        <div class="flex flex-col gap-4">
            <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_4') ); ?>">
        </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-start">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_4') ); ?>">
    </div>
  </div>
</section>

<?php
  // Get the footer
  get_footer();