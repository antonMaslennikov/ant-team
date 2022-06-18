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
                <p class="text-popup-modal-confirm">Подтвердите действие на старнице ant-team.ru</p>
                <a class="btn btn-small" data-fancybox-close href="javascript:void(0)">ОК</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
