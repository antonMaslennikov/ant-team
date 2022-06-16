<?php

/**
 * ant-team.ru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ant-team.ru
 */

if (!function_exists('ant_team_ru_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ant_team_ru_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on ant-team.ru, use a find and replace
         * to change 'ant-team-ru' to the name of your theme in all the template files.
         */
        load_theme_textdomain('ant-team-ru', get_template_directory() . '/languages');

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
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'header-uslugi' => esc_html__('Шапка "услуги"', 'ant-team-ru'),
            'header-blog' => esc_html__('Шапка "публикации"', 'ant-team-ru'),
            'header-info' => esc_html__('Шапка "о нас"', 'ant-team-ru'),
            'footer-info' => esc_html__('Подвал информация', 'ant-team-ru'),
            'footer-uslugi' => esc_html__('Подвал услуги', 'ant-team-ru'),
            'footer-blog' => esc_html__('Подвал публикации', 'ant-team-ru'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('ant_team_ru_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));

        /* Подключаем страницу настроек темы */
        get_template_part('theme-options');
    }
endif;
add_action('after_setup_theme', 'ant_team_ru_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ant_team_ru_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('ant_team_ru_content_width', 640);
}

add_action('after_setup_theme', 'ant_team_ru_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ant_team_ru_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'ant-team-ru'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'ant-team-ru'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ant_team_ru_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ant_team_ru_scripts()
{
    /**
     * css styles
     */
    if (is_single()) {
        wp_enqueue_style('ant-team-ru-use-fontawesome-com', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
        wp_enqueue_style('ant-team-ru-font-awesome', get_template_directory_uri() . '/assets/libs/fontawesome/font-awesome.css');
    }

//    wp_enqueue_style('ant-team-ru-fonts-googleapis-com', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic');

//    if (in_array(get_the_ID(), [2653, 2753, 3896, 3898])) {
//        wp_enqueue_style('ant-team-ru-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
//        wp_enqueue_script('ant-team-ru-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '20151215', true);
//    }

//    wp_enqueue_style('ant-team-ru-datepicker', get_template_directory_uri() . '/assets/libs/airdatepicker/datepicker.min.css');
    wp_enqueue_style('ant-team-ru-main', get_template_directory_uri() . '/assets/main.css', array(), '2.0.1');
//    wp_enqueue_style('ant-team-ru-style', get_stylesheet_uri(),array(),'1.0.0');

    /**
     * JS files
     */
//    wp_enqueue_script('ant-team-ru-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20151215', true);
//    wp_enqueue_script('ant-team-ru-jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '20151215', true);
//    wp_enqueue_script('ant-team-ru-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '20151215', true);

//    wp_enqueue_script('ant-   team-ru-timepicker', get_template_directory_uri() . '/assets/libs/airdatepicker/datepicker.min.js', array(), '20151215', true);

//    if (!is_page(5421)) {
//        wp_enqueue_script('ant-team-ru-fontawesome', get_template_directory_uri() . '/assets/libs/fontawesome-pro/fontawesome-all.js', array(), '20151215', true);
//    } else {
//        wp_enqueue_script('ant-team-ru-fontawesome', 'https://use.fontawesome.com/2468ede161.js', array(), '20151215', true);
//    }

//    wp_enqueue_script('ant-team-ru-maskedinput', get_template_directory_uri() . '/assets/libs/maskedinput/maskedinput.js', array(), '20151215', true);
//    wp_enqueue_script('ant-team-ru-jQueryFormStyler', get_template_directory_uri() . '/assets/libs/jQueryFormStyler/jquery.formstyler.min.js', array(), '20151215', true);

    wp_enqueue_script('ant-team-ru-main', get_template_directory_uri() . '/assets/main.js', array(), '20220616', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'ant_team_ru_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_filter('navigation_markup_template', 'my_navigation_markup_template');
function my_navigation_markup_template()
{
    return '<ul class="pages__list %1$s">%3$s</ul>';
}

function antteam_navigation_markup_template($args)
{
    $nav = get_the_posts_pagination($args);

    // заменяем текущую страницу
    $nav = preg_replace('/<span aria-current="page" class="page-numbers current">(.*)<\/span>/', '<li class="pages__item active"><a href="#">$1</a></li>', $nav);
    // заменяем обычные страницы
    $nav = preg_replace('/<a class="page-numbers" href="(.*)".*>(.*)<\/a>/', '<li class="pages__item"><a href="$1">$2</a></li>', $nav);
    // предыдущая
    $nav = preg_replace('/<a class="prev page-numbers" href="(.*)".*><\/a>/', '<li class="pages__prev"><a href="$1"><img src="/wp-content/themes/' . get_template() .'/assets/images/S_previous_w.svg"></a></li>', $nav);
    // следующая
    $nav = preg_replace('/<a class="next page-numbers" href="(.*)".*><\/a>/', '<li class="pages__next"><a href="$1"><img src="/wp-content/themes/' . get_template() .'/assets/images/S_next_w.svg"></a></li>', $nav);

    return $nav;
}

add_action('after_setup_theme', function () {
    add_theme_support('pageviews');
});

function getPostViews($postID)
{
    $count_key = 'views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews()
{

    /* ------------ Настройки -------------- */
    $meta_key = 'views_count';  // Ключ мета поля, куда будет записываться количество просмотров.
    $who_count = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
    $exclude_bots = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

    global $user_ID, $post;
    if (is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if ($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id, $meta_key, true);
        $should_count = false;
        switch ((int)$who_count) {
            case 0:
                $should_count = true;
                break;
            case 1:
                if ((int)$user_ID == 0)
                    $should_count = true;
                break;
            case 2:
                if ((int)$user_ID > 0)
                    $should_count = true;
                break;
        }
        if ((int)$exclude_bots == 1 && $should_count) {
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if (!preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent))
                $should_count = false;
        }

        if ($should_count)
            if (!update_post_meta($id, $meta_key, ($post_views + 1))) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

add_shortcode('sharing', 'func_sharing');
function func_sharing()
{
    echo '<p>Поделиться с друзьями:</p>
<ul class="acticle-page-socials__list__inner">
    <li class="acticle-page-socials__item">
        <a target="_blank" href="https://vk.com/share.php?url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&title=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-vk"></i>
        </a>
    </li>
    <li class="acticle-page-socials__item">
        <a target="_blank" href="https://www.facebook.com/sharer.php?src=sp&u=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&title=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li target="_blank" class="acticle-page-socials__item">
        <a href="https://telegram.me/share/url?url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&text=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-telegram-plane"></i>
        </a>
    </li>
    <li target="_blank" class="acticle-page-socials__item">
        <a href="https://twitter.com/intent/tweet?text=' . get_the_title() . '&url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '" class="acticle-page-socials__link">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
</ul>';

}

add_shortcode('sharing_list', 'func_sharing_list');
function func_sharing_list()
{
    echo '
<p>Поделиться с друзьями:</p>
<ul class="acticle-page-socials__list__inner">
    <li class="acticle-page-socials__item">
        <a target="_blank" href="https://vk.com/share.php?url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&title=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-vk"></i>
        </a>
    </li>
    <li class="acticle-page-socials__item">
        <a target="_blank" href="https://www.facebook.com/sharer.php?src=sp&u=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&title=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li target="_blank" class="acticle-page-socials__item">
        <a href="https://telegram.me/share/url?url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&text=' . get_the_title() . '" class="acticle-page-socials__link">
            <i class="fab fa-telegram-plane"></i>
        </a>
    </li>
    <li target="_blank" class="acticle-page-socials__item">
        <a href="https://twitter.com/intent/tweet?text=' . get_the_title() . '&url=' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '" class="acticle-page-socials__link">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
</ul>';
}

add_image_size('blog_mini', 540, 270, true);
add_image_size('blog_middle', 540, 570, true);
add_image_size('blog_big', 1110, 554, true);

add_filter('the_content', 'true_wp_posts_nofollow');
function true_wp_posts_nofollow($content)
{
    return stripslashes(wp_rel_nofollow($content));
}

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
    $my_attr = 'service';

    if (isset($atts[$my_attr])) {
        $out[$my_attr] = $atts[$my_attr];
    }
    if (isset($atts['pageid'])) {
        $arrExamples = [
            3896 => "\n\r" . '<ol><li><a href="https://docs.google.com/document/d/1NPqbD8_0sBqNQgYVFns7vmS-xHnMQ-REmIxwEf4LE0E/edit" target="_blank">Пример</a></li></ol>'
        ];
        $out['pageid'] = $atts['pageid'];
    }

    return $out;
}

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

add_image_size('246_271', 246, 271, true);
add_image_size('174_271', 171, 271, true);
add_image_size('296_221', 296, 221, true);
add_image_size('121_221', 121, 221, true);
add_image_size('419_496', 419, 496, true);
add_image_size('271_146', 271, 175, true);
add_image_size('271_121', 271, 121, true);
add_image_size('271_196', 271, 196, true);
add_image_size('160_100', 160, 100, true);


add_filter('wpcf7_before_send_mail', 'wpcf7_before_send_mail_start_function');
function wpcf7_before_send_mail_start_function($cf7)
{
    $addData = '';

    if ($cf7->id == 5926) {
        $_SESSION['getExampleMail'] = 'true';
        $arrExamples = [
            3896 => "\n\r" . '<ol><li><a href="https://docs.google.com/document/d/1NPqbD8_0sBqNQgYVFns7vmS-xHnMQ-REmIxwEf4LE0E/edit" target="_blank">Пример</a></li></ol>',
            3898 => "\n\r" . '<ol>
<li><a href="https://docs.google.com/document/d/1cdB-E04p_0lSG2KDOouAry2baQHUTzqfmtx299wIczI/" target="_blank">Пример</a></li>
<li><a href="https://ant-team.ru/wp-content/uploads/2020/07/kopiya-shema-glavnoj.drawio-diagrams.net-google.png" target="_blank">Пример</a></li>
</ol>',
            2753 => "\n\r" . '<ol>
<li><a href="https://drive.google.com/open?id=14CMvmRWRYEHmYMvaue1Gomn7bEDps4ax" target="_blank">Пример</a></li>
<li><a href="https://drive.google.com/open?id=1auNusM3222eOX7fiam_yrnszGU4iyZEu" target="_blank">Пример</a></li>
<li><a href="https://drive.google.com/open?id=1i8U7DKI_JMCVr37cuqhvDUBjCZ-ADwVC" target="_blank">Пример</a></li>
</ol>',
            2653 => "\n\r" . '<ol><li><a href="https://docs.google.com/document/d/14S2JbNGML5x2ou1iIw3iag_g09pjAtFcR5kq1n6bvNk/edit" target="_blank">Пример</a></li></ol>',
        ];

        $submission = WPCF7_Submission:: get_instance();
        $posted_data = $submission->get_posted_data();
        if (isset($posted_data['pageid']) && isset($arrExamples[$posted_data['pageid']])) {
            // Got e-mail text
            $mail = $cf7->prop('mail');

            // Replace "[s2-name]" field inside e-mail text
            $new_mail = str_replace('[pageid]', $arrExamples[$posted_data['pageid']], $mail);

            // Set
            $cf7->set_properties(array('mail' => $new_mail));


        }

    }
    /*$mail=$cf7->prop('mail');
    if($mail){

        $mail['body'].=$addData;
        $mail['body'].="\n\rЕсли у вас возникли вопросы или вы хотите заказать услугу, оставьте заявку на сайте https://ant-team.ru/ или позвоните нам <a href=\"tel:+78125092230\">+7 (812)-509-22-30</a>!\n\r

С уважением,\n\r
команда Ant-Team.ru";
        $cf7->set_properties(array('mail'=>$mail));
    }*/
}


add_shortcode('antFAQS', 'func_shrt_FAQS');

function func_shrt_FAQS($atts, $content)
{

    return '<div class="containerFAQ">' . do_shortcode($content) . '</div>' . structuredDataPrepare($content);
}

add_shortcode('antQA', 'func_shtr_antQA');

function func_shtr_antQA($atts, $content)
{
    return '<div class="faq-content">
<div class="faq-content_query">Вопрос: ' . $atts['query'] . '</div>
<div class="faq-content_answer"><span class="bold text-blue">Ответ:</span> ' . $content . '</div>
</div>';

}


function structuredDataPrepare($content)
{
    preg_match_all('~\[antQA query="(.+?)"\](.+?)\[/antQA\]~s', wp_strip_all_tags($content), $out);
    $faqsArray = array();
    foreach ($out[1] as $keyQ => $q) {
        $faqsArray[] = array(
            "@type" => "Question",
            "name" => $q,
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => $out[2][$keyQ]
            )
        );
    }
    $structuredDAtaArray = array(
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faqsArray
    );
    return '<script type="application/ld+json">' . json_encode($structuredDAtaArray) . '</script>';
}

// настройка хлебных крошек
// убираем сепаратор
add_filter( 'wpseo_breadcrumb_separator', 'filter_function_name_5568' );
function filter_function_name_5568( $string ){
    return '';
}

// убираем дефолтную обёртку для элементов крошек (она забажена, сам плагин корявый)
add_filter( 'wpseo_breadcrumb_single_link_wrapper', 'filter_function_name_1606' );
function filter_function_name_1606( $string ){
    return '';
}

// оборачиваем элементы крошек "правильно"
add_filter( 'wpseo_breadcrumb_single_link', 'filter_function_name_8528', 10, 2 );
function filter_function_name_8528( $link, $link_output ){
    $link = '<li class="breadcrumbs__item">' . str_replace(['<>', '</>'], '', $link) . '</li>';
    $link = preg_replace('/<a /', '<a class="breadcrumbs__link"', $link);
    return $link;
}

// меняем обёртку всех крошек
add_filter( 'wpseo_breadcrumb_output_wrapper', 'filter_function_name_5569' );
function filter_function_name_5569( $string ){
    return 'ul';
}

// задаём класс для обёртки
add_filter( 'wpseo_breadcrumb_output_class', 'filter_function_name_5681' );
function filter_function_name_5681( $unsigned ){
    return 'breadcrumbs__list';
}
// end настройка хлебных крошек

// отключаем загрузку стилей contact form 7
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * вывод переменных
 * @param type $str
 * @param type $exit
 * @param type $js выводит в js консоль
 */
function printr($str, $exit = false, $js = false) {
    if ($_SERVER['REMOTE_ADDR'] == '77.40.61.18' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $js) {
        if ($js) {
            if (is_array($str)) {
                array_walk_recursive($str, function (&$n, $k) {
                    //$n = iconv('windows-1251', "utf-8", $n);
                });
            } else {
                //$str = iconv('windows-1251', "utf-8", $str);
            }
            echo '<script>console.log(' . GuzzleHttp\json_encode($str) . ')</script>';
        } else {
            echo '<pre>' . print_r($str, 1) . '</pre>';
        }
        if ($exit) {
            exit();
        }
    }
}

// параметры темы
define('THEME_OPTIONS', get_option('theme_options'));


// когда пользователь сам редактирует свой профиль
add_action( 'show_user_profile', 'true_show_profile_fields' );
// когда чей-то профиль редактируется админом например
add_action( 'edit_user_profile', 'true_show_profile_fields' );

function true_show_profile_fields( $user ) {

    echo '<h3>Дополнительная информация</h3>';

    echo '<table class="form-table">';

    // добавляем поле имя в родительном падеже
    $first_name_rod = get_the_author_meta( 'first_name_rod', $user->ID );
    echo '<tr><th><label for="first_name_rod">Имя в родительном падеже</label></th>
 	<td><input type="text" name="first_name_rod" id="first_name_rod" value="' . esc_attr( $first_name_rod ) . '" class="regular-text" /></td>
	</tr>';

    // добавляем поле фамилия в родительном падеже
    $last_name_rod = get_the_author_meta( 'last_name_rod', $user->ID );
    echo '<tr><th><label for="last_name_rod">Фамилия в родительном падеже</label></th>
 	<td><input type="text" name="last_name_rod" id="last_name_rod" value="' . esc_attr( $last_name_rod ) . '" class="regular-text" /></td>
	</tr>';

    echo '</table>';
}

// когда пользователь сам редактирует свой профиль
add_action( 'personal_options_update', 'true_save_profile_fields' );
// когда чей-то профиль редактируется админом например
add_action( 'edit_user_profile_update', 'true_save_profile_fields' );

function true_save_profile_fields( $user_id ) {
    update_user_meta( $user_id, 'first_name_rod', sanitize_text_field( $_POST[ 'first_name_rod' ] ) );
    update_user_meta( $user_id, 'last_name_rod', sanitize_text_field( $_POST[ 'last_name_rod' ] ) );
}

$POST_FORMATS = array(
    'instruction' => 'Инструкция',
    'article' => 'Статья',
    'study' => 'Исследование',
    'case' => 'Кейс',
    'check-list' => 'Чек-лист',
    'patent' => 'Патент',
    'test' => 'Тест',
    'interview' => 'Интервью',
) ;