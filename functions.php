<?php

/**
 * AQ Academy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AQ_Academy
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aq_academy_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'custom-post-type-name',
    ));

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        ['primary-menu' => esc_html__('Primary Menu', 'AQ_Academy')]
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'aq_academy_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aq_academy_content_width()
{
    $GLOBALS['content_width'] = apply_filters('aq_academy_content_width', 640);
}
add_action('after_setup_theme', 'aq_academy_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aq_academy_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'aq-academy'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'aq-academy'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'aq_academy_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function aq_academy_scripts()
{
    wp_enqueue_style('aq_academy-style', get_template_directory_uri() . '/dist/css/main.css', [], _S_VERSION);
    wp_enqueue_style('aq_academy-style-vendor', get_template_directory_uri() . '/dist/css/vendor.css', [], _S_VERSION);
    wp_enqueue_script('aq_academy-js', get_template_directory_uri() . '/dist/js/main.js', ['jquery'], _S_VERSION, true);
    wp_enqueue_script('aq_academy-js-custom', get_template_directory_uri() . '/dist/js/custom.js', ['aq_academy-js']);
}
add_action('wp_enqueue_scripts', 'aq_academy_scripts');

/**
 * get the title
 */
function AQ_Academy_get_the_title($title, $max_length = 40)
{
    if (mb_strlen($title) > $max_length) {
        return mb_substr($title, 0, $max_length) . '...';
    }

    return $title;
}

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

if (!function_exists("paginate_paged")) {
    function paginate_paged(Object $query)
    {
        $icon_prev = '<svg xmlns="http://www.w3.org/2000/svg" width="12.623" height="19.216" viewBox="0 0 12.623 19.216">
            <path id="Path_442" data-name="Path 442" d="M22876.594,1363l-6.594,6.1,6.594,6.048" transform="translate(-22867.502 -1359.467)" fill="none" stroke="#29abe2" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
        </svg>
        ';
        $icon_next = '<svg xmlns="http://www.w3.org/2000/svg" width="12.625" height="19.216" viewBox="0 0 12.625 19.216">
            <path id="Path_442" data-name="Path 442" d="M22870,1363l6.594,6.1-6.594,6.048" transform="translate(-22866.469 -1359.467)" fill="none" stroke="#29abe2" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
        </svg>';

        $paged = 1;
        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } elseif (get_query_var('page')) {
            $paged = get_query_var('page');
        }

        if ($query) {
            $big = 999999999;
            $total = isset($query->max_num_pages) ? $query->max_num_pages : 0;
            $html = "<div class='c-box-pagination'>";
            $html .= paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'prev_text' => '<',
                'next_text' => '>',
                'dot_text'  => "...",
                'current'   => max(1, $paged),
                'total'     => $total
            ));
            $html .= "</div>";
            echo $html;
        }
    }
}

/**
 * get prev post url
 */
function AQ_Academy_get_prev_blog_url()
{
    $prev_post = get_previous_post(true);
    if ($prev_post) {
        return get_permalink($prev_post->ID);
    }
    return false;
}

/**
 * get prev post url
 */
function AQ_Academy_get_next_blog_url()
{
    $next_post = get_next_post(true);
    if ($next_post) {
        return get_permalink($next_post->ID);
    }
    return false;
}

/**
 * get page url by path
 */
function AQ_Academy_get_page_url_by_path($path)
{
    $page = get_page_by_path($path);
    if ($page) {
        return get_permalink($page->ID);
    }
    return false;
}
add_theme_support('post-thumbnails');
add_post_type_support('voice', 'thumbnail');
/**
 * FAQ Post Type
 */
function create_post_type()
{
    register_post_type(
        'faq',
        [
            'labels' => [
                'name' => __('FAQ'),
                'singular_name' => __('FAQ'),
            ],
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-chat',
            'rewrite' => ['slug' => 'faq-post'],
            'menu_position' => 4,
            'supports' => ['title', 'editor'],
        ]
    );

    register_post_type(
        'voice',
        [
            'labels' => [
                'name' => __('Voice'),
                'singular_name' => __('Voice'),
            ],
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-microphone',
            'rewrite' => ['slug' => 'voice-post'],
            'menu_position' => 5,
            'supports' => ['title', 'editor'],
        ]
    );

    register_taxonomy(
        'voice_category',
        'voice',
        [
            'label' => 'Voice Category',
            'hierarchical' => true,
            'show_admin_column' => true,
            'rewrite' => ['slug' => 'voice-category'],
        ]
    );
}

add_action('init', 'create_post_type');

/**
 * get voice category
 */
function get_voice_category($post_id)
{
    $terms = get_the_terms($post_id, 'voice_category');
    if ($terms) {
        return $terms[0]->name;
    }
    return false;
}

/**
 * get voice by category
 */
function get_voice_by_category($category) {
    $args = [
        'post_type' => 'voice',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'voice_category',
                'field' => 'slug',
                'terms' => $category,
            ],
        ],
    ];
    $query = new WP_Query($args);
    return $query;
}

/** 
 * Change Contact Form 7 email recipient based on form data
 * Send mail manually by using wp_mail
 */
function change_contact_email($contact_form)
{
    $submission = WPCF7_Submission::get_instance();
    $posted_data = $submission->get_posted_data();

    $base_on = 'desired-classroom';
    $data = $posted_data[$base_on];

    if (isset($data) && empty($data)) {
        return;
    }

    $data = implode(',', $data);

    $recipient_emails = [];

    switch ($data) {
        case '新所沢校':
            $recipient_emails = ['y.iwanaka@manabi-life.co.jp', 'aqgakuin001shin@manabi-life.co.jp'];
            break;
        case '狭山ヶ丘校':
            $recipient_emails = ['y.iwanaka@manabi-life.co.jp', 's.kasahara@manabi-life.co.jp'];
            break;
        default:
            break;
    }

    $form_data = [];
    foreach ($posted_data as $key => $value) {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $form_data[$key] = $value;
    }

    $message = $contact_form->prop('mail');
    $message = $message['body'];

    $message = str_replace('[_site_title]', get_bloginfo('name'), $message);
    $message = str_replace('[_site_url]', get_bloginfo('url'), $message);

    foreach ($form_data as $key => $value) {
        $message = str_replace('[' . $key . ']', $value, $message);
    }

    $subject = $contact_form->prop('mail');
    $subject = $subject['subject'];
    $subject = str_replace('[_site_title]', get_bloginfo('name'), $subject);
    $subject = str_replace('[_site_url]', get_bloginfo('url'), $subject);

    $headers = array('From: ' . get_bloginfo('name') . ' <' . get_bloginfo('admin_email') . '>');

    foreach ($recipient_emails as $to) {
        wp_mail($to, $subject, $message, $headers);
    }

    $to2 = $form_data['email'];

    $message2 = $contact_form->prop('mail_2');
    $message2 = $message2['body'];

    $message2 = str_replace('[_site_title]', get_bloginfo('name'), $message2);
    $message2 = str_replace('[_site_url]', get_bloginfo('url'), $message2);

    foreach ($form_data as $key => $value) {
        $message2 = str_replace('[' . $key . ']', $value, $message2);
    }

    $subject2 = $contact_form->prop('mail_2');
    $subject2 = $subject2['subject'];
    $subject2 = str_replace('[_site_title]', get_bloginfo('name'), $subject2);
    $subject2 = str_replace('[_site_url]', get_bloginfo('url'), $subject2);
    $subject2 = nl2br($subject2);
    
    wp_mail($to2, $subject2, $message2, $headers);
}
add_filter('wpcf7_skip_mail', '__return_true');
add_action('wpcf7_before_send_mail', 'change_contact_email');