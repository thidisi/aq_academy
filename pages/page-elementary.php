<?php /* Template Name: Page Elementary */ ?>
<?php get_header(); ?>
<main class="main">
    <?php get_template_part(
        'modules/module',
        'course-banner',
        [
            'banner' => '/build/images/elementary/mv.jpg',
            'images' => '/build/images/elementary/illustration.png',
            'title1' => '小学生コース',
            'title1_size' => false,
            'image-size' => false,
            'title2' => 'Elementary',
        ]
    ) ?>
    <?php get_template_part(
        'modules/module',
        'course-specialty',
        [
            'specialty' => false,
            'special_label' => [           
                'title' => '特徴',
                'description' => '基礎学力や応用力を向上させたり、プログラミング学習で論理的思考力を鍛えたりして、学びの土台をつくります。'
            ],
            'special_items' => [
                [
                    'title' => '基礎学力の向上',
                    'images1' => '/build/images/elementary/feature1.png',
                    'images1_size' => false,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '読み・書き・計算などの基礎学力は、今後の学習に大きな影響を与えます。定期的に演習することで、基礎学力の向上を図ります。'
                ],
                [
                    'title' => '家庭学習の習慣化',
                    'images1' => '/build/images/elementary/feature2.png',
                    'images1_size' => false,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '一人ひとりの特性や生活リズム、ご家庭の方針に合った宿題を出すことによって、家庭学習の習慣化を実現します。'
                ],
                [
                    'title' => '中学受験のフォロー',
                    'images1' => '/build/images/elementary/feature3.png',
                    'images1_size' => false,
                    'images2' => '/build/images/elementary/Polygon 2.svg',
                    'description' => '個別指導だからこそ可能な双方向型の学習でフォローします。学習状況や模試の結果をもとに、学習内容をブラッシュアップします。'
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
                    'title' => '単科コース',
                    'description' => '自分の目標や生活リズムに合わせて、科目や通塾回数を選ぶことができるコースです。
                    オプションでAI教材・講義動画を利用することもできます。',
                    'description_size' => false,
                    'course' => 'Course01',
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
                [
                    'title' => 'プログラミングコース',
                    'description' => '新大学入試を見据えた本格的なカリキュラムで、ゲームを作りながらプログラミングの基礎を学ぶコースです。夢中になって楽しく学習を進められるだけでなく、論理的思考力や座標・角度などの数学的センスも身につけられます。',
                    'description_size' => false,
                    'course' => 'Course02',
                    'list_item' => [],
                ],
            ],
        ]
    ) ?>
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