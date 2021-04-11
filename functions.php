<?php
//support de titre
function titlepage(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','titlepage');
//activation la generation du menu
function menu(){
    $navbar = array(
        'primary' => "principal",
         'footer' => "footer",
            );
register_nav_menus($navbar);
        }
add_action('init','menu');

function style() {
//chargement des styles
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
//chargement de js    
    wp_enqueue_style( 'js', get_template_directory_uri() . '/js/javascript.js', array(), '1.0', false);
}
//fin function
add_action('wp_enqueue_scripts', 'style');


//utilitaires

//support des vignettes
//add_theme_support('post-thumbnails');
//enleve generateur de version
//remove_action('wp_head','wp_generator');
//enleve les guillemet a la française
//remove_filtrer('the_content','wptexturize');


//fin function

add_action('after_setyp_theme','hp');?>