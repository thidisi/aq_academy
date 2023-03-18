<?php

$params = [
    'post_type' => 'faq',
    'posts_per_page' => -1,
];

$listPost = get_posts(
    $params
);
?>
<div class="c-box__faq lg-100 pb-lg-50 pb-30 lg-40">
    <h2 class="d-none">よくある質問</h2>
    <h3 class="d-none">よくある質問</h3>
    <div class="container">
        <?php
        foreach ($listPost as $item) {
        ?>
            <div class="c-item pl-50 pr-4 lg-40">
                <div class="c-btn-collapse position-relative collapsed" data-bs-toggle="collapse" data-bs-target="#faq-answer<?= $item->ID; ?>" aria-expanded="false" aria-controls="multiCollapseExample2">
                    <span class="c-title-q"><img src="<?php echo get_template_directory_uri() ?>/build/images/faq/square_faq.svg" alt="icon"></span>
                    <span class="c-title"><?= $item->post_title; ?></span>
                    <i class="c-plus"></i>
                    <i class="c-minus"></i>
                </div>
                <div class="collapse" id="faq-answer<?= $item->ID; ?>">
                    <div class="card-body item-answer border-0 align-items-center">
                        <div class="c-answer ml-10">
                            <?= $item->post_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>