<?php /* Template Name: Il borgo */ ?>
<?php
  // Get the header
  get_header();
?> 
<?php 
global $post;
$page_id = $post->ID;
?>
<section class="w-full">
    <div class="w-full relative aspect-[21/9] lg:aspect-[21/3]">
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

<!-- Sezione full-width con sfondo blu -->
<section class="w-full bg-maincolor">
  <div class="max-w-7xl mx-auto px-4 py-12">
      <h2 class="text-center mb4 mt-12 text-white text-xl lg:text-3xl"><?php echo( get_field('titolo') ); ?></h2>
      <h2 class="text-center mb4 text-white text-lg lg:text-xl"><?php echo( get_field('sottotitolo') ); ?></h2>
      <h2 class="text-center mb4 text-white text-base"><?php echo( get_field('testo') ); ?></h2>
  </div>
</section>
<!-- Sezione box img dx -->
<section class="w-full grid grid-cols-1 grid-rows-2 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_1_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-3xl"><?php echo( get_field('box_1_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-xl mb-4"><?php echo( get_field('box_1_testo') ); ?></p>
      <div class="flex justify-center lg:justify-start mb-12 lg:mb-0">
        <a href="<?php echo( get_field('box_1_url') ); ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span><?php echo( get_field('box_1_bottone') ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sezione box img sx -->
<section class="w-full grid grid-cols-1 grid-rows-2 lg:flex lg:flex-row">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_2_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-3xl"><?php echo( get_field('box_2_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-xl mb-4"><?php echo( get_field('box_2_testo') ); ?></p>
      <div class="flex justify-center lg:justify-start mb-12 lg:mb-0">
        <a href="<?php echo( get_field('box_2_url') ); ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span><?php echo( get_field('box_2_bottone') ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sezione box img dx -->
<section class="w-full grid grid-cols-1 grid-rows-2 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_3_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-3xl"><?php echo( get_field('box_3_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-xl mb-4"><?php echo( get_field('box_3_testo') ); ?></p>
      <div class="flex justify-center lg:justify-start mb-12 lg:mb-0">
        <a href="<?php echo( get_field('box_3_url') ); ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span><?php echo( get_field('box_3_bottone') ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sezione box img sx -->
<section class="w-full grid grid-cols-1 grid-rows-2 lg:flex lg:flex-row">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_4_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-3xl"><?php echo( get_field('box_4_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-xl mb-4"><?php echo( get_field('box_4_testo') ); ?></p>
      <div class="flex justify-center lg:justify-start mb-12 lg:mb-0">
        <a href="<?php echo( get_field('box_4_url') ); ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span><?php echo( get_field('box_4_bottone') ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sezione box img dx -->
<section class="w-full grid grid-cols-1 grid-rows-2 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_5_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-3xl"><?php echo( get_field('box_5_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-xl mb-4"><?php echo( get_field('box_5_testo') ); ?></p>
      <div class="flex justify-center lg:justify-start mb-12 lg:mb-0">
        <a href="<?php echo( get_field('box_5_url') ); ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span><?php echo( get_field('box_5_bottone') ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Gallery -->
<?php
  $galleryLoop = new WP_Query(array(
    'post_type' => 'gallery',
    'posts_per_page' => '12',
    'post_status' => 'publish'
  ));
?>
<?php if ($galleryLoop->have_posts()) { ?>
  <section class="w-full">
  <h2 class="text-center text-maincolor mb-8 mt-12 text-2xl lg:text-4xl">Gallery</h2>
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mx-4" id="home-gallery">
  <?php while ( $galleryLoop->have_posts() ) { ?>
    <?php $galleryLoop->the_post(); ?>
    <a href="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="hover:opacity-90"
      <?php $meta = get_post_meta( $post->ID, 'gallery_fields', true ); ?>
      <?php if ( strlen($meta['text'])>0 || strlen($meta['title'])>0 ) { ?>
        data-sub-html="<h4><?php echo $meta['title']; ?></h4><p><?php echo $meta['text']; ?></p>"
      <?php } ?>
    >
      <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="w-full h-full object-cover aspect-[16/9]">
    </a>
  <?php } ?>
</div>
</section>
<?php } ?>
<?php 
  wp_reset_postdata();
?> 

<?php
  // Get the footer
  get_footer();