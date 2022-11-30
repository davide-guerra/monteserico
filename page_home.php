<?php /* Template Name: Home page */ ?>

<?php
  // Get the header
  get_header();
?> 

<?php 
global $post;
$page_id = $post->ID;
?>

<!-- Add slider -->
<?php
  $sliderLoop = new WP_Query(array(
    'post_type' => 'home-slider',
    'posts_per_page' => '-1',
    'post_status' => 'publish'
  ));
?>
<?php if ($sliderLoop->have_posts()) { ?>
  <div class="splide" id="mainslider">
    <div class="splide__track">
      <ul class="splide__list">
        <?php while ( $sliderLoop->have_posts() ) { ?>
          <?php $sliderLoop->the_post(); ?>
          <li class="splide__slide relative">
              <?php
              // Get data from this slide
              $meta = get_post_meta( $post->ID, 'slider_fields', true );
              ?>
              <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="w-full h-[100vh] lg:h-[100vh] object-cover brightness-75"/>
              <?php if ( strlen($meta['text'])>0 || strlen($meta['button'])>0 ) { ?>
              <div class="p-8 absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-2/4 w-3/4 flex flex-col items-center">
              <?php  if (is_array($meta) && isset($meta['text']) && strlen($meta['text'])>0 ){ ?>
                <h2 class="text-center text-white text-4xl xl:text-7xl font-light font-serif"><?php echo($meta['text']); ?></h2> 
               <?php } ?>
              <?php  if (is_array($meta) && isset($meta['button']) && strlen($meta['button'])>0 ){ ?>
                <div>
                  <a href="<?php echo('/' . $meta['slug']); ?>" class="mt-12 text-white text-xl hover:opacity-90 inline-block border border-white px-4 py-2">
                  <div class="flex flex-row gap-2 items-center">
                    <span class="font-light"><?php echo($meta['button']); ?></span>
                  </div>
                  </a>
                </div>
              <?php } ?>
              </div>
              <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php } ?> 
<?php 
  wp_reset_postdata();
?>   


<!-- Prima fascia -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <?php if( !empty(get_field('titolo_fascia_1')) ) { ?>
      <h2 class="font-serif text-oro text-5xl font-bold"><?php echo( get_field('titolo_fascia_1') ); ?></h2>
    <?php } ?>
    <?php if( !empty(get_field('sottotitolo_fascia_1')) ) { ?>
      <h3 class="font-serif text-oro text-3xl font-bold my-4"><?php echo( get_field('sottotitolo_fascia_1') ); ?></h3>
    <?php } ?>
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_1') ); ?>">
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <p><?php echo( get_field('testo_fascia_1') ); ?></p>
        <div>
          <a href="<?php echo( get_field('link_bottone_fascia_1') ); ?>" class="hover:opacity-90 inline-block border border-current px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <span class="font-light"><?php echo( get_field('testo_bottone_fascia_1') ); ?></span>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-end">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_1') ); ?>">
    </div>
  </div>
</section>

<!-- Primo banner -->
<section id="banner-section" style="background-image: url(<?php echo( get_field('immagine_banner_1') ); ?>);" class="w-full flex items-center justify-center bg-fixed bg-center bg-contain my-8">
  <div class="max-w-7xl mx-auto px-4 py-36 lg:py-52 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center font-serif"><?php echo( get_field('testo_banner_1') ); ?></h2>
  </div>
</section>

<!-- Seconda fascia -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <div>
        <?php if( !empty(get_field('titolo_fascia_2')) ) { ?>
          <h2 class="font-serif text-oro text-5xl font-bold mb-4"><?php echo( get_field('titolo_fascia_2') ); ?></h2>
        <?php } ?>
        <?php if( !empty(get_field('sottotitolo_fascia_2')) ) { ?>
          <h3 class="font-serif text-oro text-3xl font-bold mb-4"><?php echo( get_field('sottotitolo_fascia_2') ); ?></h3>
        <?php } ?>
          <p><?php echo( get_field('testo_fascia_2') ); ?></p>
          <a href="<?php echo( get_field('link_bottone_fascia_2') ); ?>" class="hover:opacity-90 inline-block border border-current px-4 py-2 my-4">
            <div class="flex flex-row gap-2 items-center">
              <span class="font-light"><?php echo( get_field('testo_bottone_fascia_2') ); ?></span>
            </div>
          </a>
      </div>
      <div class="mt-4 lg:mt-0">
        <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_2') ); ?>">
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-start">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_2') ); ?>">
    </div>
    <div class="w-full mt-4">
      <?php if( !empty(get_field('secondo_sottotitolo_fascia_3')) ) { ?>
        <h3 class="font-serif text-oro text-3xl font-bold mb-4"><?php echo( get_field('secondo_sottotitolo_fascia_3') ); ?></h3>
      <?php } ?>
      <?php if( !empty(get_field('secondo_testo_fascia_3')) ) { ?>
        <p><?php echo( get_field('secondo_testo_fascia_3') ); ?></p>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Secondo banner -->
<section id="banner-section-2" style="background-image: url(<?php echo( get_field('immagine_banner_2') ); ?>);" class="w-full flex items-center justify-center bg-fixed bg-center bg-contain my-8" style="-webkit-background-size: cover;">
  <div class="max-w-7xl mx-auto px-4 py-36 lg:py-52 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center font-serif"><?php echo( get_field('testo_banner_2') ); ?></h2>
  </div>
</section>

<!-- Terza fascia -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <?php if( !empty(get_field('titolo_fascia_3')) ) { ?>
      <h2 class="font-serif text-oro text-5xl font-bold mb-4"><?php echo( get_field('titolo_fascia_3') ); ?></h2>
    <?php } ?>
    <?php if( !empty(get_field('sottotitolo_fascia_3')) ) { ?>
      <h3 class="font-serif text-oro text-3xl font-bold mb-4"><?php echo( get_field('sottotitolo_fascia_3') ); ?></h3>
    <?php } ?>
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_3') ); ?>">
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <p><?php echo( get_field('testo_fascia_3') ); ?></p>
        <div>
          <a href="<?php echo( get_field('link_bottone_fascia_3') ); ?>" class="hover:opacity-90 inline-block border border-current px-4 py-2">
          <div class="flex flex-row gap-2 items-center">
            <span class="font-light"><?php echo( get_field('testo_bottone_fascia_3') ); ?></span>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-end">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_3') ); ?>">
    </div>
  </div>
</section>

<?php
  // Get the footer
  get_footer();

