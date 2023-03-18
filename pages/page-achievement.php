<?php /* Template Name: Page Achievement */ ?>
<?php
get_header();
?>
<main class="main">
    <?php
    get_template_part('modules/module', 'achievement-record', [
        'record-header' => [
            'content1' => 'ACHIEVEMENT',
            'content2' => '合格実績',
            'content3' => '下部に「<span class="font-bold-aq">AQ</span>卒業生の声」があります。'
        ],
        'record-elements' => [
            [
                'title' => '大学合格実績',
                'description' => '難関国公立大学や医学部、名門私立大学などに多くの合格者を輩出しています。',
                'content' => array(
                    '京都大学',
                    '弘前大学医学部',
                    '東京外国語大学',
                    '国立看護大学校',
                    '早稲田大学',
                    '上智大学',
                    '東京理科大学',
                    '明治大学',
                    '立教大学'
                )
            ],
            [
                'title' => '高校合格実績',
                'description' => '大学進学など将来の進路を見据えた高校選びをサポートしています。',
                'content' => array(
                    '川越女子高校',
                    '所沢北高校',
                    '川越南高校',
                    '所沢高校',
                    '明治大学付属中野八王子高校',
                    '',
                    '錦城高校',
                    '大宮開成高校',
                    '日本大学豊山高校'
                )
            ]
        ]
    ]);
    get_template_part('modules/module', 'voice', [
        'category' => 'その他',
        'record-header' => [
            'content3-aq-text' => 'AQ',
            'content3-text' => '卒業生の声'
        ]
    ]);

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

<?php
get_footer();
?>