<div class="trial-step">
    <div class="trial-step__header">
        <h2 class="eng-font-semi-bold">STEP</h2>
        <p>体験授業の流れ</p>
    </div>
    <?php get_template_part('modules/module', 'trial-step-type-1', [
        'step' => '01',
        'title' => '<div class="title-wrap"><span>ヒアリング＆</span><span>アイスブレイク</span></div>',
        // 'image' => 'step1.jpg',
        'description' => '<p>アンケートをもとに、ヒアリングとアイスブレイクを行います。</p><p>&nbsp</p><p>好きな教科や不安な教科だけでなく、興味・関心があることにも触れ、現状とともに『強みの源』となる資質も確認していきます。</p>',
        'content' => [
            [
                'teacher' => '家でゆっくりしているときは、何をして過ごしていることが多い？',
                'student' => 'ゲームの動画を見ていることが多いですね。'
            ],
            [
                'teacher' => '面白い中継とかすごいプレイとか、見るとはまっちゃう動画あるよね。',
                'student' => 'そうなんです。好きな動画だと、ついつい長い時間見ちゃって。'
            ],
            [
                'teacher' => '好きなことに長時間集中できるって、実はすごいことだよね。'
            ]
        ]
    ]) ?>
    <?php get_template_part('modules/module', 'trial-step-type-1', [
        'step' => '02',
        'title' => '各教科の授業',
        // 'image' => 'step2.jpg',
        'description' => '<p>習熟度を確認しながら、各教科の授業を進めていきます。</p><p>基本的な内容から始めることによって、要点をおさえながら、どこでつまずいているのかも確認することができます。</p>',
        'content' => [
            [
                'teacher' => 'いつ頃から英語が苦手だと感じるようになったのかな？',
                'student' => '中2のころからです。'
            ],
            [
                'teacher' => '中２って、助動詞や不定詞とか、動詞の使い方について色々習うよね。このあたりはどんな感じ？',
                'student' => 'そのあたりから分からなくなってきて、あまり自信がないです。'
            ],
            [
                'teacher' => '<p class="pr-pt">じゃあ、動詞の使い方の基本から確認していこう。</p><p>過去形は過去のことを表すだけじゃないとか、知っておくと応用がきく内容も伝えていくからね。</p>'
            ]
        ]
    ]) ?>
    <?php get_template_part('modules/module', 'trial-step-type-2', [
        'step' => '03',
        'title' => '<p>教務チームによる</p><p>分析&報告書の作成</p>',
        'description' => '<p>ヒアリングと各教科の授業をもとに、教務チームが分析を行い、課題を抽出すると同時に具体的な解決策も考えます。</p><p>そして、それらを体験授業報告書(分析書)としてまとめます。</p>',
        'content' => [
            'ヒアリングと授業を通して見えてきた課題',
            '課題解決の道筋',
            '具体的な行動指針',
            '<span class="font-bold-aq">AQ</span>学院での最適な学習法'
        ],
        'image' => 'report.png'
    ]) ?>
    <?php get_template_part('modules/module', 'trial-step-type-3', [
        'step' => '04',
        'title' => '三者面談',
        'image' => 'step1.jpg',
        'description' => '<p>後日、三者面談で、課題とその解決策を共有します。</p><p>一つ一つの課題に対する具体的な解決策を報告書にまとめているので、ご家庭での話し合いの参考にしていただくことができます。</p>',
        'content' => [
            '課題解決のためにすぐにすべきこと',
            '目標に対して今後必要になってくること',
            '<span class="font-bold-aq">AQ</span>学院のコース'
        ],
    ]) ?>
</div>