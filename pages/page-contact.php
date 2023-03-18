<?php /* Template Name: Page Contact */ ?>
<?php get_header(); ?>
<main class="main">
    <?php
    get_template_part('modules/module', 'contact-form', [
        'contact-header' => [
            'title' => 'Contact',
            'text' => 'お問い合わせ',
            'subtext' => '無料体験授業・学習相談など',
        ]
    ]);
    get_template_part('modules/module', 'official-line-account');
    // get_template_part('modules/module', 'course-trialCrass');
    ?>
</main>
<!-- box footer -->
<!-- <?php get_template_part(
    'modules/module',
    'footer-box',
    [
        'box-item' => [
            [
                'title' => '生徒・保護者の声',
                'href' => '/achievement#voice',
                'btn' => 'MORE',
            ],
            [
                'title' => '体験授業',
                'href' => '/trial-class',
                'btn' => 'MORE',
                'bg-color' => 'bg-footer-item'
            ],
        ],
        'display' => false,
    ]
) ?>  -->

<?php
get_footer();
?>