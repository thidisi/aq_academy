<div class="banner">
    <div class="banner-images1">
        <img src="<?php echo get_template_directory_uri() ?><?php echo $args['banner']?>" alt="">
    </div>
    <div class="banner-images2 <?= $args['image-size'] ? 'image-size' : '' ?>">
        <img src="<?php echo get_template_directory_uri() ?><?php echo $args['images']?>" alt="">
    </div>
    <div class="banner-content1 ">
        <h1 ><?php echo $args['title2']?></h1>
    </div>
    <div class="banner-content2 <?= $args['title1_size'] ? 'title-size' : '' ?>">
        <h3><?php echo $args['title1']?></h3>
    </div>
</div>