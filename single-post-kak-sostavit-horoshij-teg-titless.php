<?php
get_header();
$post = get_post();
include __DIR__ . '/inc/simplehtmldom/simple_html_dom.php';
?>
<?php
$content = get_the_content('читать далее');
$content = apply_filters('the_content', $content);
$html = str_get_html($content);
$h2 = $html->find('h2');
$countH2 = 0;


?>

<div class="blog-page sticy_footer_wrapper article-page">

    <!-- /header -->

    <div class="article-page_bg" style="background-image: url(  <?php echo get_the_post_thumbnail_url($post->ID); ?>)">
        <div class="bread-crumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if (function_exists('yoast_breadcrumb')) :
                            yoast_breadcrumb(' <nav aria-label="breadcrumb">', '</nav>');
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="article-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="acticle-title">
                            <?php echo get_the_title($post->ID); ?>
                        </h1>
                        <div class="article-info__footer article-info__footer__bet">
                            <div class="article-info__footer-item date">
                                <i class="far fa-calendar-alt"></i>
                                <?php echo get_the_date('n.j.Y', $post->ID); ?>
                            </div>
                            <div class="article-info__footer-item smile">
                                <i class="far fa-smile"></i>
                                4.2
                            </div>
                            <div class="article-info__footer-item eye">
                                <i class="far fa-eye"></i>
                                <?php echo getPostViews($post->ID); ?>
                            </div>
                            <div class="article-info__footer-item comment">
                                <i class="far fa-comment"></i>
                                <?php $comments_count = wp_count_comments($post->ID);
                                echo $comments_count->approved; ?>
                            </div>
                        </div>
                        <div class="article-info__footer-author">
                            <i class="far fa-user"></i>
                            <div class="author">
                                <?php echo get_the_author_meta('display_name') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-page-socials-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="acticle-page-socials">
                            <?php
                            do_shortcode('[sharing_list]');
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-scroll-block header-scroll-block_article-page">
            <img alt="pic" id="down" class="main-arrow" src="/wp-content/themes/ant-team-ru/assets/img/vniz.png">
        </div>
    </div>

    <main class="article-main">
        <aside class="aside">
            <ul class="aside-nav-list" id="top-menu">

                <?php
                foreach ($h2 as $keyH2 => $valueH2) {
                    $countH2++;
                    $valueH2->id = 'article_' . $countH2;

                    ?>
                <li class="aside-nav-list__item">
                    <a href="#article_<?php echo $countH2; ?>" class="aside-nav-list__link">
                        <?php echo $valueH2->innertext; ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </aside>

        <div class="article-page-main">
            <div class="article-content-wrapp">
                <!-- <?php
                echo $html;
                ?> -->
                <div class="blur">

                    <div class="blur-form" action="#">
                        <?php echo do_shortcode('[contact-form-7 id="4466" title="showInfoEmail"]'); ?>
                    </div><!-- #blur-form -->

                    <picture>
                        <source type="image/webp"
                            srcset="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.webp">
                        <img src="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.jpg"
                            alt="blur">
                    </picture>
                    <picture>
                        <source type="image/webp"
                            srcset="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.webp">
                        <img src="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.jpg"
                            alt="blur">
                    </picture>
                    <picture>
                        <source type="image/webp"
                            srcset="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.webp">
                        <img src="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.jpg"
                            alt="blur">
                    </picture>
                    <picture>
                        <source type="image/webp"
                            srcset="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.webp">
                        <img src="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.jpg"
                            alt="blur">
                    </picture>
                    <picture>
                        <source type="image/webp"
                            srcset="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.webp">
                        <img src="/wp-content/themes/ant-team-ru/assets/img/single-post-blur/news-blur-img-min.jpg"
                            alt="blur">
                    </picture>
                </div><!-- #blur -->
            </div>

            <style>
            .blur {
                margin-top: 24px;
                position: relative;
            }

            .blur-form {
                max-width: 100%;
                width: 100%;
                border-radius: 8px;
                background-color: #8ed0ef;
                padding: 20px;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                box-shadow: 0px 4px 5px rgb(14 14 14 / 55%);
            }

            .blur-form__title {
                text-align: center;
            }

            .blur-form__block {
                margin: 15px 0;
                height: 50px;
            }

            .blur-form__input,
            .blur-form__btn {
                max-width: 100% !important;
                width: 100% !important;
            }

            .blur-form__btn {
                color: #f4f44a !important;
                font-size: 20px !important;
                line-height: 26px !important;
                text-transform: uppercase !important;
                background-color: #000 !important;
                border: 3px solid #000000 !important;
                -webkit-transition: all 0.5s !important;
                transition: all 0.5s !important;
            }

            .blur-form__btn:hover {
                color: #000000 !important;
                background-color: transparent !important;
            }
            </style>

            <div class="prev-next-links">
                <?php
		previous_post_link('%link', '&laquo; %title', true);
		next_post_link('%link ', '%title &raquo; ', true);
		?>
            </div>
            <div class="article-socials">

                <?php
                do_shortcode('[sharing]');
                ?>

            </div>

            <div class="article-autor">
                <div class="article-autor__wrap">
                    <div class="article-autor__pic" style="background-image: url(img/natalia-a.jpg);">
                        <img src="img/natalia-a.jpg" style="display: none;" alt="фото автора" width="70" height="70"
                            class="author-avatar">
                    </div>
                    <div class="article-autor__name">
                        <?php echo get_the_author_meta('display_name') ?>
                        <span>автор статьи</span>
                        <?php  $authorID = get_the_author_meta('ID');
                        $authorURL = get_author_posts_url($authorID);?>

                        <a href="<?php echo $authorURL;?>">Все статьи автора
                            <i class="fal fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <div class="article-autor__links">
                    <p>Другие статьи автора:</p>
                    <?
                    get_the_ID();
                    global $post;
                    $user_id=$post->post_author;
                    $posts = get_posts( array(
                        'numberposts' => 2,
                        'author'    => $user_id,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'exclude'     => array(get_the_ID()),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    foreach ($posts as $post) { ?>
                    <div class="article-autor__links_box">
                        <a href="<?=get_permalink($post->ID)?>"><?=get_the_title($post->ID)?>
                            <i class="fal fa-angle-double-right"></i>
                        </a>
                    </div>
                    <? } ?>
                </div>
            </div>
        </div>

    </main>


    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">
                        Подпишись на рассылку
                    </h2>
                    <div class="section-subtitle">
                        И получай самые интересные статьи и материалы!
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="1411" title="subscribe" html_class="form-subscribe"]'); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- subscribe -->

</div>

<?php
get_footer();
?>