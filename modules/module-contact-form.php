<div class="contact">
    <div class="contact-header">
        <div class="contact-header__content1">
            <h5><?php echo $args['contact-header']['title'] ?></h5>
        </div>
        <div class="contact-header__content2 m-auto">
            <h5><?php echo $args['contact-header']['text'] ?></h5>
        </div>
        <div class="contact-header__content3 m-auto">
            <h5><?php echo $args['contact-header']['subtext'] ?></h5>
            <!-- <h5>（<?php echo $args['contact-header']['subtext-in-bracket'] ?>）</h5> -->
        </div>
    </div>


    <?php echo apply_shortcodes('[contact-form-7 title="contact_form1"]'); ?>
</div>