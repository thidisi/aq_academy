<?php /* Template Name: Page About */ ?>
<?php get_header(); ?>
<main class="main">
    <div class="wp-about-page">

        <?php get_template_part('modules/module', 'about-banner') ?>
        <?php get_template_part('modules/module', 'about-new') ?>
        <?php get_template_part('modules/module', 'about-content') ?>
        <?php get_template_part('modules/module', 'global-course-slider') ?>
        <?php get_template_part('modules/module', 'about-message') ?>

    </div>
</main>
<!-- box footer -->
<?php get_template_part(
    'modules/module',
    'footer-box',
    [
        'box-item' => [
            [
                'title' => '合格実績',
                'href' => '/achievement',
                'btn' => 'MORE',
                'image' => get_template_directory_uri() . '/dist/images/review.jpg',
            ],
            [
                'title' => 'FAQ',
                'href' => '/faq',
                'btn' => 'MORE',
                'image' => get_template_directory_uri() . '/dist/images/faq.jpg',
                'bg-color' => 'bg-footer-item'
            ],
        ],
        'display' => true,
    ]
) ?> 

<?php
get_footer();
?>