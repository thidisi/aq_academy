<?php /* Template Name: Page Top */ ?>
<?php get_header(); ?>
<main class="main">
    <?php get_template_part('modules/module', 'top-banner') ?>
    <?php get_template_part('modules/module', 'top-recommend') ?>
    <?php get_template_part('modules/module', 'top-feature') ?>
    <?php get_template_part('modules/module', 'global-course-slider') ?>
    <?php get_template_part('modules/module', 'top-blog') ?>
    <?php get_template_part('modules/module', 'top-news') ?>
    <?php get_template_part('modules/module', 'top-access') ?>
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