<?php
$post_custom = get_post_custom('class');
$class = isset($post_custom['class']) ? $post_custom['class'] : array();
?>
<div class="<?php echo implode(" ", $class); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
        <header>
            <?php if (is_singular()) : ?>
                <div class="article-header">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            <?php else: ?>
                <div class="article-header">
                    <h2 class="h1">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </div>
            <?php endif ?>
            <?php greenfields_display_post_meta() ?>
        </header>
        <?php
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'greenfields_featured', false);
        if ($image):
            list($src, $width, $height) = $image;
            ?>
            <img src="<?php echo $src; ?>" alt="<?php the_title(); ?>" class="img-responsive img-thumbnail">
            <br><br>
            <?php
        endif;
        ?>
        <section class="post_content">
            <?php
            if (is_search()) {
                the_excerpt();
            } else {
                /* translators: %s: Name of current post */
                the_content(sprintf(
                    __('Continue reading %s', 'greenfields'),
                    the_title('<span class="screen-reader-text">', '</span>', false)
                ));

                wp_link_pages();
            }
            ?>
        </section>
        <footer>
            <?php the_tags('<p class="tags pull-right">', ' ', '</p>'); ?>
            <?php if (has_category()): ?>
            <ul class="list-inline">
                <li><?php _e('Posted in', 'greenfield'); ?></li>
                <li>
                    <?php echo get_the_category_list('</li><li>'); ?>
                </li>
            </ul>
            <?php endif; ?>
        </footer>
    </article>
    <hr>
</div>