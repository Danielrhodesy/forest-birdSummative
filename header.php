<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Muli" rel="stylesheet">
    </head>
    <body>

    <div class="header-container row">
        <div class="header-logo col-12">
            <?php
                $custom_logo = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($custom_logo, 'medium');
            ?>
            <?php if($custom_logo): ?>
                <a class="navbar-brand" href="#">
                    <img src="<?= $logo_url  ?>" height="50" alt="">
                </a>
            <?php else: ?>
                <a class="navbar-brand" href="#"><?= bloginfo('name');  ?></a>
            <?php endif; ?>
        </div>
        
        <!-- <img src="./wp-content/themes/forest&birdTheme/assets/images/logo.png" alt="Logo Image"> -->


        <div class="header-topnav">   
            <div class="d-nav-container">
                <nav class="d-nav">
                    <ul class="d-nav-list">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'donation_nav',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'    => 'navlink-m',
                                'container_id'      => 'donate-tab',
                                'menu_class'        => 'nav d-nav-list',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ) );
                        ?>
                    <ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="nav main-nav" id="myTab" role="tablist">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'header_nav',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'    => 'navlink-m',
                'container_id'      => 'home-tab',
                'menu_class'        => 'nav main-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ) );
        ?>
    </div>
   

    
    
                        <!-- <li class="d-list">
                            <a class="nav-link-d active" href="">Donate</a>
                        </li>
                        <li class="d-list">
                            <a class="nav-link-d" href="">Subscribe</a>
                        </li>
                        <li class="d-list">
                            <a class="nav-link-d" href="">Volunteer</a>
                        </li> -->