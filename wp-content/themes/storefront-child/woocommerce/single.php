<?php

while( have_posts() ){

    the_post(); ?>

    <H1><?php the_title(); ?> </H1>

    <?php
    $id = get_the_ID();

    echo get_post_meta($id, 'citat', true);

    the_content();

}

?>