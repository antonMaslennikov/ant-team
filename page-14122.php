<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Анализ полноты информации на сайте</h1>
                        <p>Дадим рекомендации по оптимальному наполнению вашего сайта информацией на основе анализа сайтов конкурентов из топа!</p>
                        <div class="audit__price"><span>от 20 000 руб./месяц</span></div>
                    </div>
                    <div class="audit__form">
                        <?php
//                            set_query_var( 'contact_form_title', '' );
//                            set_query_var( 'contact_form_text', '' );
                            get_template_part('template-parts/forms/contact-form')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navigation__wrapper">
                    <ul class="navigation__list">
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-what">Что вы получите</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-who">Кто выполняет услугу</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-faq">FAQ</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#reviews">Пример статистики из анализа</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-workflow">Порядок работы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-why">Почему мы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-tariffs">Тарифы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-dop_services">Дополнительные услуги</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-advices">Статьи</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what-check" id="sec-what">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="what-check__wrapper">
                    <div class="what-check__header">
                        <h2>Что вы получите</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title"></div>
                                <ul class="check-list__list">
                                    <li>Рекомендации по наполнению любой страницы вашего сайта, будь то страница услуги, товара, категории или главная страница, на основе анализа информации сайтов конкурентов с самой высокой видимостью!</li>
                                    <li>
                                        Оптимизацию бюджета. Вы сможете понять, какие факторы сильнее влияют на видимость страницы в поисковой выдаче, и прорабатывать наполнение именно этой информации. А работу с факторами, которые влияют на видимость не так сильно, можно отложить на потом. Если какие-то факторы не влияют на видимость, вы сэкономите время и деньги, не вкладываясь в работу с ними.<br><br>
                                        Для товарной карточки можно проанализировать и выявить зависимость по таким параметрам: количество фото, наличие видео и 3D-обзоров, уникальное описание и его размер, пометка «есть/нет в наличии», рейтинг товара, наличие и объём отзывов, а также наличие в отзывах видео и фото, пометка «скидка/хит/популярное» и т. д. Всё это решается индивидуально.<br><br>
                                        Для страницы категории это могут быть такие параметры: количество товаров в категории и количество товаров отображаемых на странице пагинации, наличие рейтинга и оценок товара, пометки «скидка/хит/популярное/акция», размер названия товара и многие другие.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="workflow" id="sec-workflow">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="workflow__header">
                    <h2>Порядок работы</h2>
                </div>
                <div class="workflow__list">
                    <div class="workflow__item">Отбор конкурентов</div>
                    <div class="workflow__item">Сбор данных</div>
                    <div class="workflow__item">Анализ полученных данных</div>
                    <div class="workflow__item">Составление рекомендаций</div>
                    <div class="workflow__item">Оформление отчёта</div>
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form">заказать услугу</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="reviews__wrapper">
                    <div class="reviews__header">
                        <div class="section__header">
                            <h2>Пример статистики из анализа</h2>
                            <div class="reviews__dots slick-slider-numbers hidden-xs display-flex-lg"></div><?php /* <a class="link link--more" href="#">все отзывы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a> */ ?>

                            <p>
                                <br>
                                <br>
                                Уникальный текст — это хорошо, но иногда он не сильно влияет на видимость. Проанализировав узкую тематику в категории цифровой техники, мы пришли к выводу, что уникальный текст в описании карточки товара влияет на поисковую видимость, но очень незначительно. Поэтому можно сгенерировать тексты автоматически, а деньги направить на наполнение страницы другим контентом.
                            </p>
                        </div>
                    </div>
                    <div class="reviews__slider">
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Интернет-магазин цифровой техники</h3>
                                    <div class="review__text">Уникальный текст — это хорошо, но иногда он не сильно влияет на видимость. Проанализировав узкую тематику в категории цифровой техники, мы пришли к выводу, что уникальный текст в описании карточки товара влияет на поисковую видимость, но очень незначительно. Поэтому можно сгенерировать тексты автоматически, а деньги направить на наполнение страницы другим контентом.</div>
                                </div>
                                <div class="review__graph"><img width="500" src="/wp-content/uploads/2022/07/1.svg"></div>
                            </div>
                        </div>
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Сайт медицинских услуг</h3>
                                    <div class="review__text">Проанализировав конкурентов из топа, мы пришли к выводу, что количество отзывов влияет на видимость в поисковой выдаче. Лучшая видимость была при наличии 7–10 отзывов. Клиенту не пришлось гадать, сколько отзывов необходимо получить. Можно также проверить, влияет ли размер отзывов на видимость.
                                        Важно! Такой анализ можно провести только при наличии семантического ядра.
                                    </div>
                                </div>
                                <div class="review__graph"><img width="500" src="/wp-content/uploads/2022/07/2.svg"></div>
                            </div>
                        </div>
                        <div class="reviews__item">
                            <div class="review">
                                <div class="review__comment">
                                    <h3 class="review__title">Интернет-магазин товаров для дома</h3>
                                    <div class="review__text">Проанализировали влияние количества фото в товарной карточке интернет-магазина товаров для дома по конкурентам из топа. Пришли к выводу, что достаточно сделать 5-7 качественных фото товара для каждой карточки.</div>
                                </div>
                                <div class="review__graph"><img width="500" src="/wp-content/uploads/2022/07/3.svg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq faq--full-size" id="sec-faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq__wrapper">
                    <div class="faq__content">
                        <div class="faq__header">
                            <h2>FAQ</h2>
                        </div>
                        <ul class="collapsed">
                            <li class="active"><span>Я хочу начать прорабатывать карточки товаров, но не знаю, что туда добавлять. Сможете помочь?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем составить для вас подробные рекомендации по наполнению страницы на основе анализа ваших конкурентов из топа. Рекомендации будут содержать конкретные цифры. Например: среднюю длину товарного описания или товарных табов, среднее количество фото, отзывов и др. На основе этих рекомендаций вы сможете заполнить товарные карточки таким образом, что они будут не хуже, чем у конкурентов из топа, а значит и видимость сайта будет расти.</div>
                            </li>
                            <li><span>Не знаю, чем наполнить главную страницу, поможете?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, проанализируем страницы конкурентов в вашей тематике и подготовим рекомендации, что нужно добавить на главную страницу и в каком порядке эту информацию расположить. Например: сколько категорий и товаров отобразить на странице, нужно ли добавлять таблицы или отзывы и др.</div>
                            </li>
                            <li><span>Создал страницу категории, но не попал даже в топ-30, сможете помочь вывести страницу в топ-10?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы проанализируем, чего не хватает на вашей странице категории и предложим рекомендации по её наполнению. Например: сколько товаров или услуг отображать на странице пагинации, сколько фильтров должно быть, влияет ли средний рейтинг товара на видимость, сколько товаров или услуг должны быть с рейтингом, влияют ли пометки «скидки/популярное» на видимость и др.</div>
                            </li>
                            <li><span>Хочу делать качественное видео и фото товаров, но это дорого. Сможете сказать, сколько фото и видео нужно делать?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы проанализируем конкурентов из топа в вашей тематике по количеству видео и фото товаров и напишем для вас рекомендации. Дадим рекомендации, сколько фото и видео нужно в товарной карточке, в тексте статьи или на странице с примерами работ.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-did-kf" id="sec-who">
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
                                <div class="specialist__desc">Предлагает оптимальную стратегию и нестандартные решения исходя из особенностей проекта и своего опыта. Помогает интерпретировать полученные неоднозначные данные.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Следит за соблюдением сроков, координирует работу команды. Выполняет задачи, требующие высокой квалификации.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Собирает необходимые данные методом парсинга или вручную и проводит их анализ, оформляет итоговый файл с рекомендациями.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why" id="sec-why">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why__wrapper">
                    <div class="why__content">
                        <div class="why__header">
                            <div class="section__header">
                                <h2>Почему мы</h2>
                                <div class="why__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                            </div>
                        </div>
                        <div class="why__slider">
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Опыт</div>
                                    <div class="benefit__desc">Опыт в SEO более 10 лет, часто проводим анализ полноты информации и знаем все нюансы.</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Прозрачность</div>
                                    <div class="benefit__desc">Дадим подробные рекомендации и ответим на все ваши вопросы простыми словами.</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Экономия</div>
                                    <div class="benefit__desc">Честно скажем, какой контент не принесёт большой пользы, и тратить на него ресурсы не нужно, а какой контент, наоборот, стоит активно прорабатывать.</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Экспертность</div>
                                    <div class="benefit__desc">Точно знаем, что нужно анализировать, и ничего не пропустим. Дадим наглядные и понятные рекомендации.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заказать услугу' );
                            get_template_part('template-parts/forms/zakazat_audit')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services') ?>

<?php
$args = [
    'posts_per_page' => 12,
    'numberposts' => 12,
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
                            <a class="link link--more" href="/blog/">все статьи<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
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


<?php
get_footer();
?>