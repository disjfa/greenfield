<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="article-header">
                    <h1><?php echo _x("Search for:", "label", "greenfields"); ?><?php echo esc_attr(get_search_query()); ?></h1>
                </div>

                <?php

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                else :
                    get_template_part('content', 'none');
                endif;
                ?>
            </div>
            <div class="col-sm-3">
                <br>
                <?php dynamic_sidebar('sidebar-default'); ?>
            </div>
        </div>
    </div>
<?php
get_footer();
