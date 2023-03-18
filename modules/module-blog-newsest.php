<div class="c-box-item-right c-box-post-newsest pb-30">
    <h2 class="c-title-box ">
        最新の記事
    </h2>
    <?php
    $args = array(
        'post_status' => 'publish',
        'showposts' => 6,
        'post_type' => 'post',
    );
    $getposts = new WP_query();
    $getposts->query($args); ?>
    <?php global $wp_query;
    $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class=" c-item">
            <a href="<?= the_permalink(); ?> " title="<?= the_title(); ?>" class="">
                <div class="c-item-summary d-flex">
                    <div class="thumbnail-wrapper">
                        <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title()));
                        else :
                        ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/thumbnail.png" alt="no image" class="img-fluid">
                        <?php
                        endif;
                        ?>
                    </div>
                    <div class="c-title-date">
                        <div class="c-title"><?= get_the_title() ?></div>
                        <div class="c-date"><?= get_the_date('Y/m/d'); ?></div>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>