<?php

function register_mohiuddin_menu(){
    register_nav_menu( 'primary',__('Main Location','mytheme') );
    // register_nav_menu( 'primary',__('Footer Menu Location','mytheme') );
}

add_action('after_setup_theme', 'register_mohiuddin_menu');
?>
