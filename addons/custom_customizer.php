<?php

function custom_theme_customizer($wp_customize){


     //FOOTER PANEL

     $wp_customize->add_panel('Footer_Page_Panel', array(
        'title'             => __('Footer' , 'forest-birdSummative'),
        'priority'          => 30,
        'description'       => 'This panel will hold the Footer sections'
        ));

    //Change back ground colour 

    $wp_customize->add_section('footer_background_colour_section', array(
        'title'             => __('Footer Background Colour' , 'forest-birdSummative'),
        'priority'          => 57,
        'panel'             => 'Footer_Page_Panel'
        ));

    $wp_customize->add_setting('footer_background_colour_setting', array(
        'default' => '#202D2E',
        'transport' => 'refresh'
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize,
            'footer_background_colour_control',
            array(
                'label' => __('Footer Background Colour' , 'forest-birdSummative'),
                'section' => 'footer_background_colour_section',
                'settings' => 'footer_background_colour_setting'
            )
        )
    );
    
    

     //Header Panel

     $wp_customize->add_panel('Header_Page_Panel', array(
        'title'             => __('Header' , 'forest-birdSummative'),
        'priority'          => 1,
        'description'       => 'This panel will hold the header sections'
        ));

    //Header Background Colour

    $wp_customize->add_section('header_colour_section', array(
        'title'             => __('Header Colour' , 'forest-birdSummative'),
        'priority'          => 55,
        'panel'             => 'Header_Page_Panel'
        ));

    $wp_customize->add_setting('header_colour_setting', array(
        'default' => '#ffffff',
        'transport' => 'refresh'
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize,
            'header_background_colour_control',
            array(
                'label' => __('Header Background Colour' , 'forest-birdSummative'),
                'section' => 'header_colour_section',
                'settings' => 'header_colour_setting'
            )
        )
    );

    //Header D-Nav Colour

    $wp_customize->add_section('donation-nav_colour_section', array(
        'title'             => __('Donation Navigation Colour' , 'forest-birdSummative'),
        'priority'          => 55,
        'panel'             => 'Header_Page_Panel'
        ));

    $wp_customize->add_setting('donation-nav_colour_setting', array(
        'default' => '#A01D6B',
        'transport' => 'refresh'
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize,
            'donation-nav_colour_control',
            array(
                'label' => __('Donation Nav Colour' , 'forest-birdSummative'),
                'section' => 'donation-nav_colour_section',
                'settings' => 'donation-nav_colour_setting'
            )
        )
    );

     //Header Nav Colour

     $wp_customize->add_section('header_nav_colour_section', array(
        'title'             => __('Navigation Colour' , 'forest-birdSummative'),
        'priority'          => 56,
        'panel'             => 'Header_Page_Panel'
        ));

    $wp_customize->add_setting('header_nav_colour_setting', array(
        'default' => '#243435',
        'transport' => 'refresh'
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize,
            'header_nav_colour_control',
            array(
                'label' => __('Header Nav Colour' , 'forest-birdSummative'),
                'section' => 'header_nav_colour_section',
                'settings' => 'header_nav_colour_setting'
            )
        )
    );
    

    // HOME PANEL

    $wp_customize->add_panel('Home_Page_Panel', array(
        'title'             => __('Home Page' , 'forest-birdSummative'),
        'priority'          => 2,
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

    // Main content background colour

    $wp_customize->add_section('main_background_colour_section', array(
        'title'             => __('Main Background Colour' , 'forest-birdSummative'),
        'priority'          => 55,
        'panel'             => 'Home_Page_Panel'
        ));

    $wp_customize->add_setting('main_background_colour_setting', array(
        'default' => '#FFFFFF',
        'transport' => 'refresh'
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize,
            'main_background_colour_section',
            array(
                'label' => __('Donation Nav Colour' , 'forest-birdSummative'),
                'section' => 'main_background_colour_section',
                'settings' => 'main_background_colour_setting'
            )
        )
    );
            
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



    // DONATION PANEL

    $wp_customize->add_panel('Donation_Page_Panel', array(
        'title'             => __('Donation Page' , 'forest&birdSummative'),
        'priority'          => 20,
        'description'       => 'This panel will hold the donation page sections'
    ));
    //Terrain Header Image section
    $wp_customize->add_section('Donation_header_section', array(
        'title'             => __('Header', 'forest&birdSummative'),
        'priority'          => 20,
        'panel'             => 'Donation_Page_Panel'
    ));
    $wp_customize->add_setting('Donation_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'Donation_header_control',
        array(
            'label'      => __('Header', 'forest&birdSummative'),
            'section'    => 'Donation_header_section',
            'settings'   => 'Donation_header_setting'
        )
    ));

    $wp_customize->add_setting('Donation_sub_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'Donation_sub_header_control',
        array(
            'label'      => __('Sub Header', 'forest&birdSummative'),
            'section'    => 'Donation_header_section',
            'settings'   => 'Donation_sub_header_setting'
        )
        ));

    // VOLUNTEER PANEL

    $wp_customize->add_panel('Volunteer_Page_Panel', array(
        'title'             => __('Volunteer Page' , 'forest&birdSummative'),
        'priority'          => 20,
        'description'       => 'This panel will hold the Volunteer page sections'
    ));
    //Terrain Header Image section
    $wp_customize->add_section('Volunteer_header_section', array(
        'title'             => __('Header', 'forest&birdSummative'),
        'priority'          => 20,
        'panel'             => 'Volunteer_Page_Panel'
    ));
    $wp_customize->add_setting('Volunteer_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'Volunteer_header_control',
        array(
            'label'      => __('Header', 'forest&birdSummative'),
            'section'    => 'Volunteer_header_section',
            'settings'   => 'Volunteer_header_setting'
        )
    ));
    $wp_customize->add_setting('Volunteer_sub_header_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'Volunteer_sub_header_control',
        array(
            'label'      => __('Sub Header', 'forest&birdSummative'),
            'section'    => 'Volunteer_header_section',
            'settings'   => 'Volunteer_sub_header_setting'
        )
    ));

    // SUBSCRIBE PANEL

    $wp_customize->add_panel('Subscribe_Page_Panel', array(
        'title'             => __('Subscribe Page' , 'forest&birdSummative'),
        'priority'          => 20,
        'description'       => 'This panel will hold the Subscribe page sections'
    ));
    
   
};

add_action('customize_register' , 'custom_theme_customizer');


function custom_theme_customizer_styles(){
    
    ?>
        <style type="text/css">
            .header-bg{
                background-color: <?php echo get_theme_mod('header_colour_setting' , '#ffffff') ?> !important;
            }
            .donation-nav-colour{
                background-color: <?php echo get_theme_mod('donation-nav_colour_setting' , '#A01D6B') ?> !important;
            }
            .header-nav-colour {
                background-color: <?php echo get_theme_mod('header_nav_colour_setting' , '#243435') ?> !important;
            }
            .main-background {
                background-color: <?php echo get_theme_mod('main_background_colour_setting' , '#FFFFFF') ?> !important;
            }
            .footer-background-colour {
                background-color: <?php echo get_theme_mod('footer_background_colour_setting' , '#202D2E') ?> !important;
            }
        </style>
    <?php
};
    
add_action('wp_head', 'custom_theme_customizer_styles'); 


    
    