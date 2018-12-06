<?php

function custom_theme_customizer($wp_customize){



    // SHOP PANEL

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


    // SHOP HEADER TEXT

    $wp_customize->add_section('shop_header_section', array(
        'title'             => __('Header Text', 'forest&birdSummative'),
        'priority'          => 30,
        'panel'             => 'Shop_Page_Panel'
    ));
     $wp_customize->add_setting('shop_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'shop_header_control',
           array(
               'label'      => __('Header', 'forest&birdSummative'),
               'section'    => 'shop_header_section',
               'settings'   => 'shop_header_setting'
           )
       )
    );

    $wp_customize->add_setting('shop_sub_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'shop_sub_header_control',
           array(
               'label'      => __('Sub Header', 'forest&birdSummative'),
               'section'    => 'shop_header_section',
               'settings'   => 'shop_sub_header_setting'
           )
       )
    );

    $wp_customize->add_setting('shop_sub_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'shop_sub_header_control',
           array(
               'label'      => __('Sub Header', 'forest&birdSummative'),
               'section'    => 'shop_header_section',
               'settings'   => 'shop_sub_header_setting'
           )
       )
    );

    $wp_customize->add_setting('shop_catalogue_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
     $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'shop_catalogue_header_setting',
           array(
               'label'      => __('Catalouge Header', 'forest&birdSummative'),
               'section'    => 'shop_header_section',
               'settings'   => 'shop_catalogue_header_setting'
           )
       )
    );



    

    // HOME PANEL

    $wp_customize->add_panel('Home_Page_Panel', array(
        'title'             => __('Home Page' , 'forest-birdSummative'),
        'priority'          => 15,
        'description'       => 'This panel will hold the home page sections'
    ));


    //Home Header Text section
    $wp_customize->add_section('home_header_title_text_section', array(
    'title'             => __('Home Page Header' , 'forest-birdSummative'),
    'priority'          => 53,
    'panel'             => 'Home_Page_Panel'
    ));
    //Header Text
    $wp_customize->add_setting('home_header_title_text_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_header_title_text_control',
            array(
                'label'     => __('Title' , 'forest-birdSummative'),
                'section'   => 'home_header_title_text_section',
                'settings'  => 'home_header_title_text_setting'
            )
        )
    );

    $wp_customize->add_setting('home_header_title_text_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_header_title_text_control',
            array(
                'label'     => __('Title' , 'forest-birdSummative'),
                'section'   => 'home_header_title_text_section',
                'settings'  => 'home_header_title_text_setting'
            )
        )
    );

     $wp_customize->add_setting('home_text_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_text_control',
            array(
                'label'     => __('Text Content' , 'forest-birdSummative'),
                'section'   => 'home_header_title_text_section',
                'settings'  => 'home_text_setting'
            )
        )
    );



    // TERRAIN PANEL

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
        ));



}

add_action('customize_register' , 'custom_theme_customizer');
