<?php
    function nasa_tema_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        remove_theme_support('widgets-block-editor');
    }

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu' ),
    ) );

    add_action('after_setup_theme', 'nasa_tema_setup');


    function skripte(){
        wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'skripte' );

    function widget(){
        register_sidebar(array(
            'name' => 'footer-1',
            'id' => 'footer-1',
            'before_widget' =>'<article>',
            'after_widget' => '</article>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
    
        ));
        register_sidebar(array(
            'name' => 'footer-2',
            'id' => 'footer-2',
            'before_widget' =>'<article>',
            'after_widget' => '</article>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
    
        ));
    
        register_sidebar(array(
            'name' => 'footer-3',
            'id' => 'footer-3',
            'before_widget' =>'<article>',
            'after_widget' => '</article>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
    
        ));

        register_sidebar(array(
            'name' => 'contact-form',
            'id' => 'contact-form',
            'before_widget' =>'<article>',
            'after_widget' => '</article>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
    
        ));


    }
    add_action('widgets_init', 'widget');