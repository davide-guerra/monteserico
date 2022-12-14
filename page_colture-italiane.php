<?php /* Template Name: Colture italiane */ ?>
<?php
  // Get the header
  get_header();
?> 
<?php 
global $post;
$page_id = $post->ID;
?>
<!-- Add style for slider -->
<style>
    ul.splide__list {
        gap: 1rem;
    }
    li.splide__slide {
        opacity: .1;
    }
    li.splide__slide.is-active {
        opacity: 1;
		cursor: pointer;
    }
    .splide__arrow {
        position: unset;
        transform: translateY(0px);
        background: none;
    }
    .splide__arrows {
        margin-left: calc(40vw + 1rem);
        margin-right: calc(15vw - 1rem);
        display: flex;
        justify-content: space-between;
    }
    .splide__arrow--prev svg {
        transform: unset;
    }
</style>
<!-- Title and breadcrumbs area -->
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

<!-- Prima sezione -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-8">
      <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_1') ); ?>">
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <h2 class="font-serif text-oro text-5xl font-bold"><?php echo( get_field('titolo_fascia_1') ); ?></h2>
        <p><?php echo( get_field('testo_fascia_1') ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Seconda sezione: Slider -->
<section class="w-full bg-white py-14">
  <div class="max-w-full my-0 mx-auto relative">
    <div class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list" id="colture-slider">
                <?php if ( !empty( get_field('slide_1') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_1') ); ?>"><img src="<?php echo( get_field('slide_1') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_2') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_2') ); ?>"><img src="<?php echo( get_field('slide_2') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_3') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_3') ); ?>"><img src="<?php echo( get_field('slide_3') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_4') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_4') ); ?>"><img src="<?php echo( get_field('slide_4') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_5') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_5') ); ?>"><img src="<?php echo( get_field('slide_5') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_6') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_6') ); ?>"><img src="<?php echo( get_field('slide_6') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_7') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_7') ); ?>"><img src="<?php echo( get_field('slide_7') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_8') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_8') ); ?>"><img src="<?php echo( get_field('slide_8') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_9') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_9') ); ?>"><img src="<?php echo( get_field('slide_9') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
                <?php if ( !empty( get_field('slide_10') ) ) { ?>
                  <li class="splide__slide" data-src="<?php echo( get_field('slide_10') ); ?>"><img src="<?php echo( get_field('slide_10') ); ?>" class="aspect-video object-cover w-full"></li>
                <?php } ?>
            </ul>
        </div>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-6 h-6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 19-7-7m0 0 7-7m-7 7h18"/></svg>
            </button>
            <button class="splide__arrow splide__arrow--next">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
      </div>
    </div>
    <div class="relative px-4 2xl:absolute 2xl:left-[17vw] 2xl:top-4 2xl:px-0 max-w-7xl mx-auto px-4">
      <div class="w-full 2xl:w-[20vw]">
        <h2 class="font-serif text-oro text-5xl font-bold mb-4"><?php echo( get_field('titolo_slider') ); ?></h2>
        <?php echo( get_field('testo_slider') ); ?>
      </div>
    </div>
  </div>
</section>

<!-- Import Slide JS cdn -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js" integrity="sha256-esNVkEwsSpRc+USDUy7gWsyTZprX+CtOFMUgVq9JYnE=" crossorigin="anonymous"></script>
<script>
  var splide = new Splide( '.splide', {
  type   : 'loop',
  padding: { left: '40vw', right: '15vw' },
  //perPage: 1,
  /* focus  : 'center', */
  pagination: false,
  updateOnMove: true,
  clones: 10,
} );

splide.mount();
</script>

<!-- Import LightGallery JS from cdn -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js" integrity="sha256-0Zhc9IDI5elFpwJZlvdAM4u/6qlxi4qIOUlHDVl5wjU=" crossorigin="anonymous"></script>
<script>
    lightGallery(document.getElementById('colture-slider'), {
        download: false,
        counter: false,
    });
</script>
<!-- Banner -->
<section id="banner-section" style="background-image: url(<?php echo( get_field('immagine_banner_1') ); ?>);" class="w-full flex items-center justify-center bg-fixed bg-center bg-cover my-8">
  <div class="max-w-7xl mx-auto px-4 py-36 lg:py-52 flex flex-col gap-8 items-center col-start-1 row-start-1 row-end-15 lg:row-end-1">
    <h2 class="text-4xl lg:text-6xl text-white text-center font-serif"><?php echo( get_field('testo_banner_1') ); ?></h2>
  </div>
</section>

<!-- Terza sezione -->
<section class="w-full bg-white py-14">
  <div class="max-w-7xl mx-auto px-4">
    <div class="w-full lg:grid lg:grid-cols-2 gap-0">
      <div class="flex flex-col gap-4">
        <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_3') ); ?>">
      </div>
      <div class="mt-4 lg:mt-0 flex flex-col gap-4">
        <?php if ( !empty( get_field('titolo_fascia_3') ) ) { ?>
          <h2 class="font-serif text-oro text-5xl font-bold ml-0 lg:ml-8"><?php echo( get_field('titolo_fascia_3') ); ?></h2>
        <?php } ?>
        <p class="mt0 ml-0 lg:ml-8"><?php echo( get_field('testo_fascia_3') ); ?></p>
      </div>
    </div>
    <div class="w-full lg:grid lg:grid-cols-2 gap-0">
        <div class="mt-4 lg:mt-0 flex flex-col gap-4">
          <?php if ( !empty( get_field('titolo_fascia_3') ) ) { ?>
            <h2 class="font-serif text-oro text-5xl font-bold ml-0 lg:mt-4"><?php echo( get_field('titolo_fascia_4') ); ?></h2>
          <?php } ?>
            <p class="mt-0 mb-4 lg:mb-0 mr-0 lg:mr-8"><?php echo( get_field('testo_fascia_4') ); ?></p>
      </div>
      <div class="flex flex-col gap-4">
        <img class="w-full" src="<?php echo( get_field('immagine_piccola_fascia_4') ); ?>">
      </div>
    </div>
    <div class="w-full mt-4 lg:mt-0 lg:flex lg:flex-col lg:items-start">
      <img class="w-full lg:w-9/12" src="<?php echo( get_field('immagine_grande_fascia_3') ); ?>">
    </div>
  </div>
</section>


<?php
  // Get the footer
  get_footer();