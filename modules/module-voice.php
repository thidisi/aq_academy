<?php
$params = [
    'post_type' => 'voice',
    'posts_per_page' => -1,
    'post_status'   => 'publish',
];

if (isset($args['category'])) {
    $params['tax_query'] = [
        [
            'taxonomy' => 'voice_category',
            'field' => 'slug',
            'terms' => $args['category']
        ]
    ];
}

$getVoice = new WP_query($params);
if ($getVoice->have_posts()) {
?>
    <div class="voice" id="voice">
        <div class="voice-header">
            <div class="voice-header__content1">
                <h5>VOICE</h5>
            </div>
            <div class="voice-header__content2">
                <h5>VOICE</h5>
            </div>
            <div class="voice-header__content3">
                <h5><span><?php echo $args['record-header']['content3-aq-text'] ?></span><?php echo $args['record-header']['content3-text'] ?></h5>
            </div>
        </div>

        <div class="voice-body">
            <?php
            if ($getVoice->have_posts()) {
                while ($getVoice->have_posts()) {
                    $getVoice->the_post();
                    $voice = get_post();
            ?>
                    <div class="voice-body__element">
                        <div class="voice-body__element-picture">
                            <?php
                            if (has_post_thumbnail()) :
                                the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title()));
                            else :
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/thumbnail.png" alt="no image" class="img-fluid">
                            <?php
                            endif;
                            ?>
                            <div class="voice-body__element-picture-description">
                                <p>
                                <?php the_title(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="voice-body__element-info">
                            <div class="voice-body__element-info-description">
                                <p><?php the_content() ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
<?php
}
?>