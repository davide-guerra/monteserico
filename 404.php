<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

  // Get the header
  get_header( 'fixed' );
?> 
<?php 
global $post;
$page_id = $post->ID;
?>

<!-- Sezione full-width senza sfondo -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-center mb-8 mt-12 text-2xl lg:text-4xl font-bold">ERROR 404</h2>
    <h2 class="text-center text-xl lg:text-3xl">Not found!</h2>
</section>




<?php
  // Get the footer
  get_footer();