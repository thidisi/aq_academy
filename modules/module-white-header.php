    <div class="white-header">
        <h1 class="header-text">
            <?php echo $args['header-text'] ?>
        </h1>
        <?php if (isset($args['header-subtext'])) : ?>
            <div class="header-subtext">
                <span class="font-medium-aq"><?php echo $args['font-bold-aq'] ?></span><?php echo $args['header-subtext'] ?>
            </div>
        <?php endif; ?>
        <div class="text-absolute">
            <span><?php echo $args['page-name'] ?></span>
        </div>
    </div>