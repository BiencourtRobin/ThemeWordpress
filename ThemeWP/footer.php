        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <?php wp_nav_menu( array(
                            'menu' => 'top-menu',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'col-sm-6 text-left  g-margin-b-20--xs g-margin-t-20--xs g-margin-b-0--md ',
                            'container_id' => 'navbar',
                            'menu_class' => 'list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs',
                        )); ?>
                        <aside class="widget-area" role="complementary" >
                            <?php
                            if ( is_active_sidebar( 'sidebar_footer-1' ) ) { ?>
                                <div class="col-sm-6 s-footer__logo  ">
                                    <?php dynamic_sidebar( 'sidebar_footer-1' ); ?>
                                </div>
                            <?php } ?>
                        </aside>
						<!-- End Copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
        
		<!--=====JAVSCRIPTS=====-->
        <!-- min.js -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/waypoint.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/tooltip/tooltip.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/counterup.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.wow.min.js"></script>

        <!-- config js -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/global.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/header-sticky.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/scrollbar.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/magnific-popup.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/swiper.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/counter.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/portfolio-3-col.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/parallax.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/google-map.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/wow.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
        <?php wp_footer(); ?>
    </body>
</html>