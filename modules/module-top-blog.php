<?php
$news_category = get_category_by_slug('news');
$posts = [];
$post_per_page = 6;
if (wp_is_mobile()) {
    $post_per_page = 4;
}
if ($news_category) {
    $args = [
        'posts_per_page' => $post_per_page,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'category__not_in' => [$news_category->term_id],
    ];
} else {
    $args = [
        'posts_per_page' => $post_per_page,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    ];
}
$posts = get_posts($args);
?>
<div class="top-blog">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title eng-font-bold">BLOG</h2>
        </div>
    </div>
    <div class="blog-list">
        <?php foreach ($posts as $post) : ?>
            <div class="blog-content">
                <div class="blog-content__img">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php
                        if (has_post_thumbnail($post->ID)) {
                            echo get_the_post_thumbnail($post->ID, 'medium');
                        } else {
                            $no_image = get_template_directory_uri() . '/dist/images/thumbnail.png';
                            echo '<img src="' . $no_image . '" class="img-fluid" alt="no image" />';
                        }
                        ?>
                    </a>
                    <div class="list-category">
                        <?php
                        $categories = get_the_category($post->ID);
                        foreach ($categories as $category) {
                            echo '<span class="list-category__item eng-font-medium">' . $category->name . '</span>';
                        }
                        ?>
                    </div>
                </div>
                <div class="blog-content__title">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php echo $post->post_title; ?>
                    </a>
                    <div class="content-date eng-font-light">
                        <?php echo get_the_date('Y.m.d', $post->ID); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="btn-more">
        <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="eng-font-medium">
            MORE
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </span>
        </a>
    </div>
</div>