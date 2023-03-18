<?php /* Template Name: Page Trial Crass */ ?>
<?php get_header(); ?>
<main class="main">
    <?php get_template_part('modules/module', 'trial-banner') ?>
    <?php get_template_part('modules/module', 'trial-points') ?>
    <?php get_template_part('modules/module', 'trial-steps') ?>
    <?php get_template_part('modules/module', 'trial-footer') ?>
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