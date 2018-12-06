<?php

function custom_theme_customizer($wp_customize){
    $wp_customize->add_panel('Home_Page_Panel', array(
        'title'             => __('Home Page' , 'forest-birdSummative-master'),
        'priority'          => 30,
        'description'       => 'This panel will hold the home page sections'
    ));

    $wp_customize->add_panel('Home_Page_Panel', array(
        'title'             => __('Home Page' , 'forest-birdSummative-master'),
        'priority'          => 30,
        'description'       => 'This panel will hold the home page sections'
    ));
     //Home Header Image section
    $wp_customize->add_section('home_header_image_section', array(
        'title'             => __('Header Image', 'forest-birdSummative-master'),
        'priority'          => 30,
        'panel'             => 'Home_Page_Panel'
    ));
     $wp_customize->add_setting('home_header_image_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'home_header_image_control',
           array(
               'label'      => __( 'Upload an image', 'forest-birdSummative-master' ),
               'section'    => 'home_header_image_section',
               'settings'   => 'home_header_image_setting'
           )
       )
   );
}

add_action('customize_register' , 'custom_theme_customizer');
