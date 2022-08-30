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
                <h2 class="text-center text-white text-4xl lg:text-7xl font-light"><?php echo($meta['text']); ?></h2> 
               <?php } ?>
              <?php  if (is_array($meta) && isset($meta['button']) && strlen($meta['button'])>0 ){ ?>
                <div>
                  <a href="<?php echo('/' . $meta['slug']); ?>" class="mt-4 text-white text-xl hover:opacity-90 inline-block border border-white px-4 py-2">
                  <div class="flex flex-row gap-2 items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span><?php echo($meta['button']); ?></span>
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
<div class="w-full bg-white py-14">
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
            <span><?php echo( get_field('testo_bottone_fascia_1') ); ?></span>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-end">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_1') ); ?>">
  </div>
</div>

<!-- Primo banner -->
<section style="background-image: url(<?php echo( get_field('immagine_banner_1') ); ?>);" class="w-full flex items-center justify-center bg-fixed bg-center bg-cover my-8">
  <div class="max-w-7xl mx-auto px-4 py-36 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center"><?php echo( get_field('testo_banner_1') ); ?></h2>
  </div>
</section>

<!-- Seconda fascia -->

<!-- Secondo banner -->

<!-- Terza fascia -->


<!-- Three boxes -->
<?php
  $box1 = get_field('primo_box');
  $box2 = get_field('secondo_box');
  $box3 = get_field('terzo_box');
?>


<div class="hidden lg:block w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-3 gap-12">
      
     <div class="h-full w-full flex flex-col gap-4">
       <div class="flex-1">
        <div class="aspect-[14/9]">
          <img src="<?php echo $box1['immagine']; ?>" class="w-full h-full object-cover">
        </div>
        <div class="bg-white p-2 pt-4">
        <h2 class="text-maincolor text-xl text-center mb-4"><?php echo $box1['titolo']; ?></h2>
            <p class="flex-1 text-center lg:leading-7"><?php echo $box1['testo']; ?></p>
        </div>
       </div>
       <div class="flex justify-center">
            <a href="<?php echo $box1['url']; ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
              <div class="flex flex-row gap-2 items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="uppercase"><?php echo $box1['action']; ?></span>
              </div>
            </a>
          </div>
     </div>

     <div class="h-full w-full flex flex-col gap-4">
       <div class="flex-1">
        <div class="aspect-[14/9]">
          <img src="<?php echo $box2['immagine']; ?>" class="w-full h-full object-cover">
        </div>
        <div class="cbg-white p-2 pt-4">
        <h2 class="text-maincolor text-xl text-center mb-4"><?php echo $box2['titolo']; ?></h2>
            <p class="flex-1 text-center lg:leading-7"><?php echo $box2['testo']; ?></p>
        </div>
       </div>
       <div class="flex justify-center">
            <a href="<?php echo $box2['url']; ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
              <div class="flex flex-row gap-2 items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="uppercase"><?php echo $box2['action']; ?></span>
              </div>
            </a>
          </div>
     </div>

     <div class="h-full w-full flex flex-col gap-4">
       <div class="flex-1">
        <div class="aspect-[14/9]">
          <img src="<?php echo $box3['immagine']; ?>" class="w-full h-full object-cover">
        </div>
        <div class="bg-white p-2 pt-4">
        <h2 class="text-maincolor text-xl text-center mb-4"><?php echo $box3['titolo']; ?></h2>
            <p class="flex-1 text-center lg:leading-7"><?php echo $box3['testo']; ?></p>
        </div>
       </div>
       <div class="flex justify-center">
            <a href="<?php echo $box3['url']; ?>" class="inline-block bg-maincolor text-white hover:opacity-90 px-4 py-2">
              <div class="flex flex-row gap-2 items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="uppercase"><?php echo $box3['action']; ?></span>
              </div>
            </a>
          </div>
     </div>


    </div>
  </div>
</div>







<!-- Sezione ceramiche -->

<section style="background-image: url(<?php echo( get_field('sfondo_banner') ); ?>);"
  class="w-full flex items-center justify-center bg-fixed bg-center bg-cover mb-0 lg:mb-0"
>
  <div class="max-w-7xl mx-auto px-4 py-28 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center"><?php echo( get_field('banner_titolo') ); ?></h2>
    <hr class="border-2 border-white w-12">
    <h3 class="text-2xl text-white text-center mb-4 lg:mb-0"><?php echo( get_field('banner_sottotitolo') ); ?></h3>
    <p class="hidden lg:block text-white text-center lg:leading-7"><?php echo( get_field('banner_testo') ); ?></p>
    <a href="<?php echo( get_field('banner_url') ); ?>" class="hidden lg:flex bg-white text-maincolor hover:opacity-90 px-4 py-2">
      <div class="flex flex-row gap-2 items-center">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        <span><?php echo( get_field('banner_bottone') ); ?></span>
      </div>
    </a>
  </div>
</section>


<!-- Sezione ospitalità -->
<section class="w-full lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="lg:basis-1/2 aspect-[4/3] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_1_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_1_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_1_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_1_testo') ); ?></p>
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
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_1_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
      <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_1_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_1_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_1_testo') ); ?></p>
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
*/ ?>
<!-- Sezione itinerari -->
<section class="w-full lg:flex lg:flex-row">
  <div class="lg:basis-1/2 aspect-[4/3] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_2_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_2_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_2_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_2_testo') ); ?></p>
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
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_2_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_2_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_2_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_2_testo') ); ?></p>
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
*/ ?>

<!-- Sezione mare -->
<section class="w-full lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="lg:basis-1/2 aspect-[4/3] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_3_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_3_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_3_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_3_testo') ); ?></p>
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
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row lg:flex-row-reverse">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_3_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_3_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_3_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_3_testo') ); ?></p>
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
*/ ?>

<!-- Sezione enograstronomia -->
<section class="w-full lg:flex lg:flex-row">
  <div class="lg:basis-1/2 aspect-[4/3] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_4_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_4_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_4_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_4_testo') ); ?></p>
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
<?php /*
<section class="w-full grid grid-cols-1 grid-rows-29 lg:flex lg:flex-row">
  <div class="col-start-1 row-start-1 row-end-15 lg:basis-1/2 aspect-[21/9] lg:aspect-[4/3]">
    <img src="<?php echo( get_field('box_4_immagine') ); ?>" class="w-full h-full object-cover">
  </div>
  <div class="lg:basis-1/2 col-start-1 row-start-10 row-end-30 bg-white p-4 flex flex-col justify-center mx-4 lg:mx-0">
    <div class="lg:px-12">
    <h3 class="text-center lg:text-left text-gray-400 uppercase mb-2.5 text-base"><?php echo( get_field('box_4_occhiello') ); ?></h3>
      <h2 class="text-center lg:text-left text-maincolor mb-4 text-2xl lg:text-2xl"><?php echo( get_field('box_4_titolo') ); ?></h2>
      <p class="text-center lg:text-left lg:text-lg mb-6 lg:mb-8 lg:leading-8"><?php echo( get_field('box_4_testo') ); ?></p>
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
*/ ?>

<!-- Gallery -->
<?php
  $galleryLoop = new WP_Query(array(
    'post_type' => 'gallery',
    'posts_per_page' => '12',
    'post_status' => 'publish',
    'tax_query' => array(
      array(
          'taxonomy' => 'sezione',
          'field'    => 'slug',
          'terms'    => 'home',
      ),
    ),
  ));
?>
<?php if ($galleryLoop->have_posts()) { ?>
  <section class="w-full py-4">
  <h2 class="text-center text-maincolor mb-8 mt-0 lg:mt-12 text-4xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Galleria' : 'Gallery' ); ?></h2>
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

<!-- Mappa -->
<section class="w-full lg:flex lg:flex-row-reverse mt-12">
<div class="lg:basis-1/2 bg-maincolor p-12 lg:p-4 flex flex-col justify-center mx-0">
    <div class="lg:px-12">
      <h2 class="text-left text-white mb-4 text-2xl lg:text-3xl uppercase"><?php echo( get_field('mappa_titolo') ); ?></h2>
      <?php
        $auto_group = get_field('in_auto');
        $aereo_group = get_field('in_aereo');
        $treno_group = get_field('in_treno');
      ?>
      <p class="text-white text-left font-bold lg:text-lg"><?php echo($auto_group['titolo']); ?></p>
      <p class="text-white text-left lg:text-base mb-8 lg:leading-7"><?php echo($auto_group['testo']); ?></p>
      <p class="text-white text-left font-bold lg:text-lg"><?php echo($treno_group['titolo']); ?></p>
      <p class="text-white text-left lg:text-base mb-8 lg:leading-7"><?php echo($treno_group['testo']); ?></p>
      <p class="text-white text-left font-bold lg:text-lg"><?php echo($aereo_group['titolo']); ?></p>
      <p class="text-white text-left lg:text-base lg:leading-7"><?php echo($aereo_group['testo']); ?></p>
    </div>
  </div>
  <div class="lg:basis-1/2 aspect-[16/9] lg:aspect-[4/3]">
    <iframe src="<?php echo( get_field('mappa') ); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
  </div> 
</section>




<?php
  // Get the footer
  get_footer();

