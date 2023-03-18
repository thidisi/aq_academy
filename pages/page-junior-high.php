<?php /* Template Name: Page Junior High */ ?>
<?php get_header(); ?>
<main class="main">
    <?php get_template_part(
        'modules/module',
        'course-banner',
        [
            'banner' => '/build/images/junior/mv.jpg',
            'images' => '/build/images/junior/illustration.png',
            'title1' => '中学生コース',
            'title1_size' => true,
            'image-size' => true,
            'title2' => 'Junior High ',
        ]
    ) ?>
    <?php get_template_part(
        'modules/module',
        'course-specialty',
        [
            'specialty' => true,
            'special_label' => [
                'title' => '特徴',
                'description' => '学力を向上させながら、自身を俯瞰視するメタ認知力も鍛えることによって、学びの質を高めていきます。'
            ],
            'special_items' => [
                [
                    'title' => '各学校に対応したテスト対策',
                    'images1' => '/build/images/junior/feature1.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '公立中に対しては、単元別に 到達度チェックを行い、効果的に対策します。私立中に対しては、学校指定教材を課題管理表に基づいて対策します。',
                    'logo' => true,
                ],
                [
                    'title' => '学習内容・学習法
                の最適化',
                    'images1' => '/build/images/junior/feature2.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '部活動や習い事をしながら、効率的に予習・復習できるように、試行錯誤しながら自分に合った学習スタイルを確立していきます。',
                    'logo' => true,
                ],
                [
                    'title' => '自身を俯瞰視する
                メタ認知力の向上',
                    'images1' => '/build/images/junior/feature3.png',
                    'images1_size' => true,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '対話や書き込みシートによって、優先度が高いことに意識を向け、自分の思考や行動をより良い方向へコントロールする練習をします。',
                    'logo' => true,
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
                    'description_size' => false,
                    'course' => 'Course01',
                    'row' => true,
                    'list_item' => [
                        [
                            'title' => '中学1年生',
                            'content' => [
                                'ハイレベル県立受験コース',
                                '県立受験コース',
                                'ハイレベル私立受験コース',
                                '私立受験コース'
                            ]
                        ],
                        [
                            'title' => '中学2年生・3年生',
                            'content' => [
                                '川越・川越女子・所沢北コース',
                                '所沢・川越南コース',
                                '県立受験コース',
                                '難関私立受験コース',
                                '私立受験コース '
                            ]
                        ],
                    ],
                ],
                [
                    'title' => '単科コース',
                    'description' => '自分の目標や生活リズムに合わせて、科目や通塾回数を選ぶことができるコースです。
                    オプションでAI教材・講義動画を利用することもできます。',
                    'description_size' => true,
                    'course' => 'Course02',
                    'row' => false,
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
        'category' => '中学生',
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