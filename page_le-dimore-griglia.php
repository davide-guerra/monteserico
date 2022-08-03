	
<?php /* Template Name: Le dimore (griglia) */ ?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-trulli.jpg" class="w-full h-full object-cover brightness-75">
        <div class="absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-2/4 flex flex-col gap-4 ">
            <h2 class="text-center text-white text-2xl lg:text-4xl"><?php the_title(); ?></h2>
            <p class="text-center text-white"><a href="/" class="hover:opacity-90">Home</a> > <?php the_title(); ?></p>
        </div>
    </div>
</section>
<section class="w-full py-12 px-12">
    <h2 class="text-center text-xl lg:text-3xl">Uno scrigno prezioso al centro della Valle d'Itria.</h2>
    <h2 class="text-center text-xl lg:text-3xl">Scoperto e custodito da Don Mimì, il Professore, e dalla sua adoratissima Alba.</h2>
    <h2 class="text-center text-xl lg:text-3xl">Un luogo unico, in cui respirare con raffinata semplicità.</h2>
</section>

<!-- Immagine L larga verso destra -->
<section class="w-full my-12">
    <div class="lg:grid lg:grid-cols-8 lg:grid-rows-6">
        <!-- Immagine -->
        <div class="lg:col-start-4 lg:col-end-9 lg:row-start-1 lg:row-end-7">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-trulli.jpg" class="w-full h-full object-cover">
        </div>
        <div class="lg:col-start-1 lg:col-end-5 lg:row-start-2 lg:row-end-7 lg:z-10 bg-white lg:flex lg:justify-end">
            <p class="mt-8 mx-8 lg:max-w-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores!</p>
        </div>
    </div>
</section>


<!-- Immagine L larga verso sinistra -->
<section class="w-full my-12">
    <div class="lg:grid lg:grid-cols-8 lg:grid-rows-6">
        <!-- Immagine -->
        <div class="lg:col-start-1 lg:col-end-5 lg:row-start-1 lg:row-end-7">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-trulli.jpg" class="w-full h-full object-cover">
        </div>
        <div class="lg:col-start-4 lg:col-end-9 lg:row-start-3 lg:row-end-7 lg:z-10 bg-white lg:flex lg:justify-start">
            <p class="mt-8 mx-8 max-w-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores!</p>
        </div>
    </div>
</section>

<!-- Immagine L stretta verso destra -->
<section class="lg:max-w-4xl mx-auto my-12">
    <div class="lg:grid lg:grid-cols-7 lg:grid-rows-11 lg:auto-rows-fr">
        <!-- Immagine -->
        <div class="lg:col-start-2 lg:col-end-8 lg:row-start-2 lg:row-end-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-trulli.jpg" class="w-full h-full object-cover">
        </div>
        <div class="lg:col-start-1 lg:col-end-5 lg:row-start-1 lg:row-end-9 lg:z-10 bg-white lg:flex lg:justify-end">
            <p class="mt-8 lg:mt-0 mx-4 mb-4 max-w-4xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores!</p>
        </div>
    </div>
</section>

<!-- Immagine L stretta verso sinistra -->
<section class="lg:max-w-4xl mx-auto my-12">
    <div class="lg:grid lg:grid-cols-7 lg:grid-rows-11 lg:auto-rows-fr">
        <!-- Immagine -->
        <div class="lg:col-start-1 lg:col-end-7 lg:row-start-1 lg:row-end-11">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-trulli.jpg" class="w-full h-full object-cover">
        </div>
        <div class="lg:col-start-4 lg:col-end-8 lg:row-start-4 lg:row-end-12 lg:z-10 bg-white lg:flex lg:justify-end">
            <p class="mt-8 lg:mt-0 mx-4 mb-4 max-w-4xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam adipisci nobis illum nam amet! Laborum delectus facilis mollitia sapiente vero perferendis excepturi id quis neque, quas eius nesciunt dolores!</p>
        </div>
    </div>
</section>






<?php
  // Get the footer
  get_footer();