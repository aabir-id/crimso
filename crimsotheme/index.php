<?php
get_template_part('preloader');
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php get_template_part('main-banner'); ?>
    <?php get_template_part('features'); ?>
    <?php get_template_part('about'); ?>
    <?php get_template_part('services'); ?>
    <?php get_template_part('choose'); ?>
    <?php get_template_part('project'); ?>
    <?php get_template_part('team'); ?>
    <?php get_template_part('testimonial'); ?>
    <?php get_template_part('analysis'); ?>
    <?php get_template_part('blog'); ?>
    <?php get_template_part('partner'); ?>
    <?php get_template_part('subscribe'); ?>

    </main>

    <?php get_sidebar(); ?>
</div>

<?php 
get_footer();
?>

