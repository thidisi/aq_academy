<div class="step-container trial-step__type-2">
    <div class="step-title">
        <h3>
            <div class="title-text"><?= $args['title'] ?></div>
            <div class="step-number eng-font-bold sp">
                STEP<?= $args['step'] ?>
            </div>
        </h3>
        <div class="step-title__description">
            <?= $args['description'] ?>
        </div>
    </div>
    <div class="step-content-wrapper">
        <div class="step-number eng-font-bold pc">
            STEP<?= $args['step'] ?>
        </div>
        <div class="step-content">
            <div class="step-content__list">
                <div class="list-image">
                    <img src="<?= get_template_directory_uri() ?>/dist/images/trial/assets_trial04.png" class="img-fluid" alt="">
                </div>
                <div class="list-items">
                    <?php foreach ($args['content'] as $item) : ?>
                        <div class="item-content">
                            <div class="item-content__image">
                                <img src="<?= get_template_directory_uri() ?>/dist/images/trial/assets_checkbox.png" class="img-fluid" alt="">
                            </div>
                            <div class="item-content__text">
                                <?= $item ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if (isset($args['image'])) : ?>
                <div class="step-content__image">
                    <img src="<?= get_template_directory_uri() ?>/dist/images/trial/<?= $args['image'] ?>" class="img-fluid" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>