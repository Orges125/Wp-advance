<?php

function load_script() {

wp_enqueue_style('style',get_template_directory_uri(). "/style.css", false, '1.1', 'all');
up_enqueue_script('main',get_template_directory_uri(). "/js/main.js",array(), '1.0',true);

}

$args = array(
    'width' => 225,
    'height' => 1920
);

add_theme_support('custom-header',$args);
add_theme_support('post-thumbnails',$args);
add_theme_support('custom-logo',array(
     'height' => 110,
     'width' => 200,
     'flex-height' => true,
     'flex-width' => true,

));

add_theme_support('automatic-feed-links');
add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption','style','script'));
add_theme_support('title-tag');
    




add_action('wp_enqueue_scripst' , 'load_scripts');







?>