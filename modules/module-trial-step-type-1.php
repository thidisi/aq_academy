<div class="step-container trial-step__type-1">
    <div class="step-title">
        <h3>
            <div class="title-text"><?= $args['title'] ?></div>
            <div class="step-number eng-font-bold sp">
                STEP<?= $args['step'] ?>
            </div>
        </h3>
        <?php if (isset($args['image'])) : ?>
            <div class="step-title__image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/trial/<?= $args['image'] ?>" class="img-fluid" alt="">
            </div>
        <?php endif; ?>
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
                <?php foreach ($args['content'] as $item) : ?>
                    <?php if (isset($item['teacher'])) : ?>
                        <div class="content-item item-teacher">
                            <div class="content-item__image">
                                <img src="<?= get_template_directory_uri() ?>/dist/images/trial/teacher.svg" class="img-fluid" alt="">
                                <div class="position">先生</div>
                            </div>
                            <div class="content-item__text"><?= $item['teacher'] ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($item['student'])) : ?>
                        <div class="content-item item-student">
                            <div class="content-item__text"><?= $item['student'] ?></div>
                            <div class="content-item__image">
                                <img src="<?= get_template_directory_uri() ?>/dist/images/trial/student.svg" class="img-fluid" alt="">
                                <div class="position">生徒</div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>