	
<?php /* Template Name: Gallery */ ?>
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
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-maincolor text-center mt-12 text-2xl lg:text-4xl lg:leading-[3rem]"><?php echo( (ICL_LANGUAGE_CODE == 'it') ? 'Galleria' : 'Gallery' ); ?></h2>
</section>
<!-- Gallery -->
<?php
  $galleryLoop = new WP_Query(array(
    'post_type' => 'gallery',
    'posts_per_page' => '-1',
    'post_status' => 'publish'
  ));
?>
<?php if ($galleryLoop->have_posts()) { ?>
  <section class="w-full py-12">
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