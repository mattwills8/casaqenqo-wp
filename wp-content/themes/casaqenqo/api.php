<?php

add_action( 'rest_api_init', 'create_api_posts_meta_field' );

function create_api_posts_meta_field() {

    // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field( 'post', 'post_meta_fields', array(
           'get_callback'    => 'get_post_meta_for_api',
           'schema'          => null,
        )
    );

    register_rest_field( 'page', 'post_meta_fields', array(
           'get_callback'    => 'get_post_meta_for_api',
           'schema'          => null,
        )
    );
}

function get_post_meta_for_api( $object ) {
    //get the id of the post object array
    $post_id = $object['id'];

    //return the post meta
    return get_post_meta( $post_id );
}

add_action( 'rest_api_init', 'create_api_posts_featured_images' );

function create_api_posts_featured_images() {

    // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field( 'post', 'featured_image', array(
           'get_callback'    => 'get_post_featured_image_for_api',
           'schema'          => null,
        )
    );

    register_rest_field( 'page', 'featured_image', array(
           'get_callback'    => 'get_post_featured_image_for_api',
           'schema'          => null,
        )
    );
}

function get_post_featured_image_for_api( $object ) {
    //get the id of the post object array
    $post_id = $object['id'];

    //return the post meta
    return get_the_post_thumbnail_url( $post_id, 'large');
}

?>
