<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content', get_post_format());
                        comments_template('', true);
                        if (get_next_post() || get_previous_post()) {
                            ?>
                            <nav class="container">
                                <ul class="pager pager-unspaced">
                                    <li class="previous"><?php previous_post_link('%link', "&laquo; " . __('Previous Post', "greenfields")); ?></li>
                                    <li class="next"><?php next_post_link('%link', __('Next Post', "greenfields") . " &raquo;"); ?></li>
                                </ul>
                            </nav>
                            <?php
                        }
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