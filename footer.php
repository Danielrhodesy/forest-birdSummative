    
    <nav class="navbar navbar-expand-md navbar-light bg-lighqt" role="navigation">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <?php wp_nav_menu( array(
                'theme_location'    => 'footer_nav',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse ',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav justify-content-around w-100',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ) );
            ?>
        </div>
    </nav>
    
    </body>
    <?php wp_footer(); ?>
</html>