<?php
// plugin name: Form plugin
// Description: Ett testplugin


add_action('wp_enqueue_scripts', 'min_script_laddare');

function min_script_laddare(){

    wp_enqueue_script('jquery');
}




add_action('wp_ajax_skicka-form','skriv_ut_banan');
add_action('wp_ajax_nopriv_skicka-form','skriv_ut_banan');

function skriv_ut_banan(){

    echo'ajaxbanan';
    

    echo $_REQUEST['firstname'];
    echo $_REQUEST['lastname'];
    

    die();
}