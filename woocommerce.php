<?php
/*
Template Name: Page with sidebar
*/

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <br>
                <?php woocommerce_content(); ?>
            </div>
            <div class="col-sm-3">
                <br>
                <?php dynamic_sidebar('sidebar-default'); ?>
            </div>
        </div>
    </div>

<?php
get_footer();
