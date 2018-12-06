<?php get_header(); ?>

<?php
    /* Template Name: Shop Template */
?>

<div class="shop-image" style="background-image: url(<?php echo get_theme_mod('shop_header_image_setting'); ?>)">

</div>


<div class="shop-text-container">
    <div class="shop-text-inner">
        <p class="shop-text-header header"><?php echo get_theme_mod('shop_header_setting'); ?></p>
        <p class="shop-text-subheader sub-header"><?php echo get_theme_mod('shop_sub_header_setting'); ?> </p>
    </div>
</div>
<hr>
<div class="shop-catalouge">
    <div class="shop-header-container">
        <p class="shop-header header"><?php echo get_theme_mod('shop_catalogue_header_setting'); ?></p>
    </div>
    <div class="shop-item">
        <div class="shop-item-image">
        </div>
        <div class="shop-item-text">
        </div>
        <div class="shop-item-btn">
            <!-- Could use bootrap here -->
        </div>
    </div>
</div>

<?php get_footer(); ?>