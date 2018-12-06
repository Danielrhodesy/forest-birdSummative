<?php

function custom_theme_customizer($wp_customize){
      $wp_customize->add_panel('Shop_Page_Panel', array(
        'title'             => __('Shop Page' , 'forest&birdSummative'),
        'priority'          => 30,
        'description'       => 'This panel will hold the shop page sections'
    ));
     //Shop Header Image section
    $wp_customize->add_section('shop_header_image_section', array(
        'title'             => __('Header Image', 'forest&birdSummative'),
        'priority'          => 30,
        'panel'             => 'Shop_Page_Panel'
    ));
     $wp_customize->add_setting('shop_header_image_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'shop_header_image_control',
           array(
               'label'      => __('Upload an image', 'forest&birdSummative'),
               'section'    => 'shop_header_image_section',
               'settings'   => 'shop_header_image_setting'
           )
       )
   );




    $wp_customize->add_panel('Terrain_Page_Panel', array(
        'title'             => __('Terrain Page' , 'forest&birdSummative'),
        'priority'          => 20,
        'description'       => 'This panel will hold the terrain page sections'
    ));
    //Terrain Header Image section
    $wp_customize->add_section('terrain_header_image_section', array(
        'title'             => __('Header Image', 'forest&birdSummative'),
        'priority'          => 20,
        'panel'             => 'Terrain_Page_Panel'
    ));
    $wp_customize->add_setting('terrain_header_image_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'terrain_header_image_control',
        array(
            'label'      => __('Upload an image', 'forest&birdSummative'),
            'section'    => 'terrain_header_image_section',
            'settings'   => 'terrain_header_image_setting'
        )
    )






    
);










}

add_action('customize_register' , 'custom_theme_customizer');
