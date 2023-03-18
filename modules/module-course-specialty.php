<div class="specialty <?= $args['specialty'] ? 'specialty-custom' : '' ?>">
        <div class="specialty-detail">
            <h2 class="specialty-title"><?php echo $args['special_label']['title'] ?></h2>
            <span class="line"></span>
            <div class="specialty-content"><?php echo $args['special_label']['description'] ?></div>
        </div>
        <div class="specialty-item">
            <div class="specialty-item-card">
            <?php
                foreach ($args['special_items'] as $item) {
                ?>
                  <div class="specialty-card-left">
                      <div class="specialty-card-top">
                          <div class="specialty-group">
                              <h3><?= $item['title'] ?>  </h3>
                              <div class="specialty-logo <?= $item['images1_size'] ? 'images-size' : '' ?>">
                                  <img src="<?php echo get_template_directory_uri() ?><?= $item['images1'] ?>" alt="">
                              </div>
                          </div>
                          <div class="specialty-triangle">
                              <img src="<?php echo get_template_directory_uri() ?><?= $item['images2'] ?>" alt="">
                          </div>
                      </div>
                      <p class="specialty-card-bottom"><?= $item['description'] ?></p>
                  </div>
                <?php
                }
                ?>
                <!-- <div class="specialty-card-center">
                    <div class="specialty-card-top">
                        <div class="specialty-group">
                            <h3>家庭学習の習慣化</h3>
                            <div class="specialty-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/build/images/elementary/feature2.png" alt="">
                            </div>
                        </div>
                        <div class="specialty-triangle">
                            <img src="<?php echo get_template_directory_uri() ?>/build/images/elementary/Polygon 2.svg" alt="">
                        </div>
                    </div>
                    <p class="specialty-card-bottom">一人ひとりの特性や生活リズム、ご家庭の方針に合った宿題を出すことによって、家庭学習の習慣化を実現します。</p>
                </div>
                <div class="specialty-card-right">
                    <div class="specialty-card-top">
                        <div class="specialty-group">
                            <h3>中学受験のフォロー</h3>
                            <div class="specialty-logo">
                                <img src="<?php echo get_template_directory_uri() ?>/build/images/elementary/feature3.png" alt="">
                            </div>
                        </div>
                        <div class="specialty-triangle">
                            <img src="<?php echo get_template_directory_uri() ?>/build/images/elementary/Polygon 2.svg" alt="">
                        </div>
                    </div>
                    <p class="specialty-card-bottom">個別指導だからこそ可能な双方向型の学習でフォローします。学習状況や模試の結果をもとに、学習内容をブラッシュアップします。</p>
                </div> -->
            </div>
        </div>
    </div>