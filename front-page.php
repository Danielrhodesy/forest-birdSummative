<?php get_header(); ?>

<div class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
          <!-- //call to custom post type -->
        <!-- if -->
        <!-- while -->
        <div class="carousel-item active">
            <div class="c-text">
                <div class="c-text-container">
                    <p class="car-header">Saving Nature</p>
                    <p class="car-text">Each year a struggle of national significance decides if around 25 million eggs and chicks of native birds will live or die due to introduced predators. Forest and bird in New Zealand's leading independent environmental organisation. We have the scientific expertise and the courage to stand up for nature.</p>
                </div>
            </div>
            <img class="c-image" src="./wp-content/themes/forest&birdTheme/assets/images/f&bpic1.jpg" alt="First slide">
        </div>
        <!-- endwhile -->
        <!-- endif -->
        <div class="carousel-item">
            <div class="c-text">
                <div class="c-text-container">
                    <p class="car-header">Our Campaigns</p>
                    <p class="car-text">The Government is about to consult on protecting our public conservation land from mining and already the mining industry are pushing back. Unless we have your support – we may not be able to save all of our precious lands. </p>
                </div>
            </div>
            <img class="c-image" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <div class="c-text">
                <div class="c-text-container">
                        <p class="car-header">Protect New Zealand’s National Parks</p>
                        <p class="car-text">New Zealand has a long history of protecting our significant landscapes, native plants and animals in national parks. So it’s disappointing when attempts are made to erode those basic principles of protection.</p>
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

<div class="main-content">
    <div class="text-container">
        <h4 class="hpage-header"><?php echo get_theme_mod('home_header_title_text_setting'); ?></h4>
        <p class="hpage-content"><?php echo get_theme_mod('home_text_setting'); ?></p>
    </div>
</div>

<!-- We are nature's voice and work to defend nature – across our Land, Fresh water, Oceans and Climate. But we can't do it without your support. -->


<?php get_footer(); ?>