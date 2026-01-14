<?php

function load_script() {

wp_enqueue_style('style',get_template_directory_uri(). "/style.css", false, '1.1', 'all');
up_enqueue_script('main',get_template_directory_uri(). "/js/main.js",array(), '1.0',true);

}







?>