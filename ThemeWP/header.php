<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head >
        <!--=====Base=====-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!--=====Web Fonts=====-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
        <?php wp_head(); ?>
    </head >

    <body <?php body_class(); ?>>
        <!--=====Call sidebar=====-->
        <?php get_sidebar(); ?>
        <!--=====Call sidebar=====-->

         <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!--=====Swiper Wrapper=====-->
            <div class="swiper-wrapper">
                <div class="custom-header-media g-fullheight--xs g-bg-position--center swiper-slide">
                    <?php the_custom_header_markup(); ?>
                    <div class="container g-text-center--xs g-ver-center--xs">  
                        <?php
                             if ( is_active_sidebar( 'title-1' ) ) { 
                                dynamic_sidebar( 'title-1' ); 
                              } 
                        ?>
                    </div>
                </div>
                <div class="custom-header-media g-fullheight--xs g-bg-position--center swiper-slide">
                    <?php the_custom_header_markup(); ?>
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                                   <?php
                                        if ( is_active_sidebar( 'title-1_2' ) ) { 
                                            dynamic_sidebar( 'title-1_2' ); 
                                        } 
                                   ?>     
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====End Swiper Wrapper=====-->

            <!--=====Arrows=====-->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!--=====End Arrows=====-->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <?php
                    if ( is_active_sidebar( 'subtl-1' ) ) { 
                        dynamic_sidebar( 'subtl-1' ); 
                    } 
                ?>   
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== END HEADER ==========-->

