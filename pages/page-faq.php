<?php /* Template Name: Page FAQ */ ?>
<?php get_header(); ?>

<main class="c-main-page__faq">
    <?php
    get_template_part(
        "modules/module",
        "white-header",
        [
            'header-text'       => 'よくある質問',
            'page-name'         => 'FAQ',
            'font-bold-aq'      => 'AQ',
            // 'header-subtext'    => '学院に寄せられるよくある質問をご紹介。',
        ]
    );
    ?>

    <?php
    get_template_part("modules/module", "faq");
    get_template_part('modules/module', 'trial-footer-all');
    ?>


</main>
<!-- box footer -->
<?php get_template_part(
    'modules/module',
    'footer-box',
    [
        'box-item' => [
            [
                'title' => '合格実績',
                'href' => '/achievement#voice',
                'btn' => 'MORE',
                'image' => get_template_directory_uri() . '/dist/images/review.jpg',
            ],
            [
                'title' => 'FAQ',
                'href' => '/trial-class',
                'btn' => 'MORE',
                'bg-color' => 'bg-footer-item',
                'image' => get_template_directory_uri() . '/dist/images/faq.jpg',
            ],
        ],
        'display' => true,
    ]
) ?>


<?php get_footer(); ?>