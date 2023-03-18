<footer>
    <div class="footer">
        <div class="footer-container">
            <div class="footer-container__header">
                <?php foreach ($args['box-item'] as $item) : ?>
                    <div class="footer-top__item <?= !empty($item['bg-color']) ? $item['bg-color'] : '' ?>">
                        <?php if (isset($item['image'])) : ?>
                            <div class="footer-top__image">
                                <img src="<?= $item['image'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <div class="footer-top__item-text">
                            <span><?= $item['title'] ?></span>
                        </div>
                        <div class="footer-top__item-more"><a href="<?= $item['href'] ?>"><?= $item['btn'] ?><span>→</span></a></div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php if ($args['display']) { ?>
                <div class="footer-container__content">
                    <div class="footer-content">
                        <div class="footer-content__item">
                            <div class="footer-content__left">
                                <div>
                                    <h4>お問い合わせ</h4>
                                    <p>気軽にお問い合わせください。</p>
                                    <a href="/contact">
                                        <div><img width="18" src="<?php echo get_template_directory_uri() ?>/dist/images/common/mail_icon.png" alt=""></div>
                                        お問い合わせ
                                        <span>→</span>
                                    </a>
                                </div>
                                <div class="footer-content__box">CONTACT</div>
                            </div>
                        </div>
                        <div class="footer-content__item">
                            <div class="footer-content__right">
                                <div>
                                    <h4>公式<span>LINE</span></h4>
                                    <p>LINEでのお問い合わせにもご対応しています。</p>
                                    <a href="https://lin.ee/k0zAu8t" target=“_blank”>
                                        <div>
                                            <img width="20" src="<?php echo get_template_directory_uri() ?>/dist/images/common/line_icon.png" alt="">
                                        </div>
                                        友だち追加
                                        <span>→</span>
                                    </a>
                                </div>
                                <div class="footer-content__box">OFFICIAL
                                    <br>
                                    LINE ACCOUNT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</footer><!-- #colophon -->