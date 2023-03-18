<div class="page-module__course">
    <div class="course-container row">
        <div class="course-detail col-md-3">
            <div>
                <h2 class="course-detail__title">
                    <?php echo $args['course_detail']['title'] ?>
                </h2>
                <div class="course-detail__content">
                    <p><span class="font-bold-aq">AQ</span><?php echo $args['course_detail']['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="course-content">
                <?php foreach ($args['course_content'] as $item) : ?>
                    <div class="course-content__item">
                        <div class="course-content__item--top">
                            <div class="course-content__item--title">
                                <div><img src="<?php echo get_template_directory_uri() ?>/dist/images/course_common/line.png" alt=""></div>
                                <h4><?= $item['title'] ?></h4>
                            </div>
                            <div class="course-content__item--description  <?= $item['description_size'] ? 'description-size-custom' : '' ?>"><p><?= $item['description'] ?></p></div>
                            <h3><?= $item['course'] ?></h3>
                        </div>
                        <?php if (count($item['list_item']) > 0 ) { ?>
                        <div class="course-content__item--bottom">
                            <div class="course-content__science--content <?= !empty($item['row']) ? 'course-row-2' : '' ?>">
                                <?php foreach ($item['list_item'] as $each) : ?>
                                    <div class="course-content__science--list">
                                        <div class="course-content__science--title">
                                            <div><img src="<?php echo get_template_directory_uri() ?>/dist/images/course_common/checkbox.png" alt=""></div>
                                            <span><?= $each['title'] ?></span>
                                        </div>
                                        <ul>
                                            <?php foreach ($each['content'] as $value) : ?>
                                                <li>
                                                    <p><?= $value ?></p>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</div>