<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AQ_Academy
 */

?>

<!-- Swiper -->
</div><!-- #page -->
<div class="footer-container__footer">
    <div id="scroll-top" class="footer-container__footer--box position-relative" title="Scroll Top">
        <span>→</span>
    </div>
    <div class="footer-container__logo">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" />
    </div>
    <div class="footer-container__copyright">
        <span>©︎2022 AQ学院</span>
    </div>
</div>
<div class="btn-fixed">
    <div>
    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">
        <button>
            <p>特別無料体験授業
                実施中！</p>
            <span>→</span>
        </button>
    </a>
    </div>
</div>
<div class="overlay-header"></div>
<?php wp_footer(); ?>

</body>

</html>