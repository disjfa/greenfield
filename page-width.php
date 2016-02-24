<?php
/*
Template Name: Page full width
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
        comments_template('', true);
    endwhile;
else :
    get_template_part('content', 'none');
endif;

get_footer();