<?php

function gallery_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Sezione', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Sezione', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Cerca sezione', 'textdomain' ),
        'popular_items'              => __( 'Sezioni più usate', 'textdomain' ),
        'all_items'                  => __( 'Tutte le sezioni', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Modifica sezione', 'textdomain' ),
        'update_item'                => __( 'Aggiorna sezione', 'textdomain' ),
        'add_new_item'               => __( 'Aggiungi sezione', 'textdomain' ),
        'new_item_name'              => __( 'Nuovo nome', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separa le sezioni con la virgola', 'textdomain' ),
        'add_or_remove_items'        => __( 'Aggiungi o rimuovi sezioni', 'textdomain' ),
        'choose_from_most_used'      => __( 'Scegli tra le sezioni più usate', 'textdomain' ),
        'not_found'                  => __( 'Nessuna sezione trovata.', 'textdomain' ),
        'menu_name'                  => __( 'Sezioni', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'sezione' ),
    );
 
    register_taxonomy( 'sezione', 'gallery', $args );
}
add_action( 'init', 'gallery_taxonomy');

function gallery_init() {
    $labels = array(
        'name' => 'Gallery',
        'singular_name' => 'Immagine gallery',
        'add_new_item' => 'Aggiungi immagine gallery',
        'edit_item' => 'Modifica immagine',
        'add_new' => 'Aggiungi immagine',
        'new_item' => 'Nuova immagine gallery',
        'view_item' => 'Vedi immagine',
        'all_items' => 'Lista immagini',
        'search_items' => 'Cerca immagine gallery',
        'not_found' => 'Non è presente alcuna immagine',
        'not_found_in_trash' => 'Non ci sono immagini nel cestino'
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'menu_icon'   => 'dashicons-format-gallery',
        'supports' => array('thumbnail', 'custom-fields'),
        'taxonomies' => array( 'sezione')
    );

    register_post_type( 'gallery', $args );
}
add_action( 'init', 'gallery_init' );


function add_gallery_fields_meta_box() {
    add_meta_box(
        'gallery_fields_meta_box', // $id
        'Testo slide', // $title
        'show_gallery_fields_meta_box', // $callback
        'gallery', // $screen
        'normal', // $context
        'high' // $priority
    );
}
add_action( 'add_meta_boxes', 'add_gallery_fields_meta_box' );

function show_gallery_fields_meta_box() {
    	global $post;
    	$meta = get_post_meta( $post->ID, 'gallery_fields', true );
        ?>

    	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

        <p>
    	<label for="gallery_fields[title]">Titolo immagine</label>
    	<br>
    	<input type="text" name="gallery_fields[title]" id="gallery_fields[title]" class="regular-text" placeholder="Inserisci una titolo per questa immagine." value="<?php  if (is_array($meta) && isset($meta['title'])){ echo $meta['title']; } ?>">
    </p>

        <p>
    	<label for="gallery_fields[text]">Descrizione immagine</label>
    	<br>
    	<input type="text" name="gallery_fields[text]" id="gallery_fields[text]" class="regular-text" placeholder="Inserisci una descrizione breve per questa immagine." value="<?php  if (is_array($meta) && isset($meta['text'])){ echo $meta['text']; } ?>">
    </p>
    	<?php }

function save_gallery_fields_meta( $post_id ) {
    	// verify nonce
    	if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'page' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	$old = get_post_meta( $post_id, 'gallery_fields', true );
    	$new = $_POST['gallery_fields'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'gallery_fields', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'gallery_fields', $old );
    	}
    }
    add_action( 'save_post', 'save_gallery_fields_meta' );

/**
 * Modify which columns display when the admin views a list of home-slider posts.
 */
function gallery_headerimage_posts_columns( $posts_columns ) {
    $tmp = array();

    foreach( $posts_columns as $key => $value ) {
        if( $key == 'title' ) {
            $tmp['gallery'] = 'Lista immagini';
        } else {
            $tmp[$key] = $value;
        }
    }

    return $tmp;
}
add_filter( 'manage_gallery_posts_columns', 'gallery_headerimage_posts_columns' );

/**
 * Custom column output when admin is view the home-slider post list.
 */
function gallery_headerimage_custom_column( $column_name ) {
    global $post;

    if( $column_name == 'gallery' ) {
        echo "<a href='", get_edit_post_link( $post->ID ), "'>", get_the_post_thumbnail( $post->ID ), "</a>";
    }
}
add_action( 'manage_posts_custom_column', 'gallery_headerimage_custom_column' );

/**
 * Make the "Featured Image" metabox front and center when editing a home-slider post.
 */
function gallery_headerimage_metaboxes( $post ) {
    global $wp_meta_boxes;

    remove_meta_box('postimagediv', 'gallery', 'side');
    add_meta_box('postimagediv', __('Seleziona l\'immagine'), 'post_thumbnail_meta_box', 'gallery', 'normal', 'high');
}
add_action( 'add_meta_boxes_gallery', 'gallery_headerimage_metaboxes' );

/**
 * Enable thumbnail support in the theme, and set the thumbnail size.
 */
function gallery_after_setup() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(150, 100, true);
}
add_action( 'after_setup_theme', 'gallery_after_setup' );