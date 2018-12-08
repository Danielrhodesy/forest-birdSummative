    
    <footer>
        <div class="main-footer">
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'donation_footer_nav',
                    'depth'             => 2,
                    'container'         => 'span',
                    'container_class'    => 'circle-btn',
                    'container_id'      => '',
                    'menu_class'        => 'nav circle-container',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ));
                ?>
        
        </div>
        <div class="nav second-footer">
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'footer_nav',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'    => 'navlink-m',
                    'container_id'      => '',
                    'menu_class'        => 'nav second-footer main-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
            ?>
        </div>
    </footer>
    
    </body>
    <?php wp_footer(); ?>
</html>