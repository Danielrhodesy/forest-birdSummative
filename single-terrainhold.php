<?php get_header(); ?>

<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>

        <div class="header-image">
            <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo '<div class="bg-img" style="background: url('. $url.')"></div>'; ?>
            
            <div class="terrain-header header">

                <?php if($terraintitle): ?>
                    <p><?= $terraintitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
<?php endif; ?>

<?php 
    $id                      = get_the_id();
    $terraintitle            = get_post_meta($id, 'title', true);
    $terrainbodyheader       = get_post_meta($id, 'bodyheader', true);
    $terrainbodytext         = get_post_meta($id, 'bodytext', true);
    $terrainimagetext        = get_post_meta($id, 'imagetext', true);
?>

<div class="terrain-content">
    <div class="header-terrain-content">
        <?php if($bodyheader): ?>
            <p><?= $bodyheader; ?></p>
        <?php endif; ?>
    </div>
    <div class="text-terrain-content">
        <?php if($bodytext): ?>
            <p><?= $bodytext; ?></p>
        <?php endif; ?>
    </div>
    <div class="terrain-image">
        <?php if($imagetext): ?>
            <div class="terrain-image-text"><?= $imagetext; ?></div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>