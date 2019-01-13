<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="container-terrain">
        
        <?php  
            $id = get_the_id();
            $title            = get_post_meta ($id, 'title', true);
            $bodyheader       = get_post_meta ($id, 'bodyHeader', true);
            $bodytext         = get_post_meta ($id, 'bodyText', true);
            $imagetext        = get_post_meta ($id, 'imageText', true);
        ?>
       <div class="header-image">
            <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
             echo '<div class="bg-img" style="background: url('. $url.')"></div>'; ?>
            
            <div class="terrain-header header">

                <?php if($title): ?>
                    <p><?= $title; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="terrain-content">
    <div class="header-terrain-content">
            <p><?= $bodyheader; ?></p>
    </div>
    <div class="text-terrain-content">
            <p><?= $bodytext; ?></p>
    </div>
    <div class="terrain-image">
            <div class="terrain-image-text"><?= $imagetext; ?></div>
    </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>












<?php get_footer(); ?>