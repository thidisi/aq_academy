
<div class="c-box-item-right c-box-tags">
    <h2 class="c-title-sidebar">
        カテゴリ
    </h2>
    <?php 
    $categories = get_categories();
        ?>
    <ul class="c-side-bar-tag">
        <?php	foreach ($categories as $item) {
            ?>
        <li class="c-item ">
            <a class="c-link text-white" href="<?php echo get_category_link($item->term_id); ?>"> <?= $item->name ?></a>
        </li>
            
        <?php }	?>
    </ul>
</div>
