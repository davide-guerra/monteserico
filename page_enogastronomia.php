<?php /* Template Name: Enogastronomia */ ?>
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

<!-- Sezione full-width con sfondo bianco -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-maincolor text-center mb-8 mt-12 text-xl lg:text-3xl lg:leading-10"><?php echo( get_field('titolo') ); ?></h2>
    <h3 class="text-center mb4 text-lg lg:text-xl lg:leading-8"><?php echo( get_field('sottotitolo') ); ?></h3>
    <p class="text-center mb4 text-base"><?php echo( get_field('testo') ); ?></p>
</section>


<!-- Sezione box img dx -->
<section class="w-full lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_1_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_1_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_1_testo') ); ?></p>
    </div>
  </div>
</section>
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_1_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_1_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_1_testo') ); ?></p>
    </div>
  </div>
</section>
*/ ?>

<!-- Sezione box img sx -->
<section class="w-full lg:flex lg:flex-row lg:flex-row">
<div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_2_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_2_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_2_testo') ); ?></p>
    </div>
  </div>
</section>
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row">
<div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_2_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_2_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_2_testo') ); ?></p>
    </div>
  </div>
</section>
*/ ?>

<!-- Sezione box img dx -->
<section class="w-full lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_3_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_3_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_3_testo') ); ?></p>
    </div>
  </div>
</section>
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_3_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_3_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_3_testo') ); ?></p>
    </div>
  </div>
</section>
*/ ?>

<!-- Sezione box img sx -->
<section class="w-full lg:flex lg:flex-row lg:flex-row">
<div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_4_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_4_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_4_testo') ); ?></p>
    </div>
  </div>
</section>
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row">
<div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_4_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_4_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_4_testo') ); ?></p>
    </div>
  </div>
</section>
*/ ?>

<!-- Sezione box img dx -->
<section class="w-full lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_5_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_5_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_5_testo') ); ?></p>
    </div>
  </div>
</section>
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_5_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_5_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-4 lg:leading-8"><?php echo( get_field('box_5_testo') ); ?></p>
    </div>
  </div>
</section>
*/ ?>

<?php
  // Get the footer
  get_footer();