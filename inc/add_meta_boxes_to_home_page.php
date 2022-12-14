<?php

/**
 * Generated by the WordPress Meta Box Generator
 * https://jeremyhixon.com/tool/wordpress-meta-box-generator/
 * 
 * Retrieving the values:
 * Titolo primo box = get_post_meta( get_the_ID(), 'trebox_titolo-primo-box', true )
 * Testo primo box = get_post_meta( get_the_ID(), 'trebox_testo-primo-box', true )
 * Slug URL primo box = get_post_meta( get_the_ID(), 'trebox_slug-url-primo-box', true )
 * Titolo secondo box = get_post_meta( get_the_ID(), 'trebox_titolo-secondo-box', true )
 * Testo secondo box = get_post_meta( get_the_ID(), 'trebox_testo-secondo-box', true )
 * Slug URL secondo box = get_post_meta( get_the_ID(), 'trebox_slug-url-secondo-box', true )
 * Titolo terzo box = get_post_meta( get_the_ID(), 'trebox_titolo-terzo-box', true )
 * Testo terzo box box = get_post_meta( get_the_ID(), 'trebox_testo-terzo-box-box', true )
 * Slug URL terzo box = get_post_meta( get_the_ID(), 'trebox_slug-url-terzo-box', true )
 */
class Trebox {
	private $config = '{"title":"Box iniziali","description":"Inserisci i testi per popolare i tre box sotto lo slider.","prefix":"trebox_","domain":"trebox","class_name":"Trebox","post-type":["post","page"],"context":"normal","priority":"high","fields":[{"type":"text","label":"Titolo primo box","id":"trebox_titolo-primo-box"},{"type":"textarea","label":"Testo primo box","rows":"3","id":"trebox_testo-primo-box"},{"type":"text","label":"Slug URL primo box","id":"trebox_slug-url-primo-box"},{"type":"text","label":"Titolo secondo box","id":"trebox_titolo-secondo-box"},{"type":"textarea","label":"Testo secondo box","rows":"3","id":"trebox_testo-secondo-box"},{"type":"text","label":"Slug URL secondo box","id":"trebox_slug-url-secondo-box"},{"type":"text","label":"Titolo terzo box","id":"trebox_titolo-terzo-box"},{"type":"textarea","label":"Testo terzo box box","rows":"3","id":"trebox_testo-terzo-box"},{"type":"text","label":"Slug URL terzo box","id":"trebox_slug-url-terzo-box"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'admin_head', [ $this, 'admin_head' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function add_meta_boxes() {
        global $post;
        if ( $post->ID ==  17 ) {
            foreach ( $this->config['post-type'] as $screen ) {
                add_meta_box(
                    sanitize_title( $this->config['title'] ),
                    $this->config['title'],
                    [ $this, 'add_meta_box_callback' ],
                    $screen,
                    $this->config['context'],
                    $this->config['priority']
                );
            }
        }
	}

	public function admin_head() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			?><?php
		}
	}

	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		echo '<div class="rwp-description">' . $this->config['description'] . '</div>';
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			default:
				printf(
					'<label class="" for="%s">%s</label>',
					$field['id'], $field['label']
				);
		}
	}

	private function field( $field ) {
		switch ( $field['type'] ) {
			case 'textarea':
				$this->textarea( $field );
				break;
			default:
				$this->input( $field );
		}
	}

	private function input( $field ) {
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function textarea( $field ) {
		printf(
			'<textarea class="regular-text" id="%s" name="%s" rows="%d">%s</textarea>',
			$field['id'], $field['id'],
			isset( $field['rows'] ) ? $field['rows'] : 5,
			$this->value( $field )
		);
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Trebox;