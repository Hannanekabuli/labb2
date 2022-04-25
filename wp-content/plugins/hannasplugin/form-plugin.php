<?php
// plugin name: Form plugin
// Description: Ett testplugin


add_action('wp_ajax_skicka-form','skriv_ut_banan');
//add_action('wp_ajax_skicka-form','skriv_ut_banan');

function skriv_ut_banan(){

    echo'ajaxbanan';
    

    echo $_REQUEST['firstname'];
    echo $_REQUEST['lastname'];
    

    die();
}