<?php

function theme_name_shortcode_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_shortcode_options', 'theme_name_shortcode_options' );

function theme_name_customize_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_customize_options', 'theme_name_customize_options' );

function theme_name_framework_settings( $settings ) {
  
    $settings = array();    

    $settings           = array(
      'menu_title'      => esc_html__('Theme Options', 'theme_name'),
      'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
      'menu_slug'       => 'ppm-theme-options',
      'ajax_save'       => true,
      'show_reset_all'  => true,
      'framework_title' => esc_html__('Theme Options', 'theme_name'),
    );    


    return $settings;

}
add_filter( 'cs_framework_settings', 'theme_name_framework_settings' );

function theme_name_framework_options( $options ) {

    $options      = array(); // remove old options
    
    $options[]    = array(
        'name'      => 'general',
        'title'     => esc_html__('General Settings', 'theme_name'),
        'icon'      => 'fa fa-cog',
        'fields'    => array(
			array(
				'id'              => 'socials',
				'type'            => 'group',
				'title'           => 'Social Links',
				'button_title'    => 'Add New Link',
				'accordion_title' => 'Add New',
				'fields'          => array(
					array(
						'id'    => 'icon',
						'type'  => 'icon',
						'title' => 'Select icon',
					),
					array(
						'id'    => 'link',
						'type'  => 'text',
						'title' => 'Link',
						'desc'  => esc_html__('Type social link', 'theme_name'),
					),
				),
			),

        )
    );

    $options[]    = array(
        'name'      => 'backup',
        'title'     => esc_html__('Backup', 'theme_name'),
        'icon'      => 'fa fa-shield',
        'fields'    => array(
			array(
				'id'              => 'backup',
				'type'            => 'backup',
				'title'           => 'Backup',
			),

        )
    );
    
    
  	return $options;

}
add_filter( 'cs_framework_options', 'theme_name_framework_options' );

function theme_name_metabox_options( $options ) {

    $options      = array();

    $options[]    = array(
        'id'        => 'theme_name_page_options',
        'title'     => esc_html__('Page Options', 'theme_name'),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'theme_name_page_meta_1',
                'fields' => array(
                    array(
                        'id'    => 'page_alternative_title',
                        'type'  => 'text',
                        'title' => esc_html__('Page alternative title', 'theme_name'),
                    )
                )
            )
        )
    );

    return $options;

}
add_filter( 'cs_metabox_options', 'theme_name_metabox_options' );