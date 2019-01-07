<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_name_page_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'page',
        'numberposts' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select page --', 'theme_name')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}
