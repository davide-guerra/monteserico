<?php /* Template Name: Il territorio */ ?>
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
    }
    .splide__arrow {
        position: unset;
        transform: translateY(0px);
        background: none;
    }
    .splide__arrows {
        margin-left: calc(30vw + 1rem);
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

<section class="w-full bg-white py-14">
  <div class="max-w-full my-0 mx-auto relative">
    <div class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo( get_field('slide_1') ); ?>" class="aspect-video object-cover"></li>
                <li class="splide__slide"><img src="<?php echo( get_field('slide_2') ); ?>" class="aspect-video object-cover"></li>
                <li class="splide__slide"><img src="<?php echo( get_field('slide_3') ); ?>" class="aspect-video object-cover"></li>
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
    <div class="relative lg:absolute left-4 top-4 w-[20vw]">
      <?php echo( get_field('testo_slider') ); ?>
    </div>
  </div>
</section>

<!-- Import Slide JS cdn -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js" integrity="sha256-esNVkEwsSpRc+USDUy7gWsyTZprX+CtOFMUgVq9JYnE=" crossorigin="anonymous"></script>
<script>
  var splide = new Splide( '.splide', {
  type   : 'loop',
  padding: { left: '30vw', right: '15vw' },
  //perPage: 1,
  /* focus  : 'center', */
  pagination: false,
  updateOnMove: true,
} );

splide.mount();
</script>
<?php
  // Get the footer
  get_footer();