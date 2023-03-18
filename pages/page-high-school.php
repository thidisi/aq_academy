<?php /* Template Name: Page High School */ ?>
<?php get_header(); ?>
<main class="main">
    <?php get_template_part(
        'modules/module',
        'course-banner',
        [
            'banner' => '/build/images/high/mv.jpg',
            'images' => '/build/images/high/illustration.png',
            'title1' => '高校生コース',
            'title1_size' => false,
            'image-size' => false,
            'title2' => 'High School',
            // 'title2_size' => true,
        ]
    ) ?>
    <?php get_template_part(
        'modules/module',
        'course-specialty',
        [
            'specialty' => true,
            'special_label' => [
                'title' => '特徴',
                'description' => '大学受験・学校の補習など、忙しい生活の中でも重要な課題にフォーカスできるように優先順位を明確化します。'
            ],
            'special_items' => [
                [
                    'title' => '大学受験に強い個別カリキュラム',
                    'images1' => '/build/images/high/feature1.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '名門大学への合格者を輩出してきたカリキュラムを、個別に最適化することによって、一人ひとりの可能性を広げていきます。'
                ],
                [
                    'title' => '様々な進路選択に
                    対する個別サポート',
                    'images1' => '/build/images/high/feature2.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '一般選抜・内部進学の対策はもちろんのこと、学校推薦型選抜の面接対策や外部英語検定試験対策なども個別にサポートします。'
                ],
                [
                    'title' => '自身を俯瞰視する
                    メタ認知力の向上',
                    'images1' => '/build/images/high/feature3.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '対話や書き込みシートによって、優先度が高いことに意識を向け、自分の思考や行動をより良い方向へコントロールする練習をします。'
                ],
            ]
        ]
    ) ?>
    <?php get_template_part(
        'modules/module',
        'course-container',
        [
            'course_detail' => [
                'title' => 'コース',
                'description' => '学院では、目標や課題に合わせて、コースを選べるようになっています。'
            ],
            'course_content' => [
                [
                    'title' => '受験総合コース',
                    'description' => '個別指導・講義動画・AI教材、学習定着度を確認する<span class="font-bold-aq">AQ</span>テストの全てが揃ったコースです。
                    ノウハウを結集した目標別のコース設計によって、学習の効果をより高めます。',
                    'course' => 'Course01',
                    'description_size' => false,
                    'list_item' => [
                        [
                            'title' => '高校1年生',
                            'content' => [
                                'ハイレベル国公立大コース',
                                '国公立大コース',
                                'ハイレベル私立大コース',
                                '医学部コース'
                            ]
                        ],
                        [
                            'title' => '高校2年生・高校3年生',
                            'content' => [
                                '難関国公立大コース',
                                '国公立大コース',
                                '早慶上理コース',
                                'GMARCHコース',
                                '成成明学・四工大・日東駒専コース',
                                '私立大コース',
                                '医学部コース',
                                '歯・薬・獣医学部コース',
                                '看護医療系短大・専門学校コース',
                            ]
                        ],
                    ],
                ],
                [
                    'title' => '単科コース',
                    'description' => '自分の目標や生活リズムに合わせて、科目や通塾回数を選ぶことができるコースです。
                    オプションでAI教材・講義動画を利用することもできます。',
                    'course' => 'Course02',
                    'description_size' => true,
                    'list_item' => [
                        [
                            'title' => '選べる個別指導形式',
                            'content' => [
                                '解説＋演習で定着度アップ！『１対２の個別指導』',
                                '集中的に苦手を克服！『１対１の個別指導』',
                            ]
                        ],
                        [
                            'title' => '選べる通塾回数',
                            'content' => [
                                '週１回から受講可能です。',
                            ]
                        ],
                        [
                            'title' => '選べるオプション',
                            'content' => [
                                '学力や目標に応じて、AI教材や講義動画をセットにすることができます。',
                            ]
                        ],
                    ],
                ],
            ],
        ]
    ) ?>

    <?php
    get_template_part('modules/module', 'voice', [
        'category' => '高校生',
        'record-header' => [
            'content3-aq-text' => 'AQ',
            'content3-text' => '学院に通う利用者の声'
        ]
    ]);
    ?>
    <?php get_template_part('modules/module', 'trial-footer-all') ?>
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