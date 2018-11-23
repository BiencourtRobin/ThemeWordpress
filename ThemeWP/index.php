        <!--=====Call Header=====-->
        <?php get_header(); ?>
        <!--=====Call Header=====-->

        <!--========== PAGE CONTENT ==========-->

        <!--=====Get Posts=====-->
        <?php
            $args_blog = array (
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $req_blog = new WP_Query($args_blog);
        ?>
        <!--=====Get Posts=====-->

        <!-- First Block -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <?php if(have_posts()) : 
                    while(have_posts()) : the_post(); 
            ?>
            <div class="g-text-center--xs g-margin-b-100--xs">
                <?php
                    if ( is_active_sidebar( 'subtitle-1' ) ) { 
                        dynamic_sidebar( 'subtitle-1' ); 
                    } 
                ?>
                <h2 class="g-font-size-32--xs g-font-size-36--md"><?php the_title(); ?></h2>
            </div>
            <div id="content" class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-8 col-sm-offset-2 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media__body g-padding-x-20--xs">
                            <p class="g-margin-b-0--xs g-font-size-28--sm">
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; 
                endif; 
            ?> 
        </div>
        <!--====== end Block  =====-->

        <!--===== First Btn =====-->
        <div class="js__parallax-window" style="background: url('<?php bloginfo('template_directory'); ?>/assets/img/background/pattern2.png') 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <?php
                    if ( is_active_sidebar( 'title-3' ) ) { 
                        dynamic_sidebar( 'title-3' ); 
                    } 
    
                    if ( is_active_sidebar( 'btn-1' ) ) { 
                        dynamic_sidebar( 'btn-1' ); 
                    } 
                ?>
            </div>
        </div>
        <!--=====End  First Btn =====-->

        <!--=====Promo block=====-->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <?php
                            if ( is_active_sidebar( 'subtitle-2' ) ) { 
                                dynamic_sidebar( 'subtitle-2' ); 
                            } 
                            if ( is_active_sidebar( 'title-2' ) ) { 
                                dynamic_sidebar( 'title-2' ); 
                             } 
                        ?>
                    </div>
                        <?php
                            if ( is_active_sidebar( 'text-1' ) ) { 
                                dynamic_sidebar( 'text-1' ); 
                            } 
                        ?>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
              <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/widgets/dev_img.jpg" alt="Image">
            </div>
        </div>
        <!--=====End Promo block=====-->

        <!--===== 6Post =====-->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div id="content" class="row g-margin-b-60--xs g-margin-b-70--md">
                <?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
                    <div class="col-sm-4 g-margin-b-60--xs g-margin-b---md">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                    <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 id="post_ID_<?php echo $post->ID?> ?>" class="g-font-size-18--xs"><?php the_title()?></h3>
                                <p class="g-margin-b-0--xs">
                                    <?php the_content()?>
                                </p> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--===== End 6Post =====-->

        <!--===== Citation (non fini) =====-->
        <div class="js__parallax-window" style="background: url('<?php bloginfo('template_directory'); ?>/assets/img/background/pattern2.png') 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <?php
                    if ( is_active_sidebar( 'title-4' ) ) { 
                        dynamic_sidebar( 'title-4' ); 
                          } 
                ?>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" En informatique, la miniaturisation augmente la puissance de calcul. On peut être plus petit et plus intelligent. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Bernard Werber / Les Micro-humains (2013)</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Un langage de programmation est censé être une façon conventionnelle de donner des instructions à un ordinateur, et doit pouvoir être écrit et relu par des personnes différentes. Il n’est pas censé être obscur, bizarre et plein de pièges subtils (ça, ce sont les attributs de la magie).</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Dave Small / ST Magazine (1992) </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Quand Google ne trouve pas quelque chose, il demande à Chuck Norris . "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Chuck Norris Facts</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!--=====End citation=====-->

        <!--=====Portfolio=====-->
        <div class="container g-padding-y-80--xs">
            <div class="portfolio">
                <?php
                    if ( is_active_sidebar( 'title-5' ) ) { 
                        dynamic_sidebar( 'title-5' ); 
                    } 

                    if ( is_active_sidebar( 'portfolio' ) ) { 
                        dynamic_sidebar( 'portfolio' ); 
                    } 
                ?>  
           </div>
        </div>
        <!--=====End portfolio=====-->

        <!--=====Contact=====-->
        <div id="contact"class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <?php
                        if ( is_active_sidebar( 'subtitle-3' ) ) { 
                            dynamic_sidebar( 'subtitle-3' ); 
                        } 

                        if ( is_active_sidebar( 'title-6' ) ) { 
                            dynamic_sidebar( 'title-6' ); 
                        } 
                    ?>
                </div>
                <form>
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Nom">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Votre message"></textarea>
                        </div>
                    </div>
                    <?php
                        if ( is_active_sidebar( 'btn-2' ) ) { 
                            dynamic_sidebar( 'btn-2' ); 
                        } 
                    ?>
                </form>
            </div>
        </div>
        <!--=====End contact =====-->

        <!-- Google Map -->
        <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>
        <!-- End Google Map -->
        
        <!--========== END PAGE CONTENT ==========-->

        <!--=====Call Footer =====->
        <?php get_footer(); ?>
        <!--=====Call Footer =====->