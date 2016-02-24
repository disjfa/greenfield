<?php get_header(); ?>


    <article id="post-not-found" class="container">

        <section class="post_content">
            <br><br>

            <h1>
                <?php _e("Page not found", "greenfields"); ?>
            </h1>

            <p class="lead">
                <?php _e("Looks like something went completely wrong", "greenfields"); ?>
            </p>

            <p>
                <?php _e("Please try another section of our awesome page", "greenfields"); ?>
            </p>
            <br><br>
            <?php get_search_form(); ?>
            <br><br><br>
        </section>

    </article>


<?php get_footer(); ?>