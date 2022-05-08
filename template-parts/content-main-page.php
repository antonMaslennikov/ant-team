<?php
/*
Template Name: Главная страница
*/
get_header();

?>

<!-- Seo promotion-->
<section class="seo-promotion">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="seo-promotion__wrapper">
                    <div class="seo-promotion__list">
                        <h1>SEO-продвижение</h1>
                        <div class="seo-promotion__item"><a href="/tehnicheski-audit/" class="cccap">Технический аудит</a><a class="link link--more" href="/tehnicheski-audit/">подробнее<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                        <div class="seo-promotion__item"><a href="/semanticheskie-yadra/" class="cccap">Сбор семантики</a><a class="link link--more" href="/semanticheskie-yadra/">подробнее<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                        <div class="seo-promotion__item"><a href="/ymyl-audit/" class="cccap">YMYL-аудит</a><a class="link link--more" href="/ymyl-audit/">подробнее<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                        <div class="seo-promotion__item"><a href="/audit-kf/" class="cccap">Аудит коммерческих факторов</a><a class="link link--more" href="/audit-kf/">подробнее<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                    </div>
                    <div class="seo-promotion__form">
                        <?php get_template_part('template-parts/forms/contact-form') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Navigation-->
<section class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navigation__wrapper">
                    <ul class="navigation__list">
                        <li class="navigation__item active"><a class="navigation__link link scrollto" href="#reviews">Отзывы</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#promote-top">Топ Яндекс и Google</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#employees">Команда</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#advantages">Преимущества</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#advantages">Сертификаты</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#complex">Комплексный подход</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#sec-tariffs">Тарифы</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#how-we-work">Как мы работаем</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#faq">FAQ</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#cases">Кейсы</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#articles">Статьи</a></li>
                        <li class="navigation__item"><a class="navigation__link link scrollto" href="#conferences">Конференции</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reviews-->
<section class="reviews" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="reviews__wrapper">
                    <div class="reviews__header">
                        <div class="section__header">
                            <h2>Отзывы</h2>
                            <div class="reviews__dots slick-slider-numbers hidden-xs display-flex-lg"></div><?php /* <a class="link link--more" href="#">все отзывы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a> */ ?>
                        </div>
                        <div class="reviews__average hidden-xs display-flex-md">
                            <div>Средний рейтинг: 5 из 5 (3 отзыва)<a class="btn btn-small" data-fancybox data-touch="false" href="#modal-review-form">Оставить отзыв</a></div>
                        </div>
                    </div>
                    <div class="reviews__slider">
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Avrora-Medi.ru</h3>
                                    <div class="review__rating">
                                        <div class="rating">
                                            <div class="rating__under-layer"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"></div>
                                            <div class="rating__top-layer" style="width:100%"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"></div>
                                        </div>
                                    </div>
                                    <div class="review__text">Эффект от сотрудничества с Ант-тим мы ощутили в звонках. Уже через несколько месяцев после начала работы количество звонков увеличилось почти в 2 раза. Результатами мы довольны и продолжаем работать.</div>
                                    <div class="review__author"><b>Игорь Балабан</b><span>руководитель компании</span></div>
                                    <div class="review__social"><a href="#"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"></a></div>
                                </div>
                                <div class="review__graph"><img src="/wp-content/uploads/2022/04/av.png"></div>
                            </div>
                        </div>
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Rikkir-sport.ru</h3>
                                    <div class="review__rating">
                                        <div class="rating">
                                            <div class="rating__under-layer"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"></div>
                                            <div class="rating__top-layer" style="width:100%"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"></div>
                                        </div>
                                    </div>
                                    <div class="review__text">Прошлым нашим сайтом занималась другая компания и заявок не было вообще. Начали работать с Анттим - запустили сайт с нуля. И за несколько месяцев уже пошли заявки. Сотрудничеством с ребятами полностью довольны, останавливаться не собираемся.</div>
                                    <div class="review__author"><b>Бирюлев Павел</b><span>директор компании</span></div>
                                    <div class="review__social"><a href="#"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"></a></div>
                                </div>
                                <div class="review__graph"><img src="/wp-content/uploads/2022/04/rik.png"></div>
                            </div>
                        </div>
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Nwflues.ru</h3>
                                    <div class="review__rating">
                                        <div class="rating">
                                            <div class="rating__under-layer"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"></div>
                                            <div class="rating__top-layer" style="width:100%"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"></div>
                                        </div>
                                    </div>
                                    <div class="review__text">Александра знаю давно, но работать с ним начали совсем недавно. Уже выводимся в топе по гораздо большему количеству ключевых фраз, заметно увеличились посещения на сайте. Про команду могу сказать только хорошее – работают профессионально, дело свое знают, всегда быстро откликаются на все наши вопросы и проблемы.</div>
                                    <div class="review__author"><b>Туркин Александр</b><span>директор компании</span></div>
                                    <div class="review__social"><a href="#"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"></a></div>
                                </div>
                                <div class="review__graph"><img src="/wp-content/uploads/2022/04/nw.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__average hidden-md">
                        <div>Средний рейтинг: 5 из 5 (3 отзыва)</div><a class="btn btn-small">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- promote top-->
<section class="promote-top" id="promote-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="promote-top__wrapper">
                    <div class="promote-top__header">
                        <h2>Выводим сайты клиентов в топ Яндекс и Google</h2>
                    </div>
                    <div class="actions__slider">
                        <div class="actions__item action">
                            <div class="action__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                            <div class="action__desc">Увеличиваем рост посещаемости сайта и количество заявок.</div>
                        </div>
                        <div class="actions__item action">
                            <div class="action__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                            <div class="action__desc">Используем самые современные технологии.</div>
                        </div>
                        <div class="actions__item action">
                            <div class="action__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                            <div class="action__desc">Применяем только проверенные и безопасные схемы продвижения.</div>
                        </div>
                    </div>
                    <div class="promote-top__desc"><span data-fancybox data-src="#modal-order-form" style="cursor: pointer">Оставьте заявку</span> —  мы свяжемся с вами и дадим честную оценку, как сможем помочь вашему сайту увеличить продажи.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- employees-->
<section class="employees" id="employees">

    <?php
    // вариант через посты с типом "employees"
    $employees = get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'employees',
        'parent' => 0,
        'suppress_filters' => true,
        'post_status' => 'publish',
    ]);
    /*
    // вариант через страницы в общей категории "наша команда"
    $employees = get_posts(
        array(
            'numberposts' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'meta_key' => '',
            'meta_value' => '',
            'post_parent' => 46,
            'post_type' => 'page',
            'suppress_filters' => true,
            'post_status' => 'publish'
        )
    );
    */
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employees__wrapper">
                    <div class="employees__header">
                        <div class="section__header">
                            <h2>Команда Ant-Team.ru</h2>
                            <div class="employees__dots slick-slider-numbers hidden-xs display-flex-lg"></div><a class="link link--more" href="/nasha-komanda/">подробно о нас<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                        </div>
                    </div>
                    <div class="employees__slider">

                        <?php foreach ($employees as $e): ?>
                            <?php
                                $eMeta = get_post_meta($e->ID);

                                if (has_post_thumbnail($e->ID)) {
                                    $img_src = get_the_post_thumbnail_url($e->ID, '343_503');
                                } else {
                                    $img_src = '';
                                }
                            ?>

                            <div class="employees__item">
                                <div class="employee">
                                    <div class="employee__photo">
                                        <img src="<?php if ($img_src): ?><?= $img_src ?><?php else: ?>/wp-content/themes/<?= get_template() ?>/assets/images/employee_placeholder.png<?php endif; ?>">
                                    </div>
                                    <div class="employee__name">
                                        <div class="first-name"><?= $eMeta['first_name'][0] ?></div>
                                        <div class="surname"><?= $eMeta['last_name'][0] ?></div>
                                    </div>
                                    <div class="employee__title"><?= $eMeta['role'][0] ?></div>
                                    <?php if ($eMeta['page_link']): ?>
                                        <div class="employee__about-link">
                                            <a class="link" href="<?= esc_url(get_permalink($eMeta['page_link'][0])) ?>"><?php if ($eMeta['name_predl'][0]): ?><?php if (in_array(mb_strtolower(mb_substr($eMeta['name_predl'][0], 0, 1)), ['а', 'о', 'у', 'э', 'и'])): ?>об<?php else: ?>о<?php endif; ?> <?= $eMeta['name_predl'][0] ?><?php else: ?>о сотруднике<?php endif; ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="advantages">
    <div class="dual">
        <section class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advantages__wrapper">
                            <div class="advantages__header">
                                <div class="section__header">
                                    <h2>Преимущества</h2>
                                    <div class="advantages__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                </div>
                            </div>
                            <div class="advantages__slider">
                                <div class="advantages__item">
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Более 10 лет выводим сайты в топ Яндекс и Google</div>
                                    </div>
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Комплексный подход к продвижению</div>
                                    </div>
                                </div>
                                <div class="advantages__item">
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Индивидуальные решения для каждого клиента</div>
                                    </div>
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Проверенные и безопасные схемы продвижения</div>
                                    </div>
                                </div>
                                <div class="advantages__item">
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Самые современные методы и знания (YMYL, E-A-T и др.)</div>
                                    </div>
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Регулярные и понятные отчеты</div>
                                    </div>
								</div>
                                <div class="advantages__item">
									<div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Прозрачность, доступ в нашу CRM</div>
                                    </div>
									<div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Специалисты всегда на связи</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $certificates = get_posts([
            'numberposts' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'certificate',
            'parent' => 0,
            'suppress_filters' => true,
            'post_status' => 'publish',
        ]);
        ?>

        <?php if (count($certificates) > 0): ?>
            <section class="certificates">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="certificates__wrapper">
                                <div class="certificates__header">
                                    <div class="section__header">
                                        <h2>Сертификаты</h2>
                                        <div class="certificates__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                    </div>
                                </div>
                                <div class="certificates__slider">
                                    <?php foreach ($certificates AS $c): ?>
                                        <?php if (has_post_thumbnail($c->ID)): ?>
                                            <div class="certificate__item">
                                                <div class="certificate"><img src="<?= get_the_post_thumbnail_url($c->ID) ?>"></div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</section>

<section id="complex">
    <div class="dual-md">
        <section class="seo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="seo__wrapper">
                            <div class="seo__header">
                                <h2>SEO</h2>
                            </div>
                        </div>
                        <div class="seo__list">
                            <ul>
                                <li class="active">Работа с инфотрафиком <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
                                    <ul>
                                        <li>YMYL-аудит блога и ТЗ на доработку дизайна</li>
                                        <li>Анализ инфотрафика конкурентов</li>
                                        <li>Сбор инфосемантики</li>
                                        <li>ТЗ на инфостатьи</li>
                                        <li>Написание и размещение статей в блоге</li>
                                    </ul>
                                </li>
                                <li>Контентные работы <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Написание текстов, подготовка материалов</li>
                                        <li>Размещение контента</li>
                                        <li>Создание посадочных с помощью SEO-фильтра</li>
                                    </ul>
								</li>
                                <li>Сниппет <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Микроразметка</li>
                                        <li>Фид данных</li>
                                    </ul>
								</li>
                                <li>Работа с репутацией <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Размещение информации о компании на сторонних ресурсах</li>
                                        <li>Отзывы на нашем сайте</li>
										<li>Ежемесячная публикация новостей в разделе Новости</li>
                                    </ul>
								</li>
                                <li>Региональное ранжирование <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Регистрация в региональных справочниках и на картах</li>
                                        <li>Региональные поддомены - robots.txt и sitemap</li>
										<li>Региональные подпапки:</li>
											<ul>
												<li>Генережка региональных страниц</li>
												<li>robots.txt и sitemap</li>
											</ul>
                                    </ul>
								</li>
                                <li>Аналитика <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Seowork</li>
                                        <li>Настройка целей</li>
										<li>Яндекс.Метрика и Яндекс.Вебмастер</li>
										<li>Google Analytics, CTR, Google Search Console</li>
										<li>Анализ конкурентов и поиск точек роста</li>
										<li>Проверка проблем с индексацией</li>
										<li>Составление плана работ на неделю, месяц, квартал</li>
                                    </ul>
								</li>
                                <li>Ссылочные факторы <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Закупка ссылок на Миралинкс</li>
                                        <li>Закупка ссылок на SAPE</li>
										<li>Анализ ссылочного профиля конкурентов</li>
										<li>Получение ссылок на прочих ресурсах</li>
										<li>Внутренняя перелинковка на сайте</li>
                                    </ul>
								</li>
                                <li>Семантика <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Классический сбор семантического ядра</li>
                                        <li>Семантика конкурентов</li>
										<li>Генережка пересечений и сбор базовой частотности</li>
										<li>Поверхностный сбор семантики</li>
                                    </ul>
								</li>
                                <li>Технические факторы <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>Технический аудит</li>
                                        <li>Работа с текущими ошибками на сайте</li>
                                    </ul>
								</li>
                                <li>YMYL-факторы <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>YMYL-аудит</li>
                                        <li>ТЗ на дизайн отдельных посадочных или шаблонных страниц</li>
										<li>Проработка служебных страниц</li>
										<li>Проработка структуры сайта и определение основных типов страниц</li>
										<li>Проработка меню</li>
										<li>Проработка внешнего вида 404 страниц</li>
                                    </ul>
								</li>
                                <li>Текстовая оптимизация <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_324:32891)"><path d="M9.49887 1.00023V11.8702L13.8589 8.24023C14.2789 7.89023 14.9089 7.94023 15.2689 8.37023C15.6289 8.80023 15.5689 9.42023 15.1389 9.78023L9.13887 14.7802C9.10887 14.7902 9.07887 14.8002 9.03887 14.8202C8.97887 14.8602 8.92887 14.8902 8.85887 14.9202C8.80887 14.9402 8.74887 14.9602 8.68887 14.9702C8.62887 14.9802 8.55887 14.9902 8.49887 14.9902C8.43887 14.9902 8.36887 14.9802 8.30887 14.9702C8.24887 14.9602 8.18887 14.9402 8.12887 14.9202C8.06887 14.8902 8.00887 14.8602 7.94887 14.8202C7.91887 14.8002 7.87887 14.7902 7.84887 14.7702L1.84887 9.77023C1.61887 9.57023 1.49887 9.29023 1.49887 9.00023C1.49887 8.77023 1.57887 8.55023 1.72887 8.36023C2.07887 7.94023 2.70887 7.88023 3.13887 8.23023L7.49887 11.8702V1.00023C7.49887 0.450234 7.94887 0.000234604 8.49887 0.000234604C9.04887 0.000234604 9.49887 0.450234 9.49887 1.00023Z" fill="#2F80ED"/></g><defs><clipPath id="clip0_324:32891"><rect width="15" height="15" fill="white" transform="translate(0.996582)"/></clipPath></defs></svg>
									<ul>
                                        <li>ТЗ на контент</li>
                                        <li>ТЗ на доработку контента</li>
										<li>Метатеги</li>
										<li>SEO-префиксы</li>
										<li>Генережка текстов</li>
										<li>Генерация товарных описаний</li>
                                    </ul>
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="approach">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="approach__wrapper">
                            <div class="approach__header">
                                <h3>Комплексный подход к продвижению</h3>
                            </div>
                            <div class="approach__text">
                                <p>Детальная проработка сайта —  наша сильная сторона.</p>
                                <p>Мы комплексно работаем над сайтом, уделяя внимание каждому нюансу.</p>
                                <p>Мы не просто собираем семантику и пишем тексты, мы прорабатываем сайт с точки зрения технических ошибок, требований YMYL, регионального продвижения, работаем с репутацией, постоянно анализируем конкурентов и делаем всевозможную аналитику.</p>
                                <p>Это позволяет нашим клиентам не только добиваться первых позиций в поисковой выдаче, увеличивать трафик и количество заявок, но также сохранять и улучшать результаты в условиях жесткой конкурентной борьбы.</p>
                            </div>
                            <div class="approach__graph"><img src="/wp-content/uploads/2022/04/new.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<section class="text-video">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-video__content">
                    <div class="text-video__hided-content">
                        <p>SEO —  не мифическая наука. Это конкретный набор знаний и четкое понимание, как работают алгоритмы поисковых систем.</p>
                        <p>Если вы закажете SEO-продвижение в Ant-Team.ru, мы детально изучим ваш сайт и ваших главных конкурентов и на основе этого предложим стратегию продвижения, которая будет эффективна именно для вашего бизнеса.</p>
                        <p>Мы разрабатываем индивидуальный план работ для каждого клиента. И всегда можем объяснить и доказать важность любого пункта. Кроме того, мы готовим отдельный план работ на каждый месяц и обсуждаем его с клиентом. В процессе оптимизации сайта мы можем корректировать стратегию с учетом новых задач или новых условий со стороны поисковых систем.</p>
                    </div>
                    <div class="text-video__visible-content">
                        <figure><iframe width="100%" height="280" src="https://www.youtube.com/embed/mGD6nsuGleQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <figcaption>Baltic Digital Days 2020 “Как я строил Ant-Team.ru и что из этого вышло”</figcaption>
                        </figure>
                    </div>
                </div>
                <?php /*<div class="text-video__expand"><a class="link" href="#">Показать всё<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></a></div>*/ ?>
            </div>
        </div>
    </div>
</section>

<section class="how-we-work" id="how-we-work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="how-we-work__wrapper">
                    <div class="how-we-work__header">
                        <h2>Как мы работаем</h2>
                    </div>
                    <div class="how-we-work__text">
                        <ul class="collapsed">
                            <li class="active"><span>Почему плата за нормо-часы —  наше преимущество?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>
                                    <p>Мы работаем над SEO-продвижением сайтов более 10 лет и уверены, что оплата по чеку за каждый вид работ неэффективна и невыгодна для клиента. Каждый проект отличается от другого. И одна и та же задача может потребовать 5 часов на одном проекте и 50 часов на другом. Поэтому мы продаем не отдельные услуги, а время работы специалистов. И если технический аудит вашего сайта занимает всего несколько часов, вам не придется платить лишние деньги за запас времени, заложенный в стандартном чеке.</p>
                                    <p>Заказывая SEO-продвижение в Ant-Team.ru, вы будете платить только за реальные работы.</p>
                                </div>
                            </li>
                            <li><span>Не останавливаемся на достигнутом<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
								<div>
                                    <p>Мы не работаем по KPI. Да, мы добиваемся первых позиций в выдаче и увеличения трафика. Но после достижения нужных результатов мы не расслабляемся, почивая на лаврах, а продолжаем усердно работать, чтобы сайт мог принести клиенту еще большую прибыль. 
</p>
                                </div>
							</li>
                            <li><span>Мы общаемся с нашими клиентами<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
								<div>
                                    <p>Другое наше преимущество —  мы всегда на связи.</p>
									<p>Нам важно установить полное взаимопонимание с клиентом и сделать нашу работу максимально прозрачной. Поэтому мы всегда объясняем, какие работы над сайтом проводим и для чего это делаем.</p>
									<p>Мы создаем удобные каналы общения между клиентом и специалистами, работающими над сайтом. Вы всегда можете задать вопрос или передать комментарии по проекту непосредственно тем людям, которые им занимаются.</p>
									<p>У нас есть специальные брифы, разборы задач и ежемесячная отчетность, где мы подробно объясняем, какие работы выполняем для оптимизации вашего сайта.</p>
                                </div>
							</li>
                            <li><span>Постоянно развиваемся<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
								<div>
                                    <p>Мир SEO постоянно меняется, появляются новые условия, которые важно учитывать при продвижении, обновляются алгоритмы поисковых систем. </p>
									<p>Поэтому и наши сотрудники находятся в постоянном процессе самообучения и повышают свою экспертность. Мы проводим обучающие семинары, митапы, изучаем материалы и опыт зарубежных SEO-специалистов. Проводим исследования и готовим экспертные статьи, которыми делимся с SEO-сообществом.</p>
									<p>Кроме того, мы постоянно экспериментируем на собственных проектах, внедряем на них новые идеи и оцениваем результат. В итоге получаем интересные кейсы, которые можем предложить нашим клиентам как уже проверенные решения.</p>
									<p>Мы следим за всеми изменениями в работе Яндекс и Google и заранее готовим сайты клиентов к важным обновлениям поисковых систем.</p>
									<p>Мы постоянно совершенствуем свои знания, и это позволяет нам год за годом успешно продвигать сайты наших клиентов, добиваясь для них первых позиций в поисковой выдаче.</p>
                                </div>
							
							</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-did-kf">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="who-did-kf__wrapper">
                    <div class="who-did-kf__header">
                        <div class="section__header">
                            <h2>Кто выполняет</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Отвечает за анализ и стратегию продвижения проекта</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Средние и младшие SEO-специалисты</div>
                                <div class="specialist__desc">Выполняют задачи, поставленные старшим SEO-специалистом</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Редактор</div>
                                <div class="specialist__desc">Отвечает за контент</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Копирайтеры</div>
                                <div class="specialist__desc">Пишут тексты по составленным ТЗ</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Контент-менеджеры</div>
                                <div class="specialist__desc">Размещают контент на сайте</div>
                            </div>
                        </div>
						<div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Программист</div>
                                <div class="specialist__desc">Отвечает за технические внедрения на сайте</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq__wrapper">
                    <div class="faq__content">
                        <div class="faq__header">
                            <h2>FAQ</h2>
                        </div>
                        <ul class="collapsed">
                            <li class="active"><span>Смогу ли я общаться с SEO-специалистами, задавать вопросы, корректировать задачи?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
                            </li>
                            <li><span>Как я смогу контролировать работу?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Один раз в месяц мы делаем для клиента подробный отчет по всем проведенным работам за данный период. Отчет заполняют все специалисты, которые работали над проектом. Старший SEO-специалист, ответственный за проект, созванивается с клиентом в Zoom для защиты отчета. В это время мы обсуждаем статистику по проекту, план работ, а также фиксируем все предложения от клиента. По вашему желанию мы можем готовить такой отчет не один, а два раза в месяц.</div>
                            </li>
                            <li><span>У меня будет персональный менеджер?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Нет. Для вашего проекта будет назначен ответственный SEO-специалист, и именно он будет общаться с вами по всем вопросам. По нашему опыту, наиболее эффективный способ коммуникации —  напрямую со специалистами, которые непосредственно работают над проектом, а не через менеджера.</div>
                            </li>
                            <li><span>Сколько стоит весь комплекс услуг по сео-продвижению?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>SEO-продвижение занимает длительный срок. И для разных клиентов требуется разное количество работ по оптимизации. Поэтому мы разработали специальные тарифы для разных типов сайтов. Например, стоимость продвижения сайта услуг будет ниже цены на продвижение интернет-магазина. Если вы оказываете услуги в регионах, то оптимизация вашего сайта будет стоить дешевле, чем продвижение аналогичного сайта в Москве или Санкт-Петербурге из-за более низкой конкуренции. Если вы хотите заказать раскрутку агрегатора, то это потребует очень большого объема работ. Поэтому цена на оптимизацию агрегаторов самая высокая. <br>Информация по всем тарифам представлена на нашем сайте. Как мы уже говорили выше, стоимость продвижения складывается исключительно из объема требуемых работ. Поэтому окончательный прайс мы сможем рассчитать только после подробного анализа вашего сайта. Цена будет четко фиксирована и прописана в договоре. </div>
                            </li>
                            <li><span>Можно ли заказать у вас отдельную услугу, а не весь комплекс работ?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, например, вы можете отдельно <a href="https://ant-team.ru/semanticheskie-yadra/">заказать сбор семантического ядра</a>, технический аудит или <a href="https://ant-team.ru/audit-kf/">аудит коммерческих факторов</a>. Отправьте нам заявку, и мы рассчитаем точную стоимость работ.</div>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__form">
                        <?php get_template_part('template-parts/forms/contact-form') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $args = [
        'posts_per_page' => 12,
        'meta_query' => [
            [
                'key' => 'format',
                'value' => 'case',
            ],
        ]
    ];

    $cases = get_posts($args);
?>

<?php if (count($cases) > 0): ?>
    <section class="cases" id="cases">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cases__wrapper">
                        <div class="cases__header">
                            <div class="section__header">
                                <h2>Кейсы</h2>
                                <div class="cases__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                <a class="link link--more" href="/blog/?format=case">все кейсы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                            </div>
                        </div>
                        <div class="cases__slider">
                            <?php foreach($cases as $post ): ?>
                                <?php setup_postdata($post); ?>
                                <?php get_template_part('template-parts/content'); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$args = [
    'posts_per_page' => 12,
    'meta_query' => [
        [
            'key' => 'format',
            'value' => 'article',
        ],
    ]
];

$articles = get_posts($args);
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

<section class="conferences" id="conferences">
    <?php
    $conf_arr = get_posts(
        array(
            'post_type' => 'conferences',
            'numberposts' => 6,
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_key' => '',
            'meta_value' => '',
            'parent' => 0,
            'suppress_filters' => true,
            'post_status' => 'publish'
        )
    );
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="conferences__wrapper">
                    <div class="conferences__header">
                        <div class="section__header">
                            <h2>Мы на конференциях</h2><?php /*<a class="link link--more" href="/blog/videos/">больше видео<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a> */?>
                        </div>
                    </div>
                    <div class="conferences__slider">
                        <?php foreach ($conf_arr as $conf): ?>
                            <?php
//                            $conf_date = get_post_meta($conf->ID, 'item_date', true);

                            if (has_post_thumbnail($conf->ID)) {
                                $img_src = get_the_post_thumbnail_url($conf->ID, '460_250');
                            }
                            ?>

                            <div class="conferences__item">
                                <div class="conference">
                                    <figure>
                                        <img src="<?php echo $img_src; ?>" alt="">
                                        <figcaption><?php echo $conf->post_title; ?></figcaption>
                                    </figure>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>