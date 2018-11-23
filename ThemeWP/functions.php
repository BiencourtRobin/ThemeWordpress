<?php

function site_setup(){

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	remove_action ('wp_head','wp_generator');

	//Custom Header //
	add_theme_support( 'custom-header', apply_filters( 'custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/img/background/pattern1.png' ),
		'width'              => 2000,
		'height'             => 1200,
		'flex-height'        => true,
		'video'              => true,
		'wp-head-callback'   => 'theme_header_call',
	) ) );

	//Menu nav Top&Bottom//
	register_nav_menus( array(
		'primary' => 'principal',
		'secondary' => 'secondaire',
	));
	//Outils customize widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	//starter theme
	$starter_content = array(
		'widgets' => array(
			
			'title-1' => array(
           		'meta_custom' => array( 'meta', array(
                'title' => 'Wordpress 1'))
			),

			'title-1_2' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Wordpress 2'))
			),

			'title-2' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Contact us'))
			),

			'title-3' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'About'))
			),

			'title-4' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Citations'))
			),

			'title-5' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Portfolio'))
			),

			'title-6' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Contact'))
			),

			'subtl-1' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'more'))
			),

			'subtitle-1' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat.'))
			),

			'subtitle-2' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Who are us'))
			),

			'subtitle-3' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'contact us',
				'description' => ''))
			),

			'text-1' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</br>Et quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.'))
			),

			'sidebar_footer-1' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Une larme de Chuck Norris peut guérir du cancer, malheureusement Chuck Norris ne pleure pas.'))
			),

			'btn-1' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Contacter'))
			),

			'btn-2' => array(
				'meta_custom' => array( 'meta', array(
                'title' => 'Envoyer'))
			),
		),
			
		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'primaire' ),
				'items' => array(
					'link_home', 
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);
	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );
	add_theme_support( 'starter-content', $starter_content );
}
add_action('after_setup_theme','site_setup');

//starter theme header
function theme_header_call()
	{


	}

//widget init
function widgets_global_init()
{
	register_sidebar( array(
		'name'          => __( 'title1' ),
		'id'            => 'title-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget g-margin-b-30--xs">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'title1_2' ),
		'id'            => 'title-1_2',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget g-margin-b-30--xs">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'subtl1' ),
		'id'            => 'subtl-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'subtitle1' ),
		'id'            => 'subtitle-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'subtitle2' ),
		'id'            => 'subtitle-2',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'subtitle3' ),
		'id'            => 'subtitle-3',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'title2' ),
		'id'            => 'title-2',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'title3' ),
		'id'            => 'title-3',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget g-margin-b-80--xs">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'title4' ),
		'id'            => 'title-4',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'title5' ),
		'id'            => 'title-5',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget g-text-center--xs g-margin-b-40--xs">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-font-size-32--xs g-font-size-36--md">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'title6' ),
		'id'            => 'title-6',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-font-size-32--xs g-font-size-36--md">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Text1' ),
		'id'            => 'text-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget promo-section col-md-4 col-md-offset-1">',
		'after_widget'  => '</div>',
		'before_title'  => ' ',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1' ),
		'id'            => 'sidebar_footer-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="g-color--white-opacity">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'btn1' ),
		'id'            => 'btn-1',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<a href="#contact" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50" >',
		'after_title'   => '</a>',
	) );

	register_sidebar( array(
		'name'          => __( 'btn2' ),
		'id'            => 'btn-2',
		'description'   => __( '' ),
		'before_widget' => '<div class="widget g-text-center--xs">',
		'after_widget'  => '</div>',
		'before_title'  => '<button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">',
		'after_title'   => '</button>',
	) );

	register_sidebar( array(
		'name'          => __( 'portfolio' ),
		'id'            => 'portfolio',
		'description'   => __( '' ),
		'before_widget' => '<div class="img-responsive">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action ('widgets_init','widgets_global_init');

//call script Js&Css //
function simplon_scripts() {
	
	// stylesheet 
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/js/bootstrap/css/bootstrap.min.css', array(), '1.0.0','all' );
	wp_enqueue_style( 'themify-style', get_template_directory_uri() . '/assets/js/themify/themify.css', array('bootstrap-style'), '1.0.0','all');
	wp_enqueue_style( 'scrollbar-style', get_template_directory_uri() . '/assets/js/scrollbar/scrollbar.min.css', array('bootstrap-style'), '1.0.0','all' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/js/magnific-popup/magnific-popup.css', array('bootstrap-style'), '1.0.0','all' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/js/swiper/swiper.min.css', array('bootstrap-style'), '1.0.0','all' );

	// Theme stylesheet
	wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/css/global/global.css', array('bootstrap-style','swiper-style'), '1.0.0','all' );
	wp_enqueue_style( 'basic-style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap-style'), '1.0.0','all' );


	// Javascripts

}

add_action( 'wp_enqueue_scripts', 'simplon_scripts' );