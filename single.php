<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AQ_Academy
 */

get_header();
?>

<main class="c-main-page__blog">
	<?php
	get_template_part(
		"modules/module",
		"white-header",
		[
			'header-text'       => 'ブログ',
			'font-bold-aq'      => 'AQ',
			'header-subtext'    => '学院の日常や、学びのタネになるスタッフコラムを紹介します。',
			'page-name'         => 'BLOG'
		]
	);
	?>

	<div class="container">
		<div class="c-wrap-box-blog">
			<div class="row">
				<div class="col-lg-8">
					<div class="c-box-content">
						<div class="image-box">
							<?php
							if (has_post_thumbnail()) :
								the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title()));
							else :
							?>
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/thumbnail.png" alt="no image" class="img-fluid">
							<?php
							endif;
							?>
						</div>
						<div class="c-date-post"><?= get_the_date('Y.m.d'); ?></div>
						<div class="c-title-post mt-4 pb-20 pb-lg-40">
							<?php the_title('<h1>','</h1>'); ?>
						</div>
						
						<div class="c-content-detail">
							<?php
							echo get_the_content();
							?>
						</div>
						<div class="content-footer">
							<a href="<?php echo AQ_Academy_get_prev_blog_url() ?>" class="button-footer button-prev">
								<img src="<?php echo get_template_directory_uri() ?>/build/images/blog_detail/icon_prev.svg" alt="icon">
								<span>前の記事</span>
							</a>
							<a href="<?php echo AQ_Academy_get_next_blog_url() ?>" class="button-footer button-next bg-white">
								<span>次の記事</span>
								<img src="<?php echo get_template_directory_uri() ?>/build/images/blog_detail/icon_next.svg" alt="icon">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="c-col-right">
						<?php
						get_template_part("modules/module", "blog-newsest");
						get_template_part('modules/module', "sidebar-tag");
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('modules/module', 'trial-footer-all'); ?>
</main>
<!-- box footer -->
<?php get_template_part(
	'modules/module',
	'footer-box',
	[
		'box-item' => [
			[
				'title' => '合格実績',
				'href' => '/achievement#voice',
				'btn' => 'MORE',
				'image' => get_template_directory_uri() . '/dist/images/review.jpg',
			],
			[
				'title' => 'FAQ',
				'href' => '/trial-class',
				'btn' => 'MORE',
				'bg-color' => 'bg-footer-item',
				'image' => get_template_directory_uri() . '/dist/images/faq.jpg',
			],
		],
		'display' => true,
	]
) ?>
<?php
get_footer();
