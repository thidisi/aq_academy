<?php

$paged = 1;
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
}
$posts_per_page = get_option("posts_per_page");  //posts per page
$big = 999999999;

$cat = get_category_by_slug(get_query_var('category_name'));
$cat_id = $cat->term_id;

$arg = array(
    'post_status'   => 'publish',
    'post_type'     => 'post',
    'numberposts'   => -1,
    'posts_per_page' => $posts_per_page,
    'paged'         => $paged,
    'cat'           => $cat_id
);

$getposts = new WP_Query($arg);

while ($getposts->have_posts()) : $getposts->the_post();
    $cat = get_the_category(get_the_id());
?>
    <div class="line">
        <hr>
    </div>
    <div class="c-item c-item-blog lg-50 mb-50 mt-50">
        <div class="c-title-date">
            <div class="c-date"><?= get_the_date('Y/m/d'); ?></div>
            <h3 class="c-title"><?= get_the_title() ?></h3>
            <div class="description pb-1"><?php the_excerpt() ?></div>
            <div class="button"><a href="<?php the_permalink() ?>"><span class="icon">〉</span>　詳しくはこちら</a></div>
            <?php
            single_term_title('', false);
            ?>
        </div>
        <div class="c-item-image position-relative text-right">
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
            <div class="cat-names">
                <?php
                foreach ($cat as $item) {
                ?>
                    <a class="cat-name text-white" href="<?php echo get_category_link($item->term_id); ?>"> <?= $item->name ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
endwhile;
paginate_paged($getposts);
?>
