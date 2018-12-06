<?php get_header(); ?>

<?php
    /* Template Name: Terrain Template */
?>


<!-- <h1>single.php</h1> -->


<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <?php get_template_part('content', get_post_format()); ?>

        <div class="header-image">
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
    <?php if($terrainbodyheader): ?>
        <p><?= $terrainbodyheader; ?></p>
<?php endif; ?>
    </div>
    <div class="text-terrain-content">
        <?php if($terrainbodytext): ?>
            <p><?= $terrainbodytext; ?></p>
        <?php endif; ?>
    </div>
    <div class="terrain-image">
    
    <?php if($terrainimagetext): ?>
        <div class="terrain-image-text"><?= $terrainimagetext; ?></div>
    <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>