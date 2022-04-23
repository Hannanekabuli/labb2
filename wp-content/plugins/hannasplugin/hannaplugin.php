<?php
/* plugin name: hanna plugin */

//säkert

//aktivering


add_action('init', 'registrera_bok');

function registrera_bok(){

    $bok_args = [

        'public' => true,
        'label' =>'Böcker',
        'show_in_rest' => true
             
    ];

    register_post_type('bok', $bok_args);

}


//var_dump
//var_dump(get_posts() );

$poster = get_posts();
$post = $poster[0];

$post_id = $post->ID;






update_post_meta(8, 'citat', 'citat 1');

?>