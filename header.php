<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>
<?php
$options = get_option('greenfields_options');
?>
<body <?php body_class(); ?>>

<div id="content-wrapper">

    <?php if (empty($options['logo']) === false): ?>
        <div class="post-header" style="background-image: url(<?php echo $options['logo']; ?>);">

        </div>
    <?php endif; ?>

    <header<?php echo is_front_page() ? ' class="is-front-page"' : ''; ?>>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <?php if (has_nav_menu("main_nav")): ?>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-responsive-collapse">
                            <span class="sr-only"><?php _e('Navigation', 'greenfields'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <?php endif ?>
                    <a class="navbar-brand" title="<?php bloginfo('description'); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if (isset($options['brand']) && false == empty($options['brand'])) : ?>
                            <img src="<?php echo $options['brand'] ?>" alt="<?php echo get_bloginfo('name', 'raw'); ?>" title="<?php echo get_bloginfo('name', 'raw'); ?>">
                        <?php else: ?>
                            <?php echo get_bloginfo('name', 'raw'); ?>
                        <?php endif; ?>
                    </a>
                </div>

                <?php if (has_nav_menu("main_nav")): ?>
                    <div id="navbar-responsive-collapse" class="collapse navbar-collapse">
                        <?php
                        greenfields_display_main_menu();
                        ?>

                    </div>
                <?php endif ?>
            </div>
        </nav>
    </header>