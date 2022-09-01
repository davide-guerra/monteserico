<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

  // Get the header
  get_header();
?> 
<?php 
global $post;
$page_id = $post->ID;
?>

<?php
  // Get the most recent home slide. It will be used as featured image for this page.
  $sliderLoop = new WP_Query(array(
    'post_type' => 'home-slider',
    'posts_per_page' => '1',
    'post_status' => 'publish'
  ));
?>


<!-- Title and breadcrumbs area -->
<section class="w-full">
    <div class="w-full relative aspect-[16/9] md:aspect-[7/3] 2xl:aspect-[7/2]">
      <?php if ($sliderLoop->have_posts()) { ?>
        <?php while ( $sliderLoop->have_posts() ) { ?>
          <?php $sliderLoop->the_post(); ?>
          <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="w-full h-full object-cover brightness-75">
        <?php } ?>
      <?php } ?>
      <?php 
        wp_reset_postdata();
      ?> 
      <div class="absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-2/4 flex flex-col gap-4 z-10">
          <h2 class="text-center text-white text-2xl lg:text-4xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'ERRORE 404' : 'ERROR 404' ); ?></h2>
      </div>
    </div>
</section>


<!-- Sezione full-width senza sfondo -->
<section class="max-w-7xl mx-auto px-4 py-12">

    <h2 class="text-center text-xl lg:text-3xl"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Questa pagina non esiste!' : 'This page does not exist!' ); ?></h2>
</section>




<?php
  // Get the footer
  get_footer();