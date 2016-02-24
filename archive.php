<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1 class="archive_title">
                    <?php echo get_the_archive_title() ?>
                </h1>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                    greenfields_page_navi();
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
