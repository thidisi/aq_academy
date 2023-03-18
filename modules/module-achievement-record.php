<div class="record">
    <div class="record-header">
        <div class="record-header__content1">
            <h5><?php echo $args['record-header']['content1'] ?></h5>
        </div>
        <div class="record-header__content2">
            <h5><?php echo $args['record-header']['content2'] ?></h5>
        </div>
        <div class="record-header__content3">
            <h5><?php echo $args['record-header']['content3'] ?></h5>
        </div>
    </div>
    <div class="record-body">
        <?php
        foreach ($args['record-elements'] as $element) {
        ?>
            <div class="record-body__element">
                <div class="record-body__element-title">
                    <h5><?= $element['title'] ?></h5>
                </div>
                <div class="record-body__element-description">
                    <h5><?= $element['description'] ?></h5>
                </div>
                <div class="record-body__element-content">
                    <div class="record-body__element-content-list">
                        <?php
                        foreach ($element['content'] as $item) {
                            if ($item == '') { ?>
                                <p><?= $item ?></p>
                            <?php } else { ?>
                                <h5><?= $item ?></h5>
                        <?php }
                        } ?>
                    </div>
                    <div class="record-body__element-content-footer">
                        <h5>※一部抜粋</h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>