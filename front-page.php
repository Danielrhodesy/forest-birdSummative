<?php get_header(); ?>

<div class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
          <!-- //call to custom post type -->
        <!-- if -->
        <!-- while -->
        <div class="carousel-item active">
            <div class="c-text carousel-back-colour-page1">
                <div class="c-text-container">
                    <p class="car-header"><?php echo get_theme_mod('carousel_header_page1_setting'); ?></p>
                    <p class="car-text"><?php echo get_theme_mod('carousel_text_page1_setting'); ?></p>
                </div>
            </div>
            <img class="c-image" src="./wp-content/themes/forest&birdTheme/assets/images/f&bpic1.jpg" alt="First slide">
        </div>
        <!-- endwhile -->
        <!-- endif -->
        <div class="carousel-item">
            <div class="c-text carousel-back-colour-page2">
                <div class="c-text-container">
                    <p class="car-header"><?php echo get_theme_mod('carousel_header_page2_setting'); ?></p>
                    <p class="car-text"><?php echo get_theme_mod('carousel_text_page2_setting'); ?> </p>
                </div>
            </div>
            <img class="c-image" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <div class="c-text carousel-back-colour-page3">
                <div class="c-text-container">
                        <p class="car-header"><?php echo get_theme_mod('carousel_header_page3_setting'); ?></p>
                        <p class="car-text"><?php echo get_theme_mod('carousel_text_page3_setting'); ?></p>
                </div>
            </div>
            <img class="c-image" src="..." alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>

<div class="main-content main-background">
    <div class="text-container">
        <h4 class="hpage-header"><?php echo get_theme_mod('home_header_title_text_setting'); ?></h4>
        <p class="hpage-content"><?php echo get_theme_mod('home_text_setting'); ?></p>
    </div>
</div>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>
        <div class="terrain-container">

            <?php
                $args = array(
                    'post_type' => 'terrain',
                    'order' => 'ASC',
                    'orderby' => 'title'
                );
                $allTerrains = new WP_Query($args);
             ?>
             <?php if( $allTerrains->have_posts() ): ?>
                 <?php while($allTerrains->have_posts()): $allTerrains->the_post();?>
                     <div class="text-center mt-5">
                       <?php if( has_post_thumbnail() ): ?>
                           <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                           echo '<div class="bg-img" style="background: url('. $url.')"></div>'; ?>
                       <?php endif; ?>
                       <div class="mt-5 mb-5">
                         <h5 class="subheader"><?php the_title(); ?></h5>
                         <p class="body"><?php the_excerpt(); ?></p>
                         <a class="terrain-btn" href="<?= esc_url(get_permalink()); ?>">Got to Page</a>

                       </div>
                     </div>
                 <?php endwhile; ?>
             <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>