<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ant-team.ru
 */

get_header();
?>

    <div class="container not-found-container">
        <div class="row">
            <div class="col-12">
                <div class="not-found-picture">
                 <img src="/wp-content/themes/<?= get_template() ?>/assets/images/not-found-404.png" alt="404"/>
                </div>
                <p class="not-found-text">Извините, такой страницы у нас нет. Мы поможем найти нужную информацию.</p>
                <a href="/" class="not-found-link">Перейти на главную страницу сайта <img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg" alt="right-arrow" /></a>
            </div>
        </div>
    </div>
<div class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-services">Наши услуги</h2>
                <div class="wrapper-our-services">
                    <div class="item">
                        <h3>Технический аудит</h3>
                        <a href="/tehnicheski-audit/" class="services-link">подробнее <img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg" alt="right-arrow" /></a>
                    </div>
                    <div class="item">
                        <h3>Сбор семантики</h3>
                        <a href="/semanticheskie-yadra/" class="services-link">подробнее <img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg" alt="right-arrow" /></a>
                    </div>
                    <div class="item">
                        <h3>YMYL-аудит</h3>
                        <a href="/ymyl-audit/" class="services-link">подробнее <img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg" alt="right-arrow" /></a>
                    </div>
                    <div class="item">
                        <h3>Аудит КФ</h3>
                        <a href="/audit-kf/" class="services-link">подробнее <img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg" alt="right-arrow" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$articles = get_posts([
    'posts_per_page' => 12,
    'meta_query' => [
        [
            'key' => 'format',
            'value' => 'article',
        ],
    ]
]);
?>

<?php if (count($articles) > 0): ?>
    <section class="articles" id="articles">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="articles__header">
                        <div class="section__header">
                            <h2>Статьи</h2>
                            <div class="articles__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                            <a class="link link--more" href="/blog/?format=article">все статьи<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                        </div>
                    </div>
                    <div class="articles__slider">
                        <?php foreach($articles as $post ): ?>
                            <?php setup_postdata($post); ?>
                            <?php get_template_part('template-parts/content'); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<div class="container not-work-link-container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-small" id="send-not-work-link" data-fancybox="" href="#modal-confirm-action">Сообщить о нерабочей ссылке</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="modal-confirm-action" class="popup-confirm-action">
                <h3>Спасибо за сообщение!</h3>
                <p class="text-popup-modal-confirm">Подтвердите действие на странице ant-team.ru</p>
                <a class="btn btn-small" data-fancybox-close href="javascript:void(0)">ОК</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
