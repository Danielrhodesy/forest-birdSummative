    
    <footer>
        <div class="main-footer">
            <div class="circle-container">
                <span class="circle-btn d-btn">
                </span>
                <span class="circle-btn s-btn">
                </span>
                <span class="circle-btn v-btn">
                </span>
            </div>
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