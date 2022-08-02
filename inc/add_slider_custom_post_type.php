<?php

function trulli_init() {
    $labels = array(
        'name' => 'Slider Home',
        'singular_name' => 'Immagine slide',
        'add_new_item' => 'Aggiungi una slide',
        'edit_item' => 'Modifica una slide',
        'add_new' => 'Aggiungi immagine',
        'new_item' => 'Nuova slide',
        'view_item' => 'Vedi slide',
        'all_items' => 'Lista immagini',
        'search_items' => 'Cerca slide',
        'not_found' => 'Non è presente alcuna slide',
        'not_found_in_trash' => 'Non ci sono slide nel cestino'
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'menu_icon'   => 'dashicons-video-alt3',
        'supports' => array('thumbnail', 'custom-fields')
    );

    register_post_type( 'home-slider', $args );
}
add_action( 'init', 'trulli_init' );


function add_slider_fields_meta_box() {
    	add_meta_box(
    		'slider_fields_meta_box', // $id
    		'Testo slide', // $title
    		'show_slider_fields_meta_box', // $callback
    		'home-slider', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_slider_fields_meta_box' );

function show_slider_fields_meta_box() {
    	global $post;
    		$meta = get_post_meta( $post->ID, 'slider_fields', true ); ?>

    	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

        <p>
    	<label for="slider_fields[text]">Testo slide</label>
    	<br>
    	<input type="text" name="slider_fields[text]" id="slider_fields[text]" class="regular-text" placeholder="Inserisci il testo per questa slide." value="<?php  if (is_array($meta) && isset($meta['text'])){ echo $meta['text']; } ?>">
    </p>
<p>
    	<label for="slider_fields[button]">Testo bottone</label>
    	<br>
    	<input type="text" name="slider_fields[button]" id="slider_fields[button]" class="regular-text" placeholder="Inserisci il testo per una call to action." value="<?php  if (is_array($meta) && isset($meta['button'])){ echo $meta['button']; } ?>">
    </p>
    <p>
    	<label for="slider_fields[slug]">Slug URL bottone</label>
    	<br>
    	<input type="text" name="slider_fields[slug]" id="slider_fields[slug]" class="regular-text" placeholder="Inserisci lo slug del link al quale deve puntare il bottone." value="<?php  if (is_array($meta) && isset($meta['slug'])){ echo $meta['slug']; } ?>">
    </p>
    	<?php }

function save_slider_fields_meta( $post_id ) {
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

    	$old = get_post_meta( $post_id, 'slider_fields', true );
    	$new = $_POST['slider_fields'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'slider_fields', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'slider_fields', $old );
    	}
    }
    add_action( 'save_post', 'save_slider_fields_meta' );

/**
 * Modify which columns display when the admin views a list of home-slider posts.
 */
function trulli_headerimage_posts_columns( $posts_columns ) {
    $tmp = array();

    foreach( $posts_columns as $key => $value ) {
        if( $key == 'title' ) {
            $tmp['home-slider'] = 'Lista immagini';
        } else {
            $tmp[$key] = $value;
        }
    }

    return $tmp;
}
add_filter( 'manage_home-slider_posts_columns', 'trulli_headerimage_posts_columns' );

/**
 * Custom column output when admin is view the home-slider post list.
 */
function trulli_headerimage_custom_column( $column_name ) {
    global $post;

    if( $column_name == 'home-slider' ) {
        echo "<a href='", get_edit_post_link( $post->ID ), "'>", get_the_post_thumbnail( $post->ID ), "</a>";
    }
}
add_action( 'manage_posts_custom_column', 'trulli_headerimage_custom_column' );

/**
 * Make the "Featured Image" metabox front and center when editing a home-slider post.
 */
function trulli_headerimage_metaboxes( $post ) {
    global $wp_meta_boxes;

    remove_meta_box('postimagediv', 'home-slider', 'side');
    add_meta_box('postimagediv', __('Seleziona l\'immagine'), 'post_thumbnail_meta_box', 'home-slider', 'normal', 'high');
}
add_action( 'add_meta_boxes_home-slider', 'trulli_headerimage_metaboxes' );

/**
 * Enable thumbnail support in the theme, and set the thumbnail size.
 */
function trulli_after_setup() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(150, 100, true);
}
add_action( 'after_setup_theme', 'trulli_after_setup' );