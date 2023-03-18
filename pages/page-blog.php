<?php /* Template Name: Page Blog */ ?>
<?php get_header(); ?>

<main class="c-main-page__blog">
    <?php
    get_template_part(
        "modules/module",
        "white-header",
        [
            'header-text'       => 'ブログ',
            'font-bold-aq'      => 'AQ',
            'header-subtext'    => '学院の日常や、学びのタネになるスタッフコラムを紹介します。',
            'page-name'         => 'Blog'
        ]
    );
    ?>

    <div class="container">
        <div class="c-wrap-box-blog pb-50 mb-2 mb-5">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    get_template_part("modules/module", "blog");
                    ?>
                </div>
                <div class="col-lg-4">
                    <?php
                    get_template_part("modules/module", "blog-newsest");
                    get_template_part('modules/module', "sidebar-tag");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('modules/module', 'trial-footer-all'); ?>
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