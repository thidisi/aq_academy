<?php
$news_category = get_category_by_slug('news');
$posts = array();
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'category__in' => array($news_category->term_id),
);
$posts = get_posts($args);
?>
<div class="top-news">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title eng-font-bold">NEWS</h2>
        </div>
    </div>
    <div class="news-list">
        <?php foreach ($posts as $post) : ?>
            <div class="news-item">
                <span class="news-item__date eng-font-light">
                    <?php echo get_the_date('Y.m.d', $post->ID); ?>
                </span>
                <span class="news-item__title">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php echo $post->post_title; ?>
                    </a>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="btn-more">
        <a href="<?php echo get_category_link($news_category->term_id); ?>" class="eng-font-medium">
            MORE
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </span>
        </a>
    </div>
</div>