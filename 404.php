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
            <a class="btn btn-small"
               id="send-not-work-link"
               data-fancybox=""
               data-touch="false"
               href="#modal-confirm-action">Сообщить о нерабочей ссылке</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <?php $formId = 12307; ?>

            <div role="form" class="wpcf7 popup-confirm-action" lang="ru-RU" dir="ltr" id="modal-confirm-action">
                <form action="/" class="wpcf7-form init feedback" method="post" data-status="init">
                    <div class="form__success">
                        <h3>Спасибо за сообщение!</h3>
                    </div>
                    <div class="form-ctrl">
                        <h3>Сообщить о нерабочей ссылке</h3>
                    </div>
                    <div class="form-ctrl">
                        <input type="text"  name="your-name" required>
                        <label>Имя*</label>
                    </div>
                    <div class="form-ctrl">
                        <input type="email"  name="your-email" required>
                        <label>E-mail*</label>
                    </div>
                    <div class="form-ctrl">
                        <textarea name="your-message" required></textarea>
                        <label>Сообщение*</label>
                    </div>
                    <div>
                        <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit gtmGetPriceFormSubmit btn">
                        <div>
                            <div class="form-ctrl">
                                <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                                    <input type="checkbox" name="policy" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                    <input type="hidden" name="your-check-bot" value="" class="wpcf7-form-control wpcf7-hidden">

                    <input type="hidden" name="_wpcf7" value="<?= $formId ?>">
                    <input type="hidden" name="_wpcf7_version" value="5.3.2">
                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f<?= $formId ?>-o4">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                </form>
            </div>
        </div>

<!--            <div id="modal-confirm-action" class="popup-confirm-action">-->
<!--                <h3>Спасибо за сообщение!</h3>-->
<!--                <p class="text-popup-modal-confirm">Подтвердите действие на странице ant-team.ru</p>-->
<!--                <a class="btn btn-small" data-fancybox-close href="javascript:void(0)">ОК</a>-->
<!--            </div>-->
        </div>
    </div>
</div>
<?php
get_footer();
