<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<div class="l-main">
    <?php get_template_part('./parts/top/p-top_fv'); ?>
    <?php get_template_part('./parts/top/p-top_sec1'); ?>
    <?php get_template_part('./parts/top/p-top_business'); ?>
    <?php get_template_part('./parts/top/p-top_company'); ?>
    <?php get_template_part('./parts/top/p-top_recruit'); ?>
    <?php get_template_part('./parts/top/p-top_contact'); ?>
</div>

<?php get_footer(); ?>
