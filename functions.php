
<?php

require get_parent_theme_file_path('./addons/educational_alert.php');

    function addCustomThemeStyles(){
    
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), '0.0.1', 'all');

     
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
        wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);
    }
    add_action('wp_enqueue_scripts', 'addCustomThemeStyles');


    //Customizers

    require get_parent_theme_file_path('/addons/custom_customizer.php');
    require get_parent_theme_file_path('/addons/custom_fields.php');

    // Add Images

    add_theme_support( 'post-thumbnails' );
        
    function add_nav_menu(){
        add_theme_support('menus');
        register_nav_menu('donation_nav', 'This is the navigation which appears at the donation bar');
        register_nav_menu('header_nav', 'This is the navigation which appears at the top of the page');
        register_nav_menu('footer_nav', 'This is the navigation which appears at the bottom of the page');
        register_nav_menu('donation_footer_nav', 'This is the donation navigation which appears at the bottom of the page');
    }
    add_action('init', 'add_nav_menu');
    
    require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';

    
    function addCustomLogo(){
        add_theme_support('custom-logo', array(
            'height' => 200,
            'width' => 510,
            'flex-width' => true,
            'flex-height' => true
        ));
    }
    add_action('init', 'addCustomLogo');
    

    function add_terrain_post_type(){

       $labels = array(
           'name' => _x('Terrain', 'post type name', 'forest-birdSummative'),
           'singular_name' => _x('Terrain', 'post types singluar name', 'forest-birdSummative'),
           'add_new_item' => _x('Add New Terrain Type', 'adding new terrain type', 'forest-birdSummative')
       );

       $args = array(
           'labels' => $labels,
           'description' => 'a post type for the terrain types',
           'public' => true,
           'hierarchical' => true,
           'exclude_from_search' => false,
           'show_ui' => true,
           'show_in_menu' => true,
           'show_in_nav_menus' => false,
           'menu_position' => 20,
           'menu_icon' => 'dashicons-location-alt',
           'supports' => array(
               'title',
               'thumbnail'
           ),
           'query_var' => true
       );
       register_post_type('terrain', $args);


    

   }
    add_action('init', 'add_terrain_post_type');
   